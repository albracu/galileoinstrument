<?php /* Smarty version Smarty-3.1.7, created on 2016-07-11 01:26:05
         compiled from "/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Users/PreferenceDetailViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2175776085782f5ad5e22e9-14637030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6278b9dd181267f87704d82ffa6c7d33dbfcd4a9' => 
    array (
      0 => '/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Users/PreferenceDetailViewPreProcess.tpl',
      1 => 1426863274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2175776085782f5ad5e22e9-14637030',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5782f5ad6242f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5782f5ad6242f')) {function content_5782f5ad6242f($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Header.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("BasicHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="bodyContents"><div class="mainContainer row-fluid"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("PreferenceDetailViewHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>