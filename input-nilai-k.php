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
							<option value="">Pilih Jenis Ulangan</option>
							<option value="uh1k">Ulangan Keterampilan 1</option>
							<option value="uh2k">Ulangan Keterampilan 2</option>
							<option value="uh3k">Ulangan Keterampilan 3</option>
							<option value="uh4k">Ulangan Keterampilan 4</option>
							<option value="uh5k">Ulangan Keterampilan 5</option>
							<option value="uh6k">Ulangan Keterampilan 6</option>
							<option value="uh7k">Ulangan Keterampilan 7</option>
							<option value="uh8k">Ulangan Keterampilan 8</option>
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
	if (!isset($_POST['rombel'])) { ?>
		<script>alert("Pilih Rombel")</script>
	
	<?php }else{
	?>
	<script>window.location.href="PageGuru.php?page=simpan_nilaik&id=<?php echo $_POST['rombel'] ?>&u=<?php echo  $_POST['jenis'] ?>"</script>
	<?php }
}

?>

<script>
  
  $(document).ready(function(){
    var nama;
    $('#rombel').change(function(){
      nama = $('#rombel').val();
      $.post('form-input-nilai-k.php',{id: nama}, function(data){
      	console.log(nama);
        $('#isi-siswa').html(data);
      });
    });
  });
</script>

