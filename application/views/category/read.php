<!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <div class="row">
        <div class="col-lg-10 col-sm-6">
          <h1 class="my-4"> Category List
          </h1>
        </div>
        <div class="col-lg-2 col-sm-6">
          <h1 class="my-4">
            <a href="<?php echo site_url('category/create') ?>" class="btn btn-outline-primary pull-right"> 
              <i class="fas fa-plus"></i> Add New 
            </a>
          </h1>
        </div>
      </div>

      <?php if ($this->session->flashdata('success')): ?>

        <div class="alert alert-dismissible alert-success alertmessage">
            <button class="close" type="button" data-dismiss="alert">×</button>
            <strong>Well done!</strong> <?php echo $this->session->flashdata('success');  ?> 
        </div>

      <?php endif; ?>
      

      <div class="row" >
        
        <div class="col-lg-12 col-sm-12 col-md-12">
          
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th> No </th>
                <th> Name </th>
                <th> Option </th>
              </tr>
            </thead>

            <tbody>
              <?php 
                $i=0;
                foreach($categorylist as $category): 
                  $i++;
                  $id = $category->category_id;
                  $name = $category->category_name;
              ?>
                
                <tr>
                  <td> <?php echo $i; ?> </td>
                  <td> <?php echo $name; ?> </td>
                  <td>
                    <a href="<?php echo site_url('category/edit/'.$id) ?>" class="btn btn-outline-warning"> 
                      <i class="fas fa-edit"></i> Edit 
                    </a>

                    <a href="<?php echo site_url('category/delete/'.$id) ?>" class="btn btn-outline-danger"> 
                      <i class="fas fa-trash-alt"></i> Delete 
                    </a>

                  </td>
                </tr>

              <?php endforeach; ?>
            </tbody>

        </table>

        </div>

      </div>

    </div>
    <!-- /.container -->