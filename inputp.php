<?php 
	require_once 'lib/controller.php';
	$perintah = new oop();

 ?>

<?php 
	@$jenis = $_GET['jenis'];

	if ($jenis==null) {
		
	 ?>
	<form action="" method="post">	
	<table>
		<tr>
			<td>Pilih Jenis ulangan</td>
			<td>:</td>
			<td>
				<select name="jenis" id="" class="form-control">
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
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<button name="simpan" class="btn btn-info">Input</button></td>
		</tr>
	</table>
	<?php } 
	if (isset($_POST['simpan'])) {
		?>
		<script>window.location.href="PageGuru.php?page=simpan-nilaip&id=<?php echo $_GET['id'] ?>&u=<?php echo  $_POST['jenis'] ?>"</script>
		<?php
	}
	?>
	</form>