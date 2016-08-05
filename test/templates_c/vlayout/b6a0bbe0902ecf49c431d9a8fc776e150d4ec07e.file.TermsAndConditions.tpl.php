<?php /* Smarty version Smarty-3.1.7, created on 2016-07-14 18:00:25
         compiled from "/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Settings/Vtiger/TermsAndConditions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6493588055787d3392a6cd5-05526052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6a0bbe0902ecf49c431d9a8fc776e150d4ec07e' => 
    array (
      0 => '/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Settings/Vtiger/TermsAndConditions.tpl',
      1 => 1426863274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6493588055787d3392a6cd5-05526052',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'CONDITION_TEXT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5787d3392d664',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5787d3392d664')) {function content_5787d3392d664($_smarty_tpl) {?>
<div class="container-fluid" id="TermsAndConditionsContainer"><div class="widget_header row-fluid"><div class="row-fluid"><h3><?php echo vtranslate('LBL_TERMS_AND_CONDITIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div></div><hr><div class="contents row-fluid"><br><textarea class="input-xxlarge TCContent textarea-autosize" rows="3" placeholder="<?php echo vtranslate('LBL_SPECIFY_TERMS_AND_CONDITIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" style="width:100%;" ><?php echo $_smarty_tpl->tpl_vars['CONDITION_TEXT']->value;?>
</textarea><div class="row-fluid textAlignCenter"><br><button class="btn btn-success saveTC hide"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div></div></div><?php }} ?>