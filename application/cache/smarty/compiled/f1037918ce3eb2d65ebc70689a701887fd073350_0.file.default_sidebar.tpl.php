<?php /* Smarty version 3.1.27, created on 2017-10-31 13:39:07
         compiled from "/var/www/html/precision/application/views/admin/layouts/default_sidebar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8657502459f81a8b10d009_81117174%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1037918ce3eb2d65ebc70689a701887fd073350' => 
    array (
      0 => '/var/www/html/precision/application/views/admin/layouts/default_sidebar.tpl',
      1 => 1506659413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8657502459f81a8b10d009_81117174',
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59f81a8b13d002_39996776',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59f81a8b13d002_39996776')) {
function content_59f81a8b13d002_39996776 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8657502459f81a8b10d009_81117174';
?>

<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <a href="/<?php echo $_smarty_tpl->tpl_vars['this']->value->session->userdata('lang_key');?>
/admin/profiles/view" style="color:#ffffff;">
            <img style="width:45px; height: 45px;" src="<?php if ($_smarty_tpl->tpl_vars['this']->value->session->userdata('user_avatar') == '') {
echo base_url();?>
media/images/160_160.png<?php } else {
echo base_url();?>
media/images/profiles/<?php echo $_smarty_tpl->tpl_vars['this']->value->session->userdata('user_avatar');
}?>" class="img-circle" alt="User Image" />
            </a>
        </div>
        <div class="pull-left info">
            <p><a href="/<?php echo $_smarty_tpl->tpl_vars['this']->value->session->userdata('lang_key');?>
/admin/profiles/view" style="color:#ffffff;"><?php echo $_smarty_tpl->tpl_vars['this']->value->session->userdata('user_fullname');?>
</a></p>
            <a href="/<?php echo $_smarty_tpl->tpl_vars['this']->value->session->userdata('lang_key');?>
/admin/profiles/view"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->session->userdata('user_menu');?>

</section>
<!-- /.sidebar -->
<?php echo '<script'; ?>
>
    /*Active menu*/
    var homeText = '<?php echo lang('home');?>
';
    var excludeList = {
        models_spec: 'models_view',
        models_edit: 'models_view',
        models_release: 'models_view',
        brands_edit: 'brands_view',
        comparisons_detail: 'comparisons_view',
        comparisons_edit: 'comparisons_view',
        skus_edit: 'skus_view',
        skus_spec: 'skus_view',
        segments_edit: 'segments_view',
        points_detail: 'points_view',
        points_edit: 'points_view',
        languages_edit: 'languages_view',
        'manage-document_detail': 'manage-document_view',
        'manage-document_edit': 'manage-document_view'
    };
    try{
        var langKey = '<?php echo $_SESSION['lang_key'];?>
';
        var currPath = window.location.pathname;
        var realTitle = '';
        currPath = currPath.replace('/elearning', '');
        currPath = currPath.replace('/'+langKey+'/admin/', '');
        currPath = currPath.replace('/admin/', '');
        currPath = currPath.replace('/', '_');
        currPath = (currPath.indexOf('/') > 0) ? currPath.substr(0, currPath.indexOf('/')) : currPath;
        console.log(currPath);
        if(excludeList.hasOwnProperty(currPath)){
            currPath = excludeList[currPath];
            realTitle = true;
        }
        var objTmp = $('.'+currPath);
        objTmp.addClass('active');
        var level = $('.'+currPath).attr('level');
        var breadcrumb = [objTmp.text()];
        if(level != '' && level != undefined && level != null && parseInt(level) > 0){
            if(objTmp.attr('level') == 1){
                breadcrumb.push(objTmp.attr('head'));
            }
            level = parseInt(level);
            for(var i=0; i<level; i++){
                objTmp = objTmp.parent().parent();
                if(objTmp.prop('nodeName') === 'LI'){
                    objTmp.addClass('active');
                    var anchorText = objTmp.find('a');
                    if(typeof anchorText === 'object'){
                        anchorText = anchorText[0];
                        breadcrumb.push($(anchorText).text());
                    }
                }
                if(objTmp.attr('level') == 1){
                    breadcrumb.push(objTmp.attr('head'));
                }
            }
        } else {
            $('.'+currPath).parent().parent().addClass('active');
        }
        $(document).ready(function() {
            try{
                if(realTitle){
                    realTitle = $('#real-title').text();
                    if(realTitle != ''){
                        breadcrumb[0] = realTitle;
                    }
                }
                var lenCrumb = breadcrumb.length;
                var bcHtml = '<li><a href="#"><i class="fa fa-home"></i> '+homeText+'</a></li>';
                for(var i=lenCrumb - 1; i >= 0; i--){
                    bcHtml += '<li>'+breadcrumb[i]+'</li>';
                }
                $('.breadcrumb').html(bcHtml);
                var iTmp = 1;
                if(lenCrumb == 2){
                    iTmp = 0;
                }
                if(typeof breadcrumb[iTmp] == 'string'){
                    document.title += ' - '+ breadcrumb[iTmp];
                }
            } catch (e){
                console.log(e.message);
            }
        });
    } catch(e){
        console.log(e.message);
    }
<?php echo '</script'; ?>
>
<?php }
}
?>