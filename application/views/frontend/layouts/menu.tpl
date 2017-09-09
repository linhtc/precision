<nav class="nav">
	<div class="navbar-header" >
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="fa fa-bars"></span>
		</button>
		<a class="navbar-brand" href="http://giasunhanvan.vn/" title="Trang chủ">
			<i class="fa fa-home"></i>
		</a>
	</div>
	<div class="collapse navbar-collapse navbar-responsive-collapse">
		<ul class="nav navbar-nav">
			<li class="{if $uuid eq 'home'}active{/if}"><a href="{base_url()}">Trang chủ</a></li>
			<li class="{if $uuid eq 'introduction'}active{/if}"><a href="{base_url()}gioi-thieu">Giới thiệu</a></li>
			<li class="{if $uuid eq 'news'}active{/if}"><a href="{base_url()}tin-tuc">Tin tức</a></li>
			<li class="dropdown {if $uuid eq 'document'}active{/if}">
				<a href="{base_url()}tai-lieu">Tài liệu</a>
				<!-- <a href="{base_url()}tai-lieu" class="dropdown-toggle" data-toggle="dropdown">Tài liệu</a> -->
				<i class="btn-dropdown dropdown-toggle fa fa-chevron-down" data-toggle="dropdown"></i>
				<ul class="dropdown-menu fadeInUp animate1">
					{foreach from=$smarty.session.subject_menu key=ksub item=isub}
					<li class="">
						<a href="{base_url()}tai-lieu/{$isub->friendly}">Tài liệu môn {$isub->subject}</a>
					</li>
					{/foreach}
				</ul>
			</li>
			<li class="dropdown">
				<a href="{base_url()}tai-lieu">Đề thi</a>
				<i class="btn-dropdown dropdown-toggle fa fa-chevron-down" data-toggle="dropdown"></i>
				<ul class="dropdown-menu fadeInUp animate1">
					{foreach from=$smarty.session.subject_menu key=ksub item=isub}
					<li class="">
						<a href="{base_url()}tai-lieu/{$isub->friendly}">Đề thi môn {$isub->subject}</a>
					</li>
					{/foreach}
				</ul>
			</li>
			<li class="{if $uuid eq 'newclass'}active{/if}"><a href="{base_url()}lop-moi">Lớp mới</a></li>
			<li class="{if $uuid eq 'fee'}active{/if}"><a href="{base_url()}hoc-phi">Học phí</a></li>
			<li class="{if $uuid eq 'minfee'}active{/if}"><a href="{base_url()}muc-phi-nhan-lop">Mức phí nhận lớp</a></li>
			<li class="dropdown {if $uuid eq 'register'}active{/if}">
				<a class="dropdown-toggle" data-toggle="dropdown" href="{base_url()}dang-ky">Đăng ký</a>
				<i class="btn-dropdown dropdown-toggle fa fa-chevron-down" data-toggle="dropdown"></i>
				<ul class="dropdown-menu fadeInUp animate1">
					<li class="">
						<a href="{base_url()}dang-ky/lam-gia-su">Giáo viên/Sinh viên</a>
					</li>
					<li class="">
						<a href="{base_url()}dang-ky/tim-gia-su">Phụ huynh/Học sinh</a>
					</li>
				</ul>
			</li>
			<li class="{if $uuid eq 'recruit'}active{/if}"><a href="{base_url()}tuyen-dung">Tuyển dụng</a></li>
			<li class="{if $uuid eq 'contact'}active{/if}"><a href="{base_url()}lien-he">Liên hệ</a></li>
		</ul>
	</div>  
</nav>