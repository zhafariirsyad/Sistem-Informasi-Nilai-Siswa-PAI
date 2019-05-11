<?php 
  @session_start();
  if (@$_SESSION['user']==null) {
    if (@$_SESSION['user_guru']!=null) {
    ?>
    <script type="text/javascript">window.location.href="PageGuru.php"</script>
    <?php
    }
    ?>
    <script type="text/javascript">window.location.href="Login.php"</script>
    <?php
  }
   if (@$_GET['log']=="t") {
    @session_destroy();
    ?>
        <script type="text/javascript">window.location.href="Login.php"</script>

    <?php
  }
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <title>SISTEM INFORMASI NILAI SISWA</title>
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" style="color: white;">SINS Wikrama</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="?log=t" onclick="return confirm('are you sure?')"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
        <div style="margin-left: 5% !important;">
          <p class="app-sidebar__user-name">Siswa</p>
          <p class="app-sidebar__user-designation"><?php echo $_SESSION['user'] ?></p>
        </div>
      </div>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> <a href="PageSiswa.php">Dashboard</a></h1>
          <p>SISTEM INFORMASI NILAI SISWA</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home"></i></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <?php 
              @$page = $_GET['page'];
              switch ($page) {
                case 'input-nilai-p':
                  require 'input-nilai-p.php';
                  break;
                  case 'input-nilai-k':
                  require 'input-nilai-k.php';
                  break;
                case 'uh':
                  require 'nilai-siswa.php';      
                  break;
                case 'uhh':
                  require 'nilai-siswak.php';      
                  break;  
                case 'form-input-nilai-p':
                  require 'form-input-nilai-p.php';
                  break; 
                case 'simpan_nilai':
                  require 'simpan-nilai.php';
                  break; 
                case 'simpan_nilaik':
                  require 'simpan-nilaik.php';
                  break;
                case 'nilai-siswak':
                  require 'nilai-siswak.php';
                  break;  
                case 'siswa-pengetahuan':
                  require 'siswa-pengetahuan.php';
                  break;
                case 'siswa-keterampilan':
                  require 'siswa-keterampilan.php';
                  break;      
                default:
                  require 'dashboardSiswa.php';
                  break;
              }
            ?>
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/plugins/jquery.dataTables.min.js"></script>
    <script src="js/plugins/dataTables.bootstrap.min.js"></script>

    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript" src="js/plugins/chart.js"></script>
    <script type="text/javascript" src="js/plugins/sweetalert.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap-notify.min.js"></script>



    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
      }
      
    </script>
    <script>
      $('#tb_rekap').DataTable();
      $('#demoSwal').click(function(){
        swal({
          title : 'Kamu Perbaikan',
          text : 'Pelajari Kembali Materi Sesuai Bab Yang Kamu Pelajari',
          text :'Temui Bapak Di Ruang Guru jikalau kalian Mau Perbaikan',
          type : 'warning'
        });
       });
      $('#Swal').click(function(){
        swal({
          title : 'Kamu Kompeten',
          text : 'Tingkatkan Terus Semangat Belajarmu',
          type : 'success'
        });
       });
      $('#demoSwal1').click(function(){
        swal({
          title : 'Kamu Perbaikan',
          text : 'Pelajari Kembali Materi Sesuai Bab Yang Kamu Pelajari',
          text :'Temui Bapak Di Ruang Guru jikalau kalian Mau Perbaikan',
          type : 'warning'
        });
       });
      $('#Swal1').click(function(){
        swal({
          title : 'Kamu Kompeten',
          text : 'Tingkatkan Terus Semangat Belajarmu',
          type : 'success'
        });
       });
       $('#demoSwal2').click(function(){
        swal({
          title : 'Kamu Perbaikan',
          text : 'Pelajari Kembali Materi Sesuai Bab Yang Kamu Pelajari',
          text :'Temui Bapak Di Ruang Guru jikalau kalian Mau Perbaikan',
          type : 'warning'
        });
       });
       $('#Swal2').click(function(){
        swal({
          title : 'Kamu Kompeten',
          text : 'Tingkatkan Terus Semangat Belajarmu',
          type : 'success'
        });
       });
       $('#demoSwal3').click(function(){
        swal({
          title : 'Kamu Perbaikan',
          text : 'Pelajari Kembali Materi Sesuai Bab Yang Kamu Pelajari',
          text :'Temui Bapak Di Ruang Guru jikalau kalian Mau Perbaikan',
          type : 'warning'
        });
       });
       $('#Swal3').click(function(){
        swal({
          title : 'Kamu Kompeten',
          text : 'Tingkatkan Terus Semangat Belajarmu',
          type : 'success'
        });
       });
       $('#demoSwal4').click(function(){
        swal({
          title : 'Kamu Perbaikan',
          text : 'Pelajari Kembali Materi Sesuai Bab Yang Kamu Pelajari',
          text :'Temui Bapak Di Ruang Guru jikalau kalian Mau Perbaikan',
          type : 'warning'
        });
       });
       $('#Swal4').click(function(){
        swal({
          title : 'Kamu Kompeten',
          text : 'Tingkatkan Terus Semangat Belajarmu',
          type : 'success'
        });
       });
       $('#demoSwal5').click(function(){
        swal({
          title : 'Kamu Perbaikan',
          text : 'Pelajari Kembali Materi Sesuai Bab Yang Kamu Pelajari',
          text :'Temui Bapak Di Ruang Guru jikalau kalian Mau Perbaikan',
          type : 'warning'
        });
       });
       $('#Swal5').click(function(){
        swal({
          title : 'Kamu Kompeten',
          text : 'Tingkatkan Terus Semangat Belajarmu',
          type : 'success'
        });
       });
       $('#demoSwal6').click(function(){
        swal({
          title : 'Kamu Perbaikan',
          text : 'Pelajari Kembali Materi Sesuai Bab Yang Kamu Pelajari',
          text :'Temui Bapak Di Ruang Guru jikalau kalian Mau Perbaikan',
          type : 'warning'
        });
       });
       $('#Swal6').click(function(){
        swal({
          title : 'Kamu Kompeten',
          text : 'Tingkatkan Terus Semangat Belajarmu',
          type : 'success'
        });
       });
       $('#demoSwal7').click(function(){
        swal({
          title : 'Kamu Perbaikan',
          text : 'Pelajari Kembali Materi Sesuai Bab Yang Kamu Pelajari',
          text :'Temui Bapak Di Ruang Guru jikalau kalian Mau Perbaikan',
          type : 'warning'
        });
       });
       $('#Swal7').click(function(){
        swal({
          title : 'Kamu Kompeten',
          text : 'Tingkatkan Terus Semangat Belajarmu',
          type : 'success'
        });
       });
       $('#demoSwal8').click(function(){
        swal({
          title : 'Kamu Perbaikan',
          text : 'Pelajari Kembali Materi Sesuai Bab Yang Kamu Pelajari',
          text :'Temui Bapak Di Ruang Guru jikalau kalian Mau Perbaikan',
          type : 'warning'
        });
       });
       $('#Swal8').click(function(){
        swal({
          title : 'Kamu Kompeten',
          text : 'Tingkatkan Terus Semangat Belajarmu',
          type : 'success'
        });
       });
       $('#demoSwal9').click(function(){
        swal({
          title : 'Kamu Perbaikan',
          text : 'Pelajari Kembali Materi Sesuai Bab Yang Kamu Pelajari',
          text :'Temui Bapak Di Ruang Guru jikalau kalian Mau Perbaikan',
          type : 'warning'
        });
       });
       $('#Swal9').click(function(){
        swal({
          title : 'Kamu Kompeten',
          text : 'Tingkatkan Terus Semangat Belajarmu',
          type : 'success'
        });
       });
       $('#demoSwal10').click(function(){
        swal({
          title : 'Kamu Perbaikan',
          text : 'Pelajari Kembali Materi Sesuai Bab Yang Kamu Pelajari',
          text :'Temui Bapak Di Ruang Guru jikalau kalian Mau Perbaikan',
          type : 'warning'
        });
       });
       $('#Swal10').click(function(){
        swal({
          title : 'Kamu Kompeten',
          text : 'Tingkatkan Terus Semangat Belajarmu',
          text : 'Kamu Hebat',
          type : 'success'
        });
       });
       $('#demoSwal11').click(function(){
        swal({
          title : 'Kamu Perbaikan',
          text : 'Pelajari Kembali Materi Sesuai Bab Yang Kamu Pelajari',
          text :'Temui Bapak Di Ruang Guru jikalau kalian Mau Perbaikan',
          type : 'warning'
        });
       });
       $('#Swal11').click(function(){
        swal({
          title : 'Kamu Kompeten',
          text : 'Tingkatkan Terus Semangat Belajarmu',
          type : 'success'
        });
       });
    </script>
  </body>
</html>