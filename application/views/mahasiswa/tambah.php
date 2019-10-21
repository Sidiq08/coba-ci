    <div class="container">

        <div class="row mt-3">
            <div class="col-md-6">

            <div class="card">
            <div class="card-header">
                <h3>Form Tambah Data Mahasiswa</h3>
            </div>
            
                <div class="card-body">                
                   <form method="post" action="">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control">
                            <small class="form-text text-danger">
                                <?= form_error('nama');?>
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="nrp">NRP</label>
                            <input type="number" class="form-control" id="nrp" name = "nrp">
                            <small class="form-text text-danger">
                                <?= form_error('nrp');?>
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name = "email" placeholder="email@example.com">
                            <small class="form-text text-danger">
                                <?= form_error('email');?>
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                            <option selected >-- Pilih Jurusan --</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Teknologi Pangan">Teknologi Pangan</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                            <option value="Teknik Perancangan Wilayah Kota">Teknik Perancangan Wilayah Kota</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="tambah" class="btn btn-primary " >Tambah Data</button>
                        </div>
                     </form>
                </div>
            </div>
            </div>
        </div>
    </div>