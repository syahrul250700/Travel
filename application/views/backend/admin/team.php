        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

          <?php if ($this->session->flashdata()): ?>
            <div class="row-mt-3">
            <div class="col-md-6">
              <div class="alert alert-success alert-dismissible fade show" role="alert">
              Gambar <strong> berhasil</strong> <?= $this->session->flashdata('flash'); ?> 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            </div>
          </div>
          <?php endif ?>


          	<div class="row">
             <div class="col-lg">

              <?php if(validation_errors()): ?>
              <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
              </div>
              <?php endif; ?>

   
            <!-- <?= $this->session->flashdata('message');  ?>
 -->
              <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#myModalTeam">Add New Team</a>
               
              <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Gambar</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Jumlah Anggota</th>
                      <th scope="col">Ketua</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($Team as $tm): ?>
                    <tr>
                      <th scope="row"><?= $i; ?></th>
                      <td><img src="<?= base_url(); ?>/assets/img/<?= $tm['gambar'] ?>" style="height:100px; width:150px; " class="card-img-top"></td>
                      <td><?= $tm['nama']; ?></td>
                      <td><?= $tm['jumlah_anggota']; ?></td>
                      <td><?= $tm['ketua']; ?></td>
                      <td>
                          <a href="<?= base_url(); ?>backend/team/delete/<?= $tm['id'];?>" class="badge badge-danger">delete</a>
                      </td>
                    </tr>
                    <?php $i++; ?>
                  <?php endforeach; ?>
                  </tbody>
                </table>

             </div>     
            </div>
          

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->



      <!-- model -->
      <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="myModalTeam" tabindex="-1" role="dialog" aria-labelledby="myModalTeamLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalTeamLabel">Add New Sub Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post">
      <div class="modal-body">
        
        <div class="form-group">
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Name Team">
        </div>
         <div class="form-group">
          <input type="text" class="form-control" id="jumlah_anggota" name="jumlah_anggota" placeholder="Total">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="ketua" name="ketua" placeholder="leader">
        </div>
        <div class="form-group">
          <input type="file" class="form-control" id="gambar" name="gambar" placeholder="Image">
        </div>  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
      </form>
    </div>
  </div>
</div>

    