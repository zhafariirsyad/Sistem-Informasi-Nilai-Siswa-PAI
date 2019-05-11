<?php 
	include "lib/controller.php";
	$perintah = new oop();
 ?>
<div class="row">
	<div class="form-group col col-12">
	<label for="rombel" class="ah">Pilih Rombel</label>
	<form action="" method="post">
		<div class="col-md-3" style="margin-left: -1.5%;">
			<select name="rombel" class="form-control ah" id="" >
				<option value="">--Pilih Rombel--</option>
				<?php 
					$query = $perintah->select("tb_rombel");
					foreach ($query as $key) {
						?>
						<option value="<?php echo $key['nama_rombel'] ?>" <?php if (@$_GET['rombel']==$key['nama_rombel']) {
							echo "selected";
						} ?>><?php echo $key['nama_rombel'] ?></option>
						<?php 
					}
				 ?>
			</select>
		</div>	
		<button class="btn btn-info ah " style="margin-top: 10px;" name="pilih">Pilih Rombel</button>
		<button class="btn btn-success ah " <?php if (@$_GET['rombel']==null) {
			echo "disabled";
		} ?> style="margin-top: 10px;" name="rekap">Rekap Nilai</button>
		
	</form>
	</div>
</div>

<?php if (isset($_POST['pilih'])) {
	?>
	<script>window.location.href="PageGuru.php?page=rekap-nilai&u=uts-ganjil&rombel=<?php echo $_POST['rombel'] ?>"</script>
	<?php
	}
	if (isset($_POST['rekap'])) {
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
		<div class="tile mb-4">
        <div class="page-header">
          <div class="row">
            <div class="col-lg-12">
              <h2 class="mb-3 line-head" id="buttons">Rekap Nilai Rombel <?php echo $_GET['rombel'] ?></h2>
            </div>
            <p style="margin-left: 20px;"><?php echo $judul ?></p>
          </div>
        </div>
        <div class="row">
          <table class="table table-striped table-bordered table-hover" id="tb_rekap" >
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
        <style>
        	@media print{
				.ah{
					display: none;
				}
        	}
        </style>
        <a href="" onclick="window.print()" class="btn btn-success ah" >Export PDF</a>
		<a href="export.php?u=<?php echo $_GET['u'] ?>&rombel=<?php echo $_GET['rombel'] ?>" class="btn btn-info ah">Export To Excel</a>
        </div>
        </div>
	 	<?php
	 } 
?>


