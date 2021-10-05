<button data-target="#tambahguru" data-toggle="modal" class="btn btn-success">Tambah</button>
</br></br>
<div class="col-sm-12">
					        <div class="panel">
					            <div class="panel-heading">
					                <h3 class="panel-title">Data Guru</h3>
					            </div>
					
					            <!-- Striped Table -->
					            <!--===================================================-->
					            <div class="panel-body">
					                <div class="table-responsive">
					                    <table class="table table-striped">
					                        <thead>
					                            <tr>
					                                <th>Nama</th>
					                                <th>Alamat</th>
					                                <th>Setting</th>
					                            </tr>
					                        </thead>
					                        <tbody>
                                            <?php foreach($dataguruku as $res) { ?>
					                            <tr>
					                                <td><a href="#fakelink" class="btn-link"><?php echo $res->nama_guru;?></a></td>
					                                <td><?php echo $res->alamat_guru;?></td>
					                                <td>
                                                    <button class="btn btn-warning">Edit</button>
                                                    <button class="btn btn-danger">Hapus</button>
                                                    </td>
					                            </tr>
                                            <?php } ?>

					                        </tbody>
					                    </table>
					                </div>
					            </div>
					            <!--===================================================-->
					            <!-- End Striped Table -->
					
					        </div>
					    </div>



    <!-- Ini modal Tambah-->
    <!--===================================================-->
    <div class="modal fade" id="tambahguru" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!--Modal header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title">Tambah Guru</h4>
                </div>

                <?= form_open_multipart('data_guru/tambahguru'); ?>
                <!--Modal body-->
                <div class="modal-body">
                                <div class="row">
					                        <div class="col-sm-6">
					                            <div class="form-group">
					                                <label class="control-label">Nama</label>
					                                <input type="text" name="nama_guru" class="form-control">
					                            </div>
					                        </div>
					                        <div class="col-sm-6">
					                            <div class="form-group">
					                                <label class="control-label">Alamat</label>
					                                <input type="text" name="alamat_guru" class="form-control">
					                            </div>
					                        </div>
					            </div>
                </div>

                <!--Modal footer-->
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                    <button class="btn btn-primary">Save changes</button>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
    <!--===================================================-->
    <!--End Default Bootstrap Modal-->