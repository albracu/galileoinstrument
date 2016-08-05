<?php /* Smarty version Smarty-3.1.7, created on 2016-07-13 15:27:01
         compiled from "/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/EmailTemplates/DetailViewHeaderTitle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184181383157865dc5de4468-79902621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4c866ed26e68fc3573d3af3377d537b17860cb0' => 
    array (
      0 => '/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/EmailTemplates/DetailViewHeaderTitle.tpl',
      1 => 1426863274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184181383157865dc5de4468-79902621',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57865dc5e09d1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57865dc5e09d1')) {function content_57865dc5e09d1($_smarty_tpl) {?>
<span class="span10 margin0px"><span class="row-fluid"><span class="recordLabel font-x-x-large textOverflowEllipsis span pushDown" title="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
"><span class="templatename"><?php echo decode_html($_smarty_tpl->tpl_vars['RECORD']->value->get('templatename'));?>
</span>&nbsp;</span></span></span><?php }} ?>