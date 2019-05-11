 <?php 
	$tanggal = date('d-m-y');

	header("Content-type:application/vnd-ms-excel");
	header("Content-Disposition:attachment;filename = $tanggal-rekapnilai.xls");

	include "data.php";
 ?>