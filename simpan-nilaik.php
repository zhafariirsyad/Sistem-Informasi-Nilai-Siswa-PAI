<?php 
	include "lib/controller.php";
	@$perintah = new oop();
	@$nama_ulangan="";
	@$rombel = $_GET['id'];
	@$jenis = $_GET['u'];
	if ($jenis=="uh1k") {
		$nama_ulangan="Ulangan Harian 1 Keterampilan";
	}
	elseif ($jenis=="uh2k") {
		$nama_ulangan="Ulangan Harian 2 Keterampilan";
	}
	elseif ($jenis=="uh3k") {
		$nama_ulangan="Ulangan Harian 3 Keterampilan";
	}
	elseif ($jenis=="uh4k") {
		$nama_ulangan="Ulangan Harian 4 Keterampilan";
	}
	elseif ($jenis=="uh5k") {
		$nama_ulangan="Ulangan Harian 5 Keterampilan";
	}
	elseif ($jenis=="uh6k") {
		$nama_ulangan="Ulangan Harian 6 Keterampilan";
	}
	elseif ($jenis=="uh7k") {
		$nama_ulangan="Ulangan Harian 7 Keterampilan";
	}
	elseif ($jenis=="uh8k") {
		$nama_ulangan="Ulangan Harian 8 Keterampilan";
	}

 ?>

<form action="" method="post">
	<h2>Rombel <?php echo $_GET['id'] ?></h2>
	<table class="table table-striped table-bordered table-hovered">
		<tr>
			<td>No</td>
			<td>NIS</td>
			<td>Nama Siswa</td>
			<td><?php echo $nama_ulangan ?></td>
		</tr>
		<?php 
			$no = 0;
			$query = $perintah->select_where("tb_nilai_k","rombel = '$rombel'");
			$num   = mysqli_num_rows($query);
			while ($data = mysqli_fetch_array($query)) {
				$no++;
				?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><input type="text" class="form-control" style="border: none; background: transparent;" name="nis<?php echo $no ?>" readonly="" value="<?php echo $data['nis'] ?>"></td>
						<td><input type="text" class="form-control" style="border: none; background: transparent;" name="siswa<?php echo $no ?>" readonly="" value="<?php echo $data['nama'] ?>"></td>
						<td><input type="number" class="form-control" min="0" max="100" name="nilai<?php echo $no ?>" <?php if($data[ $jenis]==null or $data[$jenis]==0){echo "placeholder='Nilai Kosong'";}else{echo "Value='".$data[ $jenis]."'"	;} ?>"></td>
					</tr>
				<?php
			}
		 ?>	

	</table>
	<button class="btn btn-success" name="simpan">Simpan</button>
</form>
<?php 
	if (isset($_POST['simpan'])) {
		for ($i=1; $i <=$num ; $i++) {
			//ngecek di table nilai awal tos kaisi te acan..
			$cek =mysqli_query($conn,"select * from tb_nawalk where nis =". $_POST['nis'.$i]." and ".$jenis."!=0");
			$cek = mysqli_num_rows($cek);
			//upami tos kaisi hartina eta siswa teh atos di input nilaina lewih ti sakali
			if ($cek>0) {
			$perintah->ubahh("tb_nilai_k",$jenis.'='.$_POST['nilai'.$i],"nis",$_POST['nis'.$i]);
			}else{
			//upami te acan kaisi.. tabel nilai awal na diisian sareng table nilai na oge di ubah
			$perintah->ubahh("tb_nawalk",$jenis.'='.$_POST['nilai'.$i],"nis",$_POST['nis'.$i]);
			$perintah->ubahh("tb_nilai_k",$jenis.'='.$_POST['nilai'.$i],"nis",$_POST['nis'.$i]);
			}
		}
		?>
		<script>alert("success");window.location.href="?page=input-nilai-k"</script>
		<?php
	}

 ?>