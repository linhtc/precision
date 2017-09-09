<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        {lang('fee')}
        {*<small>Danh sách</small>*}
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
                    <h3 class="box-title">{lang('write')}</h3>
                    {if (not empty($permission['edit'])) or $permission eq 1}
                        <div class="pull-right box-tools">
                            <a onclick="saveEditor(this);" class="btn btn-info btn-xs" data-widget="export" data-toggle="tooltip" title="{lang('save')}">
                                <i class="fa fa-floppy-o"></i>
                            </a>
                        </div>
                    {/if}
                </div>
                <div class="box-body">
					<textarea id="txt-content" data-autosave="editor-content" autofocus required>
						{$item->page_content}
					</textarea>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Include JS file. -->
<script type='text/javascript' src='http://simditor.tower.im/assets/scripts/mobilecheck.js'></script>
<script>
var langNotify = '{lang('notify')}';
var langComplete = '{lang('complete')}';
var langError = '{lang('error')}';
var langInputContent = '{lang('input_content')}';
var $preview, editor, mobileToolbar, toolbar;

function initLoading(dom){
    dom.block({
        message: '<i class="fa fa-spinner fa-pulse fa-fw"></i>',
        themedCSS: {
            width:  '30%',
            top:    '0%',
            left:   '0%'
        },
        css: {
            border: 'none',
            background: 'none',
            color: '#ffffff'
        }
    });
}
function destroyLoading(dom){
    dom.unblock();
}
function saveEditor(that){
	initLoading($(that));
    var content = editor.getValue();
    console.log(content);
    $.ajax({
        url: 'save',
        type: 'POST',
        data: { content: content },
        dataType: 'JSON',
        async: true,
        success: function (res) {
            destroyLoading($(that));
            toastr.remove();
            toastr.success(langComplete, langNotify);
        },
        error: function(err){
            destroyLoading($(that));
            console.log(err.message);
            toastr.remove();
            toastr.error(langError, langNotify);
        },
    });
}

$(document).ready(function() {
	/* var $preview, editor, mobileToolbar, toolbar; */
    Simditor.locale = 'en-US';
    toolbar = ['title', 'bold', 'italic', 'underline', 'strikethrough', 'fontScale', 'color', '|', 'ol', 'ul', 'blockquote', 'code', 'table', '|', 'link', 'image', 'hr', '|', 'indent', 'outdent', 'alignment'];
    mobileToolbar = ["bold", "underline", "strikethrough", "color", "ul", "ol"];
    if (mobilecheck()) {
      toolbar = mobileToolbar;
    }
    editor = new Simditor({
      textarea: $('#txt-content'),
      placeholder: langInputContent,
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
</script>

