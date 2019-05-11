<?php 
  require_once 'lib/controller.php';
 ?>
 
<form action="" method="post">
	<div class="row">
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <i class="mdi mdi-cube text-danger icon-lg"></i>
            </div>
            <div class="text-center">
              <p class="card-text text-center">Jumlah Siswa</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;">
                  <?php
                    $sql = "SELECT COUNT(nis) as  jumlah FROM tb_nilai_p";
                    $query = mysqli_query($conn,$sql);
                    $data = mysqli_fetch_assoc($query);
                    $row = $data['jumlah'];
                    echo  $row;
                    ?>
              </h3>
              </div>
            </div>
          </div>
      
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="text-center">
              <i class="mdi mdi-cube text-danger icon-lg"></i>
            </div>
              <p class="card-text text-center">Jumlah Guru</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;">
                     <?php
                     $sql = "SELECT COUNT(id_user) as  jumlah FROM tb_user";
                    $query = mysqli_query($conn,$sql);
                    $data = mysqli_fetch_assoc($query);
                    $row = $data['jumlah'];
                    echo  $row;
                    ?>
                </h3>
              </div>
          </div>
       
        </div>
      </div>
    </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="text-center">
              <i class="mdi mdi-cube text-danger icon-lg"></i>
            </div>
              <p class="card-text text-center">Jumlah Rayon</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;">
                     <?php
                     $sql = "SELECT COUNT(id_rayon) as  jumlah FROM tb_rayon";
                    $query = mysqli_query($conn,$sql);
                    $data = mysqli_fetch_assoc($query);
                    $row = $data['jumlah'];
                    echo  $row;
                    ?>
                </h3>
              </div>
          </div>
       
        </div>
      </div>
    </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="text-center">
              <i class="mdi mdi-cube text-danger icon-lg"></i>
            </div>
              <p class="card-text text-center">Jumlah Rombel</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;">
                     <?php
                     $sql = "SELECT COUNT(id_rombel) as  jumlah FROM tb_rombel";
                    $query = mysqli_query($conn,$sql);
                    $data = mysqli_fetch_assoc($query);
                    $row = $data['jumlah'];
                    echo  $row;
                    ?>
                </h3>
              </div>
          </div>
       
        </div>
      </div>
    </div>
<div class="col col-sm-6 grid-margin stretch-card" style="margin-top: 10px;">
<a href="PageGuru.php?page=pengetahuan">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="text-center">
              <i class="mdi mdi-cube text-danger icon-lg"></i>
            </div>
              <p class="card-text text-center">Kompeten Ulangan Pengetahuan</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;">
                     <?php
                     $sql = "SELECT * from tb_nilai_p where concat(uh1p,uh2p,uts_ganjil,uh3p,uh4p,uas,uh5p,uh6p,uts_genap,uh7p,uh8p,ukk) > 75";
                    $query = mysqli_query($conn,$sql);
                    $data = mysqli_num_rows($query);
                    echo  $data;
                    ?>
                </h3>
              </div>
          </div>
        </div>
      </div>
</a>
    </div>
<div class="col col-sm-6 grid-margin stretch-card" style="margin-top: 10px;">
<a href="PageGuru.php?page=keterampilan">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="text-center">
              <i class="mdi mdi-cube text-danger icon-lg"></i>
            </div>
              <p class="card-text text-center">Kompeten Ulangan Keterampilan  </p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;">
                    <?php
                     $sql = "SELECT * from tb_nilai_k where concat(uh1k,uh2k,uts_ganjil,uh3k,uh4k,uas,uh5k,uh6k,uts_genap,uh7k,uh8k,ukk) > 75";
                    $query = mysqli_query($conn,$sql);
                    $data = mysqli_num_rows($query);
                    echo  $data;
                    ?>
                </h3>
              </div>
          </div>
        </div>
      </div>
</a>
    </div>
</form>