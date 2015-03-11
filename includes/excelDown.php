<?php
require_once 'phpExcel/PHPExcel.php';
require_once 'Connection.php';

if (isset($_SESSION['login'])) {
    echo '';
}
$objPHPExcel = new PHPExcel();
$objPHPExcel->getProperties()
    ->setLastModifiedBy("")
    ->setKeywords("usuarios phpexcel")
    ->setCategory(" ");

$objPHPExcel->setActiveSheetIndex(0)
    ->setCellValue('A1', 'nombre')
    ->setCellValue('B1', 'grado')
    ->setCellValue('C1', 'celular')
    ->setCellValue('D1', 'email')
    ->setCellValue('E1', 'unidad')
    ->setCellValue('F1', 'direccion')
    ->setCellValue('G1', 'trabajadores')
    ->setCellValue('H1', 'servicios')
    ->setCellValue('I1', 'eventos')
    ->setCellValue('J1', 'desarrollo')
    ->setCellValue('K1', 'observaciones')
    ->setCellValue('L1', 'fecha')

;
$connection = Connection::getInstance();
$sql = 'select * from quiz';
$rows = $connection->query($connection->run($sql));
$i = 2;
foreach($rows as $row){
    $objPHPExcel->setActiveSheetIndex(0)
        ->setCellValue('A' . $i, $row['nombre'])
        ->setCellValue('B' . $i, $row['grado'])
        ->setCellValue('C' . $i, $row['celular'])
        ->setCellValue('D' . $i, $row['email'])
        ->setCellValue('E' . $i, $row['unidad'])
        ->setCellValue('F' . $i, $row['direccion'])
        ->setCellValue('G' . $i, $row['trabajadores'])
        ->setCellValue('H' . $i, $row['servicios'])
        ->setCellValue('I' . $i, $row['eventos'])
        ->setCellValue('J' . $i, $row['desarrollo'])
        ->setCellValue('K' . $i, $row['observaciones'])
	->setCellValue('L' . $i, $row['fecha']);
    $i++;
}
$objPHPExcel->getActiveSheet()->setTitle('Usuarios');
$objPHPExcel->setActiveSheetIndex(0);

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="reporte.xls"');
header('Cache-Control: max-age=0');

$objWriter=PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel5');
$objWriter->save('php://output');
exit;