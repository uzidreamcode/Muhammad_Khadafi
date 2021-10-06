<div id="page-head">

  <!--Page Title-->
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <div id="page-title">
    <h1 class="page-header text-overflow">Widgets</h1>
  </div>
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <!--End page title-->


  <!--Breadcrumb-->
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <ol class="breadcrumb">
    <li><a href="#"><i class="demo-pli-home"></i></a></li>
    <li class="active">Widgets</li>
  </ol>
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <!--End breadcrumb-->

</div>
<div class="row pad-btm">
  <div class="col-sm-6 toolbar-left">
    <button  data-toggle="modal" data-target="#exampleModal" class="btn btn-purple">tambah</button>
  </div>
</div>

<?php
foreach ($tampil as $gas) {?>
  <div class="col-md-6">
    <div class="panel">
      <div class="panel-body text-center">
        <img alt="Profile Picture" class="img-lg img-circle mar-btm" src="<?= base_url(); ?>assets/img/<?= $gas->foto_siswa ?>">
        <p class="text-lg text-semibold mar-no text-main"><?php echo $gas->nama_siswa?></p>
        <p class="text-muted"><?php echo $gas->nama_kelas?></p>
        <div class="mar-top">
          <button class="btn btn-mint">Follow</button>
          <button class="btn btn-mint">Message</button>
        </div>
      </div>
    </div>
  </div>
<?php }?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <?= form_open_multipart('data_siswa/tambah'); ?>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Nama</label>
              <input type="text" class="form-control" name="nama_siswa" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">NISN</label>
              <input type="text" name="nisn" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
            <div class="form-group col-md-6">
              <label for="inputState">Kelas</label>
              <select name="kelas" id="inputState" class="form-control">
                <option selected>Choose...</option>
                <?php
                foreach ($tampil_kelas as $tkelas) {?>
                  <option value="<?php echo $tkelas->id_kelas?>"><?php echo $tkelas->nama_kelas?></option>
                <?php }?>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Foto</label>
              <input name="gambar" type="file" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
          </div>

          
          <button style="margin-top: 20px" type="submit" class="btn btn-primary">Save changes</button>

          
          

         <?= form_close(); ?>
      </div>

    </div>
  </div>
</div>