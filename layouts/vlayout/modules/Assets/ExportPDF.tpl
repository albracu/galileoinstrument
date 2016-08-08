<table class="table table-bordered equalSplit detailview-table" style="width:100%">
	<thead>
		<tr>
			<th class="blockHeader" colspan="4">
				Detalles de Equipo
			</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_account">
				<label class="muted pull-right marginRight10px">Cliente</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_account">
				<span class="value" data-field-type="reference">
				{$ACCOUNTMODEL->get('accountname')}
				</span>
			</td>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_contact">
				<label class="muted pull-right marginRight10px">Nombre de contacto</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_contact">
				<span class="value" data-field-type="reference">
				{$CONTACTMODEL->get('first_name')} {$CONTACTMODEL->get('last_name')}
				</span>
			</td>
		</tr>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_dateinservice">
				<label class="muted pull-right marginRight10px">Fecha de Ingreso</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_dateinservice">
			<span class="value" data-field-type="date">
				{$RECORD->get('dateinservice')}
			</span>
			</td>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_datesold">
				<label class="muted pull-right marginRight10px">Fecha de Salida</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_datesold">
				<span class="value" data-field-type="date">
				{$RECORD->get('datesold')}
				</span>
			</td>
		</tr>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_assetstatus">
				<label class="muted pull-right marginRight10px">Estado</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_assetstatus">
				<span class="value" data-field-type="picklist">
				{vtranslate({$RECORD->get('assetstatus')},{$MODULE_NAME})}
				</span>
			</td>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_791">
				<label class="muted pull-right marginRight10px">Motivo de Ingreso</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_791">
				<span class="value" data-field-type="picklist">
				{vtranslate({$RECORD->get('cf_791')},{$MODULE_NAME})}
				</span>
			</td>
		</tr>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_789">
				<label class="muted pull-right marginRight10px">Retirado</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_789">
				<span class="value" data-field-type="boolean">
				{if $RECORD->get('cf_789') eq '1'}Si{else}No{/if}
				</span>
			</td>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_asset_no">
				<label class="muted pull-right marginRight10px">Remision Número</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_asset_no">
				<span class="value" data-field-type="string">
				{$RECORD->get('asset_no')}
				</span>
			</td>
		</tr>
	</tbody>
</table>

{include file="DetailInformacionEquipo.tpl"|@vtemplate_path:'Assets'}
		
<table class="table table-bordered equalSplit detailview-table" style="width:100%">
	<thead>
		<tr>
			<th class="blockHeader" colspan="4">
				Cantidad Accesorios
			</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_793">
				<label class="muted pull-right marginRight10px">Caja de transporte </label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_793">
				<span class="value" data-field-type="integer">
					{$RECORD->get('cf_793')}
				</span>
			</td>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_853">
				<label class="muted pull-right marginRight10px">Paño de limpieza</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_853">
				<span class="value" data-field-type="integer">
				{$RECORD->get('cf_853')}
				</span>
			</td>
		</tr>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_797">
				<label class="muted pull-right marginRight10px">Cable de descarga </label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_797">
				<span class="value" data-field-type="integer">
					{$RECORD->get('cf_797')}
				</span>
			</td>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_799">
				<label class="muted pull-right marginRight10px">Cable de alimentación</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_799">
				<span class="value" data-field-type="integer">
				{$RECORD->get('cf_799')}
				</span>
			</td>
		</tr>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_801">
				<label class="muted pull-right marginRight10px">Cable de comunicación</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_801">
				<span class="value" data-field-type="integer">
					{$RECORD->get('cf_801')}
				</span>
			</td>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_803">
				<label class="muted pull-right marginRight10px">Cable de radio modem</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_803">
				<span class="value" data-field-type="integer">
				{$RECORD->get('cf_803')}
				</span>
			</td>
		</tr>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_805">
				<label class="muted pull-right marginRight10px">Batería</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_805">
				<span class="value" data-field-type="integer">
					{$RECORD->get('cf_805')}
				</span>
			</td>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_807">
				<label class="muted pull-right marginRight10px">Cargador</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_807">
				<span class="value" data-field-type="integer">
				{$RECORD->get('cf_807')}
				</span>
			</td>
		</tr>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_811">
				<label class="muted pull-right marginRight10px">Herramientas</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_811">
				<span class="value" data-field-type="integer">
					{$RECORD->get('cf_811')}
				</span>
			</td>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_813">
				<label class="muted pull-right marginRight10px">Parasol lente</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_813">
				<span class="value" data-field-type="integer">
				{$RECORD->get('cf_813')}
				</span>
			</td>
		</tr>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_815">
				<label class="muted pull-right marginRight10px">Tapalente</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_815">
				<span class="value" data-field-type="integer">
					{$RECORD->get('cf_815')}
				</span>
			</td>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_817">
				<label class="muted pull-right marginRight10px">Maletín</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_817">
				<span class="value" data-field-type="integer">
				{$RECORD->get('cf_817')}
				</span>
			</td>
		</tr>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_819">
				<label class="muted pull-right marginRight10px">Mini plomada</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_819">
				<span class="value" data-field-type="integer">
					{$RECORD->get('cf_819')}
				</span>
			</td>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_821">
				<label class="muted pull-right marginRight10px">Impermeable</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_821">
				<span class="value" data-field-type="integer">
				{$RECORD->get('cf_821')}
				</span>
			</td>
		</tr>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_823">
				<label class="muted pull-right marginRight10px">Colectora</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_823">
				<span class="value" data-field-type="integer">
					{$RECORD->get('cf_823')}
				</span>
			</td>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_825">
				<label class="muted pull-right marginRight10px">Antena/radio</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_825">
				<span class="value" data-field-type="integer">
				{$RECORD->get('cf_825')}
				</span>
			</td>
		</tr>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_827">
				<label class="muted pull-right marginRight10px">Cabezotes</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_827">
				<span class="value" data-field-type="integer">
					{$RECORD->get('cf_827')}
				</span>
			</td>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_831">
				<label class="muted pull-right marginRight10px">Adaptador</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_831">
				<span class="value" data-field-type="integer">
				{$RECORD->get('cf_831')}
				</span>
			</td>
		</tr>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_833">
				<label class="muted pull-right marginRight10px">Base nivelante</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_833">
				<span class="value" data-field-type="integer">
					{$RECORD->get('cf_833')}
				</span>
			</td>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_835">
				<label class="muted pull-right marginRight10px">Braquet</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_835">
				<span class="value" data-field-type="integer">
				{$RECORD->get('cf_835')}
				</span>
			</td>
		</tr>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_837">
				<label class="muted pull-right marginRight10px">Lapicero táctil</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_837">
				<span class="value" data-field-type="integer">
					{$RECORD->get('cf_837')}
				</span>
			</td>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_839">
				<label class="muted pull-right marginRight10px">Batería colectora</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_839">
				<span class="value" data-field-type="integer">
				{$RECORD->get('cf_839')}
				</span>
			</td>
		</tr>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_841">
				<label class="muted pull-right marginRight10px">Batería cabezote</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_841">
				<span class="value" data-field-type="integer">
					{$RECORD->get('cf_841')}
				</span>
			</td>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_843">
				<label class="muted pull-right marginRight10px">Extensores</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_843">
				<span class="value" data-field-type="integer">
				{$RECORD->get('cf_843')}
				</span>
			</td>
		</tr>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_845">
				<label class="muted pull-right marginRight10px">Radio modem externo</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_845">
				<span class="value" data-field-type="integer">
					{$RECORD->get('cf_845')}
				</span>
			</td>
			
		</tr>
	</tbody>
</table>	
<br/>	
<table class="table table-bordered equalSplit detailview-table" style="width:100%">
	<thead>
		<tr>
			<th class="blockHeader" colspan="4">Descripción</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_847">
				<label class="muted pull-right marginRight10px">Entregado por</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_847">
				<span class="value" data-field-type="string">
					{vtranslate({$RECORD->get('cf_847')},{$MODULE_NAME})}
				</span>
			</td>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_851">
				<label class="muted pull-right marginRight10px">Celular</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_851">
				<span class="value" data-field-type="phone">
					{$RECORD->get('cf_851')}
				</span>
			</td>
		</tr>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_849">
				<label class="muted pull-right marginRight10px">Telefono</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_849">
			<span class="value" data-field-type="phone">
				{$RECORD->get('cf_849')}
			</span>
			</td>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_assigned_user_id">
				<label class="muted pull-right marginRight10px">Asignado a</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_assigned_user_id">
				<span class="value" data-field-type="owner">
					{$USERMODEL->get('first_name')} {$USERMODEL->get('last_name')}
				</span>
			</td>
		</tr>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_description" style="width:25%">
				<label class="muted pull-right marginRight10px">Observaciones</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_description" colspan="3">
			<span class="value" data-field-type="text" style="white-space:normal;">
				{$RECORD->get('description')}
			</span>
			</td>
		</tr>
	</tbody>
</table>
<br/>
<table class="table table-bordered equalSplit detailview-table" style="width:100%">
	<thead>
		<tr>
			<th class="blockHeader" colspan="4">
				Producto
			</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_product">
				<label class="muted pull-right marginRight10px">Nombre Producto</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_product">
				<span class="value" data-field-type="reference">
				{$PRODUCTMODEL->get('productname')}
				</span>
			</td>
		</tr>
	</tbody>
</table>