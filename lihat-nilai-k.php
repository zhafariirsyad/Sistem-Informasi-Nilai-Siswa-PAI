<?php 
	require_once 'lib/controller.php';
	$perintah = new oop();
	$datarombel= $perintah->select("tb_rombel");
 ?>
<form action="" method="post">
	<div class="col-sm-12 ah">
		<div class="card card-default ah">
			<div class="card-body ah">
				<div class="row">
					<div class="form-group">
						<label for="rombel" class="ah">Rombel</label>
						<select name="rombel" id="rombel" class="form-control ah">
							<option value="">--Pilih Rombel--</option>
						<?php 
							foreach ($datarombel as $d) { ?>
									<option value="<?php echo $d["nama_rombel"] ?>"><?php echo $d["nama_rombel"]; ?></option>
						<?php } ?>
						</select>
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

<style>
	@media print{
		.ah{
			display: none;
		}
	}
</style>

<script>
  
  $(document).ready(function(){
    var nama;
    $('#rombel').change(function(){
      nama = $('#rombel').val();
      $.post('lihat-nilaii-k.php',{id: nama}, function(data){
      	console.log(nama);
        $('#isi-siswa').html(data);
      });
    });
  });
</script>
