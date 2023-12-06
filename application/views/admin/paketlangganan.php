                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Paket Langganan</h1>
                    <a href="#" class="btn btn-primary text-white mb-2" data-toggle="modal" data-target="#addPaketModal"><i class="fa fa-plus" aria-hidden="true"></i></a>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Paket Langganan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id Paket</th>
                                            <th>Waktu / Range Langganan</th>
                                            <th>Harga Paket Langganan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php foreach ($paket_data as $pkt) : ?>
                                                <tr>
                                                    <td><?php echo $pkt->id_paket; ?></td>
                                                    <td><?php echo $pkt->waktu; ?></td>
                                                    <td><?php echo $pkt->harga; ?></td>
                                                    <td>
                                                    <a href="#" class="btn btn-warning text-white" data-toggle="modal" data-target="#editPaketModal<?php echo $pkt->id_paket; ?>"><i class="fa fa-list" aria-hidden="true"></i></a>
                                                    <a href="#" class="btn btn-danger text-white" onclick="confirmDelete('<?php echo site_url('Admin/paketlangganan/deletepaket/' . $pkt->id_paket); ?>')"><i class="fa fa-trash" aria-hidden="true"></i></a>
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

