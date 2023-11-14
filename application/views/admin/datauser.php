                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">User</h1>
                    <a href="#" class="btn btn-primary text-white mb-2" data-toggle="modal" data-target="#addUserModal"><i class="fa fa-plus" aria-hidden="true"></i></a>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id User</th>
                                            <th>Nama User</th>
                                            <th>Email User</th>
                                            <th>Telp User</th>
                                            <th>Username User</th>
                                            <th>Tgl Daftar</th>
                                            <th>Tgl Awal Langganan</th>
                                            <th>Tgl Akhir Langganan</th>
                                            <th>Alamat User</th>
                                            <th>Id Paket</th>
                                            <th>Waktu Membership</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php foreach ($user_data as $usr) : ?>
                                                <tr>
                                                    <td><?php echo $usr->id_user; ?></td>
                                                    <td><?php echo $usr->nama_user; ?></td>
                                                    <td><?php echo $usr->email; ?></td>
                                                    <td><?php echo $usr->telp_user; ?></td>
                                                    <td><?php echo $usr->username_user; ?></td>
                                                    <td><?php echo $usr->tgl_daftar; ?></td>
                                                    <td><?php echo $usr->tgl_awal; ?></td>
                                                    <td><?php echo $usr->tgl_akhir; ?></td>
                                                    <td><?php echo $usr->alamat_user; ?></td>
                                                    <td><?php echo $usr->id_paket; ?></td>
                                                    <td><?php echo $usr->waktu; ?></td>
                                                    <td>
                                                    <a href="#" class="btn btn-warning text-white m-1" data-toggle="modal" data-target="#editUserModal<?php echo $usr->id_user; ?>"><i class="fa fa-list" aria-hidden="true"></i></a>
                                                    <a href="#" class="btn btn-danger text-white m-1" onclick="confirmDelete('<?php echo site_url('admin/user/deleteuser/' . $usr->id_user); ?>')"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
