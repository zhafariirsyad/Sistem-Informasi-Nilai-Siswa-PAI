 <?php 
	$tanggal = date('d-m-y');

	header("Content-type:application/vnd-ms-excel");
	header("Content-Disposition:attachment;filename = $tanggal-lihatnilai.xls");
	$_SESSION['id'] = $_GET['rombel'];
	include "datalihatnilai.php";
 ?>