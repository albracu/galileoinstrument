<?php /* Smarty version Smarty-3.1.7, created on 2016-07-11 01:19:55
         compiled from "/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/DetailViewPostProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10633919935782f43bc93c31-92841637%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '221869930e9f4965ac56ef3ae2594794c8c0609e' => 
    array (
      0 => '/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/DetailViewPostProcess.tpl',
      1 => 1426863274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10633919935782f43bc93c31-92841637',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_MODEL' => 0,
    'DETAILVIEW_LINKS' => 0,
    'RELATED_LINK' => 0,
    'SELECTED_TAB_LABEL' => 0,
    'MODULE_NAME' => 0,
    'DETAILVIEWRELATEDLINKLBL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5782f43bd357a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5782f43bd357a')) {function content_5782f43bd357a($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["MODULE_NAME"] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'), null, 0);?></div></form></div><div class="related span2 marginLeftZero"><div class=""><ul class="nav nav-stacked nav-pills"><?php  $_smarty_tpl->tpl_vars['RELATED_LINK'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RELATED_LINK']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEWTAB']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RELATED_LINK']->key => $_smarty_tpl->tpl_vars['RELATED_LINK']->value){
$_smarty_tpl->tpl_vars['RELATED_LINK']->_loop = true;
?><li class="<?php if ($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel()==$_smarty_tpl->tpl_vars['SELECTED_TAB_LABEL']->value){?>active<?php }?>" data-url="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl();?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
" data-label-key="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
" data-link-key="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('linkKey');?>
" ><a href="javascript:void(0);" class="textOverflowEllipsis" style="width:auto" title="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo vtranslate($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel(),$_tmp1);?>
"><strong><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo vtranslate($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel(),$_tmp2);?>
</strong></a></li><?php } ?><?php  $_smarty_tpl->tpl_vars['RELATED_LINK'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RELATED_LINK']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEWRELATED']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RELATED_LINK']->key => $_smarty_tpl->tpl_vars['RELATED_LINK']->value){
$_smarty_tpl->tpl_vars['RELATED_LINK']->_loop = true;
?><li class="<?php if ($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel()==$_smarty_tpl->tpl_vars['SELECTED_TAB_LABEL']->value){?>active<?php }?>" data-url="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl();?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
" data-label-key="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
" ><?php $_smarty_tpl->tpl_vars["DETAILVIEWRELATEDLINKLBL"] = new Smarty_variable(vtranslate($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['RELATED_LINK']->value->getRelatedModuleName()), null, 0);?><a href="javascript:void(0);" class="textOverflowEllipsis" style="width:auto" title="<?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
"><strong><?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
</strong></a></li><?php } ?></ul></div></div></div></div></div></div></div><?php }} ?>