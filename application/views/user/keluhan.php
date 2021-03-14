
<div class="carousel-item-a intro-item bg-image" style="background-image: url(assets/img/background2.jpg)">
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

<!-- <img src="<?php echo base_url(); ?>css/assets/img/12.png"  width="50px" height="50px"> -->
<script src="<?php echo base_url() ?>css/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>css/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url() ?>css/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url() ?>css/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url() ?>css/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url() ?>css/assets/vendor/scrollreveal/scrollreveal.min.js"></script>

  <!-- Vendor CSS Files -->
  <title>BBPPMPV</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="icon" href="<?php echo base_url() ?>css/assets/img/vedc.jpg">
<link href="<?php echo base_url() ?>css/assets/img1/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url() ?>css/assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>css/assets/vendor/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>css/assets/vendor/animate.css/animate.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>css/assets/vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>css/assets/vendor/owl.carousel/assets/owl.carousel.min.css">

  <!-- Template Main CSS File -->  
  <link rel="stylesheet" href="<?php echo base_url() ?>css/assets/css/style.css">


  <!-- =======================================================
  * Template Name: EstateAgency - v2.0.0
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html">MMPP<span class="color-b" style="color:#007bff">MPV</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="<?php echo site_url(); ?>login/out">Logout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url(); ?>userlogin">Beranda</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url(); ?>userlogin/keluhan">Keluhan</a>
          </li>
        </ul>
      </div>
     
    </div>
  </nav><!-- End Header/Navbar -->
<br><br><br><br>

    <div class="row mt-3" style="margin-left:300px;">
        <div class="col d-flex justify-content-center">
                <div class="card-body">

<body>
<div class="container">
 <div class="w3-panel w3-teal">
 <center><h3 style="color:white;">Form pengaduan</h3></center>
 </div>
 <form action="<?php echo site_url('keluhanclient/post_process');?>" class="needs-validation" method="POST" enctype="multipart/form-data">
    <div class="w3-row-padding">
        <div class="w3-half">
            <div class="form-group">
                            <label for="image">Foto</label>
                                <div style="background : black; width: 100px; height: 130px;"> </div>
                                <input type="file" class="form-control-file" placeholder="Choice Foto" name="image" >
                                <div class="invalid-feedback">
                                <?php echo form_error('image') ?>
                                </div>
            </div>
        </div>
    </div><br>
    <div class="w3-row-padding">
        <div class="w3-half">
                <input class="w3-input w3-border" type="text" placeholder="Nama" name="nama_pengguna" style="width:200px;hight:100px" id="nama_pengguna">
        </div>
    </div>
    <div class="w3-padding">
            <textarea name="komentar"style="width:640px;height:200px" id="komentar"></textarea>
    </div>
    <button type="button" class="w3-button w3-block w3-teal w3-section w3-padding" data-toggle="modal" data-target="#myModal" style="margin-left:15px;width:640px;height:40px">
                                Kirim
                            </button>
                            <!-- The Modal -->
                            <div class="modal fade" id="myModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <p>Apa anda yakin ingin menambah data ini ?</p>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Kirim</button>
                                            <button type="button" class="btn btn-dark" data-dismiss="modal">Batal</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
        <!-- <button class="w3-button w3-block w3-teal w3-section w3-padding" type="submit" >Kirim Komentar</button> -->
    </div>
    </form>
</div>
<div class="container">

     </div>
     </div>
 </div>
</body>

            </div>
        </div>
    </div>

 <br><br><br><br><br><br><br><br><br>
  <!-- ======= Footer ======= -->
 <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <!-- <h3 class="w-title-a text-brand">PlantEducation</h3> -->
              <h3 class="w-title-a text-brand">BBPP<span class="color-b">MPV</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                Adalah situs web yang menyediakan Kependudukan tentang keaneragaman tumbuhan yang diperuntukkan untuk siswa sekolah dasar
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <!-- <span class="color-text-a">Phone .</span> contact@example.com</li> -->
                <li class="color-a">
                  <span class="color-text-a">Email .</span>BBPPMPV@gmail.com</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">game</h3>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <ul class="list-unstyled">
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Puzzle</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Arrange Numbers</a>
                  </li>
                 
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">About me</h3>
            </div>
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="<?php echo site_url(); ?>login/footer">Samsul Islam B.S</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="<?php echo site_url(); ?>login/footer2">Bethania Dwi R</a>
                </li>
                <!-- <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Hong Kong</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Argentina</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Singapore</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Philippines</a>
                </li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">Home</a>
              </li>
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Property</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Blog</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-dribbble" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              <!-- © Copyright -->
              <!-- <span class="color-a">EstateAgency</span> All Rights Reserved. -->
            </p>
          </div>
          <div class="credits">
           </div>
        </div>
      </div>
    </div>
  </footer>
 
  <script src="<?php echo base_url() ?>css/assets/js/main.js"></script>

</body>

</html> 
