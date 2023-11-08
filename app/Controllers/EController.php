<?php
App/controller;

defined('BASEPATH');

class exc extends PostController{
	public function _construct(){
		parent::_construct();
		$this->load->library('Excel');
}
public function exportarexcel(){
    $this->excel->setActiveSheetIndex(0);         
    $this->excel->getActiveSheet()->setTitle('test worksheet');         
    $this->excel->getActiveSheet()->setCellValue('A1', 'Un poco de texto');         
    $this->excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(20);         
    $this->excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);         
    $this->excel->getActiveSheet()->mergeCells('A1:D1');           

    header('Content-Type: application/vnd.ms-excel');         
    header('Content-Disposition: attachment;filename="nombredelfichero.xls"');
    header('Cache-Control: max-age=0'); //no cache         
    $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');         
    
    // Forzamos a la descarga         
    $objWriter->save('php://output');
  }
	
}