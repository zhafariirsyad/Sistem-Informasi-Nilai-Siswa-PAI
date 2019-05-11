<?php 
	require_once 'lib/controller.php';

	$perintah = new oop();

	if (isset($_POST['ganti'])) {
		$old_pass = $_POST['old_pass'];
		$new_pass = $_POST['new_pass'];
		$conf_pass = $_POST['conf_pass'];
		$sql = "SELECT * FROM tb_user WHERE nama='$_SESSION[user_guru]' AND password = '$old_pass'";
		$query = mysqli_query($conn,$sql);
		$row = mysqli_num_rows($query);
		if ($row >= 1) {
			if ($new_pass === $conf_pass) {
				$sql = "UPDATE tb_user SET password = '$new_pass' WHERE password = '$old_pass' AND nama = '$_SESSION[user_guru]'";
				$query = mysqli_query($conn,$sql);
				if ($query) {
					echo "<script>alert('Berhasil');document.location.href='?page=dashboardGuru.php'</script>";
				}
				else{
					echo "<script>alert('Gagal');document.location.href='?page=ubah_pass'</script>";
				}
			}
			else{
				echo "<script>alert('Confirm password tidak sesuai');document.location.href='?page=ubah_pass'</script>";
			}
		}
	}
?>
<form method="post">
	<h2>Ganti Password</h2>
	<div class="col-md-4">
		<div class="form-group">
			<label for="password">Password Lama</label>
			<input type="password" name="old_pass" class="form-control" id="password">
		</div>
		<div class="form-group">
			<label for="new_pass">Password Baru</label>
			<input type="password" name="new_pass" class="form-control" id="new_pass">
		</div>
		<div class="form-group">
			<label for="conf_password">Confirm Password</label>
			<input type="password" name="conf_pass" class="form-control" id="conf_password">
		</div>
		<button type="submit" class="btn btn-block btn-success" name="ganti">Ganti</button>
		<br>
	</div>
</form>