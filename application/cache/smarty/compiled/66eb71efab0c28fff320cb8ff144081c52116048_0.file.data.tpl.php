<?php /* Smarty version 3.1.27, created on 2017-10-31 13:39:07
         compiled from "/var/www/html/precision/application/views/admin/photo/data.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:126188244859f81a8ba1fa96_26669021%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66eb71efab0c28fff320cb8ff144081c52116048' => 
    array (
      0 => '/var/www/html/precision/application/views/admin/photo/data.tpl',
      1 => 1506583124,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126188244859f81a8ba1fa96_26669021',
  'variables' => 
  array (
    'list' => 0,
    'item' => 0,
    'permission' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59f81a8ba71b03_46137906',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59f81a8ba71b03_46137906')) {
function content_59f81a8ba71b03_46137906 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '126188244859f81a8ba1fa96_26669021';
if (!empty($_smarty_tpl->tpl_vars['list']->value)) {?>
    <?php
$_from = $_smarty_tpl->tpl_vars['list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['modified'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['p'];?>
</td>
            <td style="max-width: 250px; overflow: hidden;"><?php echo $_smarty_tpl->tpl_vars['item']->value['c1'];?>
</td>
            <td style="max-width: 250px; overflow: hidden;"><?php echo $_smarty_tpl->tpl_vars['item']->value['c2'];?>
</td>
            <td>
                <?php if ((!empty($_smarty_tpl->tpl_vars['permission']->value['edit'])) || $_smarty_tpl->tpl_vars['permission']->value == 1) {?>
                    <a href="edit/<?php echo $_smarty_tpl->tpl_vars['this']->value->mask($_smarty_tpl->tpl_vars['item']->value['id']);?>
" class="label label-info" style="cursor: pointer;"><?php echo lang('edit');?>
</a>
                <?php }?>
                <?php if ((!empty($_smarty_tpl->tpl_vars['permission']->value['delete'])) || $_smarty_tpl->tpl_vars['permission']->value == 1) {?>
                    <a info-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" info-action="delete" class="label label-danger a-confirmation" data-toggle="confirmation" style="cursor: pointer;"><?php echo lang('delete');?>
</a>
                <?php }?>
            </td>
        </tr>
    <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
<?php }
}
}
?>