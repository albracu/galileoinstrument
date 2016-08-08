/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/
var gHTML = '';

function addNewEquipo() {
	
	jQuery('#listEquipo').append('<tr class="listViewEntries" id="entry2">'+gHTML+'</tr>');
	
}

function deleteRow(ctrl) {
	jQuery(ctrl).closest("tr").remove(); // remove row
}

jQuery(document).ready(function() {
	gHTML = jQuery('#entry').html();
});