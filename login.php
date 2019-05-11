<?php 
  include "lib/controller.php";
  @$perintah = new oop();
  if (isset($_POST['signin'])) {
    if ($_POST['level']=="Siswa") {
      $sql = "SELECT * FROM tb_nilai_p WHERE nis='$_POST[username]' and nis='$_POST[password]'";
      $query = mysqli_query($conn,$sql);
      $num = mysqli_num_rows($query);
      if ($num>0) {
        @session_start();
        $data = mysqli_fetch_array($query);
        $_SESSION['user']=$data['nama']; 
        $_SESSION['nis'] = $data['nis'];       
        ?>
        <script type="text/javascript">alert("Success!");document.location.href='PageSiswa.php';</script>
        <?php
      }else{
        ?>
        <script type="text/javascript">alert("Gagal!")</script>
        <?php
      }
    }elseif($_POST['level']=="Guru"){
      $sql = "SELECT * FROM tb_user WHERE username='$_POST[username]' AND password='$_POST[password]'";
      $query = mysqli_query($conn,$sql);
      $num = mysqli_num_rows($query);
      if ($num>0) {
        @session_start();
        $data = mysqli_fetch_array($query);
        $_SESSION['user_guru']=$data['nama'];
        ?>
        <script type="text/javascript">alert("Success!");document.location.href='PageGuru.php';</script>
        <?php
      }else{
        ?>
        <script type="text/javascript">alert("Gagal!")</script>
        <?php
      }
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Login</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        
      </div>
      <div class="login-box" style="height: 450px !important;">
        <form class="login-form"  method="post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input class="form-control" type="text" placeholder="Username" autocomplete="off" autofocus name="username">
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" placeholder="Password" name="password">
          </div>
          <div class="form-group">
            <label class="control-label">LEVEL</label>
            <select name="level" id="" class="form-control">
              <option value="" selected disabled>Pilih Sebagai </option>
              <option value="Siswa">Siswa</option>
              <option value="Guru">Guru</option>
            </select>
          </div>
          <div class="form-group">
            <button class="btn btn-primary btn-block" name="signin"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
          </div>
        </form>
      </div>
    </section>
  </body>
  <!-- Essential javascripts for application to work-->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="js/plugins/pace.min.js"></script>
</html>
<script type="text/javascript">
  // Login Page Flipbox control
  $('.login-content [data-toggle="flip"]').click(function() {
  	$('.login-box').toggleClass('flipped');
  	return false;
  });
</script>