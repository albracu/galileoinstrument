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
	{if $INFO_EQUIPOS|@count gt 0}
	{foreach item=equipo from=$INFO_EQUIPOS name="headerIterator"}
	{assign var="_COUNTER" value=$smarty.foreach.headerIterator.iteration}
	<tr class="listViewEntries" id="entry{$_COUNTER}">
		<td nowrap="" class="listViewEntryValue medium" >
			{$equipo.equipo}
		</td>
		<td nowrap="" class="listViewEntryValue medium">
			{$equipo.marca}
		</td>
		<td nowrap="" class="listViewEntryValue medium">
			{$equipo.referencia}
		</td>
		<td nowrap="" class="listViewEntryValue medium">
			{$equipo.serial}
		</td>
	</tr>
	{/foreach}
	{/if}
</table>
<br/>