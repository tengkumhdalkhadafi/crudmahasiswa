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
                                <form action="<?= base_url('Mahasiswa/upload'); ?>" method="post">
                                    <div class="form-group">
    
                                        <label for="Nama">Nama</label>
                                        <input type="text" name="Nama" value="<?=set_value('nama')?>" class="form-control" id="Nama"
                                            placeholder="Nama">
                                            <?= form_error('nama','<small class="text-danger p1-3">','</small>'); ?>

                                    </div>
                                    <div class="form-group">
                                        <label for="NIM">NIM</label>
                                        <input type="text" name="Nim" class="form-control" id="NIM" placeholder="NIM">
                                        <?= form_error('NIM','<small class="text-danger p1-3">','</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis kelamin</label>
                                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                            <option value="">Jenis Kelamin</option>
                                            <option value="Laki Laki">Laki Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        <?= form_error('jenis_kelamin','<small class="text-danger p1-3">','</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="prodi">Prodi</label>
                                        <select name="prodi" id="prodi" class="form-control">
                                            <option value="">Pilih Prodi</option>
                                            <?php foreach ($prodi as $p) : ?>
                                                <option value="<?= $p['id']; ?>"><?= $p['nama']; ?></option>
                                                <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="asal_sekolah">Asal Sekolah</label>
                                        <input type="text" name="asal_sekolah" class="form-control" id="asal_sekolah"
                                            placeholder="Asal Sekolah">
                                    </div>
                                    <div class="form-group">
                                        <label for="no_hp">No Hp</label>
                                        <input type="text" name="no_hp" class="form-control" id="no_hp"
                                            placeholder="No Hp">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" id="alamat"
                                            placeholder="Alamat">
                                    </div>
                                    <a href="<?= base_url('Mahasiswa') ?>" class="btn btn-danger">Tutup</a>
                                    <button type="submit" name="tambah" class="btn btn-primary float right">Tambah
                                        Mahasiswa</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
