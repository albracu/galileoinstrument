<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/
require_once('libraries/mpdf/mpdf.php');
class Assets_ExportPDF_Action extends Vtiger_Action_Controller {
	
	public function checkPermission(Vtiger_Request $request) {
		$moduleName = $request->getModule();
		$recordId = $request->get('record');
		if(!Users_Privileges_Model::isPermitted($moduleName, 'DetailView', $recordId)) {
			throw new AppException(vtranslate('LBL_PERMISSION_DENIED', $moduleName));
		}
	}
	
	public function process(Vtiger_Request $request) {
		
		$viewer = new Vtiger_Viewer;
		$moduleName = $request->getModule();
		$record = $request->get('record');
		
		$recordModel = Vtiger_Record_Model::getInstanceById($record);
		$recordStrucure = Vtiger_RecordStructure_Model::getInstanceFromRecordModel($recordModel, Vtiger_RecordStructure_Model::RECORD_STRUCTURE_MODE_DETAIL);
		$structuredValues = $recordStrucure->getStructure();
		$detailView = new Assets_Detail_View;
		
		$accountModel = Vtiger_Record_Model::getInstanceById($recordModel->get('account'),'Accounts');
		
		if (!empty($recordModel->get('contact')))
			$productModel = Vtiger_Record_Model::getInstanceById($recordModel->get('product'),'Products');
		else
			$productModel = Vtiger_Record_Model::getCleanInstance('Products');
		
		if (!empty($recordModel->get('contact')))
			$contactModel = Vtiger_Record_Model::getInstanceById($recordModel->get('contact'),'Contacts');
		else
			$contactModel = Vtiger_Record_Model::getCleanInstance('Contacts');
		
		$userModel = Users_Record_Model::getInstanceById($recordModel->get('assigned_user_id'),'Users');
		
		
		$viewer->assign('MODULE_NAME', $moduleName);
		$viewer->assign('USERMODEL', $userModel);
		$viewer->assign('ACCOUNTMODEL', $accountModel);
		$viewer->assign('CONTACTMODEL', $contactModel);
		$viewer->assign('PRODUCTMODEL', $productModel);
		$viewer->assign('RECORD', $recordModel);
		$viewer->assign('INFO_EQUIPOS', $recordModel->getEquipos($record));
		
		//$buffer = $detailView->showModuleDetailView($request);die();
		$buffer = $viewer->view('ExportPDF.tpl', $moduleName,true);
		$header = '<div style="text-align:left;width:100%;border-bottom:1px solid #000000;">
						<table style="width:100%">
							<tr><td style="height:50px;vertical-align:bottom;">
								<h3>Remisión de Equipos</h3>
								</td>
								<td style="text-align:right">
									<img src="test/logo/logotipo_galileo_web-01.png" style="height:40px"/>
								</td>
							</tr>
						</table></div>';
						
		$footer = '<div style="text-align:right;width:100%;border-top:1px solid #000000;">Impreso el: '.date('d-m-Y').'</div>';
	
		$mpdf=new mPDF('','', 0, '', 15, 15, 16, 16, 9, 9);
		$mpdf->useSubstitutions = true; // optional - just as an example
		$mpdf->setAutoTopMargin = 'stretch'; 
		$mpdf->setAutoBottomMargin = 'stretch'; 
		$mpdf->SetHTMLHeader ($header);  // optional - just as an example
		$mpdf->SetHTMLFooter ($footer);
		$mpdf->setBasePath($url);
		$mpdf->WriteHTML($buffer);
		$mpdf->Output();
		exit;
	}
}


