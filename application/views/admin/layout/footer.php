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
                    <button class="btn btn-warning" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="<?php echo base_url('admin/admincontroll/logout')?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

     <!-- add paket Modal-->
    <div class="modal fade" id="addPaketModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Paket</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo site_url('admin/paketlangganan/addpaket'); ?>" method="post">
                    <div class="form-group">
                        <label for="waktu">Waktu / Range Langganan (cth : '1 tahun'): </label>
                        <input type="text" class="form-control" id="waktu" name="waktu" required>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga Paket Langganan:</label>
                        <input type="text" class="form-control" id="harga" name="harga" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah Paket</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>    

    <!-- add user Modal-->
    <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo site_url('admin/user/adduser'); ?>" method="post">
                    <div class="form-group">
                        <label for="waktu">Nama user : </label>
                        <input type="text" class="form-control" id="namauser" name="namauser" required>
                    </div>
                    <div class="form-group">
                        <label for="harga">Alamat User : </label>
                        <textarea class="form-control" id="alamatuser" rows="3" name="alamatuser"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="waktu">Email : </label>
                        <input type="text" class="form-control" id="emailuser" name="emailuser" required>
                        <?php echo form_error('emailuser', '<span class="text-danger">', '</span>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="waktu">Telepon User : </label>
                        <input type="text" class="form-control" id="tlpuser" name="tlpuser" required>
                    </div>
                    <div class="form-group">
                        <label for="waktu">Username User : </label>
                        <input type="text" class="form-control" id="usernameuser" name="usernameuser" required>
                        <?php echo form_error('usernameuser', '<span class="text-danger">', '</span>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="waktu">Password User : </label>
                        <input type="text" class="form-control" id="passuser" name="passuser" required>
                    </div>
                    <div class="form-group">
                        <label for="waktu">Tanggal Daftar : </label>
                        <input type="date" class="form-control" id="tgldaftar" name="tgldaftar" required>
                    </div>
                    <div class="form-group">
                        <label for="id_paket">Id Paket : </label>
                        <select class="form-control" id="id_paket" name="id_paket" required>
                            <?php foreach ($paket_data as $pkt) : ?>
                                <option value="<?php echo $pkt->id_paket; ?>"><?php echo $pkt->id_paket . ' - ' . $pkt->waktu; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div> 

    <!-- add Transaksi Modal-->
    <div class="modal fade" id="addTransaksiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Transaksi</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo site_url('admin/transaksi/addtransaksi'); ?>" method="post">
                    <div class="form-group">
                        <label for="nominaltransaksi">Nominal Transaksi (terbayar) : </label>
                        <input type="text" class="form-control" id="nominaltransaksi" name="nominaltransaksi" required>
                        <?php echo form_error('emailuser', '<span class="text-danger">', '</span>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="tglbayar">Tanggal Bayar : </label>
                        <input type="date" class="form-control" id="tglbayar" name="tglbayar" required>
                        <?php echo form_error('emailuser', '<span class="text-danger">', '</span>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="waktu">Tanggal Validasi : </label>
                        <input type="date" class="form-control" id="tglvalidsi" name="tglvalidasi" value="<?php echo date('Y-m-d'); ?>" required>
                        <?php echo form_error('emailuser', '<span class="text-danger">', '</span>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="id_user">Detail User (id - Username): </label>
                        <select class="form-control" id="id_user" name="id_user" required>
                            <?php foreach ($user_data as $usr) : ?>
                                <option value="<?php echo $usr->id_user; ?>"><?php echo $usr->id_user . ' - ' . $usr->nama_user; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="id_paket">Detail Paket (id - namapaket) : </label>
                        <select class="form-control" id="id_paket" name="id_paket" required>
                            <?php foreach ($paket_data as $pkt) : ?>
                                <option value="<?php echo $pkt->id_paket; ?>"><?php echo $pkt->id_paket . ' - ' . $pkt->waktu; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                            <label for="id_admin">Detail Admin : </label>
                            <?php
                            $idAdmin = $this->session->userdata('id_admin');
                            $userName = $this->session->userdata('nama_admin');
                            ?>
                            <input type="text" class="form-control" id="id_admin_tampil" name="id_admin_tampil" value="<?php echo $idAdmin . ' - ' . $userName; ?>" disabled>
                    </div>
                    <div class="form-group">
                            <?php
                            $idAdmin = $this->session->userdata('id_admin');
                            $userName = $this->session->userdata('nama_admin');
                            ?>
                            <input type="hidden" class="form-control" id="id_admin" name="id_admin" value="<?php echo $idAdmin; ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div> 
        
     <!-- edit paket Modal-->
    <?php foreach ($paket_data as $pkt) :?>
    <div class="modal fade" id="editPaketModal<?php echo $pkt->id_paket; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Paket</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo site_url('admin/paketlangganan/editpaket/' . $pkt->id_paket); ?>" method="post">
                    <div class="form-group">
                        <label for="waktu">Waktu / Range Langganan:</label>
                        <input type="text" class="form-control" id="waktu" name="waktu" value="<?php echo $pkt->waktu; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga Paket Langganan:</label>
                        <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $pkt->harga; ?>" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Edit Paket</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>  
    <?php endforeach; ?>

    <!-- edit User Modal-->
    <?php foreach ($user_data as $usr) :?>
    <div class="modal fade" id="editUserModal<?php echo $usr->id_user; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Paket</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo site_url('admin/user/edituser/' . $usr->id_user); ?>" method="post">
                    <div class="form-group">
                        <label for="namauser">Nama User : </label>
                        <input type="text" class="form-control" id="namauser" name="namauser" value="<?php echo $usr->nama_user; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="alamatuser">Alamat User : </label>
                        <textarea class="form-control" id="alamatuser" rows="3" name="alamatuser"><?php echo $usr->alamat_user; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="emailuser">Email User : </label>
                        <input type="text" class="form-control" id="emailuser" name="emailuser" value="<?php echo $usr->email; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tlpuser">Telepon User : </label>
                        <input type="text" class="form-control" id="tlpuser" name="tlpuser" value="<?php echo $usr->telp_user; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="usernameuser">Username User : </label>
                        <input type="text" class="form-control" id="usernameuser" name="usernameuser" value="<?php echo $usr->username_user; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="passuser">password User : </label>
                        <input type="text" class="form-control" id="passuser" name="passuser" value="<?php echo $usr->pass_user; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tgldaftar">Tanggal Daftar : </label>
                        <input type="date" class="form-control" id="tgldaftar" name="tgldaftar" value="<?php echo $usr->tgl_daftar; ?>">
                    </div>
                    <div class="form-group">
                        <label for="waktu"><small class="text-danger">*pastikan sebelum edit / menambah, tanggal awal / akhir membership pastikan telah memvalidasi data transaksi !!</small></label>
                    </div>
                    <div class="form-group">
                        <label for="tglawal">Tanggal Awal Membership : </label>
                        <input type="date" class="form-control" id="tglawal" name="tglawal" value="<?php echo $usr->tgl_awal; ?>">
                    </div>
                    <div class="form-group">
                        <label for="tglakhir">Tanggal Akhir Membership : </label>
                        <input type="date" class="form-control" id="tglakhir" name="tglakhir" value="<?php echo $usr->tgl_akhir; ?>">
                    </div>
                    <div class="form-group">
                        <label for="id_paket">Id Paket : </label>
                        <select class="form-control" id="id_paket" name="id_paket" required>
                            <?php foreach ($paket_data as $pkt) : ?>
                                <option value="<?php echo $pkt->id_paket; ?>" <?php echo ($pkt->id_paket == $usr->id_paket) ? 'selected' : ''; ?>>
                                    <?php echo $pkt->id_paket . ' - ' . $pkt->waktu; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Edit User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>  
    <?php endforeach; ?>

    <!-- edit Transaksi Modal-->
    <?php foreach ($transaksi_data as $t) :?>
    <div class="modal fade" id="editTransaksiModal<?php echo $t->id_transaksi; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Paket</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo site_url('admin/transaksi/edittransaksi/' . $t->id_transaksi); ?>" method="post">
                    <div class="form-group">
                        <small class="text-danger">*Pastikan sebelum mengedit memperhatikan data user,admin, dan paket dengan benar !!</small>
                    </div>
                    <div class="form-group">
                            <label for="id_user">Detail User : </label>
                            <?php foreach ($user_data as $usr) : ?>
                                <?php if ($usr->id_user == $t->id_user) : ?>
                                    <input type="text" class="form-control" id="id_user_tampil" name="id_user_tampil" value="<?php echo $usr->id_user;?> - <?php echo $usr->username_user; ?> - <?php echo $usr->email; ?> " required disabled>
                                <?php endif; ?>
                            <?php endforeach; ?>
                    </div>
                    <div class="form-group">
                            <?php foreach ($user_data as $usr) : ?>
                                <?php if ($usr->id_user == $t->id_user) : ?>
                                    <input type="hidden" class="form-control" id="id_user" name="id_user" value="<?php echo $usr->id_user;?>">
                                <?php endif; ?>
                            <?php endforeach; ?>
                    </div>
                    <div class="form-group">
                            <label for="id_admin">Detail Admin : </label>
                            <?php
                            $idAdmin = $this->session->userdata('id_admin');
                            $userName = $this->session->userdata('nama_admin');
                            ?>
                            <input type="text" class="form-control" id="id_admin_tampil" name="id_admin_tampil" value="<?php echo $idAdmin . ' - ' . $userName; ?>" disabled>
                    </div>
                    <div class="form-group">
                            <?php
                            $idAdmin = $this->session->userdata('id_admin');
                            $userName = $this->session->userdata('nama_admin');
                            ?>
                            <input type="hidden" class="form-control" id="id_admin" name="id_admin" value="<?php echo $idAdmin; ?>">
                    </div>
                    <div class="form-group">
                        <label for="id_paket">Pilih Paket : </label>
                        <select class="form-control" id="id_paket" name="id_paket" required>
                            <?php foreach ($paket_data as $pkt) : ?>
                                <option value="<?php echo $pkt->id_paket; ?>" <?php echo ($pkt->id_paket == $t->id_paket) ? 'selected' : ''; ?> required>
                                    <?php echo $pkt->id_paket . ' - ' . $pkt->waktu; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nominaltransaksi">Nominal Transaksi : </label>
                        <input type="text" class="form-control" id="nominaltransaksi" name="nominaltransaksi" value="<?php echo $t->nominal_transaksi; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tglbayar">Tanggal Bayar : </label>
                        <input type="date" class="form-control" id="tglbayar" name="tglbayar" value="<?php echo $t->tgl_bayar; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tglvalidasi">Tanggal Validasi Membership : </label>
                        <input type="date" class="form-control" id="tglvalidasi" name="tglvalidasi" value="<?php echo $t->tgl_validasi; ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Edit Transaksi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>  
    <?php endforeach; ?>

    <script>
    function confirmDelete(url) {
        if (confirm("Apakah Anda yakin ingin menghapus ini?")) {
            window.location.href = url;
        }
    }

    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/js/sb-admin-2.min.js')?>"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js')?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url('assets/js/demo/chart-area-demo.js')?>"></script>
    <script src="<?php echo base_url('assets/js/demo/chart-pie-demo.js')?>"></script>
    <script src="<?php echo base_url('assets/js/demo/datatables-demo.js')?>"></script>

</body>

</html>
