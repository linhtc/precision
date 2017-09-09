<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        {lang('news')}
        <small id="real-title">{lang('add')}</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-spinner fa-pulse fa-fw"></i> Loading...</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">{lang('info')}</h3>
                    <div class="pull-right box-tools">
                        <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>

                <div class="box-body pad">
                	<div class="row">
	                    <div class="col-md-6">
	                        <form>
	                            <div class="form-group">
	                                <label for="title">{lang('title')} (*)</label>
	                                <input id="title" type="text" class="form-control params" notnull value="" placeholder="{lang('input_value')}" >
	                            </div>
	                        </form>
	                    </div>
	                    <div class="col-md-6">
	                        <form>
	                            <div class="form-group">
	                                <label for="image">{lang('image')} (*)</label>
	                                <input id="image" onclick="changePhoto();" type="text" class="form-control params" notnull value="" readonly style="cursor: pointer;" placeholder="{lang('choose_image')}" >
	                                <input id="src_photo" type="file" class="form-control"  style="opacity:0; pointer-events: none; position: absolute;" accept="image/*" />
	                            </div>
	                        </form>
	                    </div>
                	</div>
                	<div class="row">
	                    <div class="col-md-12">
	                        <form>
	                            <div class="form-group">
	                                <label for="summary">{lang('summary')} (*)</label>
	                                <textarea id="summary" rows="3" cols="1" class="form-control params" notnull placeholder="{lang('input_value')}" ></textarea>
	                            </div>
	                        </form>
	                    </div>
                	</div>
                	<div class="row">
	                    <div class="col-md-12">
	                        <form>
	                            <div class="form-group">
	                                <label for="content">{lang('content')} (*)</label>
	                                <textarea id="content" rows="1" cols="1" class="form-control params" notnull ></textarea>
	                            </div>
	                        </form>
	                    </div>
                	</div>
                </div>

                <div class="box-footer text-right">
                    <button type="submit" class="btn btn-success" onclick="funcSubmit();">{lang('save')}</button>
                    <button type="submit" class="btn btn-danger" onclick="funcCancel();">{lang('back')}</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Include JS file. -->
<script type='text/javascript' src='http://simditor.tower.im/assets/scripts/mobilecheck.js'></script>

<script>
    var langCheckInputData = '{lang('check_input_data')}';
    var langNotify = '{lang('notify')}';
    var langComplete = '{lang('complete')}';
    var langChooseOne = '{lang('choose_one_option')}';
    var langNewsContent = '{lang('news_content')}';
    var $preview, editor, mobileToolbar, toolbar;

    function changePhoto() {
    	$("#src_photo").click();
    }
    
    function funcSubmit() {
        var params = getParams();
        params['content'] = editor.getValue();
        if(params === false){
            toastr.warning(langCheckInputData, langNotify);
            return false;
        }
        initLoading('.box-info');
        $.post('add', params, function (data) {
            destroyLoading('.box-info');
            toastr.remove();
            if (data == 1) {
                toastr.success(langComplete, langNotify);
            } else{
                toastr.error(data, langNotify);
            }
        });
    }

    function funcCancel() {
        window.location = '{base_url()}admin/manage-class/view';
    }

    function initLoading(element){
        $(element).block({
            message: '<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>',
            themedCSS: { width:  '30%', top:    '45%', left:   '45%' },
            css: { border: 'none', background: 'none', color: '#ffffff' }
        });
    }

    function destroyLoading(element){
        $(element).unblock();
    }

    function getParams(){
        var params = { };
        $( ".params" ).each(function( index ) {
            var proptype = $( this ).prop('type'), cvalue = $( this ).val(), cid = $( this ).attr('id');
            if(proptype == undefined){ proptype = ''; }
            if(proptype.indexOf('select') >= 0){ cvalue = $( this ).selectpicker('val'); }
            var notnull = $( this ).attr('notnull');
            if(notnull != undefined && cid != null && (cvalue == null || cvalue == '')){ params = false; return false; }
            if(cid != null && cid != '') { params[cid] = cvalue; }
        });
        return params;
    }
    
    $(document).ready(function() {
    	Simditor.locale = 'en-US';
        toolbar = ['title', 'bold', 'italic', 'underline', 'strikethrough', 'fontScale', 'color', '|', 'ol', 'ul', 'blockquote', 'code', 'table', '|', 'link', 'image', 'hr', '|', 'indent', 'outdent', 'alignment'];
        mobileToolbar = ["bold", "underline", "strikethrough", "color", "ul", "ol"];
        if (mobilecheck()) {
          toolbar = mobileToolbar;
        }
        editor = new Simditor({
          textarea: $('#content'),
          placeholder: langNewsContent,
          toolbar: toolbar,
          pasteImage: true,
          defaultImage: 'assets/images/image.png',
          upload: location.search === '?upload' ? {
            url: '/upload'
          } : false
        });
        $preview = $('#preview');
        if ($preview.length > 0) {
          return editor.on('valuechanged', function(e) {
            return $preview.html(editor.getValue());
          });
        }
    });
    
    $("#src_photo").change(function (e) {
        var element = '#image';
        files = e.target.files;
        var formData = new FormData();
        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            formData.append('upfiles', file, file.name);
        }
        
        initLoading(element);

        $.ajax({
            url: rootBaseUrl+'admin/manage-news/upload',
            type: 'POST',
            data: formData,
            dataType: 'JSON',
            success: function (res) {
                toastr.remove();
                if(res.result){
                    console.log(res);
                    toastr.success('Tải lên thành công!', langRootNotify);
                    $('#image').val(res.url);
                } else{
                	toastr.warning(langRootError, langRootNotify);
                	$('#image').val('');
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
</script>