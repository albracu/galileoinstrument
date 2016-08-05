<?php /* Smarty version Smarty-3.1.7, created on 2016-07-29 14:25:02
         compiled from "/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/PDFMaker/SideBar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:410411547579b673e0efb26-58548065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '484deb3e2372c74f699486d36623b972aefcd88c' => 
    array (
      0 => '/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/PDFMaker/SideBar.tpl',
      1 => 1426863274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '410411547579b673e0efb26-58548065',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_579b673e10520',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579b673e10520')) {function content_579b673e10520($_smarty_tpl) {?>
<div class="sideBarContents"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SideBarLinks.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="clearfix"></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SideBarWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>