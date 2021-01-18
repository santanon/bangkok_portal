<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
 
?>   
@include('manage.include.header') 

	<div id="se-wrapper">
		<div id="page-container" class="no-bg-slider">
  
            @include('manage.include.logo_menu')

			<div id="se-maincontainer-wrapper" class="page01">
				<div id="se-maincontainer">
                
                
             	   <ul id="page-navi">
						<li><a href="#">Homepage</a> &rsaquo;</li>
						<li>No-link &rsaquo;</li>
						<li><a href="#">Menu หลัก</a> &rsaquo;</li>
						<li class="current">Test Object</li>
					</ul><!-- page-navi -->
                
                
                
					<div id="page1col">
						<div id="content-slide-container">

							<div class="content-slide-box expanded">
								<div class="content-slide-trigger">
									<div class="slide-bg"></div>
									<a href="#" class="trigger-text fontfacetext">
										<span>Menu หลัก</span>
										<!-- <span>Banner</span> -->
									</a>
									<i class="icon-chevron-down"></i>
									<i class="icon-chevron-right"></i>
								</div><!-- trigger -->
								<div class="content-slide-detail">
									<div id="sidemenu-box" class="left">
										 
                                        
                                          
									</div><!-- left -->
									<div class="right">

										<hr>
										page block example<br><br>

										<!-- page block with header -->
										<div class="header">
											<div class="right">
												<table>
													<tr>
														<td valign="middle"><span class="header-text fontfacetext-bold">หัวข้อ ชิดขวา</span></td>
													</tr>
												</table>
											</div>
										</div><!-- header -->
										<div class="content">
											<br>content<br>
										</div><!-- content -->

										<div class="header">
											<div class="right">
												<table>
													<tr>
														<td valign="middle"><span class="header-text fontfacetext-bold">หัวข้อชิดขวา + dropdown</span></td>
														<td valign="middle" width="76">
															<select class="selectric" name="mainmnu-align" id="sl-mainmnu-align">
																<option value="1">Option 1</option>
																<option value="2">Option 2</option>
																<option value="3">Option 3</option>
															</select>
														</td>
													</tr>
												</table>
											</div>
										</div><!-- header -->
                                         
										<div class="content">
											<br>content<br>
										</div><!-- content -->

										<div class="header">
											<div class="left">
												<table>
													<tr>
														<td valign="middle"><span class="header-text fontfacetext-bold">หัวข้อ ชิดซ้าย</span></td>
													</tr>
												</table>
											</div>
										</div><!-- header -->
										<div class="content">
											<br>content<br>
										</div><!-- content -->

										<div class="header">
											<div class="left">
												<table>
													<tr>
														<td valign="middle"><span class="header-text fontfacetext-bold">หัวข้อชิดซ้าย + dropdown</span></td>
														<td valign="middle" width="76">
															<select class="selectric" name="mainmnu-align" id="sl-mainmnu-align">
																<option value="1">Option 1</option>
																<option value="2">Option 2</option>
																<option value="3">Option 3</option>
															</select>
														</td>
													</tr>
												</table>
											</div>
										</div><!-- header -->
										<div class="content">
											<br>content<br>
										</div><!-- content -->

										<br><br><br>
										end page block example
										<hr>


										<br><br>
										<hr>
										table-box class example
										<!-- table-box -->
										<div class="table-box">
											<table>
												<thead>
													<tr>
														<th colspan="4"><span class="fontfacetext">Free Form Table</span></th>
													</tr>
													<tr>
														<th><span class="fontfacetext">Head 1 ( fix width here)</span></th>
														<th><span class="fontfacetext">Head 2 ( fix width here)</span></th>
														<th><span class="fontfacetext">Head 3 ( fix width here)</span></th>
														<th><span class="fontfacetext">Head 4 ( fix width here)</span></th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Column 1</td>
														<td>Column 2</td>
														<td>Column 3</td>
														<td>Column 4</td>
													</tr>
													<tr>
														<td>Column 1</td>
														<td>Column 2</td>
														<td>Column 3</td>
														<td>Column 4</td>
													</tr>
													<tr>
														<td>Column 1</td>
														<td>Column 2</td>
														<td>Column 3</td>
														<td>Column 4</td>
													</tr>
													<tr>
														<td>Column 1</td>
														<td>Column 2</td>
														<td>Column 3</td>
														<td>Column 4</td>
													</tr>
												</tbody>
											</table>
										</div><!-- table-box -->

										<br><br>
										end table-box class example
										<hr>

										<br><br>
										<hr>
										form-box class example (only 2 column head + row content)<br><br>

										<div class="form-box">
											<table>
												<tbody>
													<tr>
														<th width="120">Head 1 ( fix width here)</th>
														<td>Content Row 1 Content Row 1 Content Row 1 Content Row 1</td>
													</tr>
													<tr>
														<th width="120">Head 2 ( fix width here)</th>
														<td>Content Row 2 Content Row 2 Content Row 2 Content Row 2</td>
													</tr>
													<tr>
														<th width="120">Head 3 ( fix width here)</th>
														<td>Content Row 3 Content Row 3 Content Row 3 Content Row 3</td>
													</tr>
													<tr>
														<th width="120">Head 4 ( fix width here)</th>
														<td>Content Row 4 Content Row 4 Content Row 4 Content Row 4</td>
													</tr>
												</tbody>
											</table>
										</div><!-- form-box -->

										<br>
										end form-box class example
										<hr>







										<br><br>
										<hr>
										tab-box example<br><br><br><br>
										
										
										<div data-tab-group="1" class="mod_tab-content">
											<div class="header">
												<span class="header-text fontfacetext-bold">heading:</span>
												<span data-tab-id="1" class="tab-btn btn-2stage big blue"><a class="fontfacetext" href="#">tab 1</a></span>
												<span data-tab-id="2" class="tab-btn btn-2stage big blue"><a class="fontfacetext" href="#">tab 2</a></span>
											</div>
											<div class="content">
												<div data-tab-id="1" class="tab-content">
													<div style="border: 1px solid #ccc;padding:10px;margin-top:10px;">
														tab content 1 <br><br>
														tab content 1 
													</div>
												</div><!-- tab-content -->
												<div data-tab-id="2" class="tab-content">
													<div style="border: 1px solid #ccc;padding:10px;margin-top:10px;">
														tab content 2<br><br>
														tabFocus(data-tab-group,data-tab-id); to focus tab menu
													</div>
												</div><!-- tab-content -->
											</div>
											<div class="clearfix"></div>
										</div><!-- mod_tab-content -->

										<br><br>



										<div data-tab-group="2" class="mod_tab-content side-tab">
											<div class="header">
												<!-- <span class="header-text fontfacetext-bold">heading:</span> -->
												<span data-tab-id="1" class="tab-btn btn-2stage big blue"><a class="fontfacetext" href="#">tab 1</a></span>
												<span data-tab-id="2" class="tab-btn btn-2stage big blue"><a class="fontfacetext" href="#">tab 2</a></span>
												<span data-tab-id="3" class="tab-btn btn-2stage big blue"><a class="fontfacetext" href="#">tab 3</a></span>
												<span data-tab-id="4" class="tab-btn btn-2stage big blue"><a class="fontfacetext" href="#">tab 4</a></span>
											</div>
											<div class="content">
												<div data-tab-id="1" class="tab-content">
													<div style="border: 1px solid #ccc;padding:10px;width:700px;height:200px;">
														tab content 1
													</div>
												</div><!-- tab-content -->
												<div data-tab-id="2" class="tab-content">
													<div style="border: 1px solid #ccc;padding:10px;width:700px;height:200px;">
														tab content 2<br><br>
														tabFocus(data-tab-group,data-tab-id); to focus tab menu
													</div>
												</div><!-- tab-content -->
												<div data-tab-id="3" class="tab-content">
													<div style="border: 1px solid #ccc;padding:10px;width:700px;height:200px;">
														tab content 3<br><br>
														tabFocus(data-tab-group,data-tab-id); to focus tab menu
													</div>
												</div><!-- tab-content -->
												<div data-tab-id="4" class="tab-content">
													<div style="border: 1px solid #ccc;padding:10px;width:700px;height:200px;">
														tab content 4<br><br>
														tabFocus(data-tab-group,data-tab-id); to focus tab menu
													</div>
												</div><!-- tab-content -->
											</div>
											<div class="clearfix"></div>
										</div><!-- mod_tab-content -->

										


										<br><br><br><br>
										end tab-box example
										<hr>












										<br><br>
										<hr>
										input example <br><br>



										<input id="testSelect" type="text" class="sm-input" style="width:265px" placeholder="input text" value="input text">
										<br><br>

										<input type="text" class="sm-input--flag-th" style="width:245px" placeholder="input with thai flag icon">
										<br><br>

										<input type="text" class="sm-input--flag-en" style="width:245px" placeholder="input with english flag icon">
										<br><br>

										<input type="text" class="sm-input readonly" style="width:265px" placeholder="input text read only" value="input text read only" readonly="true">
										<br><br>

										<input type="text" class="sm-input disabled" style="width:265px" placeholder="input text disabled" value="input text disabled" disabled="true">
										<br><br>

										<input type="text" class="sm-input error" style="width:265px" placeholder="input text" value="input text error">
										<br><br>

										<input type="password" class="sm-input" style="width:265px" placeholder="input password" value="password">
										<br><br>

										<input type="password" class="sm-input readonly" style="width:265px" placeholder="input password read only" value="password" readonly="true">
										<br><br>

										<input type="password" class="sm-input disabled" style="width:265px" placeholder="input password disabled" value="password" disabled="true">
										<br><br>

										<input type="password" class="sm-input error" style="width:265px" placeholder="input password error" value="password">
										<br><br>

										<textarea name="" id="" class="sm-textarea" style="width:265px;height:50px;">textarea</textarea>
										<br><br>

										<textarea name="" id="" class="sm-textarea disabled" style="width:265px;height:50px;" disabled="true">textarea disabled</textarea>
										<br><br>

										<br><br>
										class selectonclick
										<br><br>
										<input type="text" class="sm-input selectonclick" style="width:265px" placeholder="input text" value="click me ;)">
										<br><br>

										<br><br>
										<a id="disableInput" href="#">click to toggle disable</a>
										<br><br>
										<input type="text" id="disableInputTarget" class="sm-input" style="width:265px" placeholder="input text" value="input text">
										<br><br>


										<br><br>
										end input example
										<hr>

										<br><br>
										<hr>
										radio and checkbox with label text<br><br><br><br>
										
										<input disabled="disabled" id="test-radio1" name="grouptest1" type="radio"> <label class="input-label" for="test-radio1">radio 1</label>&nbsp;&nbsp;
										<input id="test-radio2" name="grouptest1" type="radio"> <label class="input-label" for="test-radio2">radio 2</label>&nbsp;&nbsp;
										<input id="test-radio3" name="grouptest1" type="radio"> <label class="input-label" for="test-radio3">radio 3</label>


										<br><br>

										<input disabled="disabled" id="test-checkbox1" name="grouptest3" type="checkbox"> <label class="input-label" for="test-checkbox1">checkbox 1</label>&nbsp;&nbsp;
										<input id="test-checkbox2" name="grouptest3" type="checkbox"> <label class="input-label" for="test-checkbox2">checkbox 2</label>&nbsp;&nbsp;
										<input id="test-checkbox3" name="grouptest3" type="checkbox"> <label class="input-label" for="test-checkbox3">checkbox 3</label>

										<br><br><br><br>
										<a id="disableCheckbox" href="#">click to toggle disable</a>
										<br><br>
										<input id="test-checkbox99" name="grouptest99" type="checkbox"> <label class="input-label" for="test-checkbox99">disable me</label>



										<br><br><br><br>
										end radio and checkbox with label text
										<hr>

										<br><br>
										<hr>
										button <br><br><br>

										with round corner<br><br>

										<span class="btn round big blue"><input type="submit" class="fontfacetext" value="input submit"></span>&nbsp;&nbsp;
										<span class="btn round big blue"><input type="reset" class="fontfacetext" value="input reset"></span>&nbsp;&nbsp;
										<span class="btn round big blue"><input type="button" class="fontfacetext" value="input button"></span>&nbsp;&nbsp;
										<span class="btn round big blue"><a class="fontfacetext" href="#">link button</a></span>
										<br><br>


										<span class="btn round big green"><input type="submit" class="fontfacetext" value="input submit"></span>&nbsp;&nbsp;
										<span class="btn round big green"><input type="reset" class="fontfacetext" value="input reset"></span>&nbsp;&nbsp;
										<span class="btn round big green"><input type="button" class="fontfacetext" value="input button"></span>&nbsp;&nbsp;
										<span class="btn round big green"><a class="fontfacetext" href="#">link button</a></span>
										<br><br>

										<span class="btn round big gray"><input type="submit" class="fontfacetext" value="input submit"></span>&nbsp;&nbsp;
										<span class="btn round big gray"><input type="reset" class="fontfacetext" value="input reset"></span>&nbsp;&nbsp;
										<span class="btn round big gray"><input type="button" class="fontfacetext" value="input button"></span>&nbsp;&nbsp;
										<span class="btn round big gray"><a class="fontfacetext" href="#">link button</a></span>
										<br><br>

										<span class="btn round big blue"><input style="width:430px" type="submit" class="fontfacetext" value="input custom width"></span>
										<br><br>

										<span class="btn round big blue"><a style="width:430px" class="fontfacetext" href="#">link button custom width</a></span>
										<br><br>

										<span class="btn round big blue disabled"><input type="submit" class="fontfacetext" value="submit disabled"></span>&nbsp;&nbsp;
										<span class="btn round big blue disabled"><input type="reset" class="fontfacetext" value="reset disabled"></span>&nbsp;&nbsp;
										<span class="btn round big blue disabled"><input type="button" class="fontfacetext" value="button disabled"></span>&nbsp;&nbsp;
										<span class="btn round big blue disabled"><a class="fontfacetext" href="#">link disabled</a></span>
										<br><br>

										<br><br>
										without round corner<br><br>

										<span class="btn big blue"><input type="submit" class="fontfacetext" value="input submit"></span>&nbsp;&nbsp;
										<span class="btn big blue"><input type="reset" class="fontfacetext" value="input reset"></span>&nbsp;&nbsp;
										<span class="btn big blue"><input type="button" class="fontfacetext" value="input button"></span>&nbsp;&nbsp;
										<span class="btn big blue"><a class="fontfacetext" href="#">link button</a></span>
										<br><br>


										<span class="btn big green"><input type="submit" class="fontfacetext" value="input submit"></span>&nbsp;&nbsp;
										<span class="btn big green"><input type="reset" class="fontfacetext" value="input reset"></span>&nbsp;&nbsp;
										<span class="btn big green"><input type="button" class="fontfacetext" value="input button"></span>&nbsp;&nbsp;
										<span class="btn big green"><a class="fontfacetext" href="#">link button</a></span>
										<br><br>

										<span class="btn big gray"><input type="submit" class="fontfacetext" value="input submit"></span>&nbsp;&nbsp;
										<span class="btn big gray"><input type="reset" class="fontfacetext" value="input reset"></span>&nbsp;&nbsp;
										<span class="btn big gray"><input type="button" class="fontfacetext" value="input button"></span>&nbsp;&nbsp;
										<span class="btn big gray"><a class="fontfacetext" href="#">link button</a></span>
										<br><br>


										<span class="btn big blue"><input style="width:430px" type="submit" class="fontfacetext" value="input custom width"></span>
										<br><br>

										<span class="btn big blue"><a style="width:430px" class="fontfacetext" href="#">link button custom width</a></span>
										<br><br>

										<span class="btn big blue disabled"><input type="submit" class="fontfacetext" value="submit disabled"></span>&nbsp;&nbsp;
										<span class="btn big blue disabled"><input type="reset" class="fontfacetext" value="reset disabled"></span>&nbsp;&nbsp;
										<span class="btn big blue disabled"><input type="button" class="fontfacetext" value="button disabled"></span>&nbsp;&nbsp;
										<span class="btn big blue disabled"><a class="fontfacetext" href="#">link disabled</a></span>
										<br><br>


										<br><br>
										<a id="disableButton" href="#">click to toggle disable</a>
										<br><br>
										<span id="disableButtonTarget" class="btn big blue"><input type="submit" class="fontfacetext" value="disable me"></span>&nbsp;&nbsp;

										<br><br><br><br>
										end button
										<hr>



										<br><br>
										<hr>
										2-stage button <br><br><br><br>
										
										<span data-btn-id="1" class="btn-2stage big blue"><a class="fontfacetext" href="#">inactive button</a></span>
										&nbsp;&nbsp;
										<span data-btn-id="2" class="btn-2stage big blue active"><a class="fontfacetext" href="#">active button</a></span>
										<br><br>

										<span data-btn-id="3" class="btn-2stage big arrow blue"><a class="fontfacetext" href="#">inactive button with arrow</a><i class="icon-caret-right"></i></span>
										&nbsp;&nbsp;
										<span data-btn-id="4" class="btn-2stage big arrow blue active"><a class="fontfacetext" href="#">active button with arrow</a><i class="icon-caret-right"></i></span>
										<br><br>

										
										<br><br>
										grouping 2-stage button focus each group using btn2stageFocus()<br><br>

										<span data-btn-group-id="98" data-btn-id="1" class="btn-2stage big blue"><a class="fontfacetext" href="#">group 1 button 1</a></span>
										&nbsp;&nbsp;
										<span data-btn-group-id="98" data-btn-id="2" class="btn-2stage big blue"><a class="fontfacetext" href="#">group 1 button 2</a></span>
										<br><br>

										<span data-btn-group-id="97" data-btn-id="1" class="btn-2stage big blue"><a class="fontfacetext" href="#">group 2 button 1</a></span>
										&nbsp;&nbsp;
										<span data-btn-group-id="97" data-btn-id="2" class="btn-2stage big blue"><a class="fontfacetext" href="#">group 2 button 2</a></span>
										&nbsp;&nbsp;
										<span data-btn-group-id="97" data-btn-id="3" class="btn-2stage big blue"><a class="fontfacetext" href="#">group 2 button 3</a></span>




										<br><br><br><br>
										end 2-stage button
										<hr>



										<br><br>
										<hr>
										dropdown select <br><br><br><br>

										<select style="width:100%" class="selectric" name="mainmnu-align" id="test-select-dropdown-1">
											<option value="1">option 1-1</option>
											<option value="2">option 1-2</option>
											<option value="3">option 1-3</option>
										</select>

										<br>

										<select style="width:60%" class="selectric" name="mainmnu-align" id="test-select-dropdown-2">
											<option value="1">option 2-1</option>
											<option value="2">option 2-2</option>
											<option value="3">option 2-3</option>
										</select>

										<br>

										<select style="width:250px" disabled="disabled" class="selectric" name="mainmnu-align" id="test-select-dropdown-3">
											<option value="1">option 3-1</option>
											<option value="2">option 3-2</option>
											<option value="3">option 3-3</option>
										</select>


										<br><br>
										focus select using selectFocus()<br><br>

										<select class="selectric" name="mainmnu-align" id="test-select-dropdown-4">
											<option value="1">option 4-1</option>
											<option value="2">option 4-2</option>
											<option value="3">option 4-3</option>
										</select>

										<br><br>
										<a id="disableSelect" href="#">click to toggle disable</a><br><br>

										<select class="selectric" name="mainmnu-align" id="test-select-dropdown-5">
											<option value="1">option 5-1</option>
											<option value="2">option 5-2</option>
											<option value="3">option 5-3</option>
										</select>

										<br><br>
										long text option without setting width<br><br>

										<select class="selectric" name="mainmnu-align" id="test-select-dropdown-6">
											<option value="1">short text option</option>
											<option value="2">If it's a string, all keys wrapped in brackets will be replaced by the respective values in itemData.</option>
											<option value="3">short text option</option>
										</select>

										<br><br>
										long text option with setting width<br><br>

										<select style="width:200px;" class="selectric" name="mainmnu-align" id="test-select-dropdown-7">
											<option value="1">short text option</option>
											<option value="2">If it's a string, all keys wrapped in brackets will be replaced by the respective values in itemData. Available keys are: 'value', 'text', 'slug', 'disabled'.</option>
											<option value="3">short text option</option>
										</select>




										<br><br><br><br>
										end dropdown select
										<hr>



										<br><br>
										<hr>
										on-off switch checkbox <br><br>

										<br><br>

										<div id="switch-onoff-test" class="switch-onoff">
											<input id="sample-switch-1" class="hidden-checkbox" type="checkbox">
											<label for="sample-switch-1">
												<span class="switch-text">ON</span>
												<span class="switch-trigger"></span>
												<span class="switch-text">OFF</span>
											</label>
										</div>
										&nbsp;&nbsp;
										<div id="switch-onoff-test" class="switch-onoff">
											<input id="sample-switch-2" class="hidden-checkbox" type="checkbox" checked="checked">
											<label for="sample-switch-2">
												<span class="switch-text">ON</span>
												<span class="switch-trigger"></span>
												<span class="switch-text">OFF</span>
											</label>
										</div>

										<br><br>




										<br><br>
										end on-off switch checkbox
										<hr>



										<br><br>
										<hr>
										lightbox ( default width*height = 800*600)<br><br>

										<br><br>
										call by class name
										<br><br>


										<a class="clightbox" href="iframe.php">popup lightbox default</a>
										<br><br>

										<a class="clightbox" data-width="400" data-height="200" href="iframe.php">popup lightbox with custom width-height</a>

										<br><br><br><br>
										call by function callLightbox() *sending parameter : link,width,height
										<br><br>

										<a href="#" onClick="callLightbox('iframe.php',200,200);return false;">popup lightbox call by function</a>

										<br><br>





										<br><br>
										end lightbox
										<hr>







































										<br><br>
										<hr>
										radio and checkbox with div box for set position<br><br>
										
										<div class="align-box" style="width:110px;"><input id="test-radio11" name="grouptest11" type="radio"> <label class="input-label" for="test-radio11">radio 1</label></div>
										<div class="align-box" style="width:110px;"><input id="test-radio12" name="grouptest11" type="radio"> <label class="input-label" for="test-radio12">radio 2</label></div>

										<br><br>

										<div class="align-box" style="width:210px;"><input id="test-radio13" name="grouptest12" type="radio"> <label class="input-label" for="test-radio13">radio 3</label></div>
										<div class="align-box" style="width:210px;"><input id="test-radio14" name="grouptest12" type="radio"> <label class="input-label" for="test-radio14">radio 4</label></div>

										<br><br>

										<div class="align-box" style="width:110px;"><input id="test-checkbox11" name="grouptest13" type="checkbox"> <label class="input-label" for="test-checkbox11">checkbox 1</label></div>
										<div class="align-box" style="width:110px;"><input id="test-checkbox12" name="grouptest13" type="checkbox"> <label class="input-label" for="test-checkbox12">checkbox 2</label></div>

										<br><br>

										<div class="align-box" style="margin-left:115px;width:110px;"><input id="test-checkbox13" name="grouptest3" type="checkbox"> <label class="input-label" for="test-checkbox13">checkbox 3</label></div>






										<br><br>
										end input example
										<hr>


									</div><!-- right -->
									<div class="clearfix"></div>
								</div>
							</div><!-- content-slide-box -->

						</div><!-- content-slide-container -->
					</div>
				</div>
			</div><!-- main container -->
 
            @include('manage.include.footer')

		</div><!-- page-container -->
	</div><!-- se-wrapper -->

@include('manage.include.scripts') 

<!-- addition script for current page -->
<script>
$(function(){

/* main menu focus */
/* note: sending "row id" , "main id" , " sub id " */
mainmenuFocus(1,1,2);

/* side menu focus */
/* note: sending "group id" and "menu id"  */
btn2stageFocus(0,3); // side menu group id = 0

/* tab content focus */
/* note: sending "tab group id" and "tab menu id"  */
tabFocus(1,2); // group 1
tabFocus(2,3); // group 2

/* group btn2stage  focus */
/* note: sending "group id" and "menu id"  */
btn2stageFocus(98,2);
btn2stageFocus(97,3);


/* select dropdown focus */
/* note: sending "select id" and "option value" */
selectFocus('test-select-dropdown-4',2);


$('#disableButton').on('click',function(){
	$('#disableButtonTarget').toggleClass('disabled');
	return false;
});
$('#disableInput').on('click',function(){
	$('#disableInputTarget').toggleClass('disabled');
	if($('#disableInputTarget').prop('disabled') == true)
	{
		$('#disableInputTarget').prop({disabled:false});
	}
	else
	{
		$('#disableInputTarget').prop({disabled:true});
	}
	return false;
});
$('#disableCheckbox').on('click',function(){

	if($('#test-checkbox99').prop('disabled') == true)
	{
		$('#test-checkbox99').prop({disabled:false});
	}
	else
	{
		$('#test-checkbox99').prop({disabled:true});
	}

	return false;
});
$('#disableSelect').on('click',function(){
	if($('#test-select-dropdown-5').prop('disabled') == true)
	{
		$('#test-select-dropdown-5').prop({disabled:false});
	}
	else
	{
		$('#test-select-dropdown-5').prop({disabled:true});
	}
	$('#test-select-dropdown-5').selectric('refresh');

	return false;
});


});
</script>

@include('manage.include.responsive') 
