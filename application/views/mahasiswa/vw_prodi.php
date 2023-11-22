<div class="content-wrapper">

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <div class="container-fluid">
                        <h1 class="h3 mb-4 text-gray-800">
                            <?php echo $judul; ?>
                        </h1>
                        <div class="col-md-6"><a href="<?= site_url("Prodi/tambah") ?>" class="btn btn-info mb-2">Tambah
                                Prodi</a></div>

                        <table class="table">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Nama Prodi</td>
                                    <td>Ruangan</td>
                                    <td>Jurusan</td>
                                    <td>Akreditasi</td>
                                    <td>Nama Kaprodi</td>
                                    <td>Tahun Berdiri</td>
                                    <td>Ouput Lulusan</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($prodi as $us): ?>
                                <tr>
                                    <td><?= $i; ?>.</td>
                                    <td><?= $us['nama']; ?></td>
                                    <td><?= $us['ruangan']; ?></td>
                                    <td><?= $us['jurusan']; ?></td>
                                    <td><?= $us['akreditasi']; ?></td>
                                    <td><?= $us['nama_kaprodi']; ?></td>
                                    <td><?= $us['tahun_berdiri']; ?></td>
                                    <td><?= $us['output_lulusan']; ?></td>
                                    <td>
                                        <a href="<?= site_url("Prodi/hapus/") . $us['id'];?>" class="badge badge-danger">Hapus</a>
                                        <a href="<?= site_url("Prodi/edit/") . $us['id'];?> " class="badge badge-warning">Edit</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>