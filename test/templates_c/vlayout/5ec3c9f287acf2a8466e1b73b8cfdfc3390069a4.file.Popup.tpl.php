<?php /* Smarty version Smarty-3.1.7, created on 2016-07-11 16:11:20
         compiled from "/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/Popup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16833730475783c5287c3a85-93924646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ec3c9f287acf2a8466e1b73b8cfdfc3390069a4' => 
    array (
      0 => '/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/Popup.tpl',
      1 => 1468194644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16833730475783c5287c3a85-93924646',
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
  'unifunc' => 'content_5783c528809ae',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5783c528809ae')) {function content_5783c528809ae($_smarty_tpl) {?>
<div id="popupPageContainer" class="contentsDiv"><div class="paddingLeftRight10px"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('PopupSearch.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div id="popupContents" class="paddingLeftRight10px"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('PopupContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><input type="hidden" class="triggerEventName" value="<?php echo getPurifiedSmartyParameters('triggerEventName');?>
"/></div></div><?php }} ?>