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
                        <?php if (validation_errors()) : ?>
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control is-invalid" id="nama" name = "nama">
                            <div class="invalid-feedback">
                                <?php validation_errors(); ?>
                            </div>
                        <?php elseif (empty(form_error('nama'))) : ?>
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control is-invalid" id="nama" name = "nama">
                            <div class="valid-feedback">
                                Look's Great !
                            </div>  
                        <?php else :?>
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name = "nama">
                        <?php endif;?>
                        </div>
                        <div class="form-group">
                            <label for="nrp">NRP</label>
                            <input type="number" class="form-control" id="nrp" name = "nrp">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name = "email" placeholder="email@example.com">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Teknologi Pangan">Teknologi Pangan</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                            <option value="Teknik Perancangan Wilayah Kota">Teknik Perancangan Wilayah Kota</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" >Tambah Data</button>
                        </div>
                     </form>
                </div>
            </div>
            </div>
        </div>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>