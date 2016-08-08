{*<!--
/*********************************************************************************
  ** The contents of this file are subject to the vtiger CRM Public License Version 1.0
   * ("License"); You may not use this file except in compliance with the License
   * The Original Code is:  vtiger CRM Open Source
   * The Initial Developer of the Original Code is vtiger.
   * Portions created by vtiger are Copyright (C) vtiger.
   * All Rights Reserved.
  *
 ********************************************************************************/
-->*}
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
	{if $INFO_EQUIPOS|@count gt 0}
	{foreach item=equipo from=$INFO_EQUIPOS name="headerIterator"}
	{assign var="_COUNTER" value=$smarty.foreach.headerIterator.iteration}
	<tr class="listViewEntries" id="entry{$_COUNTER}">
		<td nowrap="" class="listViewEntryValue medium" >
			<input type="text"  value="{$equipo.equipo}" name="equipo[]">
		</td>
		<td nowrap="" class="listViewEntryValue medium">
			<input type="text"  value="{$equipo.marca}" name="marca[]">
		</td>
		<td nowrap="" class="listViewEntryValue medium">
			<input type="text"  value="{$equipo.referencia}" name="referencia[]">
		</td>
		<td nowrap="" class="listViewEntryValue medium">
			<input type="text"  value="{$equipo.serial}" name="serial[]">
		</td>
		<td nowrap="" class="listViewEntryValue medium">
		<a class="deleteRecordButton">
		<i class="icon-trash alignMiddle" title="Eliminar" onclick="deleteRow(this);"></i>
		</a>
		</td>
	</tr>
	{/foreach}
	{else}
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
	{/if}
</table>
<br/>