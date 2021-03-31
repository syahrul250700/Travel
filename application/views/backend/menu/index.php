        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

         

          	<div class="row">
             <div class="col-lg-6">
             	 <?= form_error('menu', '<div class="alert alert-danger" role="alert">','</div>') ?>

             	 <?= $this->session->flashdata('message'); ?>

              <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#myModalMenu">Add New menu</a>
               
              <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>                    
                      <th scope="col">Menu</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($menu as $m): ?>
                    <tr>
                      <th scope="row"><?= $i; ?></th>
                      <td><?= $m['menu']; ?></td>
                      <td>
                          <a href="" class="badge badge-danger">delete</a>
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
<div class="modal fade" id="myModalMenu" tabindex="-1" role="dialog" aria-labelledby="myModalMenuLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalMenuLabel">Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post">
      <div class="modal-body">
         
         <div class="form-group">
          <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu name">
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


<!-- <div class="form-group">
           <select name="menu_id" id="menu_id" class="form-control">
             <option value=""> Select Menu</option>
             <?php foreach ($menu as $m) : ?>
              <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
             <?php endforeach; ?>
           </select>
         </div> -->

   <!--  <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
            <label class="form-check-label" for="is_active">
              Active?
            </label>
          </div>
        </div>   -->
         <!-- <div class="form-group">
          <input type="text" class="form-control" id="icon" name="icon" placeholder="Sub Menu Icon">
        </div> -->