 <?php

  @session_start();
  if (@$_SESSION['user_guru']==null) {
    if (@$_SESSION['user']!=null) {
    ?>
    <script type="text/javascript">window.location.href="PageSiswa.php"</script>
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
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <title>SISTEM INFORMASI NILAI SISWA </title>
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" style="color: white;" href="PageGuru.php">SINS Wikrama</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="?page=ubah_pass"><i class="fa fa-pencil"></i>Ganti Password</a></li>
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
          <p class="app-sidebar__user-name">Guru</p>
          <p class="app-sidebar__user-designation"><?php echo $_SESSION['user_guru'] ?></p>
        </div>
      </div>
      <ul class="app-menu">
        
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-pencil"></i><span class="app-menu__label">Input Nilai</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="?page=input-nilai-p"><i class="icon fa fa-circle-o"></i> Nilai Pengetahuan</a></li>
            <li><a class="treeview-item" href="?page=input-nilai-k"><i class="icon fa fa-circle-o"></i> Nilai Keterampilan</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-pencil"></i><span class="app-menu__label">Rekap Nilai</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="?page=rekap-nilai&u=uts-ganjil"><i class="icon fa fa-circle-o"></i> UTS Ganjil</a></li>
            <li><a class="treeview-item" href="?page=rekap-nilai&u=uas-ganjil"><i class="icon fa fa-circle-o"></i> UAS Ganjil</a></li>
            <li><a class="treeview-item" href="?page=rekap-nilai&u=uts-genap"><i class="icon fa fa-circle-o"></i> UTS Genap</a></li>
            <li><a class="treeview-item" href="?page=rekap-nilai&u=ukk"><i class="icon fa fa-circle-o"></i> UKK</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-eye"></i><span class="app-menu__label">Lihat Nilai</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="?page=lihat-nilai"><i class="icon fa fa-circle-o"></i> Lihat Nilai Pengetahuan</a></li>
            <li><a class="treeview-item" href="?page=lihat-nilai-k"><i class="icon fa fa-circle-o"></i> Lihat Nilai Keterampilan</a></li>
          </ul>
        </li>
         <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-eye"></i><span class="app-menu__label">Lihat Nilai Awal</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="?page=lihat-nilaiawalp"><i class="icon fa fa-circle-o"></i> Lihat Nilai Awal Pengetahuan</a></li>
            <li><a class="treeview-item" href="?page=lihat-nilaiawalk"><i class="icon fa fa-circle-o"></i> Lihat Nilai Awal Keterampilan</a></li>
          </ul>
        </li>
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i><a href="PageGuru.php"> Dashboard </a></h1>
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
                case 'uuh':
                  require 'jenis.php';      
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
                case 'rekap-nilai':
                  require 'rekap-nilai.php';
                  break;
                case 'lihat-nilai':
                  require 'lihat-nilai.php';
                  break; 
                case 'lihat-nilaiawalp':
                  require 'lihat-nilaiawalp.php';
                  break;
                case 'lihat-nilaiawalk':
                  require 'lihat-nilaiawalk.php';
                  break;  
                case 'lihat-nilai-k':
                  require 'lihat-nilai-k.php';
                  break;
                case 'input':
                  require 'inputp.php';
                  break;
                case 'ubah_pass':
                  require 'ubah_pass.php';
                  break;
                case 'simpan-nilaip':
                  require 'simpan-nilaip.php';
                  break; 
                case 'pengetahuan':
                  require 'page_pengetahuan.php';
                  break; 
                case 'keterampilan':
                  require 'page_keterampilan.php';
                  break;                    
                default:
                  require 'dashboardGuru.php';
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
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript" src="js/plugins/chart.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>

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
        $('#tablesiswa').DataTable();
    </script>
  </body>
</html>