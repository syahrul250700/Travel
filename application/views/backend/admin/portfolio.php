               <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
          <?php if ($this->session->flashdata()): ?>
            <div class="row-mt-3">
            <div class="col-md-6">
              <div class="alert alert-success alert-dismissible fade show" role="alert">
              Portfolio<strong> berhasil</strong> <?= $this->session->flashdata('flash'); ?> 
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

   
            <!-- <?= $this->session->flashdata('flash');  ?> -->

              <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#myModalPhoto">Add New photo</a>
               
              <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>                    
                      <th scope="col">Image</th>
                      <th scope="col">Name</th>
                      <th scope="col">Action</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($PortFolio as $pt): ?>
                    <tr>
                      <th scope="row"><?= $i; ?></th>
                      <td><img src="<?= base_url(); ?>/assets/img/<?= $pt['image'] ?>" style="height:100px; width:150px; " class="card-img-top"></td>
                      <td><?= $pt['nama']; ?></td>
                      <td>
                          <a href="<?= base_url(); ?>backend/portfolio/delete/<?= $pt['id'];?>" class="badge badge-danger" onclick="return confirm('are you sure you want delete?');">delete</a>
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


