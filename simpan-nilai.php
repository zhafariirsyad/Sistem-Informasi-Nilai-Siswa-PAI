<?php 
	include "lib/controller.php";
	@$perintah = new oop();
	@$nama_ulangan="";
	@$rombel = $_GET['id'];
	@$jenis = $_GET['u'];
	if ($jenis=="uh1p") {
		$nama_ulangan="Ulangan Harian 1 Pengetahuan";
	}
	elseif ($jenis=="uh2p") {
		$nama_ulangan="Ulangan Harian 2 Pengetahuan";
	}
	elseif ($jenis=="uts_ganjil") {
		$nama_ulangan="Ulangan Tengah Semester Ganjil";
	}
	elseif ($jenis=="uh3p") {
		$nama_ulangan="Ulangan Harian 3 Pengetahuan";
	}
	elseif ($jenis=="uh4p") {
		$nama_ulangan="Ulangan Harian 4 Pengetahuan";
	}
	elseif ($jenis=="uas") {
		$nama_ulangan="Ulangan Akhir Semester";
	}
	elseif ($jenis=="uh5p") {
		$nama_ulangan="Ulangan Harian 5 Pengetahuan";
	}
	elseif ($jenis=="uh6p") {
		$nama_ulangan="Ulangan Harian 6 Pengetahuan";
	}
	elseif ($jenis=="uts_genap") {
		$nama_ulangan="Ulangan Tengah Semester Genap";
	}
	elseif ($jenis=="uh7p") {
		$nama_ulangan="Ulangan Harian 7 Pengetahuan";
	}
	elseif ($jenis=="uh8p") {
		$nama_ulangan="Ulangan Harian 8 Pengetahuan";
	}
	elseif ($jenis=="ukk") {
		$nama_ulangan="Ulangan Kenaikan Kelas";
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
			$query = $perintah->select_where("tb_nilai_p","rombel = '$rombel'");
			$num   = mysqli_num_rows($query);
			while ($data = mysqli_fetch_array($query)) {
				$no++;
				?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><input type="text" class="form-control" style="border: none; background: transparent;" name="nis<?php echo $no ?>" readonly="" value="<?php echo $data['nis'] ?>"></td>
						<td><input type="text" class="form-control" style="border: none; background: transparent;" name="siswa<?php echo $no ?>" readonly="" value="<?php echo $data['nama'] ?>"></td>
						<td>
							<div class="col-sm-6" style="margin-left: 24%;">
								<input type="number" class="form-control" min="0" max="100" name="nilai<?php echo $no ?>" <?php if($data[ $jenis]==null or $data[$jenis]==0){echo "placeholder='   Nilai Kosong'";}else{echo "Value='".$data[ $jenis]."'"	;} ?>">
							</div>
						</td>
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
			$cek =mysqli_query($conn,"select * from tb_nawalp where nis =". $_POST['nis'.$i]." and ".$jenis."!=0");
			$cek = mysqli_num_rows($cek);
			//upami tos kaisi hartina eta siswa teh atos di input nilaina lewih ti sakali
			if ($cek>0) {
			$perintah->ubahh("tb_nilai_p",$jenis.'='.$_POST['nilai'.$i],"nis",$_POST['nis'.$i]);
			}else{
			//upami te acan kaisi.. tabel nilai awal na diisian sareng table nilai na oge di ubah
			$perintah->ubahh("tb_nawalp",$jenis.'='.$_POST['nilai'.$i],"nis",$_POST['nis'.$i]);
			$perintah->ubahh("tb_nilai_p",$jenis.'='.$_POST['nilai'.$i],"nis",$_POST['nis'.$i]);
			}
		}
		?>
		<script>alert("success");window.location.href="?page=input-nilai-p"</script>
		<?php
	}

 ?>