<div class="content-wrapper">

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <div class="container-fluid">
                        <h1 class="h3 mb-4 text-gray-800">
                            <?php echo $judul; ?>
                        </h1>
                        <div class="col-md-6"><a href="<?= site_url("form_daftar/tambah") ?>" class="btn btn-info mb-2">Tambah
                               siswa</a></div>
                               <?= $this->session->flashdata('message');?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Nama </td>
                                    <td>NISN</td>
                                    <td>NIK</td>
                                    <td>email</td>
                                    <td>no handphone</td>
                                    <td>no whatsApp</td>
                                    <td>tempat lahir</td>
                                    <td>jenis kelamin</td>
                                    <td>kabupaten tinggal</td>
                                    <td>kecamatan tinggal</td>
                                    <td>kabupaten sekolah</td>
                                    <td>sekolah asal</td>
                                    <td>jurusan</td>
                                    <td>tahun lulus</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($form_daftar as $us): ?>
                                <tr>
                                    <td><?= $i; ?>.</td>
                                    <td><?= $us['nama']; ?></td>
                                    <td><?= $us['NISN']; ?></td>
                                    <td><?= $us['NIK']; ?></td>
                                    <td><?= $us['email']; ?></td>
                                    <td><?= $us['no_handphone']; ?></td>
                                    <td><?= $us['no_whatsapp']; ?></td>
                                    <td><?= $us['tempat_lahir']; ?></td>
                                    <td><?= $us['jenis_kelamin']; ?></td>
                                    <td><?= $us['kabupaten_tinggal']; ?></td>
                                    <td><?= $us['kecamatan_tinggal']; ?></td>
                                    <td><?= $us['kabupaten_sekolah']; ?></td>
                                    <td><?= $us['sekolah_asal']; ?></td>
                                    <td><?= $us['jurusan']; ?></td>
                                    <td><?= $us['tahun_lulus']; ?></td>
                                    <td>
                                       
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