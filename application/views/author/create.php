<div class="container">

	<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-10 col-sm-6">
          <h1 class="my-4"> <small> Create New Author </small>
          </h1>
        </div>
        <div class="col-lg-2 col-sm-6">
          <h1 class="my-4">
            <a href="<?php echo site_url('author') ?>" class="btn btn-outline-primary pull-right"> 
              <i class="fas fa-backward"></i> Go Back
            </a>
          </h1>
        </div>
    </div>

	<div class="row">
		<div class="col-lg-12 col-sm-12">
<form action="<?php echo site_url('author/store') ?>" method="POST" enctype="multipart/form-data">

				<div class="form-group">
					<div class="row">
						<label class="col-lg-4 col-sm-6" for="author_name"> Author's Name </label>

						<div class="col-lg-8 col-sm-6">
<input type="text" class="form-control" id="author_name" placeholder="Enter Author Name" name="name" value="<?php echo set_value('name'); ?>">

							<?php echo form_error('name'); ?>
						</div>
					</div>			    
				</div>

				<div class="form-group">
					<div class="row">
						<label class="col-lg-4 col-sm-6" for="author_profile"> Author's Profile </label>

						<div class="col-lg-8 col-sm-6">
<input type="file" name="photo" id="author_profile" class="form-control-file" >
						</div>
					</div>			    
				</div>

				<div class="form-group">
					<div class="row">
						<label for="formGroupExampleInput" class="col-lg-4 col-sm-6 pt-0"> Author's Gender </label>

						<div class="col-lg-8 col-sm-6">
							<div class="form-check">
<input class="form-check-input" type="radio" name="gender" id="author_male" value="Male" checked>
					        	<label class="form-check-label" for="author_male">
					            <i class="fas fa-male" style="color: blue"></i> Male 
					          </label>
					        </div>
					        <div class="form-check">
<input class="form-check-input" type="radio" name="gender" id="author_female" value="Female">
					        	<label class="form-check-label" for="author_female">
					            <i class="fas fa-male" style="color: pink"></i> Female
					          </label>
					        </div>

					        <?php echo form_error('gender'); ?>
						</div>
					</div>			    
				</div>

				<div class="form-group">
					<div class="row">
						<label class="col-lg-4 col-sm-6" for="author_birthplace"> Author's Birth place </label>

						<div class="col-lg-8 col-sm-6">
<input type="text" class="form-control" id="author_birthplace" placeholder="Enter Author's Birth Place" name="place" value="<?php echo set_value('place'); ?>">
							<?php echo form_error('place'); ?>
						</div>
					</div>			    
				</div>

				<div class="form-group">
					<div class="row">
						<label class="col-lg-4 col-sm-6" for="summernote"> Author's Bio </label>

						<div class="col-lg-8 col-sm-6">
<textarea id="summernote" name="bio"> <?php echo set_value('bio'); ?> </textarea>
							<?php echo form_error('bio'); ?>
						</div>
					</div>			    
				</div>

				<div class="form-group row">
				    <div class="col-sm-10">
				    	<button type="submit" class="btn btn-outline-primary"> 
				    		<i class="far fa-save"></i> SAVE 
				    	</button>
				    </div>
				</div>


			</form>
		</div>
	</div>
</div>

