<div class="row" style="min-height: 300px;">
	<div class="col-md-9">
		{include file='frontend/layouts/breadcrumb.tpl'}
		{foreach from=$documents key=i item=item}
		<div class="media">
		  <div class="media-left">
		    <img src="https://vcdn.tikicdn.com/cache/415x415/media/catalog/product/l/o/lop%205.u335.d20160423.t195730.jpg" class="media-object" style="width:60px">
		  </div>
		  <div class="media-body">
		    <h4 class="media-heading">{$item.classname}</h4>
		    <p>
		    	Tài liệu môn {$subject->subject} <br /> 
		    	{if empty($item.subject)}
		    	<small><a href="{base_url()}tai-lieu/{$subject->friendly}/{$item.friendly}">Xem chi tiết...</a></small>
		    	{else}
		    	<small>
		    		{foreach from=$item.subjects key=ii item=iitem}
		    		<a style="margin-right: 10px;" href="{base_url()}tai-lieu/{$subject->friendly}/{$item.friendly}/{$iitem.friendly}">{$iitem.subject}</a>
		    		{/foreach}
	    		</small>
		    	{/if}
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