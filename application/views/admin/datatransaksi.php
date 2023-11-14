                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading 
                    <h1 class="h3 mb-2 text-gray-800">Transaksi</h1>
                    <a href="#" class="btn btn-primary text-white mb-2" data-toggle="modal" data-target="#addUserModal"><i class="fa fa-plus" aria-hidden="true"></i></a> -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Transaksi</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id Transksi</th>
                                            <th>Nominal Transaksi (terbayar)</th>
                                            <th>Tanggal Pembayaran Membership</th>
                                            <th>Tanggal Validasi Membership</th>
                                            <th>Id User</th>
                                            <th>Id Paket</th>
                                            <th>Id Admin</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php foreach ($transaksi_data as $t) : ?>
                                                <tr>
                                                    <td><?php echo $t->id_transaksi; ?></td>
                                                    <td><?php echo $t->nominal_transaksi; ?></td>
                                                    <td><?php echo $t->tgl_bayar; ?></td>
                                                    <td><?php echo $t->tgl_validasi; ?></td>
                                                    <td><?php echo $t->id_user; ?></td>
                                                    <td><?php echo $t->id_paket; ?></td>
                                                    <td><?php echo $t->id_admin; ?></td>
                                                    <td>
                                                    <a href="#" class="btn btn-warning text-white m-1" data-toggle="modal" data-target="#editTransaksiModal<?php echo $t->id_transaksi; ?>"><i class="fa fa-list" aria-hidden="true"></i></a>
                                                    <a href="#" class="btn btn-danger text-white m-1" onclick="confirmDelete('<?php echo site_url('admin/transaksi/deletetransaksi/' . $t->id_transaksi); ?>')"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
