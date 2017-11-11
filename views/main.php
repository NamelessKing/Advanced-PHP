
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Advanced PHP</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/blog.css" rel="stylesheet">
  </head>

  <body>

    <header>
      <div class="blog-masthead">
        <div class="container">
          <nav class="nav">
            <a class="nav-link active" href="<?php echo ROOT_URL; ?>">Home</a>
            <a class="nav-link" href="<?php echo ROOT_URL; ?>questions">Ask Question</a>
            <a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Login</a>
            <a class="nav-link" href="<?php echo ROOT_URL; ?>users/register">Register</a>
          </nav>
        </div>
      </div>

      <div class="blog-header">
        <div class="container">
          <h1 class="blog-title">Question2Answer</h1>
          <p class="lead blog-description">A place where you can ask questions and other people can answer</p>
        </div>
      </div>
    </header>

    <main role="main" class="container">

      <div class="row">

        <?php require_once($view); ?>

      </div><!-- /.row -->

    </main><!-- /.container -->

    <footer class="blog-footer">
      <p>Advanced PHP Series By <a href="http://learningfromscratch.online/" target="blank">Learning From Scratch</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
