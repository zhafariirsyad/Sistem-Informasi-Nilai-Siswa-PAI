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
					<option value="uh1k">Ulangan Keterampilan 1</option>
					<option value="uh2k">Ulangan Keterampilan 2</option>
					<option value="uh3k">Ulangan Keterampilan 3</option>
					<option value="uh4k">Ulangan Keterampilan 4</option>
					<option value="uh5k">Ulangan Keterampilan 5</option>
					<option value="uh6k">Ulangan Keterampilan 6</option>
					<option value="uh7k">Ulangan Keterampilan 7</option>
					<option value="uh8k">Ulangan Keterampilan 8</option>
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
		<script>window.location.href="PageGuru.php?page=simpan_nilaik&id=<?php echo $_GET['id'] ?>&u=<?php echo  $_POST['jenis'] ?>"</script>
		<?php
	}
	?>
	</form>