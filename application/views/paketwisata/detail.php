<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			
			<div class="card">
			  <div class="card-header">
			    Detail data Team
			  </div>
			  <div class="card-body">
			  	<img src="<?= base_url(); ?>/assets/img/<?= $team['gambar'] ?>" height="400" class="img-responsive">
			    <h5 class="card-title"><?= $team['nama']; ?></h5>
			    <h6 class="card-text"><?= $team['jumlah_anggota']; ?></h6>
			    <h6 class="card-text"><?= $team['ketua']; ?></h6>
			    <a href="<?= base_url(); ?>team" class="btn btn-primary">Kembali</a>
			  </div>
			</div>

		</div>
	</div>
</div>