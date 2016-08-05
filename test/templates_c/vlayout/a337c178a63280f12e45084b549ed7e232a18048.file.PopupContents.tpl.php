<?php /* Smarty version Smarty-3.1.7, created on 2016-07-11 16:11:20
         compiled from "/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Inventory/PopupContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11287919455783c528980e99-18496553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a337c178a63280f12e45084b549ed7e232a18048' => 
    array (
      0 => '/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Inventory/PopupContents.tpl',
      1 => 1426863274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11287919455783c528980e99-18496553',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5783c52898b7f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5783c52898b7f')) {function content_5783c52898b7f($_smarty_tpl) {?>
<div id='popupContentsDiv'><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("PopupEntries.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
<?php }} ?>