<div class="row" style="min-height: 300px;">
	<div class="col-md-9">
		{include file='frontend/layouts/breadcrumb.tpl'}
		<table class="table table-striped table-bordered">
		    <thead>
		      	<tr>
			        <th>{lang('ms')}</th>
			        <th>{lang('class')}</th>
			        <th>{lang('subject')}</th>
			        <th>{lang('street_ward')}</th>
			        <th>{lang('district')}</th>
			        <th>{lang('times_per_week')}</th>
			        <th>{lang('time')}</th>
			        <th>{lang('salary')}</th>
			        <th>{lang('require')}</th>
		      	</tr>
		    </thead>
		    <tbody>
		    	{foreach from=$list key=i item=item}
		    		<tr class="{if $item.done eq 1}success{else}warning{/if}">
			    		<td>{$item.id}</td>
			    		<td>{$item.class}</td>
			    		<td>{$item.subject}</td>
			    		<td>{$item.address_street}</td>
			    		<td>{$item.address_district}</td>
			    		<td>{$item.times_per_week}</td>
			    		<td>{$item.work_time}</td>
			    		<td>{$item.salary}</td>
			    		<td>{$item.requirement}</td>
		    		</tr>
		    	{/foreach}
		    </tbody>
		</table>
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