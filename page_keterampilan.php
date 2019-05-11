<?php 
  require_once 'lib/controller.php';
 ?>
   <h1>Siswa Kompeten</h1>
 <div class="row">
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card" style="margin-top: 10px;">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="text-center">
              <i class="mdi mdi-cube text-danger icon-lg"></i>
            </div>
              <p class="card-text text-center"> UH 1 Keterampilan</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;">
                     <?php
                    $sql = "SELECT * from tb_nilai_k where uh1k > 75";
                    $query = mysqli_query($conn,$sql);
                    $data = mysqli_num_rows($query);
                    echo  $data;
                    ?>
                </h3>
              </div>
          </div>
        </div>
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Lihat Detail</button>
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Nilai UH 1 Keterampilan</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
          <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0"> 
          <thead>
          <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Nilai</th>
          </tr>
        </thead>
      <tbody>
          <?php 
            $no = 0;
            $query = mysqli_query($conn,"SELECT * from tb_nilai_k where uh1k > 75");
            while ($data = mysqli_fetch_assoc($query)) {
              $no++;
              ?>
          <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data['nis'] ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['uh1k'] ?></td>
          </tr>
              <?php
            }
           ?>
        </tbody>
                        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card" style="margin-top: 10px;">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="text-center">
              <i class="mdi mdi-cube text-danger icon-lg"></i>
            </div>
              <p class="card-text text-center"> UH 2 Keterampilan</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;">
                     <?php
                    $sql = "SELECT * from tb_nilai_k where uh2k > 75";
                    $query = mysqli_query($conn,$sql);
                    $data = mysqli_num_rows($query);
                    echo  $data;
                    ?>
                </h3>
              </div>
          </div>
       
        </div>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Lihat Detail</button>
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Nilai UH 2 Keterampilan</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
          <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0"> 
          <thead>
          <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Nilai</th>
          </tr>
        </thead>
      <tbody>
          <?php 
            $no = 0;
            $query = mysqli_query($conn,"SELECT * from tb_nilai_k where uh2k > 75");
            while ($data = mysqli_fetch_assoc($query)) {
              $no++;
              ?>
          <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data['nis'] ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['uh2k'] ?></td>
          </tr>
              <?php
            }
           ?>
        </tbody>
                        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card" style="margin-top: 10px;">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="text-center">
              <i class="mdi mdi-cube text-danger icon-lg"></i>
            </div>
              <p class="card-text text-center"> UTS Ganjil Keterampilan</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;">
                     <?php
                    $sql = "SELECT * from tb_nilai_k where uts_ganjil > 75";
                    $query = mysqli_query($conn,$sql);
                    $data = mysqli_num_rows($query);
                    echo  $data;
                    ?>
                </h3>
              </div>
          </div>
        </div>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Lihat Detail</button>
<div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Nilai UTS Ganjil Keterampilan</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
          <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0"> 
          <thead>
          <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Nilai</th>
          </tr>
        </thead>
      <tbody>
          <?php 
            $no = 0;
            $query = mysqli_query($conn,"SELECT * from tb_nilai_k where uts_ganjil > 75");
            while ($data = mysqli_fetch_assoc($query)) {
              $no++;
              ?>
          <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data['nis'] ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['uts_ganjil'] ?></td>
          </tr>
              <?php
            }
           ?>
        </tbody>
                        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card" style="margin-top: 10px;">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="text-center">
              <i class="mdi mdi-cube text-danger icon-lg"></i>
            </div>
              <p class="card-text text-center"> UH 3 Keterampilan</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;">
                     <?php
                    $sql = "SELECT * from tb_nilai_k where uh3k > 75";
                    $query = mysqli_query($conn,$sql);
                    $data = mysqli_num_rows($query);
                    echo  $data;
                    ?>
                </h3>
              </div>
          </div>
       
        </div>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal4">Lihat Detail</button>
<div id="myModal4" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Nilai UH 3 Keterampilan</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
          <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0"> 
          <thead>
          <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Nilai</th>
          </tr>
        </thead>
      <tbody>
          <?php 
            $no = 0;
            $query = mysqli_query($conn,"SELECT * from tb_nilai_k where uh3k > 75");
            while ($data = mysqli_fetch_assoc($query)) {
              $no++;
              ?>
          <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data['nis'] ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['uh3k'] ?></td>
          </tr>
              <?php
            }
           ?>
        </tbody>
                        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
      </div>
    </div>
 </div>
 <div class="row">
   
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card" style="margin-top: 10px;">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="text-center">
              <i class="mdi mdi-cube text-danger icon-lg"></i>
            </div>
              <p class="card-text text-center"> UH 4 Keterampilan</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;">
                     <?php
                    $sql = "SELECT * from tb_nilai_k where uh4k > 75";
                    $query = mysqli_query($conn,$sql);
                    $data = mysqli_num_rows($query);
                    echo  $data;
                    ?>
                </h3>
              </div>
          </div>
       
        </div>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal5">Lihat Detail</button>
<div id="myModal5" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Nilai UH 4 Keterampilan</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
          <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0"> 
          <thead>
          <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Nilai</th>
          </tr>
        </thead>
      <tbody>
          <?php 
            $no = 0;
            $query = mysqli_query($conn,"SELECT * from tb_nilai_k where uh4k > 75");
            while ($data = mysqli_fetch_assoc($query)) {
              $no++;
              ?>
          <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data['nis'] ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['uh4k'] ?></td>
          </tr>
              <?php
            }
           ?>
        </tbody>
                        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card" style="margin-top: 10px;">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="text-center">
              <i class="mdi mdi-cube text-danger icon-lg"></i>
            </div>
              <p class="card-text text-center"> UAS Keterampilan</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;">
                     <?php
                    $sql = "SELECT * from tb_nilai_k where uas > 75";
                    $query = mysqli_query($conn,$sql);
                    $data = mysqli_num_rows($query);
                    echo  $data;
                    ?>
                </h3>
              </div>
          </div>
       
        </div>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal6">Lihat Detail</button>
<div id="myModal6" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Nilai UAS Keterampilan</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
          <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0"> 
          <thead>
          <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Nilai</th>
          </tr>
        </thead>
      <tbody>
          <?php 
            $no = 0;
            $query = mysqli_query($conn,"SELECT * from tb_nilai_k where uas > 75");
            while ($data = mysqli_fetch_assoc($query)) {
              $no++;
              ?>
          <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data['nis'] ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['uas'] ?></td>
          </tr>
              <?php
            }
           ?>
        </tbody>
                        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card" style="margin-top: 10px;">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="text-center">
              <i class="mdi mdi-cube text-danger icon-lg"></i>
            </div>
              <p class="card-text text-center"> UH 5  Keterampilan</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;">
                     <?php
                    $sql = "SELECT * from tb_nilai_k where uh5k > 75";
                    $query = mysqli_query($conn,$sql);
                    $data = mysqli_num_rows($query);
                    echo  $data;
                    ?>
                </h3>
              </div>
          </div>
       
        </div>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal7">Lihat Detail</button>
<div id="myModal7" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Nilai UH 5 Keterampilan</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
          <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0"> 
          <thead>
          <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Nilai</th>
          </tr>
        </thead>
      <tbody>
          <?php 
            $no = 0;
            $query = mysqli_query($conn,"SELECT * from tb_nilai_k where uh5k > 75");
            while ($data = mysqli_fetch_assoc($query)) {
              $no++;
              ?>
          <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data['nis'] ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['uh5k'] ?></td>
          </tr>
              <?php
            }
           ?>
        </tbody>
                        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card" style="margin-top: 10px;">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="text-center">
              <i class="mdi mdi-cube text-danger icon-lg"></i>
            </div>
              <p class="card-text text-center"> UH 6  Keterampilan</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;">
                     <?php
                    $sql = "SELECT * from tb_nilai_k where uh6k > 75";
                    $query = mysqli_query($conn,$sql);
                    $data = mysqli_num_rows($query);
                    echo  $data;
                    ?>
                </h3>
              </div>
          </div>
        </div>
              <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal8">Lihat Detail</button>
<div id="myModal8" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Nilai UH 6 Keterampilan</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
          <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0"> 
          <thead>
          <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Nilai</th>
          </tr>
        </thead>
      <tbody>
          <?php 
            $no = 0;
            $query = mysqli_query($conn,"SELECT * from tb_nilai_k where uh6k > 75");
            while ($data = mysqli_fetch_assoc($query)) {
              $no++;
              ?>
          <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data['nis'] ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['uh6k'] ?></td>
          </tr>
              <?php
            }
           ?>
        </tbody>
                        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
      </div>
    </div>
 </div>
 <div class="row">
   
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card" style="margin-top: 10px;">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="text-center">
              <i class="mdi mdi-cube text-danger icon-lg"></i>
            </div>
              <p class="card-text text-center"> UTS Genap  Keterampilan</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;">
                     <?php
                    $sql = "SELECT * from tb_nilai_k where uts_genap > 75";
                    $query = mysqli_query($conn,$sql);
                    $data = mysqli_num_rows($query);
                    echo  $data;
                    ?>
                </h3>
              </div>
          </div>
        </div>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal9">Lihat Detail</button>
<div id="myModal9" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Nilai UTS Genap Keterampilan</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
          <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0"> 
          <thead>
          <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Nilai</th>
          </tr>
        </thead>
      <tbody>
          <?php 
            $no = 0;
            $query = mysqli_query($conn,"SELECT * from tb_nilai_k where uts_genap > 75");
            while ($data = mysqli_fetch_assoc($query)) {
              $no++;
              ?>
          <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data['nis'] ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['uts_genap'] ?></td>
          </tr>
              <?php
            }
           ?>
        </tbody>
                        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card" style="margin-top: 10px;">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="text-center">
              <i class="mdi mdi-cube text-danger icon-lg"></i>
            </div>
              <p class="card-text text-center"> UH 7  Keterampilan</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;">
                     <?php
                    $sql = "SELECT * from tb_nilai_k where uh7k > 75";
                    $query = mysqli_query($conn,$sql);
                    $data = mysqli_num_rows($query);
                    echo  $data;
                    ?>
                </h3>
              </div>
          </div>
        </div>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal10">Lihat Detail</button>
<div id="myModal10" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Nilai UH 7 Keterampilan</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
          <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0"> 
          <thead>
          <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Nilai</th>
          </tr>
        </thead>
      <tbody>
          <?php 
            $no = 0;
            $query = mysqli_query($conn,"SELECT * from tb_nilai_k where uh7k > 75");
            while ($data = mysqli_fetch_assoc($query)) {
              $no++;
              ?>
          <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data['nis'] ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['uh7k'] ?></td>
          </tr>
              <?php
            }
           ?>
        </tbody>
                        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card" style="margin-top: 10px;">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="text-center">
              <i class="mdi mdi-cube text-danger icon-lg"></i>
            </div>
              <p class="card-text text-center"> UH 8  Keterampilan</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;">
                     <?php
                    $sql = "SELECT * from tb_nilai_k where uh8k > 75";
                    $query = mysqli_query($conn,$sql);
                    $data = mysqli_num_rows($query);
                    echo  $data;
                    ?>
                </h3>
              </div>
          </div>
        </div>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal11">Lihat Detail</button>
<div id="myModal11" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Nilai UH 8 Keterampilan</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
          <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0"> 
          <thead>
          <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Nilai</th>
          </tr>
        </thead>
      <tbody>
          <?php 
            $no = 0;
            $query = mysqli_query($conn,"SELECT * from tb_nilai_k where uh8k > 75");
            while ($data = mysqli_fetch_assoc($query)) {
              $no++;
              ?>
          <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data['nis'] ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['uh8k'] ?></td>
          </tr>
              <?php
            }
           ?>
        </tbody>
                        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card" style="margin-top: 10px;">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="text-center">
              <i class="mdi mdi-cube text-danger icon-lg"></i>
            </div>
              <p class="card-text text-center"> UKK  Keterampilan</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0" style="text-align: center !important;">
                     <?php
                    $sql = "SELECT * from tb_nilai_k where ukk > 75";
                    $query = mysqli_query($conn,$sql);
                    $data = mysqli_num_rows($query);
                    echo  $data;
                    ?>
                </h3>
              </div>
          </div>
        </div>
              <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal12">Lihat Detail</button>
<div id="myModal12" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Nilai UKK Keterampilan</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
          <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0"> 
          <thead>
          <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Nilai</th>
          </tr>
        </thead>
      <tbody>
          <?php 
            $no = 0;
            $query = mysqli_query($conn,"SELECT * from tb_nilai_k where ukk > 75");
            while ($data = mysqli_fetch_assoc($query)) {
              $no++;
              ?>
          <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data['nis'] ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['ukk'] ?></td>
          </tr>
              <?php
            }
           ?>
        </tbody>
                        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
      </div>
    </div>
 </div>
