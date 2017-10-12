<!DOCTYPE html>
<html>
  <head>
    <title>Documentation 3 Tier System</title>
    <?php
      include("res/links/fav.php");
      require_once("res/cdn/bootstrap_cdn.php");
      require_once("res/links/css_links.php");
      require_once("res/links/fonts.php");
    ?>
  </head>
  <body>
    <!-- web app content starts here -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
      <a class="navbar-brand" href="index.php">
        <img src="./res/img/logo.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        3-T-S
      </a>
      <ul class="navbar-nav">
        <li class="nav-item"><a href="index.php" class="nav-link">App</a></li>
        <li class="nav-item active"><a href="documentation.php" class="nav-link">Documentation</a></li>
        <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
      </ul>
    </nav>

    <div class="jumbotron text-light">
      <div class="container">
        <h1>Documentation</h1>
        <small>Project based on <b>three tier architecture</b> system</small>
      </div>
    </div>
    <!-- main content -->
    <div class="container">
      <div class="row">
        <!-- card display div -->
        <div class="col-12 col-sm-12 col-md-9">
          <div class="card">
            <div class="card-header">
              <i class="fa fa-circle" aria-hidden="true"></i> README.md
            </div>
            <div class="card-body">
              <pre><?php
                $myfile = fopen("README.md", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("README.md"));
                fclose($myfile);
               ?></pre>
            </div>
          </div>
          <!-- license card -->
          <div class="card my-3">
            <div class="card-header">
              <i class="fa fa-balance-scale" aria-hidden="true"></i> LICENSE
            </div>
            <div class="card-body">
              <pre><?php
                $myfile = fopen("LICENSE", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("LICENSE"));
                fclose($myfile);
               ?></pre>
            </div>
          </div>
        </div>

        <!-- documentation heading list -->
        <div class="col-12 col-sm-12 col-md-3">
          <form method="get">
            <div class="row numb_fields">
              <div class="col"><input class="form-control" type="text" placeholder="Search" name="number_array"/></div>
            </div>
            <ul class="heading-list-nav text-success">
              <li><a href="#">Introduction</a></li>
              <li><a href="#">Aim and motive</a></li>
              <li><a href="#">README.md</a></li>
              <li><a href="#"><i class="fa fa-balance-scale"></i> Licence</a></li>
            </ul>
          </form>
        </div>
      </div>
    </div>
    <!-- footer -->
    <?php
      include("footer.php");
     ?>

    <!-- links of js in the bootom of page content -->
    <?php
      require_once("res/links/js_links.php");
     ?>
  </body>
</html>
