<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Online Bookstore </title>
    
    <base href="<?php echo base_url(); ?>"/>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>template/css/modern-business.css" rel="stylesheet">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html"> Online Bookstore </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="about.html">
                <i class="fas fa-home"></i> Home
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i> Author
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <?php foreach($authorlist as $author):
                  $id = $author->author_id;
                  $name = $author->author_name; 
                ?>
                  <a class="dropdown-item" href="<?php echo site_url('home/author/'.$id) ?>"> 
                    <?php echo $name ?> 
                  </a>
                <?php endforeach; ?>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bookmark"></i> Category
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <?php foreach($categorylist as $category):
                  $id = $category->category_id;
                  $name = $category->category_name; 
                ?>
                <a class="dropdown-item" href="<?php echo site_url('home/category/'.$id) ?>">
                  <?php echo $name ?> 
                </a>
                <?php endforeach; ?>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="about.html">
                <i class="fas fa-users"></i> About
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">
                <i class="fas fa-mobile-alt"></i> Contact
              </a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
      
    <?php $this->load->view($innerdata); ?>
    
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url(); ?>template/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
