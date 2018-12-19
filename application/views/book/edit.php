<div class="container">

	<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-10 col-sm-6">
          <h1 class="my-4"> <small> Update Existing Book </small>
          </h1>
        </div>
        <div class="col-lg-2 col-sm-6">
          <h1 class="my-4">
            <a href="<?php echo site_url('book') ?>" class="btn btn-outline-primary pull-right"> 
              <i class="fas fa-backward"></i> Go Back
            </a>
          </h1>
        </div>
    </div>

	<div class="row">
		<div class="col-lg-12 col-sm-12">
			<form action="<?php echo site_url('book/update') ?>" method="POST" enctype="multipart/form-data">

				<input type="hidden" name="id" value="<?php echo $booklist['book_id'] ?>">

				<div class="form-group">
					<div class="row">
						<label class="col-lg-4 col-sm-6" for="book_name"> Book's Title </label>

						<div class="col-lg-8 col-sm-6">
							<input type="text" class="form-control" id="book_name" placeholder="Enter Book Title" name="title" value="<?php echo $booklist['book_title'] ?>">
							<?php echo form_error('title'); ?>
						</div>
					</div>			    
				</div>

				<div class="form-group">
					<div class="row">
						<label class="col-lg-4 col-sm-6" for="book_cover"> Book's Cover </label>

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
							<img src="<?php echo site_url($booklist['book_cover']) ?>" width="120px" height="150px">
							<input type="hidden" name="oldphoto" value="<?php echo $booklist['book_cover'] ?>">
						</div>

						<div class="col-lg-8 col-sm-6" id="newprofilediv">
							<input type="file" name="newphoto" id="book_cover" class="form-control-file" >
						</div>

					</div>

				</div>

				<div class="form-group">
					<div class="row">
						<label for="formGroupExampleInput" class="col-lg-4 col-sm-6 pt-0"> Choose Author </label>

						<div class="col-lg-8 col-sm-6">
							<select class="form-control" name="authorid">
								<?php foreach($authorlist as $author):
									$id = $author->author_id;
                  					$name = $author->author_name; 
								?>
									<option value="<?php echo $id; ?>" 
										<?php if ($id == $booklist['book_authorid']) { echo "selected";} ?> 
									> 
										<?php echo $name ?> 
									</option>
								<?php endforeach; ?>
							</select>
					        <?php echo form_error('authorid'); ?>
						</div>
					</div>			    
				</div>

				<div class="form-group">
					<div class="row">
						<label for="formGroupExampleInput" class="col-lg-4 col-sm-6 pt-0"> Choose Category </label>

						<div class="col-lg-8 col-sm-6">
							<select class="form-control" name="categoryid">
								<?php foreach($categorylist as $category):
									$id = $category->category_id;
                  					$name = $category->category_name; 
								?>
									<option value="<?php echo $id; ?>" <?php if ($id == $booklist['book_categoryid']) { echo "selected";} ?>  > 
										<?php echo $name ?> 
									</option>
								<?php endforeach; ?>
							</select>
					        <?php echo form_error('categoryid'); ?>
						</div>
					</div>			    
				</div>

				<div class="form-group">
					<div class="row">
						<label class="col-lg-4 col-sm-6" for="book_price"> Book's Price </label>

						<div class="col-lg-8 col-sm-6">
							<input type="text" class="form-control" id="book_price" placeholder="Enter book's Price" name="price" value="<?php echo $booklist['book_price'] ?>">
							<?php echo form_error('price'); ?>
						</div>
					</div>			    
				</div>

				<div class="form-group">
					<div class="row">
						<label class="col-lg-4 col-sm-6" for="summernote"> Book's Description </label>

						<div class="col-lg-8 col-sm-6">
							<textarea id="summernote" name="description"> <?php echo $booklist['book_description'] ?> </textarea>
							<?php echo form_error('description'); ?>
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

