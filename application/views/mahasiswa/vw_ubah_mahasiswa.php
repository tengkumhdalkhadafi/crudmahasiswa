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
                                <form action="<?= base_url('Mahasiswa/update'); ?>" method="post">
                                <input type="hidden" name="id" value="<?= $mahasiswa['id'];?>">  
                                    <div class="form-group">
                                        <label for="Nama">Nama</label>
                                        <input type="text" name="Nama" class="form-control" id="Nama" value="<?= $mahasiswa['Nama'];?>"
                                            placeholder="Nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="nim">NIM</label>
                                        <input type="text" name="NIM" class="form-control" id="NIM" value="<?= $mahasiswa['NIM'];?>" placeholder="NIM">
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis kelamin</label>
                                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" value="<?= $mahasiswa['jenis_kelamin'];?>">
                                            <option value="">Jenis Kelamin</option>
                                            <option value="Laki-laki" <?php if ($mahasiswa['jenis_kelamin'] == "Laki-laki"){
                                                echo "selected";
                                            } ?>>Laki-laki</option>
                                            <option value="Perempuan" <?php if ($mahasiswa['jenis_kelamin'] == "Perempuan"){
                                                echo "selected";
                                            } ?>>Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control" id="email" value="<?= $mahasiswa['email'];?>"
                                            placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="prodi">Prodi</label>
                                        <select name="prodi" id="prodi" class="form-control" value="<?= $mahasiswa['prodi'];?>">
                                            <?php foreach ($prodi as $p) : ?>
                                                <option value="<?= $p['id']; ?>" <?php if ($mahasiswa['prodi'] == $p['id']){
                                                                                        echo "selected";
                                                                                    } ?>><?= $p['nama']; ?></option>
                                                <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="asal_sekolah">Asal Sekolah</label>
                                        <input type="text" name="asal_sekolah" class="form-control" id="asal_sekolah" value="<?= $mahasiswa['asal_sekolah'];?>"
                                            placeholder="Asal Sekolah">
                                    </div>
                                    <div class="form-group">
                                        <label for="no_hp">No Hp</label>
                                        <input type="text" name="no_hp" class="form-control" id="no_hp" value="<?= $mahasiswa['no_hp'];?>"
                                            placeholder="No Hp">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $mahasiswa['alamat'];?>"
                                            placeholder="Alamat">
                                    </div>
                                    <a href="<?= base_url('Mahasiswa') ?>" class="btn btn-danger">Tutup</a>
                                    <button type="submit" name="tambah" class="btn btn-primary float right">Simpan
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
