<?php /* Smarty version Smarty-3.1.7, created on 2016-07-11 01:19:55
         compiled from "/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/uitypes/StringDetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11517352105782f43baa93a0-76425889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10d50a0de8ea20fa1a3305c3cd4885bdbb952783' => 
    array (
      0 => '/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/uitypes/StringDetailView.tpl',
      1 => 1468195014,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11517352105782f43baa93a0-76425889',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'RECORD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5782f43bac21e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5782f43bac21e')) {function content_5782f43bac21e($_smarty_tpl) {?>



<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value);?>

<?php }} ?>