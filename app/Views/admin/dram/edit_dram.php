<div class="container">
        <div class="container-fluid">
            <div class="column-12">
                <h3>Form Edit Dramm :</h3>
                <form action="<?php echo base_url('dram-update/'.$dramm_row['id_dramm']) ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Gambar Produk</label><br>    
                    <img src="<?php echo base_url('gambar/'.$dramm_row['gambar']); ?>" width="150">
                        <input type="file" class="form-control" name="gambar" value="">
                    </div>   
                <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $dramm_row['nama'] ?>" required="">
                    </div>
                    <div class="form-group">
                        <label>Harga Produk</label>
                        <input type="number" class="form-control" name="harga" value="<?php echo $dramm_row['harga'] ?>" required="">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Produk</label>
                        <textarea class="form-control" name="deskripsi" required=""><?php echo $dramm_row['deskripsi'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Perbarui Produk</button>
                        <a href="<?php echo base_url('admin-dram'); ?>" class="btn btn-warning">Kembali ke Daftar Dramm</a>
                    </div>
                </form>
                <br>
                <br>
            </div>
        </div>
    </div>
</div>
                    
