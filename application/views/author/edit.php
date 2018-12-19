<div class="container">

	<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-10 col-sm-6">
          <h1 class="my-4"> <small> Update Existing Author </small>
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
			<form action="<?php echo site_url('author/update') ?>" method="POST" enctype="multipart/form-data">

				<input type="hidden" name="id" value="<?php echo $authorlist['author_id'] ?>">

				<div class="form-group">
					<div class="row">
						<label class="col-lg-4 col-sm-6" for="author_name"> Author's Name </label>

						<div class="col-lg-8 col-sm-6">
							<input type="text" class="form-control" id="author_name" placeholder="Enter Author Name" name="name" value="<?php echo $authorlist['author_name'] ?>">
						</div>
					</div>			    
				</div>

				<div class="form-group">
					<div class="row">
						<label class="col-lg-4 col-sm-6" for="author_profile"> Author's Profile </label>

						<div class="col-lg-8 col-sm-6">
							<div class="form-check">
					        	<input class="form-check-input" type="radio" name="profileradio" id="old" value="old" checked>
					        	<label class="form-check-label" for="old"> Old Profile
					            
					          </label>
					        </div>

					        <div class="form-check">
					        	<input class="form-check-input" type="radio" name="profileradio" id="new" value="new">
					        	<label class="form-check-label" for="new"> New Profile
					            
					          </label>
					        </div>

						</div>

					</div>

					<div class="row">
						<div class="col-lg-4 col-sm-6"> </div>

						<div class="col-lg-8 col-sm-6" id="oldprofilediv">
							<img src="<?php echo site_url($authorlist['author_profile']) ?>" width="120px" height="150px">
							<input type="hidden" name="oldphoto" value="<?php echo $authorlist['author_profile'] ?>">
						</div>

						<div class="col-lg-8 col-sm-6" id="newprofilediv">
							<input type="file" name="newphoto" id="author_profile" class="form-control-file" >
						</div>

					</div>			    
				</div>

				<div class="form-group">
					<div class="row">
						<label for="formGroupExampleInput" class="col-lg-4 col-sm-6 pt-0"> Author's Gender </label>

						<div class="col-lg-8 col-sm-6">
							<div class="form-check">
					        	<input class="form-check-input" type="radio" name="gender" id="author_male" value="Male" <?php echo $authorlist['author_gender'] == 'Male' ? "checked" : ""; ?> >
					        	<label class="form-check-label" for="author_male">
					            <i class="fas fa-male" style="color: blue"></i> Male 
					          </label>
					        </div>
					        <div class="form-check">
					        	<input class="form-check-input" type="radio" name="gender" id="author_female" value="Female" <?php echo $authorlist['author_gender'] == 'Female' ? "checked" : ""; ?> >
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
							<input type="text" class="form-control" id="author_birthplace" placeholder="Enter Author's Birth Place" name="place" value="<?php echo $authorlist['author_place']; ?>">
						</div>
					</div>			    
				</div>

				<div class="form-group">
					<div class="row">
						<label class="col-lg-4 col-sm-6" for="summernote"> Author's Bio </label>

						<div class="col-lg-8 col-sm-6">
							<textarea id="summernote" name="bio"> <?php echo $authorlist['author_bio'] ?> </textarea>
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

