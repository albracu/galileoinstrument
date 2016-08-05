<?php /* Smarty version Smarty-3.1.7, created on 2016-07-14 17:56:17
         compiled from "/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/uitypes/BooleanFieldSearchView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11999921515787d241ea22b2-16183145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f280a08e3c73fe8ce363bb106a3e8b9ce183aec' => 
    array (
      0 => '/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/uitypes/BooleanFieldSearchView.tpl',
      1 => 1426863274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11999921515787d241ea22b2-16183145',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'SEARCH_INFO' => 0,
    'FIELD_INFO' => 0,
    'SEARCH_VALUES' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5787d241ec785',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5787d241ec785')) {function content_5787d241ec785($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable(Zend_Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()), null, 0);?><?php $_smarty_tpl->tpl_vars['SEARCH_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue'], null, 0);?><div class="row-fluid"><select class="select2 listSearchContributor" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
" style="width:90px;" data-fieldinfo='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
'><option value=""><?php echo vtranslate('LBL_SELECT_OPTION','Vtiger');?>
</option><option value="1" <?php if ($_smarty_tpl->tpl_vars['SEARCH_VALUES']->value==1){?> selected<?php }?>><?php echo vtranslate('LBL_YES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><option value="0" <?php if ($_smarty_tpl->tpl_vars['SEARCH_VALUES']->value=='0'){?> selected<?php }?>><?php echo vtranslate('LBL_NO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option></select></div><?php }} ?>