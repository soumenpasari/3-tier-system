<!DOCTYPE html>
<html>
  <head>
    <title>About 3 Tier System</title>
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
        <li class="nav-item"><a href="documentation.php" class="nav-link">Documentation</a></li>
        <li class="nav-item active"><a href="#" class="nav-link">About</a></li>
      </ul>
    </nav>

    <div class="jumbotron text-light">
      <div class="container">
        <h1>About</h1>
        <small>Everything related to this <b>3-T-S</b> project</small>
      </div>
    </div>
    <!-- main content -->
    <div class="container">
      <div class="row">
        <!-- card display div -->
        <div class="col-12 col-sm-12 col-md-9">
          <!-- info card -->
          <div class="card" id="about_project">
            <div class="card-header">
              <i class="fa fa-circle" aria-hidden="true"></i> About Project
            </div>
            <div class="card-body">
              <?php
                $myfile = fopen("res/about_doc/about_project.html", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("res/about_doc/about_project.html"));
                fclose($myfile);
               ?>
            </div>
          </div>
          <!-- Technologies used info card -->
          <div class="card my-3" id="tech_info">
            <div class="card-header">
              <i class="fa fa-circle" aria-hidden="true"></i> Technologies used
            </div>
            <div class="card-body">
              <?php
                $myfile = fopen("res/about_doc/tech_used.html", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("res/about_doc/tech_used.html"));
                fclose($myfile);
               ?>
            </div>
          </div>
          <!-- dev team info card -->
          <div class="card my-3" id="dev_team">
            <div class="card-header">
              <i class="fa fa-circle" aria-hidden="true"></i> Development Team
            </div>
            <div class="card-body">
              <?php
                $myfile = fopen("res/about_doc/dev_team.html", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("res/about_doc/dev_team.html"));
                fclose($myfile);
               ?>
            </div>
          </div>
          <!-- Open source info card -->
          <div class="card my-3" id="open_source">
            <div class="card-header">
              <i class="fa fa-circle" aria-hidden="true"></i> Open Source
            </div>
            <div class="card-body">
              <?php
                $myfile = fopen("res/about_doc/open_source.html", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("res/about_doc/open_source.html"));
                fclose($myfile);
               ?>
            </div>
          </div>
          <!-- Institution info card -->
          <div class="card my-3" id="institution">
            <div class="card-header">
              <i class="fa fa-circle" aria-hidden="true"></i> Institution
            </div>
            <div class="card-body">
              <?php
                $myfile = fopen("res/about_doc/institution.html", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("res/about_doc/institution.html"));
                fclose($myfile);
               ?>
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
              <li><a href="#about_project">About Project</a></li>
              <li><a href="#tech_info">Technologies used</a></li>
              <li><a href="#dev_team">Devlopment Team</a></li>
              <li><a href="#open_source">Open source</a></li>
              <li><a href="#institution">Institution</a></li>
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
