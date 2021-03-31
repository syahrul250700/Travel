<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					Form tambah data Team
					</div>
					<div class="card-body">

						<form action="" method="post">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" name="nama" class="form-control" id="nama">
							<small  class="form-text text-danger"><?= form_error('nama'); ?></small>
						</div>
						<div class="form-group">
							<label for="jumlah_anggota">Jumlah Anggota</label>
							<input type="text" name="jumlah_anggota" class="form-control" id="jumlah_anggota">
							<small  class="form-text text-danger"><?= form_error('jumlah_anggota'); ?></small>
						</div>
						<div class="form-group">
							<label for="ketua">Ketua</label>
							<input type="text" name="ketua" class="form-control" id="ketua">
							<small  class="form-text text-danger"><?= form_error('ketua'); ?></small>
						</div>
						<div class="form-group">
							<label for="gambar">Gambar</label>
							<input type="file" name="ketua" class="form-control" id="ketua">
							<small  class="form-text text-danger"><?= form_error('gambar'); ?></small>
						</div>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>