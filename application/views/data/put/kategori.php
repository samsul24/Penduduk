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
      <i class="nav-icon fas fa-home"></i> Dashboard &nbsp; &nbsp; > &nbsp;  &nbsp;<i class="nav-icon fas fa-tablet"></i> Penduduk&nbsp; > <i class="nav-icon fas fa-pen"></i>Update kategori
        </div>
            <form action="<?php echo site_url(); ?>kategoriclient/put_process"  class="needs-validation" method="POST" enctype="multipart/form-data" onload="setSelectBoxByText()">
                 <?php foreach ($kategori as $rows) : ?>
                            <div class="form-group">
                                <label for="id_kk">ID :</label>
                                <input type="text" class="form-control" id="id_kk" value="<?php echo $rows->id_kk; ?>" name="id_kk" required readonly>
                            </div>
                            <div class="form-group">
                                <label for="no_kk">No KK :</label>
                                <input type="text" class="form-control" id="no_kk" value="<?php echo $rows->no_kk; ?>" name="no_kk" required  >
                            </div>
                            <div class="form-group">
                                <label for="nama_keluarga">Nama Keluarga :</label>
                                <input type="text" class="form-control" id="nama_keluarga" placeholder="Nama Keluarga" value="<?php echo $rows->nama_keluarga;?>" name="nama_keluarga" required > 
                            </div>
                            <div class="form-group">
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">
                            <a  style="color:white">Update </a>

                            </button>
                            <!-- The Modal -->
                            <div class="modal fade" id="myModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <p>Apa anda yakin ingin mengubah data ini ?</p>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-warning"><a  style="color:white">Update </a></button>
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
                                var eid = "kategori";
                                var etxt = document.getElementById("selected").value;
                                document.getElementById("selected").style.display = "none";
                                setSelectBoxByText(eid, etxt)
                            </script>
                        <?php endforeach; ?>
                    </form>
                </div>
            </div>
        </div>