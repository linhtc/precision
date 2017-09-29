<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/themes/default/style.min.css" />

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        {lang('language')}
        <small>{lang('add')}</small>
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
                    <form>
                		<div class="row">
	                		<div class="col-md-6">
							    <div class="form-group">
	                                <label for="lang">{lang('keyword')}</label>
	                                <input type="text" class="form-control params" id="lang" notnull >
	                            </div>
	                		</div>
	                		<div class="col-md-6">
							    <div class="form-group">
									<label for="kind">{lang('kind')}</label>
	                                <select id="kind" class="form-control selectpicker params" notnull>
	                                    <option value="">---</option>
	                                    <option value="default">{lang('default')}</option>
	                                    <option value="home">{lang('home')}</option>
	                                    <option value="company">{lang('company')}</option>
	                                    <option value="rd">{lang('rd')}</option>
	                                    <option value="product_and_service">{lang('product_and_service')}</option>
	                                    <option value="career">{lang('career')}</option>
	                                    <option value="contact">{lang('contact')}</option>
	                                </select>
							    </div>
	                		</div>
                		</div>
                		<div class="row">
	                		<div class="col-md-6">
							    <div class="form-group">
                                <label for="vi">{lang('vi')}</label>
                                <textarea id="vi" placeholder="Nhập một giá trị..." rows="5" cols="1" notnull class="form-control params"></textarea>
							    </div>
	                		</div>
	                		<div class="col-md-6">
							    <div class="form-group">
                                <label for="en">{lang('en')}</label>
                                <textarea id="en" placeholder="Nhập một giá trị..." rows="5" cols="1" notnull class="form-control params"></textarea>
							    </div>
	                		</div>
                		</div>
					</form>
                </div>

                <div class="box-footer text-right">
                    <button type="submit" class="btn btn-success" onclick="funcSubmit();">{lang('save')}</button>
                    <button type="submit" class="btn btn-danger" onclick="funcCancel();">{lang('cancel')}</button>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    var langCheckInputData = '{lang('check_input_data')}';
    var langNotify = '{lang('notify')}';
    var langComplete = '{lang('complete')}';
    var langChooseOne = '{lang('choose_one_option')}';
    var baseUrl = '{base_url()}';

    function funcSubmit() {
        var params = getParams();
        if(params === false){
            toastr.warning(langCheckInputData, langNotify);
            return false;
        }
        initLoading();
        $.post('add', params, function (data) {
            destroyLoading();
            if (data == 1) {
                toastr.success(langComplete, langNotify);
                rebuildLang();
            } else{
                toastr.error(data, langNotify);
            }
        });
    }

    function funcCancel() {
        window.location = '{base_url()}{$viewPath}/view';
    }

    function initLoading(){
        $('.content').block({
            message: '<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>',
            themedCSS: { width:  '30%', top:    '45%', left:   '45%' },
            css: { border: 'none', background: 'none', color: '#ffffff' }
        });
    }

    function destroyLoading(){
        $('.content').unblock();
    }

    function rebuildLang(){
        console.log('rebuild lang...');
        $.ajax({
            url: baseUrl+'api/crontabs/languages/hello',
            type: 'GET',
            async: true,
            success: function (data) {
                console.log(data);
            },
            error: function(err){
                console.log(err.message);
            },
        });
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
        $('#kind').selectpicker({
            size: 10,
            liveSearch: true,
            noneSelectedText: langChooseOne
        }).on('hidden.bs.select', function (e){ });
    });
</script>