<?php  ?>
               <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
          <?php if ($this->session->flashdata()): ?>
            <div class="row-mt-3">
            <div class="col-md-6">
              <div class="alert alert-success alert-dismissible fade show" role="alert">
              Contact <strong>berhasil</strong> <?= $this->session->flashdata('message'); ?> 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            </div>
          </div>
          <?php endif ?>
          
            <div class="row">
             <div class="col-lg-6">
              <?php if(validation_errors()): ?>
              <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
              </div>
              <?php endif; ?>

   
            <?= $this->session->flashdata('flash');  ?>

              
               
              <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>                    
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">No.Phone</th>
                      <th scope="col">Message</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($Contact as $ct): ?>
                    <tr>
                      <th scope="row"><?= $i; ?></th>
                      <td><?= $ct['nama']; ?></td>
                      <td><?= $ct['email']; ?></td>
                      <td><?= $ct['no_telepon']; ?></td>
                      <td><?= $ct['pesan']; ?></td>
                      <td>
                          <a href="<?= base_url(); ?>backend/contact/delete/<?= $ct['id'];?>" class="badge badge-danger" onclick="return confirm('are you sure you want delete?');">delete</a>
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
<div class="modal fade" id="myModalPhoto" tabindex="-1" role="dialog" aria-labelledby="myModalPhotoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalPhotoLabel">Portfolio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post">
      <div class="modal-body">
         
         <div class="form-group">
          <input type="text" class="form-control" id="name" name="nama" placeholder="Image Name">
        </div>
       <div class="form-group">
          <input type="file" class="form-control" id="image" name="image" placeholder="choose image   ">
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


