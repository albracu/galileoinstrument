<?php /* Smarty version Smarty-3.1.7, created on 2016-07-14 18:00:31
         compiled from "/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Settings/Vtiger/Announcement.tpl" */ ?>
<?php /*%%SmartyHeaderCode:834349865787d33fa134b6-85101242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '949d29869191e2513996275c9b3a9256949451c8' => 
    array (
      0 => '/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Settings/Vtiger/Announcement.tpl',
      1 => 1426863274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '834349865787d33fa134b6-85101242',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'ANNOUNCEMENT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5787d33fa2b72',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5787d33fa2b72')) {function content_5787d33fa2b72($_smarty_tpl) {?>
<div class="container-fluid" id="AnnouncementContainer"><div class="widget_header row-fluid"><div class="row-fluid"><h3><?php echo vtranslate('LBL_ANNOUNCEMENTS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div></div><hr><div class="contents row-fluid"><textarea class="announcementContent textarea-autosize boxSizingBorderBox" rows="3" placeholder="<?php echo vtranslate('LBL_ENTER_ANNOUNCEMENT_HERE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" style="width:100%"><?php echo $_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->get('announcement');?>
</textarea><div class="row-fluid textAlignCenter"><br><button class="btn btn-success saveAnnouncement hide"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div></div></div><?php }} ?>