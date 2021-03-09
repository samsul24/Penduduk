<?php if($this->session->userdata('level')!='admin'){redirect('login');};?>

<div class="cc">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid" >
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2 class="m-0 text-primary" ><i class="nav-icon fas fa-microphone" ></i> Data Kategori</h2>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      <div class="alert alert-secondary" role="alert">
      <i class="nav-icon fas fa-home"></i> Dashboard &nbsp; &nbsp; > &nbsp;  &nbsp;<i class="nav-icon fas fa-microphone"></i> Kategori
        </div>
        <div class="row">
          <div class="col"> 
              <!-- Tabel -->
              <div class="card">
            <!-- /.card-header -->
            <div class="card-body" >
                <div class='card-header' style="margin-left:-20px;">
              

                    </div>   
                  <span>
                  <br>
                    <?php
                   if (!empty($this->session->flashdata('pesan')))
                   {
                     ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $this->session->flashdata('pesan');?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  <?php   
                  }
                  ?>

                  <?php
                   if (!empty($this->session->flashdata('pesan2')))
                   {
                     ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <?= $this->session->flashdata('pesan2');?>
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
                 <?php   
                 }
                 ?>

                  <?php
                   if (!empty($this->session->flashdata('pesan3')))
                   {
                     ?>
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <?= $this->session->flashdata('pesan3');?>
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
                 <?php   
                 }
                 ?>
                 </span> 
                 
               
     
          <div class="container" style="margin-left:-10px;">
            <h2>Pilih Penduduk</h2>
              <form action="" method="post" style="width: 400px; height: 130px;">
                <select name="id_penduduk" class="form-control" >
         
                  <?php 
                  foreach ($penduduk as $rows) : ?>
                    <option value="<?= $rows->id_penduduk ?>"><?= $rows->no_kk ?></option>
                  <?php endforeach;
           ?>
                </select><br>
                <button type="submit" class="btn btn-primary form-control"style="width: 100px; height: 40px;">Pilih</button>
              </form>
            </div>
          </div>
          <table id="tabel" class="table table-bordered"  style="width:400px">
                <thead>
              
                <tr>
                  <th>No</th>
                  <th>Foto</th>
                  <th>No KK</th>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>TTL</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>Agama</th>
                  <th>Status Perkawinan</th>
                  <th>Pekerjaan</th>
                  <th>Kewarganegaraan</th>
                  <th>Berlaku</th>
                  <th>Aksi</th>
                 
                </tr>
                </thead>
                <tbody>
          <?php if (!empty($isipenduduk)) :
          $i= 1;
            foreach ($isipenduduk as $rows) :
          ?>
              
                <td><?php echo $i++; ?></td>
                        <td><img src="<?php echo base_url('img/foto/' . $rows->image) ?>" width="90" hight="120" /></td>
                        <td><?php echo $rows->no_kk; ?></td>
                        <td><?php echo $rows->nik; ?></td>
                        <td><?php echo $rows->nama ; ?></td>
                        <td><?php echo $rows->ttl; ?></td>
                        <td><?php echo $rows->jenis_kelamin; ?></td>
                        <td><?php echo $rows->alamat; ?></td>
                        <td><?php echo $rows->agama; ?></td>
                        <td><?php echo $rows->status_perkawinan; ?></td>
                        <td><?php echo $rows->pekerjaan; ?></td>
                        <td><?php echo $rows->kewarganegaraan; ?></td>
                        <td><?php echo $rows->berlaku; ?></td>
                        <td>
                        
                
            <?php endforeach;
          endif ?>
        </div>
      </div>
    </div>
  </div>
</div>       
            <!-- /.card-body -->
          </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->