    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('<?php echo base_url("template/images/2.jpg") ?>')">
            <div class="carousel-caption d-none d-md-block">
              <h3>First Slide</h3>
              <p>This is a description for the first slide.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('<?php echo base_url("template/images/6.jpg") ?>')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Second Slide</h3>
              <p>This is a description for the second slide.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('<?php echo base_url("template/images/5.jpg") ?>')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Third Slide</h3>
              <p>This is a description for the third slide.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4 pt-5" align="center"> New Arrival  </h1>

      <!-- New Arrival -->
      <div class="row pt-3">
        <?php foreach ($newarrival as $new): 
            $id           = $new->book_id;
            $title        = $new->book_title;
            $cover      = $new->book_cover;
            $price        = $new->book_price;
            $description  = $new->book_description;
            $limited_word = word_limiter(strip_tags($description), 25);
            $authorid     = $new->book_authorid;
            $authorname   = $new->author_name;
            $categoryid   = $new->book_categoryid;
            $categoryname = $new->category_name;

            
        ?>
      
          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="<?php echo $cover ?>" alt=""></a>
              <div class="card-body">
                <h4 class="card-title" align="center">
                  <a href="<?php echo site_url('home/book/'.$id) ?>"> 
                    <?php echo $title; ?> 
                  </a>
                </h4>
                <div class="float-left"> <p> <?php echo $authorname; ?> </p> </div>
                <div class="float-right"> <p> <?php echo $categoryname ?> </p> </div> <br><br>


                <p> <?php echo $limited_word; ?> </p>
                
                <div class="row">
                  <div class="col-lg-6 col-sm-6">
                    <a href="<?php echo site_url('home/book/detail/'.$id) ?>" class="btn btn-outline-primary"> 
                      <i class="fas fa-pen"></i> Detail 
                    </a>
                  </div>

                  <div class="col-lg-6 col-sm-6">
                    <a href="<?php echo site_url('home/book/buy/'.$id) ?>" class="btn btn-outline-success float-right"> 
                      <i class="fas fa-shopping-cart"></i> Buy 
                    </a>
                  </div>

                </div>

              </div>
            </div>
          </div>     
        <?php endforeach; ?>

      </div>
      <!-- /.row -->


      <div class="pt-5"></div>
      <!-- Portfolio Section -->
      <h2 align="center" class="pt-5"> All Books </h2>

      <div class="row pt-3">
        
        <?php foreach ($booklist as $book): 
            $id           = $book->book_id;
            $title        = $book->book_title;
            $cover        = $book->book_cover;
            $price        = $book->book_price;
            $description  = $book->book_description;
            $limited_word = word_limiter(strip_tags($description), 25);
            $authorid     = $book->book_authorid;
            $authorname   = $book->author_name;
            $categoryid   = $book->book_categoryid;
            $categoryname = $book->category_name;

            
        ?>

        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="<?php echo $cover ?>" alt=""></a>
            <div class="card-body">
              <h4 class="card-title" align="center">
                <a href="<?php echo site_url('home/book/'.$id) ?>"> 
                  <?php echo $title ?> 
                </a>
              </h4>
              
              <div class="row">
                <div class="col-lg-6 col-sm-6">
                  <a href="<?php echo site_url('home/book/detail/'.$id) ?>" class="btn btn-outline-primary"> 
                    <i class="fas fa-pen"></i> Detail 
                  </a>
                </div>

                <div class="col-lg-6 col-sm-6">
                  <a href="<?php echo site_url('home/book/buy/'.$id) ?>" class="btn btn-outline-success float-right"> 
                    <i class="fas fa-shopping-cart"></i> Buy 
                  </a>
                </div>

              </div>

            </div>
          </div>
        </div>
        
        <?php endforeach; ?>

      </div>
          
      
      <?php echo $pagination;?>


    </div>
    <!-- /.container -->