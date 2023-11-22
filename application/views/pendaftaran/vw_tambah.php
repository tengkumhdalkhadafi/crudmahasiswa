<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <div class="container-fluid">
                        <h1 class="h3 mb-4 text-gray-800">
                            <?php echo $judul; ?>
                        </h1>
                        <div class="card">
                            <div class="card-header justify-content-center">
                                Form Tambah Data Mahasiswa
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="<?= set_value(id)?>">
                                    <div class="form-group">
                                        <label for="Nama">Nama</label>
                                        <input type="text" name="Nama" value="<?=set_value('nama')?>" class="form-control" id="Nama"
                                            placeholder="Nama">
                                            <?= form_error('nama','<small class="text-danger p1-3">','</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="NISM">NISN</label>
                                        <input type="text" name="NISN" class="form-control" id="NISN" placeholder="NISN">
                                        <?= form_error('NISN','<small class="text-danger p1-3">','</small>'); ?>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="NIK">NIK</label>
                                        <input type="NIK" name="NIK" class="form-control" id="NIK"
                                            placeholder="NIK">
                                        <?= form_error('NIK','<small class="text-danger p1-3">','</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="Email">
                                            <?= form_error('email','<small class="text-danger p1-3">','</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_handphone">no_handphone</label>
                                        <input type="no_handphone" name="no_handphone" class="form-control" id="no_handphone"
                                            placeholder="no_handphone">
                                            <?= form_error('no_handphone','<small class="text-danger p1-3">','</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_whatsapp">no whatsapp</label>
                                        <input type="no_whatsapp" name="whatsapp" class="form-control" id="whatsapp"
                                            placeholder="no_whatsapp">
                                            <?= form_error('no_whatsapp','<small class="text-danger p1-3">','</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="tempat_lahir">tempat lahir</label>
                                        <input type="tempat_lahir" name="tempat_lahir" class="form-control" id="tempat_lahir"
                                            placeholder="tempat_lahir">
                                            <?= form_error('tempat_lahir','<small class="text-danger p1-3">','</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_lahir">tanggal lahir</label>
                                        <input type="tangggal_lahir" name="tanggal_lahir" class="form-control" id="tanggal_lahir"
                                            placeholder="tanggal_lahir">
                                            <?= form_error('tanggal_lahir','<small class="text-danger p1-3">','</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_kelamin">jenis kelamin</label>
                                        <input type="jenis_kelamin" name="jenis_kelamin" class="form-control" id="jenis_kelamin"
                                            placeholder="jenis_kelamin">
                                            <?= form_error('jenis_kelamin','<small class="text-danger p1-3">','</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="kabupaten_tinggal">kabupaten tinggal</label>
                                        <input type="kabuaten_tinggal" name="kabupaten_tinggal" class="form-control" id="kabupaten_tinggal"
                                            placeholder="kabupaten_tinggal">
                                            <?= form_error('kabupaten_tinggal','<small class="text-danger p1-3">','</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="kecamatan_tinggal">kecamatan tinggal</label>
                                        <input type="kecamatan_tinggal" name="kecamatan_tinggal" class="form-control" id="kecamatan_tinggal"
                                            placeholder="kecamatan_tinggal">
                                            <?= form_error('kecamatan_tinggal','<small class="text-danger p1-3">','</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="kabupaten_sekolah">kabupaten sekolah</label>
                                        <input type="kabupaten_sekolah" name="kabupaten_sekolah" class="form-control" id="kabupaten_sekolah"
                                            placeholder="kabupaten_sekolah">
                                            <?= form_error('kabupaten_sekolah','<small class="text-danger p1-3">','</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="asal_sekolah">asal sekolah</label>
                                        <input type="asal_sekolah" name="asal_sekolah" class="form-control" id="asal_sekolah"
                                            placeholder="asal_sekolah">
                                            <?= form_error('asal_sekolah','<small class="text-danger p1-3">','</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="jurusan">jurusan</label>
                                        <input type="jurusan" name="jurusan" class="form-control" id="jurusan"
                                            placeholder="jurusan">
                                            <?= form_error('jurusan','<small class="text-danger p1-3">','</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="tahun_lulus">tahun lulus</label>
                                        <input type="tahun_lulus" name="tahun_lulus" class="form-control" id="tahun_lulus"
                                            placeholder="tahun_lulus">
                                            <?= form_error('tahun_lulus','<small class="text-danger p1-3">','</small>'); ?>
                                    </div>
                                    </div>
                                    <a href="<?= base_url('form_daftar') ?>" class="btn btn-danger">Tutup</a>
                                    <button type="submit" name="tambah" class="btn btn-primary float right">Tambah
                                        siswa</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
