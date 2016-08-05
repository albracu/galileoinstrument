<?php /* Smarty version Smarty-3.1.7, created on 2016-07-11 01:19:30
         compiled from "/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/ListViewSidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2443136025782f4228529a5-31743362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f01f8b1f1e98c950821b9228dcd3617e7def36ed' => 
    array (
      0 => '/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/ListViewSidebar.tpl',
      1 => 1426863274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2443136025782f4228529a5-31743362',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5782f422859ab',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5782f422859ab')) {function content_5782f422859ab($_smarty_tpl) {?>
<div class="row-fluid"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SideBar.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>