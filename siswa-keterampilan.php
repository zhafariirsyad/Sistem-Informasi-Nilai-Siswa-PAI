<?php 
  include "lib/controller.php";
  $perintah = new oop();
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
            <div class="float-right">
              <br>
              <p class="card-text text-center">Ulangan Harian Pengetahuan 1</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;"><?php 
                  $data =mysqli_fetch_array($perintah->select_where("tb_nilai_k","nis='$_SESSION[nis]'"));
                  echo $data['uh1k'];
                 ?></h3>
              </div>
            </div>
          </div>
          <p class="text-muted mt-3">
            <?php if ($data['uh1k'] < 75) { ?>
              <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"><a href="#" id="demoSwal" class="btn btn-info btn-block">Click Me...</a></i>
            <?php }else{ ?>
              <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"><a href="#" id="Swal" class="btn btn-info btn-block">Click Me...</a></i>
            <?php } ?>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <i class="mdi mdi-cube text-danger icon-lg"></i>
            </div>
            <div class="float-right">
              <br>
              <p class="card-text text-center">Ulangan Harian Pengetahuan 2</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;"><?php 
                  $data =mysqli_fetch_array($perintah->select_where("tb_nilai_k","nis='$_SESSION[nis]'"));
                  echo $data['uh2k'];
                 ?></h3>
              </div>
            </div>
          </div>
          <p class="text-muted mt-3">
            <?php if ($data['uh2k'] < 75) { ?>
              <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"><a href="#" id="demoSwal1" class="btn btn-info btn-block">Click Me...</a></i>
            <?php }else{ ?>
              <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"><a href="#" id="Swal1" class="btn btn-info btn-block">Click Me...</a></i>
            <?php } ?>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <i class="mdi mdi-cube text-danger icon-lg"></i>
            </div>
            <div class="float-right">
              <p class="card-text text-center">Ulangan Tengah Semester Ganjil</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;"><?php 
                  $data =mysqli_fetch_array($perintah->select_where("tb_nilai_k","nis='$_SESSION[nis]'"));
                  echo $data['uts_ganjil'];
                 ?></h3>
              </div>
            </div>
          </div>
          <p class="text-muted mt-3">
            <?php if ($data['uts_ganjil'] < 75) { ?>
              <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"><a href="#" id="demoSwal2" class="btn btn-info btn-block">Click Me...</a></i>
            <?php }else{ ?>
              <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"><a href="#" id="Swal2" class="btn btn-info btn-block">Click Me...</a></i>
            <?php } ?>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <i class="mdi mdi-cube text-danger icon-lg"></i>
            </div>
            <div class="float-right">
              <br>
              <p class="card-text text-center">Ulangan Harian Pengetahuan 3</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;"><?php 
                  $data =mysqli_fetch_array($perintah->select_where("tb_nilai_k","nis='$_SESSION[nis]'"));
                  echo $data['uh3k'];
                 ?></h3>
              </div>
            </div>
          </div>
          <p class="text-muted mt-3">
            <?php if ($data['uh3k'] < 75) { ?>
              <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"><a href="#" id="demoSwal3" class="btn btn-info btn-block">Click Me...</a></i>
            <?php }else{ ?>
              <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"><a href="#" id="Swal3" class="btn btn-info btn-block">Click Me...</a></i>
            <?php } ?>
          </p>
        </div>
      </div>
    </div>  
    </div>
    <div style="margin-top: 10px;" class="row">
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <i class="mdi mdi-cube text-danger icon-lg"></i>
            </div>
            <div class="float-right">
              <br>
              <p class="card-text text-center">Ulangan Harian Pengetahuan 4</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;"><?php 
                  $data =mysqli_fetch_array($perintah->select_where("tb_nilai_k","nis='$_SESSION[nis]'"));
                  echo $data['uh4k'];
                 ?></h3>
              </div>
            </div>
          </div>
          <p class="text-muted mt-3">
            <?php if ($data['uh4k'] < 75) { ?>
              <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"><a href="#" id="demoSwal4" class="btn btn-info btn-block">Click Me...</a></i>
            <?php }else{ ?>
              <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"><a href="#" id="Swal4" class="btn btn-info btn-block">Click Me...</a></i>
            <?php } ?>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <i class="mdi mdi-cube text-danger icon-lg"></i>
            </div>
            <div class="float-right">
              <br>
              <p class="card-text text-center">Ulangan Akhir Semester Ganjil</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;"><?php 
                  $data =mysqli_fetch_array($perintah->select_where("tb_nilai_k","nis='$_SESSION[nis]'"));
                  echo $data['uas'];
                 ?></h3>
              </div>
            </div>
          </div>
          <p class="text-muted mt-3">
            <?php if ($data['uas'] < 75) { ?>
              <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"><a href="#" id="demoSwal5" class="btn btn-info btn-block">Click Me...</a></i>
            <?php }else{ ?>
              <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"><a href="#" id="Swal5" class="btn btn-info btn-block">Click Me...</a></i>
            <?php } ?>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <i class="mdi mdi-cube text-danger icon-lg"></i>
            </div>
            <div class="float-right">
              <br>
              <p class="card-text text-center">Ulangan Harian Pengetahuan 5</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;"><?php 
                  $data =mysqli_fetch_array($perintah->select_where("tb_nilai_k","nis='$_SESSION[nis]'"));
                  echo $data['uh5k'];
                 ?></h3>
              </div>
            </div>
          </div>
          <p class="text-muted mt-3">
            <?php if ($data['uh5k'] < 75) { ?>
              <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"><a href="#" id="demoSwal6" class="btn btn-info btn-block">Click Me...</a></i>
            <?php }else{ ?>
              <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"><a href="#" id="Swal6" class="btn btn-info btn-block">Click Me...</a></i>
            <?php } ?>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <i class="mdi mdi-cube text-danger icon-lg"></i>
            </div>
            <div class="float-right">
              <br>
              <p class="card-text text-center">Ulangan Harian Pengetahuan 6</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;"><?php 
                  $data =mysqli_fetch_array($perintah->select_where("tb_nilai_k","nis='$_SESSION[nis]'"));
                  echo $data['uh6k'];
                 ?></h3>
              </div>
            </div>
          </div>
          <p class="text-muted mt-3">
            <?php if ($data['uh6k'] < 75) { ?>
              <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"><a href="#" id="demoSwal7" class="btn btn-info btn-block">Click Me...</a></i>
            <?php }else{ ?>
              <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"><a href="#" id="Swal7" class="btn btn-info btn-block">Click Me...</a></i>
            <?php } ?>
          </p>
        </div>
      </div>
    </div>
    <div style="margin-top: 10px; margin-left: 1px; width: 100%;" class="row">
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <i class="mdi mdi-cube text-danger icon-lg"></i>
            </div>
            <div class="float-right">
              <p class="card-text text-center">Ulangan Tengah Semester Genap</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;"><?php 
                  $data =mysqli_fetch_array($perintah->select_where("tb_nilai_k","nis='$_SESSION[nis]'"));
                  echo $data['uts_genap'];
                 ?></h3>
              </div>
            </div>
          </div>
          <p class="text-muted mt-3">
            <?php if ($data['uts_genap'] < 75) { ?>
              <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"><a href="#" id="demoSwal8" class="btn btn-info btn-block">Click Me...</a></i>
            <?php }else{ ?>
              <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"><a href="#" id="Swal8" class="btn btn-info btn-block">Click Me...</a></i>
            <?php } ?>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <i class="mdi mdi-cube text-danger icon-lg"></i>
            </div>
            <div class="float-right">
              <br>
              <p class="card-text text-center">Ulangan Harian Pengetahuan 7</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;"><?php 
                  $data =mysqli_fetch_array($perintah->select_where("tb_nilai_k","nis='$_SESSION[nis]'"));
                  echo $data['uh7k'];
                 ?></h3>
              </div>
            </div>
          </div>
          <p class="text-muted mt-3">
            <?php if ($data['uh7k'] < 75) { ?>
              <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"><a href="#" id="demoSwal9" class="btn btn-info btn-block">Click Me...</a></i>
            <?php }else{ ?>
              <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"><a href="#" id="Swal9" class="btn btn-info btn-block">Click Me...</a></i>
            <?php } ?>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <i class="mdi mdi-cube text-danger icon-lg"></i>
            </div>
            <div class="float-right">
              <br>
              <p class="card-text text-center">Ulangan Harian Pengetahuan 8</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;"><?php 
                  $data =mysqli_fetch_array($perintah->select_where("tb_nilai_k","nis='$_SESSION[nis]'"));
                  echo $data['uh8k'];
                 ?></h3>
              </div>
            </div>
          </div>
          <p class="text-muted mt-3">
            <?php if ($data['uh8k'] < 75) { ?>
              <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"><a href="#" id="demoSwal10" class="btn btn-info btn-block">Click Me...</a></i>
            <?php }else{ ?>
              <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"><a href="#" id="Swal10" class="btn btn-info btn-block">Click Me...</a></i>
            <?php } ?>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <i class="mdi mdi-cube text-danger icon-lg"></i>
            </div>
            
              <p class="card-text text-center">Ulangan Kenaikan Kelas</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;"><?php 
                  $data =mysqli_fetch_array($perintah->select_where("tb_nilai_k","nis='$_SESSION[nis]'"));
                  echo $data['ukk'];
                 ?></h3>
              </div>
            
          </div>
          <p class="text-muted mt-3">
            <br>
            <?php if ($data['ukk'] < 75) { ?>
              <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"><a href="#" id="demoSwal11" class="btn btn-info btn-block">Click Me...</a></i>
            <?php }else{ ?>
              <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"><a href="#" id="Swal11" class="btn btn-info btn-block">Click Me...</a></i>
            <?php } ?>
          </p>
        </div>
      </div>
    </div>
    </div>

</form>