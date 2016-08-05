<?php /* Smarty version Smarty-3.1.7, created on 2016-07-11 01:19:34
         compiled from "/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/EditViewActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15312099915782f426b77809-34723064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e0f38c16011f3009d40ed97b62e65fe7b58f09b' => 
    array (
      0 => '/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/EditViewActions.tpl',
      1 => 1426863274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15312099915782f426b77809-34723064',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5782f426b8b89',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5782f426b8b89')) {function content_5782f426b8b89($_smarty_tpl) {?>

<div class="row-fluid"><div class="pull-right"><button class="btn btn-success" type="submit"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><a class="cancelLink" type="reset" onclick="javascript:window.history.back();"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><div class="clearfix"></div></div><br></form></div><?php }} ?>