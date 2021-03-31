 <!-- contact -->
  <section class="contact" id="contact" style=" background-image: url(<?= base_url(); ?>assets/img/contact.jpg); background-size: cover; max-width: 100%; height: 100vh;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2>Contact</h2>
          <hr>
        </div>
      </div>

  
    <?php echo $this->session->flashdata('msg');?>
      <div class="row">
        <div class="col-sm-6">
          <h3>Contact Info.</h3>
          <ul class="list-group">
            <li class="list-group-item fa fa-map">Jln.Manunggal Gg.Saudara Perum.Indah Hari Sanda Blok D2</li>
            <li class="list-group-item fa fa-phone"> 082385091235</li>
          </ul>

        </div>
      
      

      <div class="col-sm-6">
          <form action="<?= base_url().'contact/send' ?>" method="post">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" id="nama" name="nama" class="form-control" placeholder="masukkan nama">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" id="email" name="email" class="form-control" placeholder="masukkan email">
            </div>
            <div class="form-group">
              <label for="telp">No telp</label>
              <input type="tel" id="no_telepon" name="no_telepon" class="form-control" placeholder="masukkan nomor telepon">
            </div>

            <div class="form-group">
              <label for="pesan">Pesan</label>

              <textarea class="form-control" id="pesan" name="pesan" rows="4" placeholder="Masukkan pesan"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Pesan</button>


          </form>
        </div>

      </div>

    </div>
  </section>
  <!-- akhir contact -->

   