<?php if($this->session->userdata('level')!='admin'){redirect('login');};?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<div class="cc" style="width:1300px">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid" >
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2 class="m-0 text-primary" ><i class="nav-icon fas fa-tablet" ></i> Data Penduduk</h2>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      <div class="alert alert-secondary" role="alert">
      <i class="nav-icon fas fa-home"></i> Dashboard &nbsp; &nbsp; > &nbsp;  &nbsp;<i class="nav-icon fas fa-tablet"></i> Penduduk&nbsp; > <i class="nav-icon fas fa-plus"></i>tambah Penduduk
        </div>
                <form action="<?php echo site_url('pendudukclient/post_process');?>" class="needs-validation" method="POST" enctype="multipart/form-data">
                         <div class="form-group">
                            <label for="no_kk">NO Kartu Keluarga :</label>
                            <select class="form-control" name="no_kk" >
                            <option value="" selected="">-- Pilih --</option>
                            <?php foreach ($kategori as $rows) : ?>
                                <option value="<?php echo $rows->no_kk; ?>"> <?php echo $rows->no_kk; ?> - <?php echo $rows->nama_keluarga; ?></option>
                            <?php endforeach; ?>
                            </select>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="text" class="form-control" id="nik" placeholder="nik"  name="nik"  >
                            </div>
                        <div class="form-group">
                            <label for="image">Foto</label>
                                <div style="background : black; width: 100px; height: 130px;"> </div>
                                <input type="file" class="form-control-file" placeholder="Choice Foto" name="image" >
                                <div class="invalid-feedback">
                                <?php echo form_error('image') ?>
                                </div>
                        </div>
                        <div class="form-group">
                                <label for="nama">Nama :</label>
                                <input type="text" class="form-control" id="nama" placeholder="nama"  name="nama"  >
                            </div>
                        <div class="form-group">
                                <label for="ttl">TTL :</label>
                                <input type="date" class="form-control" id="ttl" placeholder="ttl"  name="ttl"  >
                            </div>
                        <div class="form-group">
                            <label for="sel1" >Jenis Kelamin :</label>
                                <input type="text" class="form-control" id="selected" >
                                 <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" >
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                </select>
                        </div>
                        <div class="form-group">
                                <label for="alamat">Alamat :</label><br>
                                Alamat :<input type="text" class="form-control" id="alamat" placeholder="alamat"  name="alamat" style="width:100px" >
                                <input type="text" class="form-control" id="alamat" placeholder="alamat"  name="alamat"  >
                                <input type="text" class="form-control" id="alamat" placeholder="alamat"  name="alamat"  >
                                <input type="text" class="form-control" id="alamat" placeholder="alamat"  name="alamat"  >
                        </div>
                        <div class="form-group">
                                <label for="agama">Agama :</label>
                                <input type="text" class="form-control" id="agama" placeholder="agama"  name="agama"  >
                        </div>
                        <div class="box-body">
                            <div class="form-group1">
                            <label for="sel1" >Status Perkawinan :</label>
                                 <select class="form-control" id="status_perkawinan" name="status_perkawinan" >
                                        <option value="Belum Kawin">Belum Kawin</option>
                                        <option value="Sudah Kawin">Sudah Kawin</option>
                                </select>
                            </div>
                        </div>
                        <div class="box-body">
                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan </label>
                                 <select class="form-control" id="pekerjaan" name="pekerjaan" >
                                        <option value="Polisi">Polisi</option>
                                        <option value="TNI">TNI</option>
                                        <option value="PNS">PNS</option>
                                        <option value="Swasta">Swasta</option>
                                        <option value="Wira-swasta">Wira-swasta</option>
                                        <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kewarganegaraan">Kewarganegaraan </label>
                            <input type="text" class="form-control" id="kewarganegaraan" placeholder="Enter Pekerjaan" name="kewarganegaraan" required>
                        </div>
                    
                        <div class="form-group">
                            <label for="berlaku">Berlaku </label>
                            <input type="text" class="form-control" id="berlaku" placeholder="Enter Berlaku" name="berlaku" required>
                           
                        </div>
                        <div class="form-group">
                            <label for="gaji">Gaji </label>
                            <input type="text" class="form-control" id="gaji" placeholder="Enter gaji" name="gaji" required>
                           
                        </div>
                    
                        <!-- <div class="form-group">
                                <label for="kewarganegaraan">Kewarganegaraan :</label>
                                <input type="text" class="form-control" id="kewarganegaraan" placeholder="kewarganegaraan"  name="Kewarganegaraan"  >
                                <div class="valid-feedback"></div>
                        </div>
                        <div class="form-group">
                                <label for="berlaku">Berlaku :</label>
                                <input type="text" class="form-control" id="berlaku" placeholder="berlaku"  name="Berlaku"  >
                                <div class="valid-feedback"></div>
                        </div> -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                Tambah
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
                                            <button type="submit" class="btn btn-primary">Tambah</button>
                                            <button type="button" class="btn btn-dark" data-dismiss="modal">Batal</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                            <script>
                                function setSelectBoxByText(eid, etxt) {
                                    var eid = document.getElementById(eid);
                                    for (var i = 0; i < eid.options.length; ++i) {
                                        if (eid.options[i].value === etxt)
                                            eid.options[i].selected = true;
                                    }
                                }
                                var eid = "penduduk";
                                var etxt = document.getElementById("selected").value;
                                document.getElementById("selected").style.display = "none";
                                setSelectBoxByText(eid, etxt)
                            </script>
                </form>
            </div>
        </div>
    </div>
</div>
