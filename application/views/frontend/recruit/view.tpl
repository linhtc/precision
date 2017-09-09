<div class="row" style="min-height: 300px;">
	<div class="col-md-9">
		{include file='frontend/layouts/breadcrumb.tpl'}
		{foreach from=$news key=i item=item}
		<div class="media">
		  	<div class="media-left">
		  		<div class="news-image" style="background-image: url({$item.image});">
		  		
		  		</div>
		  	</div>
		    <div class="media-body">
		      	<h4 class="media-heading">{$item.title} <small><i>{lang('posted_on')} {$item.modified}</i></small></h4>
		      	<p>
		      		{$item.summary}  <br /> 
			    	<small><a href="{base_url()}tuyen-dung/{$item.friendly}">Xem chi tiết...</a></small>
		    	</p>
		    </div>
		</div>
		{/foreach}
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
	</div>
</div>