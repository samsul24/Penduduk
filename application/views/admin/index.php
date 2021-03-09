<?php if($this->session->userdata('level')!='admin'){redirect('login');};?>
<div class="cc">
  <div class="tableSize">
<head>
<link href='<?=base_url("assets/uploads/images/avatar.png"); ?>' rel='shortcut icon' type='image/x-icon' />
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/summernote/summernote-bs4.css">
  <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
</head>
	
<div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid" >
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2 class="m-0 text-primary" ><i class="nav-icon fas fa-home" ></i> Dashboard</h2>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content" >
      <div class="container-fluid">
      <div class="alert alert-secondary" role="alert">
      <i class="nav-icon fas fa-home"></i> Dashboard
        </div>
        <div class="row">
          <div class="col"> 
              <div class="card">
            <div class="card-body">
                  
    <section class="content" >
      <div class="container-fluid">
        <div class="row">
    <body>

 
    <div class="card bg-gradient-info" style="margin-left:7px">
      <h3 class="card-title" style="margin-right: 1300px;"></h3><br> <br>
    </div>       
    
    </body>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
              <h1 style="font-size: 40px">
            
             </h1> <p style="font-size: 30px">
             User&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
              <?php
              $login = $this->db->get('login')->num_rows();
              print($login);?> 
              </p>
            </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="<?php echo site_url(); ?>userclient" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3 style="font-size: 40px">
            </h3>
                <p style="font-size: 30px">User KK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php
              $kategori = $this->db->get('kategori')->num_rows();
              print($kategori);?> 
                </p>
              </div>
              <div class="icon">
              <i class="ion ion-person-add"></i>


              </div>
              <a href="<?php echo site_url(); ?>kategoriclient" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3 style="font-size: 40px">
           
            </h3>
            
                <p style="font-size: 30px">Penduduk&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php
              $kartupenduduk = $this->db->get('kartupenduduk')->num_rows();
              print($kartupenduduk);?> 
                </p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo site_url(); ?>pendudukclient" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
              <div class="inner">
                <h3 style="font-size: 40px">
           
            </h3>
                <p style="font-size: 30px">Rekap</p>
              </div>
              <div class="icon">
              <i class="ion ion-android-time"></i>

              </div>
              <a href="<?php echo site_url(); ?>Pendudukclient" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            <br>
        </div>
                
</body>   
</div>
</div>

<script src="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/dist/js/adminlte.js"></script>
<script src="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/dist/js/pages/dashboard.js"></script>

</body>
