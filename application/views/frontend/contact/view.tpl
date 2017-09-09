<div class="row home-container" style="min-height: 300px;">
	<div class="col-md-9">
		{include file='frontend/layouts/breadcrumb.tpl'}
		{$smarty.session.contact->maps}
	</div>
	<div class="col-md-3">
		<div class="panel panel-primary">
		  	<div class="panel-heading">Thông tin liên hệ</div>
		  	<div class="panel-body">
				<ul class="list-group">
				  	<li class="list-group-item">Gia sư Sáng Tạo Việt</li>
				  	<li class="list-group-item">Điện thoại: {$smarty.session.contact->phone}</li>
				  	<li class="list-group-item">Email: {$smarty.session.contact->email}</li>
					<li class="list-group-item">Địa chỉ: {$smarty.session.contact->address}</li>
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