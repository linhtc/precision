<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        {lang('class')}
        <small id="real-title">{lang('edit')}</small>
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
                    <div class="col-md-12">
                        <form>
                        <input type="hidden" class="form-control params" id="id" value="{$item->id}" readonly notnull >
                        	<div class="row">
                        		<div class="col-md-6">
		                            <div class="form-group">
		                                <label for="class">{lang('class')} (*)</label>
		                                <select id="class" class="form-control selectpicker params" notnull>
		                                    <option value=""></option>
		                                    {foreach from=$classList key=i item=itm}
		                                        <option value="{$itm->class}">{$itm->class}</option>
		                                    {/foreach}
		                                </select>
		                            </div>
                        		</div>
                        		<div class="col-md-6">
		                            <div class="form-group">
		                                <label for="subject">{lang('subject')} (*)</label>
		                                <select id="subject" class="form-control selectpicker params" notnull>
		                                    <option value=""></option>
		                                    {foreach from=$subjectList key=i item=itm}
		                                        <option value="{$itm->subject}">{$itm->subject}</option>
		                                    {/foreach}
		                                </select>
		                            </div>
                        		</div>
                        	</div>
                        	<div class="row">
                        		<div class="col-md-6">
		                            <div class="form-group">
		                                <label for="address_street">{lang('street')} (*)</label>
		                                <input id="address_street" type="text" class="form-control params" notnull value="{$item->address_street}" >
		                            </div>
                        		</div>
                        		<div class="col-md-6">
		                            <div class="form-group">
		                                <label for="district">{lang('district')} (*)</label>
		                                <input id="address_district" type="text" class="form-control params" notnull value="{$item->address_district}" >
		                            </div>
                        		</div>
                        	</div>
                        	<div class="row">
                        		<div class="col-md-6">
		                            <div class="form-group">
		                                <label for="times_per_week">{lang('times_per_week')} (*)</label>
		                                <input id="times_per_week" type="text" class="form-control params" notnull value="{$item->times_per_week}" >
		                            </div>
                        		</div>
                        		<div class="col-md-6">
		                            <div class="form-group">
		                                <label for="work_time">{lang('work_time')} (*)</label>
		                                <input id="work_time" type="text" class="form-control params" notnull value="{$item->work_time}" >
		                            </div>
                        		</div>
                        	</div>
                        	<div class="row">
                        		<div class="col-md-6">
		                            <div class="form-group">
		                                <label for="salary">{lang('salary')} (*)</label>
		                                <input id="salary" type="text" class="form-control params" notnull value="{$item->salary}" >
		                            </div>
                        		</div>
                        		<div class="col-md-6">
		                            <div class="form-group">
		                                <label for="requirement">{lang('requirement')} (*)</label>
		                                <input id="requirement" type="text" class="form-control params" notnull value="{$item->requirement}" >
		                            </div>
                        		</div>
                        	</div>
                        	<div class="row">
                        		<div class="col-md-6">
		                            <div class="form-group">
		                                <label for="address_street">{lang('done')} (*)</label>
		                                <select id="done" class="form-control selectpicker params" notnull>
		                                    <option value=""></option>
		                                    <option value="0">{lang('waiting')}</option>
		                                    <option value="1">{lang('done')}</option>
		                                </select>
		                            </div>
                        		</div>
                        		<div class="col-md-6">
                        		
                        		</div>
                        	</div>
                        </form>
                    </div>
                </div>
                <div class="box-footer text-right">
                    <button type="submit" class="btn btn-danger" onclick="funcCancel();">{lang('back')}</button>
                    <button type="submit" class="btn btn-success" onclick="funcSubmit();">{lang('save')}</button>
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

    var itemSubject = '{$item->subject}';
    var itemClass = '{$item->class}';
    var itemDone = '{$item->done}';
    
    function funcSubmit() {
        var params = getParams();
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
        window.location = '{base_url()}admin/manage-document/view';
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
    	$('#subject').selectpicker({
            size: 10,
            liveSearch: true,
            noneSelectedText: langChooseOne
        }).on('hidden.bs.select', function (e){ });
    	$('#class').selectpicker({
            size: 10,
            liveSearch: true,
            noneSelectedText: langChooseOne
        }).on('hidden.bs.select', function (e){ });
    	$('#done').selectpicker({
            size: 10,
            liveSearch: true,
            noneSelectedText: langChooseOne
        }).on('hidden.bs.select', function (e){ });

    	$('#subject').selectpicker('val', itemSubject);
    	$('#class').selectpicker('val', itemClass);
    	$('#done').selectpicker('val', itemDone);
    });
</script>