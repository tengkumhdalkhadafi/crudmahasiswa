<div class="app-wrapper">
			<div class="app-content pt-3 p-md-3 p-lg-4">
				<div class="container-fluid">
					<h1 class="h3 mb-4 text-gray-800"><?php echo $judul?></h1>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									Detail Mahasiswa
								</div>
								<div class="card-body">
									<h2 class="card-title"><?= $mahasiswa['Nama']; ?></h2>
									<h6 class="card-subtitle mb-2 text-muted"><?= $mahasiswa['email'];?></h6>
									<div class="row">
										<div class="col-md-4">Nim</div>
										<div class="col-md-2">:</div>
										<div class="col-md-6"><?= $mahasiswa['NIM'];?></div>
									</div>
				
									<div class="row">
										<div class="col-md-4">Jenis Kelamin</div>
										<div class="col-md-2">:</div>
										<div class="col-md-6"><?= $mahasiswa['jenis_kelamin'];?></div>
									</div>
				
									<div class="row">
										<div class="col-md-4">Prodi</div>
										<div class="col-md-2">:</div>
										<div class="col-md-6"><?= $mahasiswa['prodi'];?></div>
									</div>
				
									<div class="row">
										<div class="col-md-4">Asal Sekolah</div>
										<div class="col-md-2">:</div>
										<div class="col-md-6"><?= $mahasiswa['asal_sekolah'];?></div>
									</div>
									<div class="row">
										<div class="col-md-4">No Hp</div>
										<div class="col-md-2">:</div>
										<div class="col-md-6"><?= $mahasiswa['no_hp'];?></div>
									</div>
									<div class="row">
										<div class="col-md-4">Alamat</div>
										<div class="col-md-2">:</div>
										<div class="col-md-6"><?= $mahasiswa['alamat'];?></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>