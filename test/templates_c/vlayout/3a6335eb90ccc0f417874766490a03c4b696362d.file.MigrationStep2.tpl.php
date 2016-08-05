<?php /* Smarty version Smarty-3.1.7, created on 2016-07-11 00:16:42
         compiled from "/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Migration/MigrationStep2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10575655945782e56a9b7167-70646922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a6335eb90ccc0f417874766490a03c4b696362d' => 
    array (
      0 => '/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Migration/MigrationStep2.tpl',
      1 => 1468195014,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10575655945782e56a9b7167-70646922',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5782e56aa2899',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5782e56aa2899')) {function content_5782e56aa2899($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Header.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="container-fluid page-container"><div class="row-fluid"><div class="span6"><div class="logo"><img src="<?php echo vimage_path('vt1.png');?>
" alt="Vtiger Logo"/></div></div><div class="span6"><div class="head pull-right"><h3> <?php echo vtranslate('LBL_MIGRATION_WIZARD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3></div></div></div><div class="row-fluid main-container"><div class="span12 inner-container"><div class="row-fluid"><div class="span10"><h4> <?php echo vtranslate('LBL_MIGRATION_COMPLETED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 </h4></div></div><hr><div class="row-fluid"><div class="span4 welcome-image"><img src="<?php echo vimage_path('migration_screen.png');?>
" alt="Vtiger Logo"/></div><div class="span1"></div><div class="span6"><br><br><h5><?php echo vtranslate('LBL_MIGRATION_COMPLETED_SUCCESSFULLY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
  </h5><br><br><?php echo vtranslate('LBL_RELEASE_NOTES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<br><?php echo vtranslate('LBL_CRM_DOCUMENTATION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<br><?php echo vtranslate('LBL_TALK_TO_US_AT_FORUMS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<br><?php echo vtranslate('LBL_DISCUSS_WITH_US_AT_BLOGS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<br><br>Connect with us &nbsp;&nbsp;<a href="https://www.facebook.com/vtiger" target="_blank"><img src="<?php echo vimage_path('facebook.png');?>
"></a>&nbsp;&nbsp;<a href="https://twitter.com/vtigercrm" target="_blank"><img src="<?php echo vimage_path('twitter.png');?>
"></a>&nbsp;&nbsp;<a href="//www.vtiger.com/products/crm/privacy_policy.html" target="_blank"><img src="<?php echo vimage_path('linkedin.png');?>
"></a><br><br><div class="button-container"><input type="button" onclick="window.location.href='index.php'" class="btn btn-large btn-primary" value="<?php echo vtranslate('Finish',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"/></div></div></div></div></div></div></div><?php }} ?>