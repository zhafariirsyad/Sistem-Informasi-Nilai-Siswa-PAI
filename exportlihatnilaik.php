 <?php 
	$tanggal = date('d-m-y');

	header("Content-type:application/vnd-ms-excel");
	header("Content-Disposition:attachment;filename = $tanggal-lihatnilaik.xls");
	$_SESSION['id'] = $_GET['rombel'];
	include "datalihatnilaik.php";
 ?>