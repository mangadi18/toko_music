<div class="container-fluid">
    <div class="p-5 my-4 bg-light rounded-3">
    </div>

    <h1 class="text-center">
        Berbagai Jenis Gitar
    </h1>
    <div class="container">
        <a href="<?php echo base_url('daftar-produk'); ?>" class="btn btn-primary">Kembali Ke Menu Awal</a>
    </div>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <?php foreach ($gitar_list as $key => $row) { ?>
                <div class="col-md-6 col-lg-4 col-xl-3"> <br><br>
                    <div class="card" style="width: 250px;">
                        <img src="<?php echo base_url('gambar/' . $row['gambar']); ?>" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">
                                <?php echo $row['nama'] ?>
                            </h5>
                            <h6 class="">Rp.
                                <?php echo number_format($row['harga']) ?>
                            </h6>
                            <p class="">
                                <?php echo $row['deskripsi'] ?>
                            </p>


                            <a href="https://api.whatsapp.com/send?phone=0895394602792&text=saya%20tertarik%20untuk%20membeli%20produk%20%20segera.">
                                <img src="gambar/whatsapp-button.png" width="120">
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>