<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

class Assets_Detail_View extends Vtiger_Detail_View {
	function preProcess(Vtiger_Request $request) {
		$viewer = $this->getViewer($request);
		$viewer->assign('NO_SUMMARY', true);
		parent::preProcess($request);
	}

	/**
	 * Function returns Inventory details
	 * @param Vtiger_Request $request
	 */
	function showModuleDetailView(Vtiger_Request $request) {
		$record = $request->get('record');
		$moduleName = $request->getModule();
		
		$viewer = $this->getViewer($request);
		$recordModel = Vtiger_Record_Model::getInstanceById($record, $moduleName);
		
		$viewer->assign('INFO_EQUIPOS', $recordModel->getEquipos($record));
		
		echo parent::showModuleDetailView($request);
	}

	/**
	 * Function returns Inventory details
	 * @param Vtiger_Request $request
	 * @return type
	 */
	function showDetailViewByMode(Vtiger_Request $request) {
		return $this->showModuleDetailView($request);
	}

	function showModuleBasicView($request) {
		return $this->showModuleDetailView($request);
	}
	

}
