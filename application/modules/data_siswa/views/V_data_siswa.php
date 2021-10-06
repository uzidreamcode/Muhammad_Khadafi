<div id="page-head">

  <!--Page Title-->
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <div id="page-title">
    <h1 style="margin-top: -20px; margin-left: -20px" class="page-header text-overflow">Data Siswa</h1>
  </div>
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <!--End page title-->


  <!--Breadcrumb-->
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <ol style="margin-bottom: 20px; margin-left: -20px" class="breadcrumb">
    <li><a href="data_dashboard"><i class="demo-pli-home"></i></a></li>
    <li class="active">Data Siswa</li>
  </ol>
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <!--End breadcrumb-->

</div>
<div class="row pad-btm">
  <div class="col-sm-6 toolbar-left">
    <button  data-toggle="modal" data-target="#exampleModal" class="btn btn-purple">tambah</button>
  </div>
  <div class="col-sm-6 toolbar-right">
    <button  data-toggle="modal" data-target="#exampleModal1" class="btn btn-primary">Import</button>
  </div>
</div>

<?php
foreach ($tampil as $gas) {?>
  <div class="col-md-4">
    <div class="panel">
      <div class="panel-body text-center">
        <img alt="Profile Picture" class="img-lg img-circle mar-btm" src="<?= base_url(); ?>assets/img/<?= $gas->foto_siswa ?>">
        <p class="text-lg text-semibold mar-no text-main"><?php echo $gas->nama_siswa?></p>
        <p class="text-muted"><?php echo $gas->nama_kelas?></p>
        <div class="mar-top">
          <button  data-toggle="modal" data-target="#modaledit<?php echo $gas->id_siswa?>" class="btn btn-warning">Edit</button>
          <button data-toggle="modal" data-target="#modalhapus<?php echo $gas->id_siswa?>" class="btn btn-danger">Hapus</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="modaledit<?php echo $gas->id_siswa?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <?= form_open_multipart('data_siswa/edit'); ?>
          <input type="hidden" name="id_siswa" value="<?php echo $gas->id_siswa?>">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Nama</label>
              <input type="text" class="form-control" value="<?php echo $gas->nama_siswa?>" name="nama_siswa" id="inputEmail4">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">NISN</label>
              <input type="text" name="nisn" class="form-control" id="inputPassword4" value="<?php echo $gas->nisn?>" >
            </div>
            <div class="form-group col-md-6">
              <label for="inputState">Kelas</label>
              <select name="kelas" id="inputState" class="form-control">
               <?php foreach ($tampil_kelas as $zi) 
               {$dufil=$gas->id_kelas ?>  
                 <option  <?php echo ($dufil == $zi->id_kelas) ? "selected": "" ?> value="<?php echo $zi->id_kelas?>" ><?php echo $zi->nama_kelas?></option>
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
<div class="modal fade" id="modalhapus<?php echo $gas->id_siswa?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <p class="text-semibold text-main"></p>
        <p>Anda Yakin Ingin Menghapus <b><?php echo $gas->nama_siswa ?></b> ? </p>
        <br>
      
      </div>
      <div class="modal-footer">
          <button data-dismiss="modal" class="btn btn-default" type="button">Batal</button>
          <a class="btn btn-danger" href="<?php echo base_url('data_siswa/hapus/'. $gas->id_siswa) ?>">Hapus Siswa</a>
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
          <div class="form-group col-md-4">
            <label for="inputEmail4">Nama</label>
            <input type="text" class="form-control" name="nama_siswa" id="inputEmail4" placeholder="NAMA">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">NISN</label>
            <input type="text" name="nisn" class="form-control" id="inputPassword4" placeholder="NISN">
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

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo site_url('data_siswa/importFile/') ?>" method="post" enctype="multipart/form-data">
          Upload excel file : 
          <input type="file" name="uploadFile" value="" /><br><br>
          <input type="submit" name="submit" value="Upload" />
        </form>
      </div>

    </div>
  </div>
</div>