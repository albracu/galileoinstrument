<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

Class Assets_Edit_View extends Vtiger_Edit_View {
    protected $record = false;
	function __construct() {
		parent::__construct();
	}
	
	public function process(Vtiger_Request $request) {
		$record = $request->get('record');
		$moduleName = $request->getModule();
		
		$viewer = $this->getViewer ($request);
		$recordModel = Vtiger_Record_Model::getInstanceById($record, $moduleName);
		$viewer->assign('INFO_EQUIPOS', $recordModel->getEquipos($record));
		
		parent::process($request);
	}
}