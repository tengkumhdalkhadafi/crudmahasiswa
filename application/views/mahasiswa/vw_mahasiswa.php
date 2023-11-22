<div class="app-wrapper">
			<div class="app-content pt-3 p-md-3 p-lg-4">
				<div class="container-xl">
					<h1 class="app-page-title">Overview</h1>
					<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
					<div class="row">
						<div class="col-md-6"><a href="<?=base_url()?>index.php/Mahasiswa/tambah" class="btn btn-info mb-2">tambah Mahasiswa</a>
							
						</div>
						<div>
						<div class="col-md-12">
							<?= $this->session->flashdata('massage'); ?>
							<table class="table">
								<thead>
									<tr>
										<td>No</td>
										<td>Nama</td>
										<td>Nim</td>
										<td>jenis_kelamin</td>
										<td>Email</td>
									    <td>prodi</td>
										<td>asal_sekolah</td>
										<td>Aksi</td>
									</tr>
								</thead>
								<tbody>
									
										<?php $i = 1;?>
										<?php foreach ($mahasiswa as $us) :?>
											<tr>
												<td><?= $i;?>.</td>
												<td><?= $us['Nama']?>;</td>
												<td><?= $us['NIM'];?></td>
												<td><?= $us['jenis_kelamin'];?></td>
												<td><?= $us['email'];?></td>
												<td><?= $us['prodi'];?></td>
												<td><?= $us['asal_sekolah'];?></td>


												<td>
													<a href="<?= base_url('index.php/mahasiswa/hapus/') .$us['id'];?>" class="bagde badge-danger">hapus</a>
													
													<a href="<?= base_url('index.php/mahasiswa/edit/') .$us['id'];?>" class="bagde badge-danger">edit</a>
													
													<a href="<?= base_url('index.php/mahasiswa/detail/') .$us['id'];?>" class="bagde badge-danger">detail</a>
													
													</td>
											</tr>
											<?php $i++;?>
										<?php endforeach;?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				
			</div>
					</div>
				</div>
				
			</div>
						</div>
						