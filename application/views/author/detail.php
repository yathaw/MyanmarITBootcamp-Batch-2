<div class="container">

	<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-10 col-sm-6">
          <h1 class="my-4"> <small> Detail </small>
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

    <?php $authorlist["author_id"] ?>

	<div class="row">
		<div class="col-lg-12 col-sm-12">

			<div class="form-group">
				<div class="row">
					<label class="col-lg-4 col-sm-6"> Author's Image </label>

					<div class="col-lg-8 col-sm-6">
						<img src="<?php echo site_url($authorlist['author_profile']) ?>" width="120px" height="150px">
					</div>
				</div>			    
			</div>

			<div class="form-group">
				<div class="row">
					<label class="col-lg-4 col-sm-6"> Author's Name </label>

					<div class="col-lg-8 col-sm-6">
						<p> <?php echo $authorlist['author_name'];?>  </p>
					</div>
				</div>			    
			</div>

			<div class="form-group">
				<div class="row">
					<label class="col-lg-4 col-sm-6"> Author's Gender </label>

					<div class="col-lg-8 col-sm-6">
						<p> <?php echo $authorlist['author_gender'];?>  </p>
					</div>
				</div>			    
			</div>

			<div class="form-group">
				<div class="row">
					<label class="col-lg-4 col-sm-6"> Author's Birht Place </label>

					<div class="col-lg-8 col-sm-6">
						<p> <?php echo $authorlist['author_place'];?>  </p>
					</div>
				</div>			    
			</div>

			<div class="form-group">
				<div class="row">
					<label class="col-lg-4 col-sm-6"> Author's Bio </label>

					<div class="col-lg-8 col-sm-6">
						<p> <?php echo $authorlist['author_bio'];?>  </p>
					</div>
				</div>			    
			</div>

		</div>
	</div>
</div>

