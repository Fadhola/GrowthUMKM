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
                <form action="<?php echo site_url('karyawan/addkaryawan'); ?>" method="post">
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
                        <input type="text" class="form-control" id="id_user" name="id_user" value="<?php echo $user->id_user; ?>" hidden>
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
                <form action="<?php echo site_url('karyawan/editkaryawan/' . $k->id_karyawan); ?>" method="post">
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
                        <input type="text" class="form-control" id="id_user" name="id_user" value="<?php echo $user->id_user; ?>" hidden>
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

    <!-- add Keuangan Modal-->
    <div class="modal fade" id="UaddKeuangan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Keuangan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo site_url('keuangan/addkeuangan'); ?>" method="post">
                    <div class="form-group">
                        <label for="catatan">Catatan Keuangan : </label>
                        <input type="text" class="form-control" id="catatan" name="catatan" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal Input Data Keuangan : </label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                    </div>
                    <div class="form-group">
                        <label for="nominal">Nominal Keuangan : </label>
                        <input type="text" class="form-control" id="nominal" name="nominal" required>
                    </div>
                    <div class="form-group">
                        <label for="id_kategori">Kategori : </label>
                        <select class="form-control" id="id_kategori" name="id_kategori" required>
                            <?php foreach ($kategori as $kt) : ?>
                                <option value="<?php echo $kt->id_kategori; ?>"><?php echo $kt->nama_kategori; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="id_user" name="id_user" value="<?php echo $user->id_user; ?>" hidden>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah Keuangan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div> 

    <!-- edit Keuangan Modal-->
    <?php foreach ($keuangan as $ku) :?>
    <div class="modal fade" id="editKeuanganModal<?php echo $ku->id_keuangan; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Keuangan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo site_url('keuangan/editkeuangan/' . $ku->id_keuangan); ?>" method="post">
                <div class="form-group">
                        <label for="catatan">Catatan Keuangan : </label>
                        <input type="text" class="form-control" id="catatan" name="catatan" value="<?php echo $ku->catatan; ?>">
                    </div>
                    <div class="form-group">
                        <label for="nominal">Nominal Keuangan : </label>
                        <input type="text" class="form-control" id="nominal" name="nominal" value="<?php echo $ku->nominal; ?>">
                    </div>
                    <div class="form-group">
                        <label for="Tanggal">Tanggal Input Keuangan : </label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo $ku->tanggal; ?>"required>
                    </div>
                    <div class="form-group">
                        <label for="id_kategori">Kategori : </label>
                        <select class="form-control" id="id_kategori" name="id_kategori" required>
                            <?php foreach ($kategori as $kt) : ?>
                                <option value="<?php echo $kt->id_kategori; ?>" <?php echo ($kt->id_kategori == $ku->id_kategori) ? 'selected' : ''; ?>>
                                    <?php echo $kt->nama_kategori; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
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

    <!-- add Gaji Karyawan Modal-->
    <div class="modal fade" id="UaddGajiKaryawan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Penggajian Karyawan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo site_url('gajikaryawan/addgajikaryawan'); ?>" method="post">
                    <div class="form-group">
                        <label for="periode">Periode Penggajian : </label>
                        <select id="periode" name="periode" class="form-control">
                            <option>Januari</option>
                            <option>Februari</option>
                            <option>Maret</option>
                            <option>April</option>
                            <option>Mei</option>
                            <option>Juni</option>
                            <option>Juli</option>
                            <option>Agustus</option>
                            <option>September</option>
                            <option>Oktober</option>
                            <option>November</option>
                            <option>Desember</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tglgaji">Tanggal Input Data Penggajian : </label>
                        <input type="date" class="form-control" id="tglgaji" name="tglgaji" required>
                    </div>
                    <div class="form-group">
                        <label for="nominalgaji">Nominal Gaji : </label>
                        <input type="text" class="form-control" id="nominalgaji" name="nominalgaji" required>
                    </div>
                    <div class="form-group">
                        <label for="id_karyawan">Nama Karyawan : </label>
                        <select class="form-control" id="id_karyawan" name="id_karyawan" required>
                            <?php foreach ($karyawan as $k) : ?>
                                <option value="<?php echo $k->id_karyawan; ?>"><?php echo $k->nama_karyawan; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="id_user" name="id_user" value="<?php echo $user->id_user; ?>" hidden>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah Gaji Karyawan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div> 

    <!-- edit Gaji Karyawan Modal-->
    <?php foreach ($gajikaryawan as $gk) :?>
    <div class="modal fade" id="editGajiKaryawanModal<?php echo $gk->id_gaji; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Gaji Karyawan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo site_url('gajikaryawan/editgajikaryawan/' . $gk->id_gaji); ?>" method="post">
                    <div class="form-group">
                    <small class="text-danger">*Pastikan Menginput kolom <b>Periode</b> Kembali !!</small>
                    </div>
                    <div class="form-group">
                        <label for="periode">Periode Penggajian : </label>
                        <select id="periode" name="periode" class="form-control">
                            <option>Januari</option>
                            <option>Februari</option>
                            <option>Maret</option>
                            <option>April</option>
                            <option>Mei</option>
                            <option>Juni</option>
                            <option>Juli</option>
                            <option>Agustus</option>
                            <option>September</option>
                            <option>Oktober</option>
                            <option>November</option>
                            <option>Desember</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tglgaji">Tanggal Input Data Penggajian : </label>
                        <input type="date" class="form-control" id="tglgaji" name="tglgaji" value="<?php echo $gk->tgl_gaji; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="nominalgaji">Nominal Gaji : </label>
                        <input type="text" class="form-control" id="nominalgaji" name="nominalgaji" value="<?php echo $gk->nominal_gaji; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="id_karyawan">Nama Karyawan : </label>
                        <select class="form-control" id="id_karyawan" name="id_karyawan" required>
                            <?php foreach ($karyawan as $k) : ?>
                                <option value="<?php echo $k->id_karyawan; ?>" <?php echo ($k->id_karyawan == $gk->id_karyawan) ? 'selected' : ''; ?>>
                                    <?php echo $k->nama_karyawan; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Edit Gaji Karyawan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>  
    <?php endforeach; ?>