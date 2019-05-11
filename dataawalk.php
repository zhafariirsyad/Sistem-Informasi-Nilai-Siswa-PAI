<?php 
	require 'lib/controller.php';
	$perintah = new oop();
?>
<table id="tablesiswa" border="1" style="width: 100%;" class="table table-bordered table-hovered table-striped table-responsive">
	<tr>
		<th>NIS</th>
		<th>Nama</th>
		<th>Rombel</th>
		<th>Uh 1 K</th>
		<th>Uh 2 K</th>
		<th>Uh 3 K</th>
		<th>Uh 4 K</th>
		<th>Uh 5 K</th>
		<th>Uh 6 K</th>
		<th>Uh 7 K</th>
		<th>Uh 8 K</th>
	</tr>
	<?php 
		$id = isset($_POST['id']) ? $_POST['id'] : $_SESSION['id'];
		$data = $perintah->select("tb_nawalk WHERE rombel = '$id' ");
		foreach ($data as $datas) { ?>
			<tr>
				<td><?= $datas['nis'] ?></td>
				<td><?= $datas['nama'] ?></td>
				<td><?= $datas['rombel'] ?></td>
				<td><?php if ($datas['uh1k'] < 75) {
					?>
					<p style="color: red;" align="center"><?php echo $datas['uh1k']; ?></p>
					<?php
				}
				else{
					echo $datas['uh1k'];
				} ?></td>
				<td><?php if ($datas['uh2k'] < 75) {
					?>
					<p style="color: red;" align="center"><?php echo $datas['uh2k']; ?></p>
					<?php
				}
				else{
					echo $datas['uh2k'];
				} ?></td>
				<td><?php if ($datas['uh3k'] < 75) {
					?>
					<p style="color: red;" align="center"><?php echo $datas['uh3k']; ?></p>
					<?php
				}
				else{
					echo $datas['uh3k'];
				} ?></td>
				<td><?php if ($datas['uh4k'] < 75) {
					?>
					<p style="color: red;" align="center"><?php echo $datas['uh4k']; ?></p>
					<?php
				}
				else{
					echo $datas['uh4k'];
				} ?></td>
				<td><?php if ($datas['uh5k'] < 75) {
					?>
					<p style="color: red;" align="center"><?php echo $datas['uh5k']; ?></p>
					<?php
				}
				else{
					echo $datas['uh5k'];
				} ?></td>
				<td><?php if ($datas['uh6k'] < 75) {
					?>
					<p style="color: red;" align="center"><?php echo $datas['uh6k']; ?></p>
					<?php
				}
				else{
					echo $datas['uh6k'];
				} ?></td>
				<td><?php if ($datas['uh7k'] < 75) {
					?>
					<p style="color: red;" align="center"><?php echo $datas['uh7k']; ?></p>
					<?php
				}
				else{
					echo $datas['uh7k'];
				} ?></td>
				<td><?php if ($datas['uh8k'] < 75) {
					?>
					<p style="color: red;" align="center"><?php echo $datas['uh8k']; ?></p>
					<?php
				}
				else{
					echo $datas['uh8k'];
				} ?></td>
			</tr>
	<?php } ?>

</table>