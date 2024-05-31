<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Aksesoris</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Menu</th>
                            <div class="text-center">
                                <a href="<?php echo site_url('aks-tambah') ?>" class="btn btn-primary">Tambah Produk
                                    Aksesoris</a>
                            </div>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($aks_list as $key => $row) { ?>
                            <tr>
                                <th>
                                    <?php echo ++$key ?>.
                                </th>
                                <td><img src="<?php echo base_url('gambar/' . $row['gambar']); ?>" width="150"></td>
                                <td>
                                    <?php echo $row['nama'] ?>
                                </td>
                                <td>
                                    Rp.
                                    <?php echo number_format($row['harga']) ?>
                                </td>
                                <td>
                                    <?php echo $row['deskripsi'] ?>
                                </td>
                                <td>
                                    <a href="<?php echo base_url('aks-edit/' . $row['id_akss']) ?>"
                                        class="btn btn-success">Edit</a>
                                    <a href="<?php echo base_url('aks-hapus/' . $row['id_akss']) ?>"
                                        class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->