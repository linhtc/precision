<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Tài khoản
        <small>Danh sách tài khoản</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 500CMS</a></li>
        <li class="active">Tài khoản</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Danh sách tài khoản</h3>
                </div>

                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>Ngày tạo</th>
                                <th>Tên nhóm</th>
                                <th>Tình trạng</th>
                                <th>Tùy chọn</th>
                            </tr>
                            {foreach from=$list key=i item=item}
                                <tr>
                                    <td>{$i + 1}</td>
                                    <td>{$item.id}</td>
                                    <td>{$item.created}</td>
                                    <td><b>{$item.group_name}</b></td>
                                    <td>
										{if $item.locked == 0}
										<span class="label label-success">Đang hoạt động</span>
										{/if}
										{if $item.locked == 1}
										<span class="label label-danger">Bị khóa</span>
										{/if}
									</td>
                                    <td class="/* text-center */">
                                        <div class="btn-group">
											{if not empty($permission['edit']) or $permission eq 1}
                                            <a href="{base_url()}admin/groups/edit/{$item.id}">
                                                <button class="btn btn-info btn-xs" type="button" >Sửa</button>
                                            </a>
											{/if}
											{if not empty($permission['permission']) or $permission eq 1}
                                            <a href="{base_url()}admin/groups/change_permission/{$item.id}">
                                                <button class="btn btn-info btn-xs" type="button" >Phân quyền</button>
                                            </a>
											{/if}
											{if not empty($permission['change_status']) or $permission eq 1}
                                            <a href="{base_url()}admin/groups/change_status/{$item.id}/{$item.locked}">
                                                <button class="btn btn-info btn-xs" type="button" >Đổi trạng thái</button>
                                            </a>
											{/if}
                                        </div>
                                    </td>
                                </tr>
                            {/foreach}    
                        </tbody>
                    </table>
                </div>

                <div class="box-footer clearfix">
                </div>
            </div>
        </div>
    </div>
</section>