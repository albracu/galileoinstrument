<?php /* Smarty version Smarty-3.1.7, created on 2016-08-08 14:00:58
         compiled from "C:\wamp\www\vtigercolombia\galileoinstrument\includes\runtime/../../layouts/vlayout\modules\Assets\InformacionEquipo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2102057a877ca579921-90857270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87d8b48838dc56f5789e6bb2cc474e1da012c64a' => 
    array (
      0 => 'C:\\wamp\\www\\vtigercolombia\\galileoinstrument\\includes\\runtime/../../layouts/vlayout\\modules\\Assets\\InformacionEquipo.tpl',
      1 => 1470664847,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2102057a877ca579921-90857270',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57a877ca7ed11',
  'variables' => 
  array (
    'INFO_EQUIPOS' => 0,
    '_COUNTER' => 0,
    'equipo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a877ca7ed11')) {function content_57a877ca7ed11($_smarty_tpl) {?>
<br/>	
<table id="listEquipo" class="table table-bordered blockContainer showInlineTable equalSplit">
	<thead>
	<tr>
		<th colspan="11" class="blockHeader">
		<div style="float:left">
		Información de Equipos
		</div>
		<div style="float:right">
		<button type="button" class="btn btn-success" onclick="addNewEquipo();"><strong>Agregar</strong></button>
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
		<th nowrap="" colspan="2">
			Serial
		</th>
	</tr>
	<tr class="listViewEntries" id="entry" style="display:none">
		<td nowrap="" class="listViewEntryValue medium" >
			<input type="text"  value="" name="equipo[]">
		</td>
		<td nowrap="" class="listViewEntryValue medium">
			<input type="text"  value="" name="marca[]">
		</td>
		<td nowrap="" class="listViewEntryValue medium">
			<input type="text"  value="" name="referencia[]">
		</td>
		<td nowrap="" class="listViewEntryValue medium">
			<input type="text"  value="" name="serial[]">
		</td>
		<td nowrap="" class="listViewEntryValue medium">
		<a class="deleteRecordButton">
		<i class="icon-trash alignMiddle" title="Eliminar" onclick="deleteRow(this);"></i>
		</a>
		</td>
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
			<input type="text"  value="<?php echo $_smarty_tpl->tpl_vars['equipo']->value['equipo'];?>
" name="equipo[]">
		</td>
		<td nowrap="" class="listViewEntryValue medium">
			<input type="text"  value="<?php echo $_smarty_tpl->tpl_vars['equipo']->value['marca'];?>
" name="marca[]">
		</td>
		<td nowrap="" class="listViewEntryValue medium">
			<input type="text"  value="<?php echo $_smarty_tpl->tpl_vars['equipo']->value['referencia'];?>
" name="referencia[]">
		</td>
		<td nowrap="" class="listViewEntryValue medium">
			<input type="text"  value="<?php echo $_smarty_tpl->tpl_vars['equipo']->value['serial'];?>
" name="serial[]">
		</td>
		<td nowrap="" class="listViewEntryValue medium">
		<a class="deleteRecordButton">
		<i class="icon-trash alignMiddle" title="Eliminar" onclick="deleteRow(this);"></i>
		</a>
		</td>
	</tr>
	<?php } ?>
	<?php }else{ ?>
	<tr class="listViewEntries" id="entry1">
		<td nowrap="" class="listViewEntryValue medium" >
			<input type="text"  value="" name="equipo[]">
		</td>
		<td nowrap="" class="listViewEntryValue medium">
			<input type="text"  value="" name="marca[]">
		</td>
		<td nowrap="" class="listViewEntryValue medium">
			<input type="text"  value="" name="referencia[]">
		</td>
		<td nowrap="" class="listViewEntryValue medium">
			<input type="text"  value="" name="serial[]">
		</td>
		<td nowrap="" class="listViewEntryValue medium">
		<a class="deleteRecordButton">
		<i class="icon-trash alignMiddle" title="Eliminar" onclick="deleteRow(this);"></i>
		</a>
		</td>
	</tr>
	<?php }?>
</table>
<br/><?php }} ?>