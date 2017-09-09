<div class="row home-container" style="min-height: 300px;">
	<div class="col-md-9">
		{include file='frontend/layouts/breadcrumb.tpl'}
		<form class="form-horizontal">
	  	<div class="form-group">
		    <label class="control-label col-sm-2" for="fullname">{lang('parent_student')} <sup style="color:red;">(*)</sup></label>
		    <div class="col-sm-10">
		    	<input type="email" class="form-control params" id="fullname" placeholder="{lang('input_fullname_parent_student')}">
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label class="control-label col-sm-2" for="address">{lang('address')} <sup style="color:red;">(*)</sup></label>
		    <div class="col-sm-10">
		    	<input type="text" class="form-control params" id="address" placeholder="{lang('input_address')}">
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label class="control-label col-sm-2" for="phone">{lang('phone')} <sup style="color:red;">(*)</sup></label>
		    <div class="col-sm-10">
		    	<input type="text" class="form-control params" id="phone" placeholder="{lang('input_phone')}">
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label class="control-label col-sm-2" for="email">{lang('email')} </label>
		    <div class="col-sm-10">
		    	<input type="text" class="form-control params" id="email" placeholder="{lang('input_email')}">
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label class="control-label col-sm-2" for="class">{lang('class')} <sup style="color:red;">(*)</sup></label>
		    <div class="col-sm-10">
		    	<select id="class" class="form-control selectpicker params" notnull>
                	<option value="">{lang('choose_class')}</option>
                    {foreach from=$classList key=i item=item}
                    	<option value="{$item->id}">{$item->class}</option>
                    {/foreach}
                </select>
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label class="control-label col-sm-2" for="subjects">{lang('subject')} <sup style="color:red;">(*)</sup></label>
		    <div class="col-sm-10">
		    	<input type="text" class="form-control params" id="subjects" placeholder="{lang('input_subject')}">
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label class="control-label col-sm-2" for="requirement_teachers">{lang('requirement')} <sup style="color:red;">(*)</sup></label>
		    <div class="col-sm-10">
		    	<input type="text" class="form-control params" id="requirement_teachers" placeholder="{lang('input_requirement')}">
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label class="control-label col-sm-2" for="notes">{lang('another_requirement')}</label>
		    <div class="col-sm-10">
		    	<textarea rows="3" cols="1" class="form-control params" id="notes" placeholder="{lang('input_another_requirement')}">
		    	</textarea>
		    </div>
	  	</div>
		</form>
		<div class="form-group"> 
			<div class="col-sm-offset-2 col-sm-10">
		    	<button type="submit" class="btn btn-success" onclick="funcSubmit();">{lang('register')}</button>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="panel panel-primary">
		  	<div class="panel-heading">Tài liệu mới</div>
		  	<div class="panel-body">
				<ul class="list-group">
				  	<li class="list-group-item">First item</li>
				  	<li class="list-group-item">Second item</li>
					<li class="list-group-item">Third item</li>
				</ul>
			</div>
		</div>
		<div class="panel panel-primary">
		  	<div class="panel-heading">Lớp mới đăng</div>
		  	<div class="panel-body">
				<ul class="list-group">
				  	<li class="list-group-item">First item</li>
				  	<li class="list-group-item">Second item</li>
					<li class="list-group-item">Third item</li>
				</ul>
			</div>
		</div>
		<div class="panel panel-primary">
		  	<div class="panel-heading">Tin tức & sự kiện</div>
		  	<div class="panel-body">
				<ul class="list-group">
				  	<li class="list-group-item">First item</li>
				  	<li class="list-group-item">Second item</li>
					<li class="list-group-item">Third item</li>
				</ul>
			</div>
		</div>
		<div class="panel panel-primary">
		  	<div class="panel-heading">Thống kê truy cập</div>
		  	<div class="panel-body">
				<ul class="list-group">
				  	<li class="list-group-item">Hôm nay <span class="badge">12</span></li>
				  	<li class="list-group-item">Trong tuần <span class="badge">123</span></li>
				  	<li class="list-group-item">Trong tháng <span class="badge">1234</span></li>
				  	<li class="list-group-item">Tất cả <span class="badge">12345</span></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<script>
var langChooseSubject = '{lang('choose_subject')}';
var langChooseClass = '{lang('choose_class')}';
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
    initLoading('.form-horizontal');
    $.post('studentregis', params, function (data) {
        toastr.remove();
        if (data == 1) {
            toastr.success(langComplete, langNotify);
            setTimeout(function(){
                destroyLoading('.form-horizontal');
                window.location = baseUrl;
            }, 1000);
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
	$('#class').selectpicker({
        size: 10,
        liveSearch: true,
        noneSelectedText: langChooseClass
    }).on('hidden.bs.select', function (e){ });
});
</script>