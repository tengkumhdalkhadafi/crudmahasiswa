<div class="content-wrapper">

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">

            <div class="card-body">

                <div class="table-responsive">
                    <div class="container-fluid">
                        <h1 class="h3 mb-4 text-gray-800">
                            
                        </h1>
                        <div class="card-header justify-content-center">
                            Form Tambah Data Prodi
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('Prodi/upload'); ?>" method="post">
                                <div class="form-group">
                                    <label for="nama">Nama Prodi</label>
                                    <input type="text" name="nama" class="form-control" id="nama_prodi" placeholder="Nama prodi">
                                </div>
                                <div class="form-group">
                                    <label for="nim">Ruangan</label>
                                    <input type="text" name="ruangan" class="form-control" id="ruangan" placeholder="Ruangan">
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jurusan</label>
                                    <input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="Jurusan">
                                </div>
                                <div class="form-group">
                                    <label for="email">Akreditasi</label>
                                    <input type="text" name="akreditasi" class="form-control" id="akreditasi" placeholder="Akreditasi">
                                </div>
                                <div class="form-group">
                                    <label for="prodi">Nama Kaprodi</label>
                                    <input type="text" name="nama_kaprodi" class="form-control" id="nama_kaprodi" placeholder="Nama kaprodi">

                                </div>
                                <div class="form-group">
                                    <label for="asal_sekolah">Tahun Berdiri</label>
                                    <input type="text" name="tahun_berdiri" class="form-control" id="tahun_berdiri" placeholder="Tahun berdiri">
                                </div>
                                <div class="form-group">
                                    <label for="no_hp">Output Lulusan</label>
                                    <input type="text" name="output_lulusan" class="form-control" id="output_lulusan" placeholder="output_lulusan">
                                </div>
                                <a href="<?= base_url('Prodi') ?>" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-primary float-right">
                                    Tambah Prodi </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
