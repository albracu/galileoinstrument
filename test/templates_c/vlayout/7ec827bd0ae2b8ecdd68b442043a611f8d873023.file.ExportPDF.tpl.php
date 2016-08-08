<?php /* Smarty version Smarty-3.1.7, created on 2016-08-08 15:45:53
         compiled from "C:\wamp\www\vtigercolombia\galileoinstrument\includes\runtime/../../layouts/vlayout\modules\Assets\ExportPDF.tpl" */ ?>
<?php /*%%SmartyHeaderCode:443857a895cac06ac9-19365180%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ec827bd0ae2b8ecdd68b442043a611f8d873023' => 
    array (
      0 => 'C:\\wamp\\www\\vtigercolombia\\galileoinstrument\\includes\\runtime/../../layouts/vlayout\\modules\\Assets\\ExportPDF.tpl',
      1 => 1470670836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '443857a895cac06ac9-19365180',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57a895caced2c',
  'variables' => 
  array (
    'ACCOUNTMODEL' => 0,
    'CONTACTMODEL' => 0,
    'RECORD' => 0,
    'MODULE_NAME' => 0,
    'USERMODEL' => 0,
    'PRODUCTMODEL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a895caced2c')) {function content_57a895caced2c($_smarty_tpl) {?><table class="table table-bordered equalSplit detailview-table" style="width:100%">
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
				<?php echo $_smarty_tpl->tpl_vars['ACCOUNTMODEL']->value->get('accountname');?>

				</span>
			</td>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_contact">
				<label class="muted pull-right marginRight10px">Nombre de contacto</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_contact">
				<span class="value" data-field-type="reference">
				<?php echo $_smarty_tpl->tpl_vars['CONTACTMODEL']->value->get('first_name');?>
 <?php echo $_smarty_tpl->tpl_vars['CONTACTMODEL']->value->get('last_name');?>

				</span>
			</td>
		</tr>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_dateinservice">
				<label class="muted pull-right marginRight10px">Fecha de Ingreso</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_dateinservice">
			<span class="value" data-field-type="date">
				<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('dateinservice');?>

			</span>
			</td>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_datesold">
				<label class="muted pull-right marginRight10px">Fecha de Salida</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_datesold">
				<span class="value" data-field-type="date">
				<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('datesold');?>

				</span>
			</td>
		</tr>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_assetstatus">
				<label class="muted pull-right marginRight10px">Estado</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_assetstatus">
				<span class="value" data-field-type="picklist">
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('assetstatus');?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo vtranslate($_tmp1,$_tmp2);?>

				</span>
			</td>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_791">
				<label class="muted pull-right marginRight10px">Motivo de Ingreso</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_791">
				<span class="value" data-field-type="picklist">
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('cf_791');?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
<?php $_tmp4=ob_get_clean();?><?php echo vtranslate($_tmp3,$_tmp4);?>

				</span>
			</td>
		</tr>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_789">
				<label class="muted pull-right marginRight10px">Retirado</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_789">
				<span class="value" data-field-type="boolean">
				<?php if ($_smarty_tpl->tpl_vars['RECORD']->value->get('cf_789')=='1'){?>Si<?php }else{ ?>No<?php }?>
				</span>
			</td>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_asset_no">
				<label class="muted pull-right marginRight10px">Remision Número</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_asset_no">
				<span class="value" data-field-type="string">
				<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('asset_no');?>

				</span>
			</td>
		</tr>
	</tbody>
</table>

<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("DetailInformacionEquipo.tpl",'Assets'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
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
					<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('cf_793');?>

				</span>
			</td>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_853">
				<label class="muted pull-right marginRight10px">Paño de limpieza</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_853">
				<span class="value" data-field-type="integer">
				<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('cf_853');?>

				</span>
			</td>
		</tr>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_797">
				<label class="muted pull-right marginRight10px">Cable de descarga </label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_797">
				<span class="value" data-field-type="integer">
					<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('cf_797');?>

				</span>
			</td>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_799">
				<label class="muted pull-right marginRight10px">Cable de alimentación</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_799">
				<span class="value" data-field-type="integer">
				<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('cf_799');?>

				</span>
			</td>
		</tr>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_801">
				<label class="muted pull-right marginRight10px">Cable de comunicación</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_801">
				<span class="value" data-field-type="integer">
					<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('cf_801');?>

				</span>
			</td>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_803">
				<label class="muted pull-right marginRight10px">Cable de radio modem</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_803">
				<span class="value" data-field-type="integer">
				<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('cf_803');?>

				</span>
			</td>
		</tr>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_805">
				<label class="muted pull-right marginRight10px">Batería</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_805">
				<span class="value" data-field-type="integer">
					<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('cf_805');?>

				</span>
			</td>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_807">
				<label class="muted pull-right marginRight10px">Cargador</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_807">
				<span class="value" data-field-type="integer">
				<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('cf_807');?>

				</span>
			</td>
		</tr>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_811">
				<label class="muted pull-right marginRight10px">Herramientas</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_811">
				<span class="value" data-field-type="integer">
					<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('cf_811');?>

				</span>
			</td>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_813">
				<label class="muted pull-right marginRight10px">Parasol lente</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_813">
				<span class="value" data-field-type="integer">
				<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('cf_813');?>

				</span>
			</td>
		</tr>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_815">
				<label class="muted pull-right marginRight10px">Tapalente</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_815">
				<span class="value" data-field-type="integer">
					<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('cf_815');?>

				</span>
			</td>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_817">
				<label class="muted pull-right marginRight10px">Maletín</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_817">
				<span class="value" data-field-type="integer">
				<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('cf_817');?>

				</span>
			</td>
		</tr>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_819">
				<label class="muted pull-right marginRight10px">Mini plomada</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_819">
				<span class="value" data-field-type="integer">
					<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('cf_819');?>

				</span>
			</td>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_821">
				<label class="muted pull-right marginRight10px">Impermeable</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_821">
				<span class="value" data-field-type="integer">
				<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('cf_821');?>

				</span>
			</td>
		</tr>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_823">
				<label class="muted pull-right marginRight10px">Colectora</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_823">
				<span class="value" data-field-type="integer">
					<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('cf_823');?>

				</span>
			</td>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_825">
				<label class="muted pull-right marginRight10px">Antena/radio</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_825">
				<span class="value" data-field-type="integer">
				<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('cf_825');?>

				</span>
			</td>
		</tr>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_827">
				<label class="muted pull-right marginRight10px">Cabezotes</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_827">
				<span class="value" data-field-type="integer">
					<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('cf_827');?>

				</span>
			</td>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_831">
				<label class="muted pull-right marginRight10px">Adaptador</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_831">
				<span class="value" data-field-type="integer">
				<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('cf_831');?>

				</span>
			</td>
		</tr>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_833">
				<label class="muted pull-right marginRight10px">Base nivelante</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_833">
				<span class="value" data-field-type="integer">
					<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('cf_833');?>

				</span>
			</td>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_835">
				<label class="muted pull-right marginRight10px">Braquet</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_835">
				<span class="value" data-field-type="integer">
				<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('cf_835');?>

				</span>
			</td>
		</tr>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_837">
				<label class="muted pull-right marginRight10px">Lapicero táctil</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_837">
				<span class="value" data-field-type="integer">
					<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('cf_837');?>

				</span>
			</td>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_839">
				<label class="muted pull-right marginRight10px">Batería colectora</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_839">
				<span class="value" data-field-type="integer">
				<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('cf_839');?>

				</span>
			</td>
		</tr>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_841">
				<label class="muted pull-right marginRight10px">Batería cabezote</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_841">
				<span class="value" data-field-type="integer">
					<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('cf_841');?>

				</span>
			</td>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_843">
				<label class="muted pull-right marginRight10px">Extensores</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_843">
				<span class="value" data-field-type="integer">
				<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('cf_843');?>

				</span>
			</td>
		</tr>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_845">
				<label class="muted pull-right marginRight10px">Radio modem externo</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_845">
				<span class="value" data-field-type="integer">
					<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('cf_845');?>

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
					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('cf_847');?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
<?php $_tmp6=ob_get_clean();?><?php echo vtranslate($_tmp5,$_tmp6);?>

				</span>
			</td>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_851">
				<label class="muted pull-right marginRight10px">Celular</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_851">
				<span class="value" data-field-type="phone">
					<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('cf_851');?>

				</span>
			</td>
		</tr>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_cf_849">
				<label class="muted pull-right marginRight10px">Telefono</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_cf_849">
			<span class="value" data-field-type="phone">
				<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('cf_849');?>

			</span>
			</td>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_assigned_user_id">
				<label class="muted pull-right marginRight10px">Asignado a</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_assigned_user_id">
				<span class="value" data-field-type="owner">
					<?php echo $_smarty_tpl->tpl_vars['USERMODEL']->value->get('first_name');?>
 <?php echo $_smarty_tpl->tpl_vars['USERMODEL']->value->get('last_name');?>

				</span>
			</td>
		</tr>
		<tr>
			<td class="fieldLabel medium" id="Assets_detailView_fieldLabel_description" style="width:25%">
				<label class="muted pull-right marginRight10px">Observaciones</label>
			</td>
			<td class="fieldValue medium" id="Assets_detailView_fieldValue_description" colspan="3">
			<span class="value" data-field-type="text" style="white-space:normal;">
				<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('description');?>

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
				<?php echo $_smarty_tpl->tpl_vars['PRODUCTMODEL']->value->get('productname');?>

				</span>
			</td>
		</tr>
	</tbody>
</table><?php }} ?>