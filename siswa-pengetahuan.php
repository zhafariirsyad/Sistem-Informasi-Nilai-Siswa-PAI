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
                  $data =mysqli_fetch_array($perintah->select_where("tb_nilai_p","nis='$_SESSION[nis]'"));
                      if ($data['uh1p'] < 75) {
                     ?>
                       <p style="color: red;" align="center" class="uh1peng"><?php echo $data['uh1p']; ?></p>
                    <?php
                    }else{
                      echo $data['uh1p'];
                  } ?>
                  
                 </h3>
              </div>
            </div>
          </div>
          <p class="text-muted mt-3">
            <?php if ($data['uh1p'] < 75) { ?>
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
            <div class="float-center">
              <br>
              <p class="card-text text-center">Ulangan Harian Pengetahuan 2</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;">
                  <?php 
                  $data =mysqli_fetch_array($perintah->select_where("tb_nilai_p","nis='$_SESSION[nis]'"));
                 if ($data['uh2p'] < 75) {
                     ?>
                       <p style="color: red;" align="center" class="uh2peng"><?php echo $data['uh2p']; ?></p>
                    <?php
                    }else{
                      echo $data['uh2p'];
                  } ?>
                  
                 </h3>
              </div>
            </div>
          </div>
          <p class="text-muted mt-3">
            <?php if ($data['uh2p'] < 75) { ?>
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
            <div class="float-center"> 
              <p class="card-text text-center" style="font-size: 15px !important;">Ulangan Tengah Semester Ganjil</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;"><?php 
                  $data =mysqli_fetch_array($perintah->select_where("tb_nilai_p","nis='$_SESSION[nis]'"));
              if ($data['uts_ganjil'] < 75) {
                     ?>
                       <p style="color: red;" align="center" class="utspeng"><?php echo $data['uts_ganjil']; ?></p>
                    <?php
                    }else{
                      echo $data['uts_ganjil'];
                  } ?>
                  
                </h3>
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
            <div class="float-center">
              <p class="card-text text-center">Ulangan Harian Pengetahuan 3</p>
              <div class="fluid-container">
                <br>
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;"><?php 
                  $data =mysqli_fetch_array($perintah->select_where("tb_nilai_p","nis='$_SESSION[nis]'"));
                    if ($data['uh3p'] < 75) {
                     ?>
                       <p style="color: red;" align="center" class="uh3peng"><?php echo $data['uh3p']; ?></p>
                    <?php
                    }else{
                      echo $data['uh3p'];
                  } ?>
                  
                </h3>
              </div>
            </div>
          </div>
          <p class="text-muted mt-3">
            <?php if ($data['uh3p'] < 75) { ?>
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
            <div class="float-center">
              <br>
              <p class="card-text text-center">Ulangan Harian Pengetahuan 4</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;"><?php 
                  $data =mysqli_fetch_array($perintah->select_where("tb_nilai_p","nis='$_SESSION[nis]'"));
                  if ($data['uh4p'] < 75) {
                     ?>
                       <p style="color: red;" align="center" class="uh4peng"><?php echo $data['uh4p']; ?></p>
                    <?php
                    }else{
                      echo $data['uh4p'];
                  }
                 ?></h3>
              </div>
            </div>
          </div>
          <p class="text-muted mt-3">
            <?php if ($data['uh4p'] < 75) { ?>
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
            <div class="float-center">
              <p class="card-text text-center">Ulangan Akhir Semester Ganjil</p>
              <div class="fluid-container"><br>
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;">
                  <?php 
                  $data =mysqli_fetch_array($perintah->select_where("tb_nilai_p","nis='$_SESSION[nis]'"));
                   if ($data['uas'] < 75) {
                     ?>
                       <p style="color: red;" align="center" class="uaspeng"><?php echo $data['uas']; ?></p>
                    <?php
                    }else{
                      echo $data['uas'];
                  } 
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
            <div class="float-center">
              <br>
              <p class="card-text text-center">Ulangan Harian Pengetahuan 5</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;">
                  <?php 
                  $data =mysqli_fetch_array($perintah->select_where("tb_nilai_p","nis='$_SESSION[nis]'"));
            if ($data['uh5p'] < 75) {
                     ?>
                       <p style="color: red;" align="center" class="uh5peng"><?php echo $data['uh5p']; ?></p>
                    <?php
                    }else{
                      echo $data['uh5p'];
                  }
                 ?></h3>
              </div>
            </div>
          </div>
          <p class="text-muted mt-3">
            <?php if ($data['uh5p'] < 75) { ?>
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
            <div class="float-center">
              <br>
              <p class="card-text text-center">Ulangan Harian Pengetahuan 6</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;"><?php 
                  $data =mysqli_fetch_array($perintah->select_where("tb_nilai_p","nis='$_SESSION[nis]'"));
                   if ($data['uh6p'] < 75) {
                     ?>
                       <p style="color: red;" align="center" class="uh6peng"><?php echo $data['uh6p']; ?></p>
                    <?php
                    }else{
                      echo $data['uh6p'];
                  }
                 ?></h3>
              </div>
            </div>
          </div>
          <p class="text-muted mt-3">
            <?php if ($data['uh6p'] < 75) { ?>
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
            <div class="float-center">
              <p class="card-text text-center">Ulangan Tengah Semester Genap</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;"><?php 
                  $data =mysqli_fetch_array($perintah->select_where("tb_nilai_p","nis='$_SESSION[nis]'"));
               if ($data['uts_genap'] < 75) {
                     ?>
                       <p style="color: red;" align="center" class="utsgen"><?php echo $data['uts_genap']; ?></p>
                    <?php
                    }else{
                      echo $data['uts_genap'];
                  } ?>
                 </h3>
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
            <div class="float-center">
              <br>
              <p class="card-text text-center">Ulangan Harian Pengetahuan 7</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;"><?php 
                  $data =mysqli_fetch_array($perintah->select_where("tb_nilai_p","nis='$_SESSION[nis]'"));
                  if ($data['uh7p'] < 75) {
                     ?>
                       <p style="color: red;" align="center" class="uh7peng"><?php echo $data['uh7p']; ?></p>
                    <?php
                    }else{
                      echo $data['uh7p'];
                  } ?>
                 </h3>
              </div>
            </div>
          </div>
          <p class="text-muted mt-3">
            <?php if ($data['uh7p'] < 75) { ?>
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
            <div class="float-center">
              <br>
              <p class="card-text text-center">Ulangan Harian Pengetahuan 8</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;"><?php 
                  $data =mysqli_fetch_array($perintah->select_where("tb_nilai_p","nis='$_SESSION[nis]'"));
               if ($data['uh8p'] < 75) {
                     ?>
                       <p style="color: red;" align="center" class="uh8peng"><?php echo $data['uh8p']; ?></p>
                    <?php
                    }else{
                      echo $data['uh8p'];
                  }
                 ?></h3>
              </div>
            </div>
          </div>
          <p class="text-muted mt-3">
            <?php if ($data['uh8p'] < 75) { ?>
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
                  $data =mysqli_fetch_array($perintah->select_where("tb_nilai_p","nis='$_SESSION[nis]'"));
                  if ($data['ukk'] < 75) {
                     ?>
                       <p style="color: red;" align="center" class="ukke"><?php echo $data['ukk']; ?></p>
                    <?php
                    }else{
                      echo $data['ukk'];
                  } ?> 
                 </h3>
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
<style type="text/css">
  .uh1peng, .uh2peng, .utspeng,.uh3peng,.uh4peng, .uaspeng,
 .uh5peng,.uh6peng, .utsgen,.uh7peng,.uh8peng,.ukke
 {
    animation: kedip 0.5s infinite alternate;
  }
  @keyframes kedip {
    from{
      color: red;
    }
    to{
      color: black;
    }
  }
</style>