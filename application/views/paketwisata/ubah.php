<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					Form ubah data Team
					</div>
					<div class="card-body">

						<form action="" method="post">
							<input type="hidden" name="id" value="<?= $team['id']; ?>">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" name="nama" class="form-control" id="nama" value="<?= $team['nama']; ?>">
							<small  class="form-text text-danger"><?= form_error('nama'); ?></small>
						</div>
						<div class="form-group">
							<label for="jumlah_anggota">Jumlah Anggota</label>
							<input type="text" name="jumlah_anggota" class="form-control" id="jumlah_anggota" value="<?= $team['jumlah_anggota']; ?>">
							<small  class="form-text text-danger"><?= form_error('jumlah_anggota'); ?></small>
						</div>
						<div class="form-group">
							<label for="ketua">Ketua</label>
							<input type="text" name="ketua" class="form-control" id="ketua" value="<?= $team['ketua']; ?>">
							<small  class="form-text text-danger"><?= form_error('ketua'); ?></small>
						</div>
						<button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>