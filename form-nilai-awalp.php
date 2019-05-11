<?php 
require_once 'lib/controller.php';
	$perintah = new oop();
	$id = $_POST['id'];
?>

<h2>Daftar Siswa</h2><br>
<br><br>
				
<form action="" method="post">
	<table id="tablesiswa" style="width: 100%;" class="table table-bordered table-hovered table-striped table-responsive">
		<tr>
			<th>NIS</th>
			<th>Nama</th>
			<th>Rombel</th>
			<th>Uh 1 P</th>
			<th>Uh 2 P</th>
			<th>UTS Ganjil</th>
			<th>Uh 3 P</th>
			<th>Uh 4 P</th>
			<th>UAS</th>
			<th>Uh 5 P</th>
			<th>Uh 6 P</th>
			<th>UTS Genap</th>
			<th>Uh 7 P</th>
			<th>Uh 8 P</th>
			<th>UKK</th>
		</tr>
		<?php
			$data = $perintah->select("tb_nawalp WHERE rombel = '$id' ");
			foreach ($data as $datas) { ?>
				<tr>
					<td><?= $datas['nis'] ?></td>
					<td><?= $datas['nama'] ?></td>
					<td><?= $datas['rombel'] ?></td>
					<td><?php if ($datas['uh1p'] < 75) {
						?>
						<p style="color: red;" align="center"><?php echo $datas['uh1p']; ?></p>
						<?php
					}
					else{
						echo $datas['uh1p'];
					} ?></td>
					<td><?php if ($datas['uh2p'] < 75) {
						?>
						<p style="color: red;" align="center"><?php echo $datas['uh2p']; ?></p>
						<?php
					}
					else{
						echo $datas['uh2p'];
					} ?></td>
					<td><?php if ($datas['uts_ganjil'] < 75) {
						?>
						<p style="color: red;" align="center"><?php echo $datas['uts_ganjil']; ?></p>
						<?php
					}
					else{
						echo $datas['uts_ganjil'];
					} ?></td>
					<td><?php if ($datas['uh3p'] < 75) {
						?>
						<p style="color: red;" align="center"><?php echo $datas['uh3p']; ?></p>
						<?php
					}
					else{
						echo $datas['uh3p'];
					} ?></td>
					<td><?php if ($datas['uh4p'] < 75) {
						?>
						<p style="color: red;" align="center"><?php echo $datas['uh4p']; ?></p>
						<?php
					}
					else{
						echo $datas['uh4p'];
					} ?></td>
					<td><?php if ($datas['uas'] < 75) {
						?>
						<p style="color: red;" align="center"><?php echo $datas['uas']; ?></p>
						<?php
					}
					else{
						echo $datas['uas'];
					} ?></td>
					<td><?php if ($datas['uh5p'] < 75) {
						?>
						<p style="color: red;" align="center"><?php echo $datas['uh5p']; ?></p>
						<?php
					}
					else{
						echo $datas['uh5p'];
					} ?></td>
					<td><?php if ($datas['uh6p'] < 75) {
						?>
						<p style="color: red;" align="center"><?php echo $datas['uh6p']; ?></p>
						<?php
					}
					else{
						echo $datas['uh6p'];
					} ?></td>
					<td><?php if ($datas['uts_genap'] < 75) {
						?>
						<p style="color: red;" align="center"><?php echo $datas['uts_genap']; ?></p>
						<?php
					}
					else{
						echo $datas['uts_genap'];
					} ?></td>
					<td><?php if ($datas['uh7p'] < 75) {
						?>
						<p style="color: red;" align="center"><?php echo $datas['uh7p']; ?></p>
						<?php
					}
					else{
						echo $datas['uh7p'];
					} ?></td>
					<td><?php if ($datas['uh8p'] < 75) {
						?>
						<p style="color: red;" align="center"><?php echo $datas['uh8p']; ?></p>
						<?php
					}
					else{
						echo $datas['uh8p'];
					} ?></td>
					<td><?php if ($datas['ukk'] < 75) {
						?>
						<p style="color: red;" align="center"><?php echo $datas['ukk']; ?></p>
						<?php
					}
					else{
						echo $datas['ukk'];
					} ?></td>					
				</tr>
		<?php } ?>
		
	</table>
	<br>
	<a href="" onclick="window.print()" class="btn btn-success ah" >Export PDF</a>
	<a href="exportawal.php?rombel=<?php echo $_POST['id'] ?>" class="btn btn-info ah">Export To Excel</a>
</form>