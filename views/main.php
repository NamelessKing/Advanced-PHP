<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Advanced PHP</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo ROOT_URL; ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo ROOT_URL; ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?php echo ROOT_URL; ?>assets/css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="<?php echo ROOT_URL; ?>">Question2Answer</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo ROOT_URL; ?>questions">Questions</a>
            </li>
            <?php if(isset($_SESSION['loggedIn'])) : ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo ROOT_URL; ?>users/logout"><?php echo $_SESSION['user']['name']; ?> | Logout</a>
            </li>
            <?php else : ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo ROOT_URL; ?>users/register">Register</a>
            </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('<?php echo ROOT_URL; ?>assets/img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <?php if($_GET['controller'] == "" && $_GET['action'] == "") : ?>
            <div class="site-heading">
              <h1>Question2Answer</h1>
              <span class="subheading">A place to gain and share knowledge.</span>
            </div>
            <?php elseif($_GET['controller'] == "users" && $_GET['action'] == 'login') : ?>
            <div class="site-heading">
              <h1>Login</h1>
              <span class="subheading">Want to ask a question? Login and ask as many questions you want!</span>
            </div>
            <?php elseif($_GET['controller'] == "users" && $_GET['action'] == 'register') : ?>
            <div class="site-heading">
              <h1>Register</h1>
              <span class="subheading">Want to ask a question? Register and ask as many questions you want!</span>
            </div>
            <?php elseif($_GET['controller'] == "questions" && $_GET['action'] == '') : ?>
            <div class="site-heading">
              <h1>Ask a question?</h1>
              <?php
              if(isset($_SESSION['loggedIn'])) {
                $url = ROOT_URL . "questions/add";
              } else {
                $url = ROOT_URL . "users/login";
              }
              ?>
              <a href="<?php echo $url; ?>" class="btn btn-primary">Ask Question</a>
            </div>
            <?php elseif($_GET['controller'] == "questions" && $_GET['action'] == 'add') : ?>
            <div class="site-heading">
              <h1>Your Question!</h1>
              <span class="subheading">Feel free to ask any type of questions.</span>
            </div>
            <?php elseif($_GET['controller'] == "questions" && $_GET['action'] == 'edit') : ?>
            <div class="site-heading">
              <h1>Edit Question!</h1>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <?php Messages::display(); ?>
        </div>
      </div>
    </div>

    <?php require_once($view); ?>

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Your Website 2017</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo ROOT_URL; ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo ROOT_URL; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo ROOT_URL; ?>assets/js/clean-blog.min.js"></script>

  </body>

</html>
