<?php /* Smarty version Smarty-3.1.7, created on 2016-07-11 00:23:19
         compiled from "/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/BasicHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4797189255782e6f7b6a638-78925088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c84c70732e9489b3508bfc8b19d3d355c1c4c84' => 
    array (
      0 => '/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/BasicHeader.tpl',
      1 => 1426863274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4797189255782e6f7b6a638-78925088',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5782e6f7b72df',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5782e6f7b72df')) {function content_5782e6f7b72df($_smarty_tpl) {?>
<div class="navbar navbar-fixed-top  navbar-inverse noprint"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('MenuBar.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('CommonActions.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>