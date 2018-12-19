<div class="container">

	<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-10 col-sm-6">
          <h1 class="my-4"> <small> Detail </small>
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

    <?php $booklist["book_id"] ?>

	<div class="row">
		<div class="col-lg-12 col-sm-12">

			<div class="form-group">
				<div class="row">
					<label class="col-lg-4 col-sm-6"> Book's Cover </label>

					<div class="col-lg-8 col-sm-6">
						<img src="<?php echo site_url($booklist['book_cover']) ?>" width="120px" height="150px">
					</div>
				</div>			    
			</div>

			<div class="form-group">
				<div class="row">
					<label class="col-lg-4 col-sm-6"> Book's Title </label>

					<div class="col-lg-8 col-sm-6">
						<p> <?php echo $booklist['book_title'];?>  </p>
					</div>
				</div>			    
			</div>

			<div class="form-group">
				<div class="row">
					<label class="col-lg-4 col-sm-6"> Author Name </label>

					<div class="col-lg-8 col-sm-6">
						<p> <?php echo $booklist['author_name'];?>  </p>
					</div>
				</div>			    
			</div>

			<div class="form-group">
				<div class="row">
					<label class="col-lg-4 col-sm-6"> Category </label>

					<div class="col-lg-8 col-sm-6">
						<p> <?php echo $booklist['category_name'];?>  </p>
					</div>
				</div>			    
			</div>

			<div class="form-group">
				<div class="row">
					<label class="col-lg-4 col-sm-6"> Book Description </label>

					<div class="col-lg-8 col-sm-6">
						<p> <?php echo $booklist['book_description'];?>  </p>
					</div>
				</div>			    
			</div>

			<div class="form-group">
				<div class="row">
					<label class="col-lg-4 col-sm-6"> Price </label>

					<div class="col-lg-8 col-sm-6">
						<p style="color: red"> <?php echo $booklist['book_price'];?> MMK  </p>
					</div>
				</div>			    
			</div>

		</div>
	</div>
</div>

