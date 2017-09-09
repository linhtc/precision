<style>
.modal {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  overflow: hidden;
}

.modal-dialog {
  position: fixed;
  margin: 0;
  width: 100%;
  height: 100%;
  padding: 0;
}

.modal-content {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  border: 2px solid #3c7dcf;
  border-radius: 0;
  box-shadow: none;
}

.modal-header {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  height: 50px;
  padding: 10px;
  background: #6598d9;
  border: 0;
}

.modal-title {
  font-weight: 300;
  font-size: 2em;
  color: #fff;
  line-height: 30px;
}

.modal-body {
  position: absolute;
  top: 50px;
  bottom: 60px;
  width: 100%;
  font-weight: 300;
  overflow: auto;
}

.modal-footer {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  height: 60px;
  padding: 10px;
  background: #f1f3f5;
}

.btn-modal {
  position: absolute;
  top: 50%;
  left: 50%;
  margin-top: -20px;
  margin-left: -100px;
  width: 200px;
}
</style>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        {lang('spec')}
        <small>{lang('custom')}</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-spinner fa-pulse fa-fw"></i> Loading...</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">{lang('info')}</h3>
                    <div class="pull-right box-tools">
                        <button class="btn btn-info btn-xs" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="row">
                        <form action="#" method="get" id="filter-form">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="spec">{lang('title')}</label>
                                        <input type="text" class="form-control params" id="spec" >
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="sketch">{lang('upload')}</label>
                                        <input id="photo" onclick="changePhoto();" type="text" class="form-control params" notnull readonly style="cursor:pointer;" placeholder="Nhấn vào đây để tải tài liệu" >
                                    	<input id="src_photo" type="file" class="form-control"  style="opacity:0; pointer-events: none; position: absolute;" accept="application/pdf" />
                                    </div>
                                    <div class="form-group col-md-4" style="display: none;">
                                        <label for="sketch">{lang('sketch')}</label>
                                        <select class="form-control params" id="sketch" >
                                            <option value="0">---</option>
                                            <option value="1">{lang('can_upload')}</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4" style="display: none;">
                                        <label for="icon">{lang('icon')}</label>
                                        <input type="text" class="form-control params" id="icon" placeholder="fa-folder" >
                                    </div>
                                    <div class="form-group col-md-12">
                                        <a class="btn btn-success" onclick="addMenu();">{lang('add')}</a>
                                        <a class="btn btn-success" id="edit-confirm">{lang('edit')}</a>
                                        <a class="btn btn-success" id="del-confirm">{lang('delete')}</a>
                                        <a class="btn btn-success" onclick="applyChange();">{lang('save')}</a>
                                        <a class="btn btn-success" onclick="resetState();">{lang('deselect')}</a>
                                        <a id="view-document" class="btn btn-success" href="#" target="_self">{lang('view')}</a>
                                        <!-- 
                                        <a data-toggle="modal" data-target="#fsModal" class="btn btn-success" href="#" target="_self">{lang('view')}</a>
                                         -->
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">{lang('note')}: {lang('drag_drop_click')}</h3>
                </div>

                <div class="box-body table-responsive no-padding" style="overflow-y: hidden;">
                    <div id="jstree">

                    </div>
                </div>

                <div class="box-footer">
                </div>

                <div class="box-footer clearfix">
                </div>

                <form action="{base_url()}admin/groups/submit_change_permission" method="post" id="change-permission">
                    <input type="hidden" name="id" id="id" value="{$id}">
                    <input type="hidden" name="permissions" id="permissions" value="{$id}">
                </form>

            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog">
	
	        <!-- Modal content-->
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal">&times;</button>
	                <h4 class="modal-title">{lang('info')}</h4>
	            </div>
	            <div class="modal-body">
	                
	            </div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-default" data-dismiss="modal">{lang('close')}</button>
	            </div>
	        </div>
	
	    </div>
	</div>
	
	<!-- modal -->
<div id="fsModal"
     class="modal animated bounceIn"
     tabindex="-1"
     role="dialog"
     aria-labelledby="myModalLabel"
     aria-hidden="true">

  <!-- dialog -->
  <div class="modal-dialog">

    <!-- content -->
    <div class="modal-content">

      <!-- header -->
      <div class="modal-header">
        <h1 id="myModalLabel"
            class="modal-title">
          Modal title
        </h1>
      </div>
      <!-- header -->
      
      <!-- body -->
      <div class="modal-body">
        <div id="example1" style="height: 100%;"></div>
      </div>
      <!-- body -->

      <!-- footer -->
      <div class="modal-footer">
        <button class="btn btn-secondary"
                data-dismiss="modal">
          close
        </button>
        <button class="btn btn-default">
          Default
        </button>
        <button class="btn btn-primary">
          Primary
        </button>
      </div>
      <!-- footer -->

    </div>
    <!-- content -->

  </div>
  <!-- dialog -->

</div>
<!-- modal -->
    
</section>

<script>
	var docID = '{$document}';
	var baseUrl = '{base_url()}';
	var specList = '{$specList}';
    specList = JSON.parse(specList);
    var docStorage = '{$docStorage}';
    docStorage = JSON.parse(docStorage);
    
    var langNotify = '{lang('notify')}';
    var langComplete = '{lang('complete')}';
    var langChooseOne = '{lang('choose_one_option')}';

    function changePhoto() {
    	var node = $('#jstree').jstree('get_selected');
        if(node.length == 1){
            $("#src_photo").click();
        } else{
        	toastr.warning(langChooseOne, langNotify);
        }
    }
    function initLoading(){
        $('.content').block({
            message: '<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>',
            themedCSS: {
                width:  '30%',
                top:    '45%',
                left:   '45%'
            },
            css: {
                border: 'none',
                background: 'none',
                color: '#ffffff'
            }
        });
    }
    function destroyLoading(){
        $('.content').unblock();
    }
    function addMenu(){
        var parent = $('#jstree').jstree('get_selected');
        var spec = $('#spec').val();
        var sketch = $('#sketch').val();
        var icon = $('#icon').val();
        var position = 'last';
        var len = parent.length;

        if(len == 0){ parent = '#'; } else{ parent = parent[0]; }
        if(len > 1){ toastr.remove(); toastr.warning('Chỉ chọn một thư mục chứa', 'Cảnh báo'); return false; }
        if(spec.trim() == ''){ toastr.remove(); toastr.warning('Chưa nhập spec!', 'Cảnh báo'); return false; }
        if(icon == ''){ icon = 'glyphicon glyphicon-hdd'; }
        if(sketch == 1){
            icon = 'glyphicon glyphicon-file';
        }

        var node = { id: Date.now(), text: spec, icon: icon };
        var child = $('#jstree').jstree("create_node", parent, node, position, function(){ }, false);
        console.log(child);
        $('.params').val('');
    }
    function editMenu(){
        var node = $('#jstree').jstree('get_selected');
        var spec = $('#spec').val();
        var sketch = $('#sketch').val();
        var result = $('#jstree').jstree("rename_node", node, spec);
        if(sketch == 1){
            var icon = 'glyphicon glyphicon-file';
            $('#jstree').jstree("set_icon", node, icon);
        } else {
            var icon = 'glyphicon glyphicon-hdd';
            $('#jstree').jstree("set_icon", node, icon);
        }
        console.log(result);
    }
    function deleteMenu(){
        var node = $('#jstree').jstree('get_selected');
        var result = $('#jstree').jstree("delete_node", node);
        console.log(result);
    }
    function resetState(){
        $('#jstree').jstree('deselect_all');
    }
    function applyChange(){
        var finalData = new Array();
        var deepTree = $('#jstree').jstree(true).get_json($('#jstree'), { flat: true, no_state: false, no_children: false, no_data: true, no_li_attr: true, no_a_attr: true });
        if(typeof deepTree === 'object'){
            deepTree.forEach(function(item, index){
                if(typeof docStorage[item.id] == 'string'){
                	item.sketch = docStorage[item.id];
                } else{
                	item.sketch = '';
                }
                var node = { id: item.id, parent: item.parent, spec: item.text, sketch: item.sketch, sort: index };
                finalData.push(node);
            });
        }
        /*console.log(JSON.stringify(final));*/

        initLoading();
        $.post(baseUrl+'admin/manage-document/apply', { specs: finalData, doc: docID }, function (data) {
            destroyLoading();
            toastr.remove();
            if (data == 1) {
                toastr.success(langRootComplete, langRootNotify);
            } else{
                toastr.warning(langRootError, langRootNotify);
            }
        });
        return false;
    }

    $(document).ready(function() {
        $('#jstree').jstree({
            'core' : { 'data' : specList, "check_callback" : true, },
            'ui': { select_multiple_modifier : false },
            "plugins" : [ "dnd" ]
        }).on('changed.jstree', function (e, data) {
            if(data.selected.length == 1) {
                var node = $('#jstree').jstree("get_text", data.selected);
                $('#spec').val(node);
                if(typeof docStorage[data.selected] == 'string'){
                	$('#photo').val(docStorage[data.selected]);
                	$('#view-document').attr('href', docStorage[data.selected]);
                	$('#view-document').attr('target', '_blank');
                } else{
                	$('#photo').val('');
                	$('#view-document').attr('href', '#');
                	$('#view-document').attr('target', '_self');
                }
            }
        }).bind('select_node.jstree', function(e, data){
            if(data.selected.length > 1){
                data.instance.deselect_node( [ data.selected[0] ] );
            }
        }).bind("move_node.jstree", function(e, data) {
            console.log("Drop node " + data.node.id + " to " + data.parent);
            /*moveMenu(data.node.id, data.parent, e);*/
        });

        $('#del-confirm').confirmation({
            onShow: function(event, element) {

            },
            onConfirm: function(event, element) {
                deleteMenu();
            },
            onCancel: function() {

            },
            popout: true,
            title: langRootAreYouSure,
            placement: 'top',
            btnOkLabel: langRootOkButton,
            btnCancelLabel: langRootCancelButton,
        });

        $('#edit-confirm').confirmation({
            onShow: function(event, element) {

            },
            onConfirm: function(event, element) {
                editMenu();
            },
            onCancel: function() {

            },
            popout: true,
            title: langRootAreYouSure,
            placement: 'top',
            btnOkClass: 'btn btn-sm btn-info',
            btnOkLabel: langRootOkButton,
            btnCancelLabel: langRootCancelButton,
        });
        $("#src_photo").change(function (e) {
            var element = '#photo';
            files = e.target.files;
            var formData = new FormData();
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                formData.append('upfiles', file, file.name);
            }
            formData.set('doc', docID);
            
            initLoading(element);

            $.ajax({
                url: '{base_url()}admin/manage-document/upload',
                type: 'POST',
                data: formData,
                dataType: 'JSON',
                success: function (res) {
                    toastr.remove();
                    if(res.result){
                        console.log(res);
                        /*setTimeout(function(){ location.reload(); }, 1000);*/
                        var node = $('#jstree').jstree('get_selected');
                        if(node.length == 1){
                            toastr.success('Tải lên thành công!', langRootNotify);
                            $('#photo').val(res.url);
                            var icon = 'glyphicon glyphicon-file';
                            $('#jstree').jstree("set_icon", node, icon);
                            docStorage[node[0]] = res.url;
                            $('#view-document').attr('href', res.url);
                            $('#view-document').attr('target', '_blank');
                        } else{
                        	toastr.warning(langRootError, langRootNotify);
                        	$('#photo').val('');
                        	$('#view-document').attr('href', '#');
                        	$('#view-document').attr('target', '_self');
                        }
                    } else{
                        toastr.warning('Tải lên chưa được!', langRootNotify);
                    }
                    destroyLoading(element);
                },
                error: function(err){
                    console.log(err.message);
                },
                cache: false,
                contentType: false,
                processData: false
            });
        });
        
        /* if(PDFObject.supportsPDFs){
       	   console.log("Yay, this browser supports inline PDFs.");
           PDFObject.embed("/media/uploads/documents/1502250909esp_wroom_32_datasheet_en.pdf#toolbar=0", "#example1", { page: 3, toolbar:0 });
       	} else {
       	   console.log("Boo, inline PDFs are not supported by this browser");
       	} */
        
    });
</script>