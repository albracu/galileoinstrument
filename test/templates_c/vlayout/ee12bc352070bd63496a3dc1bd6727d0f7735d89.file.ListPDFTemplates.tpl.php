<?php /* Smarty version Smarty-3.1.7, created on 2016-07-29 14:25:02
         compiled from "/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/PDFMaker/ListPDFTemplates.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1314631084579b673e1ed9c9-41468595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee12bc352070bd63496a3dc1bd6727d0f7735d89' => 
    array (
      0 => '/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/PDFMaker/ListPDFTemplates.tpl',
      1 => 1426863274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1314631084579b673e1ed9c9-41468595',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_579b673e1f95a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579b673e1f95a')) {function content_579b673e1f95a($_smarty_tpl) {?>
<script type="text/javascript" src="layouts/vlayout/modules/PDFMaker/resources/PDFMakerActions.js"></script><script type="text/javascript" src="layouts/vlayout/modules/PDFMaker/resources/PDFMaker.js"></script><div class="contentsDiv marginLeftZero"><div class="listViewPageDiv"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ListPDFHeader.tpl','PDFMaker'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="listViewContentDiv" id="listViewContents"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ListPDFTemplatesContents.tpl','PDFMaker'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div></div><?php }} ?>