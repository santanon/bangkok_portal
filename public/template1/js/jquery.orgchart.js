(function($) {
    $.fn.orgChart = function(options) {
        var opts = $.extend({}, $.fn.orgChart.defaults, options);
        return new OrgChart($(this), opts);        
    }

    $.fn.orgChart.defaults = {
        data: [{id:1, name:'Root', link:'', parent: 0}],
        showControls: false,
        allowEdit: false,
        onAddNode: null,
        onDeleteNode: null,
        onClickNode: null,
        //newNodeText: 'Add Child'
    };

    function OrgChart($container, opts){
        console.log($container.data.id+'<<<');
        console.log(opts+'<<<');
        
        var data = opts.data;
        var nodes = {};
        var rootNodes = [];
        this.opts = opts;
        this.$container = $container;
        var self = this;

        this.draw = function(){
            $container.empty().append(rootNodes[0].render(opts));

            //console.log($container.find('.node'));

            $container.find('.node').click(function(){
                //console.log("click");
                if(self.opts.onClickNode !== null){
                    //console.log($(this).attr('node-id'));
                    //console.log(nodes);
                    self.opts.onClickNode(nodes[$(this).attr('node-id')]);
                    //console.log(nodes);
                }
            });

            if(opts.allowEdit){
                //console.log("draw");
                //console.log($container);

                //console.log($container.find('.node .content h2'));

                $container.find('.node .content h2').click(function(e){

                    
                    var thisId = $(this).closest(".node").attr('node-id');

                    //console.log(thisId);

                    self.startEdit(thisId);
                    e.stopPropagation();
                });

                // $container.find('.node p').click(function(e){
                //     var thisId = $(this).parent().attr('node-id');
                //     self.startEditDesc(thisId);
                //     e.stopPropagation();
                // });
            }

            // add "add button" listener
            $container.find('.org-add-button').click(function(e){
                var thisId = $(this).closest(".node").attr('node-id');

                if(self.opts.onAddNode !== null){
                    self.opts.onAddNode(nodes[thisId]);
                }
                else{
                    self.newNode(thisId);
                }
                e.stopPropagation();
            });

            $container.find('.org-del-button').click(function(e){
                var thisId = $(this).closest(".node").attr('node-id');

                if(self.opts.onDeleteNode !== null){
                    self.opts.onDeleteNode(nodes[thisId]);
                }
                else{
                    self.deleteNode(thisId);
                }
                e.stopPropagation();
            });
        }

        this.startEdit = function(id){
            var inputElement = $('<input class="org-input" type="text" value="'+nodes[id].data.name+'" placeholder="หัวข้อ" />' );
            var inputElement2 = $('<input class="org-input link" type="text" value="'+nodes[id].data.link+'" placeholder="ลิ้งค์" />');
            //console.log(nodes[id].data.link)

            $container.find('div[node-id='+id+'] .content h2').replaceWith(inputElement);
            $container.find('div[node-id='+id+'] .content').append(inputElement2);
            var commitChange = function(){
                //var h2Element = $('<h2>'+nodes[id].data.name+'</h2>');
                var Text_link = $container.find('div[node-id='+id+'] .content .link').val();
                var h2ElementLink = $('<h2 class="title"> <a href="/'+Text_link+'">'+nodes[id].data.name+'</a></h2>');
                nodes[id].data.link = Text_link;
                if(opts.allowEdit){
                    h2ElementLink.click(function(){
                        self.startEdit(id);
                    })
                }
                inputElement.replaceWith(h2ElementLink);
                $('.link').remove();
            }  
            inputElement.focus();
            inputElement.keyup(function(event){
                if(event.which == 13){
                    commitChange();
                }
                else{
                    nodes[id].data.name = inputElement.val();
                }
            });
            $('.link').blur(function(event){
                commitChange();
                console.log(nodes[id].data)
            })
        }

        // this.startEditDesc = function(id){
        //     //Description
        //     var inputElementDesc = $('<input class="org-input link" type="text" value="'+nodes[id].data.description+'"/>');
        //     $container.find('div[node-id='+id+'] p').replaceWith(inputElementDesc);
        //     var commitChangeDesc = function(){
        //         var PElement = $('<p>'+nodes[id].data.description+'</p>');
        //         if(opts.allowEdit){
        //             PElement.click(function(){
        //                 self.startEditDesc(id);
        //             })
        //         }
        //         inputElementDesc.replaceWith(PElement);
        //     }  
        //     inputElementDesc.focus();
        //     inputElementDesc.keyup(function(event){
        //         if(event.which == 13){
        //             commitChangeDesc();
        //         }
        //         else{
        //             nodes[id].data.description = inputElementDesc.val();
        //         }
        //     });
        //     inputElementDesc.blur(function(event){
        //         commitChangeDesc();
        //     })
        // }

        this.newNode = function(parentId){
            var nextId = Object.keys(nodes).length;
            while(nextId in nodes){
                nextId++;
            }

            self.addNode({id: nextId, name: '', link: '', parent: parentId});
        }

        this.addNode = function(data){
            //console.log("addNode");
            console.log(data);

            var newNode = new Node(data);
            nodes[data.id] = newNode;
            nodes[data.parent].addChild(newNode);

            self.draw();
            self.startEdit(data.id);

            console.log(newNode);
            
            
        }

        this.deleteNode = function(id){
            for(var i=0;i<nodes[id].children.length;i++){
                self.deleteNode(nodes[id].children[i].data.id);
            }
            nodes[nodes[id].data.parent].removeChild(id);
            delete nodes[id];
            self.draw();
        }

        this.getData = function(){
            var outData = [];
            for(var i in nodes){
                outData.push(nodes[i].data);
            }
            return outData;
        }

        // constructor
        for(var i in data){
            var node = new Node(data[i]);
            nodes[data[i].id] = node;
        }

        // generate parent child tree
        for(var i in nodes){
            if(nodes[i].data.parent == 0){
                rootNodes.push(nodes[i]);
            }
            else{
                nodes[nodes[i].data.parent].addChild(nodes[i]);
            }
        }

        // draw org chart
        $container.addClass('orgChart');
        self.draw();
    }

    function Node(data){
        this.data = data;
        this.children = [];
        var self = this;
        

        this.addChild = function(childNode){
            this.children.push(childNode);
        }

        this.removeChild = function(id){
            for(var i=0;i<self.children.length;i++){
                if(self.children[i].data.id == id){
                    self.children.splice(i,1);
                    return;
                }
            }
        }

        this.render = function(opts){
            var childLength = self.children.length,
                mainTable;

            mainTable = "<table cellpadding='0' cellspacing='0' border='0'>";
            var nodeColspan = childLength>0?2*childLength:2;
            mainTable += "<tr><td colspan='"+nodeColspan+"'>"+self.formatNode(opts)+"</td></tr>";

            if(childLength > 0){
                var downLineTable = "<table cellpadding='0' cellspacing='0' border='0'><tr class='lines x'><td class='line left half'></td><td class='line right half'></td></table>";
                mainTable += "<tr class='lines'><td colspan='"+childLength*2+"'>"+downLineTable+'</td></tr>';

                var linesCols = '';
                for(var i=0;i<childLength;i++){
                    if(childLength==1){
                        linesCols += "<td class='line left half'></td>";    // keep vertical lines aligned if there's only 1 child
                    }
                    else if(i==0){
                        linesCols += "<td class='line left'></td>";     // the first cell doesn't have a line in the top
                    }
                    else{
                        linesCols += "<td class='line left top'></td>";
                    }

                    if(childLength==1){
                        linesCols += "<td class='line right half'></td>";
                    }
                    else if(i==childLength-1){
                        linesCols += "<td class='line right'></td>";
                    }
                    else{
                        linesCols += "<td class='line right top'></td>";
                    }
                }
                mainTable += "<tr class='lines v'>"+linesCols+"</tr>";

                mainTable += "<tr>";
                for(var i in self.children){
                    mainTable += "<td colspan='2'>"+self.children[i].render(opts)+"</td>";
                }
                mainTable += "</tr>";
            }
            mainTable += '</table>';
            return mainTable;
        }

        this.formatNode = function(opts){
            var nameString = '',
                descString = '';
            
            if(typeof data.name !== 'undefined'){
                nameString = '<h2 class="title"><a href="/'+self.data.link+'">'+self.data.name+'</a></h2>';
            }
            if(typeof data.description !== 'undefined'){
                descString = '<p>'+self.data.description+'</p>';
            }
            if(opts.showControls){
                var buttonsHtml = "<div class='org-add-button'></div><div class='org-del-button'></div>";
                //var buttonsHtml = "<div class='org-add-button'>"+opts.newNodeText+"</div><div class='org-del-button'></div>";
            }
            else{
                buttonsHtml = '';
            }
            return "<div class='node' node-id='"+this.data.id+"'><div class='content'>"+ nameString +"</div>" + buttonsHtml+"</div>";

            //return "<div class='node' node-id='"+this.data.id+"'>"+nameString+buttonsHtml+"</div>";
        }
    }

})(jQuery);

