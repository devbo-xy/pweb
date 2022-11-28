<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
	<h5 class="my-0 mr-md-auto font-weight-normal">Sistem Data Karyawan</h5>
	<nav class="my-2 my-md-0 mr-md-3">
		<a class="p-2 text-dark" href="#">Tambah Data</a>
	</nav>
	<a class="btn btn-outline-primary" href="<?=base_url('pweb/logout') ?>">Sign Out</a>
</div>

<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-md-6">
			<div class="card bg-light my-5">
				<div class="card-header text-center">Tambah Data</div>
				<div class="card-body">
					<form action="" method="post" class="needs-validation" novalidate>
						<div class="form-group">
							<label for="nama_mhs">Nama Karyawan</label>
							<input type="text" class="form-control" name="nama_mhs" id="nama_mhs" placeholder="Masukan nama Karyawan" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda belum memasukan nama karyawan.
							</div>
						</div>
						<div class="form-group">
							<label for="n_kontrak">Kontrak</label>
							<input type="n_kontrak" class="form-control" name="n_kontrak" id="n_kontrak" placeholder="Masukan Kontrak" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda belum kontrak.
							</div>
						</div>
						<div class="form-group">
							<label for="n_jabatan">Tahun Sekarang</label>
							<input type="n_jabatan" class="form-control" name="n_jabatan" id="n_jabatan" placeholder="Masukan Jabatan" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda belum memasukan jabatan.
							</div>
						</div>
						<!-- <div class="form-group">
							<label for="n_pert3">Nilai Pert 3</label>
							<input type="n_pert3" class="form-control" name="n_pert3" id="n_pert3" placeholder="Masukan nilai pertemuan 3" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda belum memasukan nilai pertemuan 3.
							</div>
						</div>
						<div class="form-group">
							<label for="n_pert4">Nilai Pert 4</label>
							<input type="n_pert4" class="form-control" name="n_pert4" id="n_pert4" placeholder="Masukan nilai pertemuan 4" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda belum memasukan nilai pertemuan 4.
							</div>
						</div> -->
						<div class="text-center">
							<button type="submit" class="btn btn-primary text-center px-3 py-2" name="tambah">Tambah</button>
						</div>
					</form>
				</div>
			</div>	
		</div>
	</div>
</div>