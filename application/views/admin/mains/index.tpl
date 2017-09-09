<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Dashboard
		<small>Control panel</small>
	</h1>
</section>
<!-- Morris charts -->
<link href="{base_url()}static/default/admin/template/plugins/morris/morris.css" rel="stylesheet" type="text/css" />

<!-- Main content -->
<section class="content">
	<!-- Small boxes (Stat box) -->
	<div class="row">
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-aqua">
				<div class="inner">
					<h3>{$list_social_user} </h3>
					<p>User Đăng Ký</p>
				</div>
				<div class="icon">
					<i class="fa fa-user-plus"></i>
				</div>
				<a href="{base_url()}admin/social_users/list_view" class="small-box-footer">Chi Tiết <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div><!-- ./col -->
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-green">
				<div class="inner">
					<h3>{$list_social_user_spam} </h3>
					<p>User Spam</p>
				</div>
				<div class="icon">
					<i class="fa fa-user-times"></i>
				</div>
				<a href="{base_url()}admin/social_spams/list_view" class="small-box-footer">Chi Tiết <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div><!-- ./col -->
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-yellow">
				<div class="inner">
					<h3>{$list_user_Winner} </h3>
					<p>User Winner</p>
				</div>
				<div class="icon">
					<i class="fa fa-money"></i>
				</div>
				<a href="{base_url()}admin/users_winner/list_view" class="small-box-footer">Chi Tiết <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div><!-- ./col -->
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-red">
				<div class="inner">
					<h3>65</h3>
					<p>Hình Ảnh</p>
				</div>
				<div class="icon">
					<i class="fa fa-picture-o"></i>
				</div>
				<a href="#" class="small-box-footer">Chi Tiết <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div><!-- ./col -->
	</div><!-- /.row -->
	<div class="row">
		<div class="col-xs-12 col-lg-12">
			<!-- LINE CHART -->
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">User Đăng Ký Trong 7 Ngày Qua</h3>
					<div class="box-tools pull-right">
						<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
						<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
					</div>
				</div>
				<div class="box-body chart-responsive">
					<div class="chart" id="line-chart" style="height: 300px;"></div>
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div>
	</div>
</section>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{base_url()}static/default/admin/template/plugins/morris/morris.min.js" type="text/javascript"></script>


<script type="text/javascript">
    $(document).ready(function() {
        var line = new Morris.Line({
            element: 'line-chart',
            resize: true,
            data: {$line},
            xkey: 'y',
            ykeys: ['item1'],
            labels: ['Đăng Ký'],
            lineColors: ['#3c8dbc'],
            hideHover: 'auto'
        });
    });
</script>