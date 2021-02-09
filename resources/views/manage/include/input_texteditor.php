<style>	.ck-editor__editable_inline { min-height: 300px; }</style>
<textarea id='<?php echo  $this_name ?>' name='<?php echo  $this_name ?>' rows='10'><?php echo  stripslashes($this_value) ?></textarea>
<script>  
	var uploadTargetHash = 'l1_Lw'; 
	var connectorUrl = '../../elfinder/php/connector.php';
	ClassicEditor
		.create( document.querySelector( '#<?php echo  $this_name ?>' ), {
			toolbar: {
				items: [
					'heading',
					'|',
					'bold',
					'italic',
					'link',
					'bulletedList',
					'numberedList',
					'|',
					'fontFamily',
					'fontColor',
					'fontBackgroundColor',
					'fontSize',
					'highlight',
					'|',
					'alignment',
					'indent',
					'outdent',
					'|',
					'imageUpload',
					'ckfinder',
					'blockQuote',
					'insertTable',
					'mediaEmbed',
					'undo',
					'redo',
					'|',
					'code'
				]
			},
			language: 'en',
			image: {
				toolbar: [
					'imageTextAlternative',
					'imageStyle:full',
					'imageStyle:side',
					'linkImage'
				]
			},
			table: {
				contentToolbar: [
					'tableColumn',
					'tableRow',
					'mergeTableCells'
				]
			},
		} )
		.then(editor => {
			const ckf = editor.commands.get('ckfinder'),
				fileRepo = editor.plugins.get('FileRepository'),
				ntf = editor.plugins.get('Notification'),
				i18 = editor.locale.t, 
				insertImages = urls => {
					const imgCmd = editor.commands.get('imageUpload');
					if (!imgCmd.isEnabled) {
						ntf.showWarning(i18('Could not insert image at the current position.'), {
							title: i18('Inserting image failed'),
							namespace: 'ckfinder'
						});
						return;
					}
					editor.execute('imageInsert', { source: urls });
				}, 
				getfm = open => {
					return new Promise((resolve, reject) => { 
						const done = () => {
							if (open) { 
								if (!Object.keys(_fm.files()).length) { 
									_fm.one('open', () => {
										_fm.file(open)? resolve(_fm) : reject(_fm, 'errFolderNotFound');
									});
								} else { 
									new Promise((res, rej) => {
										if (_fm.file(open)) {
											res();
										} else { 
											_fm.request({cmd: 'parents', target: open}).done(e =>{
												_fm.file(open)? res() : rej();
											}).fail(() => {
												rej();
											});
										}
									}).then(() => { 
										_fm.exec('open', open).done(() => {
											resolve(_fm);
										}).fail(err => {
											reject(_fm, err? err : 'errFolderNotFound');
										});
									}).catch((err) => {
										reject(_fm, err? err : 'errFolderNotFound');
									});
								}
							} else { 
								resolve(_fm);
							}
						};
 
						if (_fm) { 
							done();
						} else { 
							_fm = $('<div/>').dialogelfinder({ 
								title : 'File Manager', 
								url : connectorUrl, 
								startPathHash : open? open : void(0), 
								useBrowserHistory : false,
								autoOpen : false,
								width : '80%',
								commandsOptions : {
									getfile: {
										oncomplete : 'close',
										multiple : true
									}
								},
								getFileCallback : (files, fm) => {
									let imgs = [];
									fm.getUI('cwd').trigger('unselectall');
									$.each(files, function(i, f) {
										if (f && f.mime.match(/^image\//i)) {
											imgs.push(fm.convAbsUrl(f.url));
										} else {
											editor.execute('link', fm.convAbsUrl(f.url));
										}
									});
									if (imgs.length) {
										insertImages(imgs);
									}
								}
							}).elfinder('instance');
							done();
						}
					});
				};
			let _fm;
			if (ckf) {
				ckf.execute = () => {
					getfm().then(fm => {
						fm.getUI().dialogelfinder('open');
					});
				};
			}
			const uploder = function(loader) {
				let upload = function(file, resolve, reject) {
					getfm(uploadTargetHash).then(fm => {
						let fmNode = fm.getUI();
						fmNode.dialogelfinder('open');
						fm.exec('upload', {files: [file], target: uploadTargetHash}, void(0), uploadTargetHash)
							.done(data => {
								if (data.added && data.added.length) {
									fm.url(data.added[0].hash, { async: true }).done(function(url) {
										resolve({
											'default': fm.convAbsUrl(url)
										});
										fmNode.dialogelfinder('close');
									}).fail(function() {
										reject('errFileNotFound');
									});
								} else {
									reject(fm.i18n(data.error? data.error : 'errUpload'));
									fmNode.dialogelfinder('close');
								}
							})
							.fail(err => {
								const error = fm.parseError(err);
								reject(fm.i18n(error? (error === 'userabort'? 'errAbort' : error) : 'errUploadNoFiles'));
							});
					}).catch((fm, err) => {
						const error = fm.parseError(err);
						reject(fm.i18n(error? (error === 'userabort'? 'errAbort' : error) : 'errUploadNoFiles'));
					});
				};

				this.upload = function() {
					return new Promise(function(resolve, reject) {
						if (loader.file instanceof Promise || (loader.file && typeof loader.file.then === 'function')) {
							loader.file.then(function(file) {
								upload(file, resolve, reject);
							});
						} else {
							upload(loader.file, resolve, reject);
						}
					});
				};
				this.abort = function() {
					_fm && _fm.getUI().trigger('uploadabort');
				};
			};
			fileRepo.createUploadAdapter = loader => {
				return new uploder(loader);
			};
		})
		.catch(error => {
			console.error( error );
		});
</script>