<div class="container">
        <div class="container-fluid">
            <div class="column-12">
                <h3>Form Tambah Bass :</h3>
                <form action="<?php echo base_url('bas-insert') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                        <label>Gambar Bass</label>
                        <input type="file" class="form-control" name="gambar" required="">
                    </div>    
                <div class="form-group">
                        <label>Nama Bass</label>
                        <input type="text" class="form-control" name="nama" required="">
                    </div>
                    <div class="form-group">
                        <label>Harga Bass</label>
                        <input type="number" class="form-control" name="harga" required="">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Bass</label>
                        <textarea class="form-control" name="deskripsi" required=""></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <a href="<?php echo base_url('admin-bas'); ?>" class="btn btn-warning">Kembali ke Daftar Bass</a>
                    </div>
                </form>
                <br>
                <br>    
            </div>
        </div>
    </div>
</div>
