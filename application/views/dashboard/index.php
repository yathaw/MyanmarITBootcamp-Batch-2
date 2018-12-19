<div class="row">
	
	<div class="col-xl-3 col-sm-6 mb-3">
    	<div class="card text-white bg-primary o-hidden h-100">
	        <div class="card-body">
	        	<div class="card-body-icon">
	            	<i class="fas fa-users"></i>
	          	</div>
	          	<?php if (isset($total_author)){ ?>
	          		<div class="mr-5">
	          			Total <?php echo $total_author?> Authors
	          		</div>

	          	<?php } else { ?>
	          		<div class="mr-5"> 0 Author</div>
	        	<?php } ?>
	        </div>

	        <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('author') ?>">
	          <span class="float-left">View Details</span>
	          <span class="float-right">
	            <i class="fas fa-angle-right"></i>
	          </span>
	        </a>	        
      	</div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-3">
    	<div class="card text-white bg-warning o-hidden h-100">
        	<div class="card-body">
          		<div class="card-body-icon">
            		<i class="fas fa-book"></i>
          		</div>
          		<?php if (isset($total_book)){ ?>
	          		<div class="mr-5">
	          			Total <?php echo $total_book?> Books
	          		</div>

	          	<?php } else { ?>
	          		<div class="mr-5"> 0 Book </div>
	        	<?php } ?>

        	</div>
        	<a class="card-footer text-white clearfix small z-1" href="book">
          		<span class="float-left">View Details</span>
          		<span class="float-right">
            		<i class="fas fa-angle-right"></i>
          		</span>
        	</a>
      	</div>
    </div>

</div>