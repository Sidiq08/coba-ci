    <div class="container">
        <div class="flash-data" data-flashdata="<?php $this->session-> ?>"></div>
        <div class="row">
            <div class="col mb-3">
                <h3>Daftar Mahasiswa</h3>
                <a href="<?= base_url('mahasiswa/tambah'); ?>" class="btn btn-primary mb-2">Tambah Data</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NRP</th>
                            <th scope="col">Email</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $i = 1;
                        foreach ($mahasiswa as $mhs) : ?>
                            <tr>
                                <th scope="row"><?= $i++;?></th>
                                <td><?= $mhs['nama']?></td>
                                <td><?= $mhs['nrp']?></td>
                                <td><?= $mhs['email']?></td>
                                <td><?= $mhs['jurusan']?></td>
                                <td>
                                    <a href="" class="badge badge-primary">Ubah</a>
                                    <a href="" class="badge badge-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>