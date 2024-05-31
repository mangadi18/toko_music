<div class="container">
        <div class="container-fluid">
            <div class="column-12">
                <h3>Form Tambah Aks :</h3>
                <form action="<?php echo base_url('aks-insert') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                        <label>Gambar Aks</label>
                        <input type="file" class="form-control" name="gambar" required="">
                    </div>    
                <div class="form-group">
                        <label>Nama Aks</label>
                        <input type="text" class="form-control" name="nama" required="">
                    </div>
                    <div class="form-group">
                        <label>Harga Aks</label>
                        <input type="number" class="form-control" name="harga" required="">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Aks</label>
                        <textarea class="form-control" name="deskripsi" required=""></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <a href="<?php echo base_url('admin-aks'); ?>" class="btn btn-warning">Kembali ke Daftar Aks</a>
                    </div>
                </form>
                <br>
                <br>    
            </div>
        </div>
    </div>
</div>
