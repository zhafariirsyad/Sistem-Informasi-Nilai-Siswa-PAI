<?php
include "lib/controller.php";
$perintah = new oop();
		if ($_GET['u']=="uts-ganjil") {
	 		$judul = "Ulangan Tengah Semester Ganjil";
	 	}elseif ($_GET['u']=="uas-ganjil") {
	 		$judul = "Ulangan Akhir Semester Ganjil";
	 	}elseif ($_GET['u']=="uts-genap") {
	 		$judul = "Ulangan Tengah Semester Genap";
	 	}elseif ($_GET['u']=="ukk") {
	 		$judul = "Ulangan Kenaikan Kelas";
	 	}
?>
<div class="row">
	<h2>Rekap Nilai Rombel <?php echo $_GET['rombel'] ?> </h2>
          <table class="table table-striped table-bordered table-hover" border="1">
          	<tr>
          		<td>No</td>
          		<td>NIS</td>
          		<td>Nama Siswa</td>
          		<td>KKM</td>
          		<td>Pengetahuan</td>
          		<td>KKM</td>
          		<td>Keterampilan</td>
          	</tr>
			<?php 
				$no=0;
				$data = $perintah->select("tb_nilaii where rombel='$_GET[rombel]'");
				foreach ($data as $datas) {
					$no++;
					?>
					<tr>
						<td><?php echo $no ?></td>
						<td><?php echo $datas['nis'] ?></td>
						<td><?php echo $datas['nama'] ?></td>
						<td>75</td>
						<td><?php 
							if ($_GET['u']=="uts-ganjil") {
								$uh = (($datas['uh1p']+$datas['uh2p'])/2);
								$nilai = ($datas['uts_ganjil']*40/100)+($uh*60/100);
								echo $nilai;
							}elseif ($_GET['u']=="uas-ganjil") {
								$uh = (($datas['uh3p']+$datas['uh4p'])/2);
								$nilai = ($datas['uas']*40/100)+($uh*60/100);
								echo $nilai;
							}elseif ($_GET['u']=="uts-genap") {
								$uh = (($datas['uh5p']+$datas['uh6p'])/2);
								$nilai = ($datas['uts_genap']*40/100)+($uh*60/100);
								echo $nilai;
							}elseif ($_GET['u']=="ukk") {
								$uh = (($datas['uh7p']+$datas['uh8p'])/2);
								$nilai = ($datas['ukk']*40/100)+($uh*60/100);
								echo $nilai;
							} ?></td>
						<td>75</td>
						<td><?php 
							if ($_GET['u']=="uts-ganjil") {
								$uh = (($datas['uh1k']+$datas['uh2k'])/2);
								$nilai = ($datas['uts_ganjil_k']*40/100)+($uh*60/100);
								echo $nilai;
							}elseif ($_GET['u']=="uas-ganjil") {
								$uh = (($datas['uh3k']+$datas['uh4k'])/2);
								$nilai = ($datas['uas_k']*40/100)+($uh*60/100);
								echo $nilai;
							}elseif ($_GET['u']=="uts-genap") {
								$uh = (($datas['uh5k']+$datas['uh6k'])/2);
								$nilai = ($datas['uts_genap_k']*40/100)+($uh*60/100);
								echo $nilai;
							}elseif ($_GET['u']=="ukk") {
								$uh = (($datas['uh7k']+$datas['uh8k'])/2);
								$nilai = ($datas['ukkk']*40/100)+($uh*60/100);
								echo $nilai;
							} ?></td>
					</tr>
					<?php
				}
			 ?>
          </table>