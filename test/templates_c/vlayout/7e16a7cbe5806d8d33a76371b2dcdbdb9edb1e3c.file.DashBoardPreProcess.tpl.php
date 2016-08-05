<?php /* Smarty version Smarty-3.1.7, created on 2016-07-11 00:23:19
         compiled from "/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Home/dashboards/DashBoardPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14977073325782e6f7b41722-11691828%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e16a7cbe5806d8d33a76371b2dcdbdb9edb1e3c' => 
    array (
      0 => '/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Home/dashboards/DashBoardPreProcess.tpl',
      1 => 1426863274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14977073325782e6f7b41722-11691828',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5782e6f7b633b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5782e6f7b633b')) {function content_5782e6f7b633b($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Header.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("BasicHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="bodyContents"><div class="mainContainer row-fluid"><div class="contentsDiv span12 marginLeftZero dashboardContainer"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/DashBoardHeader.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('DASHBOARDHEADER_TITLE'=>vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value)), 0);?>
<?php }} ?>