<div class="container">

	<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-10 col-sm-6">
          <h1 class="my-4"> <small> Update Exisiting Category </small>
          </h1>
        </div>
        <div class="col-lg-2 col-sm-6">
          <h1 class="my-4">
            <a href="<?php echo site_url('category') ?>" class="btn btn-outline-primary pull-right"> 
              <i class="fas fa-backward"></i> Go Back
            </a>
          </h1>
        </div>
    </div>

	<div class="row">
		<div class="col-lg-12 col-sm-12">
			<form action="<?php echo site_url('category/update') ?>" method="POST">

				<input type="hidden" name="id" value="<?php echo $categorylist['category_id'] ?>">

				<div class="form-group">
					<div class="row">
						<label class="col-lg-4 col-sm-6" for="category_name"> Category's Name </label>

						<div class="col-lg-8 col-sm-6">
							<input type="text" class="form-control" id="category_name" placeholder="Enter Category Name" name="name" value="<?php echo $categorylist['category_name'] ?>">
						</div>
					</div>			    
				</div>

				<div class="form-group row">
				    <div class="col-sm-10">
				    	<button type="submit" class="btn btn-outline-primary"> 
				    		<i class="far fa-save"></i> UPDATE 
				    	</button>
				    </div>
				</div>


			</form>
		</div>
	</div>
</div>

