    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="<?php echo base_url('main/logout')?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- add Karyawan Modal-->
    <div class="modal fade" id="UaddKaryawan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Karyawan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo site_url('karyawan/addKaryawan'); ?>" method="post">
                    <div class="form-group">
                        <label for="namakaryawan">Nama Karyawan : </label>
                        <input type="text" class="form-control" id="namakaryawan" name="namakaryawan" required>
                    </div>
                    <div class="form-group">
                        <label for="rolekaryawan">Posisi Karyawan : </label>
                        <input type="text" class="form-control" id="rolekaryawan" name="rolekaryawan" required>
                    </div>
                    <div class="form-group">
                        <label for="nikkaryawan">NIK Karyawan : </label>
                        <input type="text" class="form-control" id="nikkaryawan" name="nikkaryawan" required>
                        <?php echo form_error('nikkaryawan', '<span class="text-danger">', '</span>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="telpkaryawan">No. Telp. Karyawan : </label>
                        <input type="text" class="form-control" id="telpkaryawan" name="telpkaryawan" required>
                    </div>
                    <div class="form-group">
                        <label for="tglkerja">Tanggal Awal Kerja : </label>
                        <input type="date" class="form-control" id="tglkerja" name="tglkerja" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="id_user" name="id_user" value="<?php echo $user_id; ?>" hidden>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah Karyawan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div> 

    <!-- edit Karyawan Modal-->
    <?php foreach ($karyawan as $k) :?>
    <div class="modal fade" id="editKaryawanModal<?php echo $k->id_karyawan; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Karyawan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo site_url('karyawan/editKaryawan/' . $k->id_karyawan); ?>" method="post">
                <div class="form-group">
                        <label for="namakaryawan">Nama Karyawan : </label>
                        <input type="text" class="form-control" id="namakaryawan" name="namakaryawan" value="<?php echo $k->nama_karyawan; ?>">
                    </div>
                    <div class="form-group">
                        <label for="rolekaryawan">Posisi Karyawan : </label>
                        <input type="text" class="form-control" id="rolekaryawan" name="rolekaryawan" value="<?php echo $k->role; ?>">
                    </div>
                    <div class="form-group">
                        <label for="nikkaryawan">NIK Karyawan : </label>
                        <input type="text" class="form-control" id="nikkaryawan" name="nikkaryawan" value="<?php echo $k->nik_karyawan; ?>" required>
                        <?php echo form_error('nikkaryawan', '<span class="text-danger">', '</span>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="telpkaryawan">No. Telp. Karyawan : </label>
                        <input type="text" class="form-control" id="telpkaryawan" name="telpkaryawan" value="<?php echo $k->telp_karyawan; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tglkerja">Tanggal Awal Kerja : </label>
                        <input type="date" class="form-control" id="tglkerja" name="tglkerja" value="<?php echo $k->tgl_kerja; ?>"required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="id_user" name="id_user" value="<?php echo $user_id; ?>" hidden>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Edit Karyawan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>  
    <?php endforeach; ?>