                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
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
                                                    <a href="<?php echo site_url('admincontroll/addpaket/' . $pkt->id_paket); ?>" class="btn btn-primary text-white"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                                    <a href="<?php echo site_url('admincontroll/editPaket/' . $pkt->id_paket); ?>" class="btn btn-warning text-white"><i class="fa fa-list" aria-hidden="true"></i></a>
                                                    <a href="<?php echo site_url('admincontroll/deletePaket/' . $pkt->id_paket); ?>" class="btn btn-danger text-white"><i class="fa fa-trash" aria-hidden="true"></i></a>
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

