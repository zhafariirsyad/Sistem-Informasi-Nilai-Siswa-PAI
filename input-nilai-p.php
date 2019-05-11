<?php 
	require_once 'lib/controller.php';
	$perintah = new oop();
	$datarombel= $perintah->select("tb_rombel");
 ?>
<form action="" method="post">
	<div class="col-sm-12">
		<div class="card card-default">
			<div class="card-body">
				<div class="row">
					<div class="col-md-3">
						<label for="rombel">Rombel</label>
						<select name="rombel" id="rombel" class="form-control">
							<option value="">--Pilih Rombel--</option>
						<?php 
							foreach ($datarombel as $d) { ?>
									<option value="<?php echo $d["nama_rombel"] ?>"><?php echo $d["nama_rombel"]; ?></option>
						<?php } ?>
						</select>
						<br>
						<label for="rombel">Jenis Ulangan</label>

						<select name="jenis" id="jenis" class="form-control" style="margin-bottom: 10px;">
							<option value="uh1p">Ulangan Pengetahuan 1</option>
							<option value="uh2p">Ulangan Pengetahuan 2</option>
							<option value="uts_ganjil">UTS Ganjil</option>
							<option value="uh3p">Ulangan Pengetahuan 3</option>
							<option value="uh4p">Ulangan Pengetahuan 4</option>
							<option value="uas">UAS</option>
							<option value="uh5p">Ulangan Pengetahuan 5</option>
							<option value="uh6p">Ulangan Pengetahuan 6</option>
							<option value="uts_genap">UTS Genap</option>
							<option value="uh7p">Ulangan Pengetahuan 7</option>
							<option value="uh8p">Ulangan Pengetahuan 8</option>
							<option value="ukk">UKK</option>
						</select>
				<button name="input" class="btn btn-primary" id="input">Input Nilai</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="col-sm-12">
		<div class="card">
			<div class="card-body" id="isi-siswa">
				
			</div>
		</div>
	</div>
	
</form>
<?php  
	if (isset($_POST['input'])) {
		if ($_POST['rombel']==null) {
			?><script>alert("Pilih Rombel!")</script><?php
		}else{
		?>
		<script>window.location.href="PageGuru.php?page=simpan_nilai&id=<?php echo $_POST['rombel'] ?>&u=<?php echo  $_POST['jenis'] ?>"</script>
		<?php
		}
	}
?>
<script>
  
  $(document).ready(function(){
    var nama;
    $('#rombel').change(function(){
      nama = $('#rombel').val();
      $.post('form-input-nilai-p.php',{id: nama}, function(data){
      	console.log(nama);
        $('#isi-siswa').html(data);
      });
    });
  });
</script>
