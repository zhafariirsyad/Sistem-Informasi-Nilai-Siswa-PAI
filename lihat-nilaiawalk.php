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
      $.post('form-nilai-awalk.php',{id: nama}, function(data){
      	console.log(nama);
        $('#isi-siswa').html(data);
      });
    });
  });
</script>
