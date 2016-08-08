<?php /* Smarty version Smarty-3.1.7, created on 2016-08-08 15:13:04
         compiled from "C:\wamp\www\vtigercolombia\galileoinstrument\includes\runtime/../../layouts/vlayout\modules\Assets\DetailInformacionEquipo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1007557a8876b98eb03-10926836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61dd03fb48b0b0e4577485bfa0decf626ad999fa' => 
    array (
      0 => 'C:\\wamp\\www\\vtigercolombia\\galileoinstrument\\includes\\runtime/../../layouts/vlayout\\modules\\Assets\\DetailInformacionEquipo.tpl',
      1 => 1470668890,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1007557a8876b98eb03-10926836',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57a8876bc5b72',
  'variables' => 
  array (
    'INFO_EQUIPOS' => 0,
    '_COUNTER' => 0,
    'equipo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a8876bc5b72')) {function content_57a8876bc5b72($_smarty_tpl) {?>
<br/>	
<table id="listEquipo" class="table table-bordered blockContainer showInlineTable equalSplit" style="width:100%">
	<thead>
	<tr>
		<th colspan="11" class="blockHeader">
		<div style="float:left">
		Información de Equipos
		</div>
		</th>
	</tr>
	</thead>
	<tr class="listViewHeaders">
		<th nowrap="">
			Equipo
		</th>
		<th nowrap="">
			Marca
		</th>
		<th nowrap="">
			Referencia
		</th>
		<th nowrap="">
			Serial
		</th>
	</tr>
	<?php if (count($_smarty_tpl->tpl_vars['INFO_EQUIPOS']->value)>0){?>
	<?php  $_smarty_tpl->tpl_vars['equipo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['equipo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['INFO_EQUIPOS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["headerIterator"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['equipo']->key => $_smarty_tpl->tpl_vars['equipo']->value){
$_smarty_tpl->tpl_vars['equipo']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["headerIterator"]['iteration']++;
?>
	<?php $_smarty_tpl->tpl_vars["_COUNTER"] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['foreach']['headerIterator']['iteration'], null, 0);?>
	<tr class="listViewEntries" id="entry<?php echo $_smarty_tpl->tpl_vars['_COUNTER']->value;?>
">
		<td nowrap="" class="listViewEntryValue medium" >
			<?php echo $_smarty_tpl->tpl_vars['equipo']->value['equipo'];?>

		</td>
		<td nowrap="" class="listViewEntryValue medium">
			<?php echo $_smarty_tpl->tpl_vars['equipo']->value['marca'];?>

		</td>
		<td nowrap="" class="listViewEntryValue medium">
			<?php echo $_smarty_tpl->tpl_vars['equipo']->value['referencia'];?>

		</td>
		<td nowrap="" class="listViewEntryValue medium">
			<?php echo $_smarty_tpl->tpl_vars['equipo']->value['serial'];?>

		</td>
	</tr>
	<?php } ?>
	<?php }?>
</table>
<br/><?php }} ?>