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
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="index.php">
        <img src="./res/img/logo.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        3 TIER SYSTEM
      </a>
    </nav>
    <!-- breadcrumb -->
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
      <li class="breadcrumb-item active"><i class="fa fa-file-text-o" aria-hidden="true"></i> Documentation</li>
    </ol>
    <!-- main content -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-1 icon_sign">
          <a href="index.php"><i class="fa fa-server" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Main server"></i></a>
          <a href="bd_server.php"><i class="fa fa-database" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Big Data server"></i></a>
          <a href="bd_secondary_server.php"><i class="fa fa-database" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Secondary Big Data server"><span class="badge badge-success"><span class="fa fa-folder"></span></span></i></a>
          <i class="fa fa-file-text-o active" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Documentation"></i>
        </div>
        <!-- card display div -->
        <div class="col-12 col-sm-12 col-md-11">
          <div class="card">
            <div class="card-header">
              <i class="fa fa-circle" aria-hidden="true"></i> Documentation
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-sm-12 col-md-3">
                  <form method="get">
                    <div class="row numb_fields">
                      <div class="col"><input class="form-control" type="text" placeholder="Search" name="number_array"/></div>
                    </div>
                    <ul>
                      <li><a href="#">Introduction</a></li>
                      <li><a href="#">Aim and motive</a></li>
                      <li><a href="#">Acknowledgement</a></li>
                      <li><a href="#">Credits</a></li>
                    </ul>
                  </form>
                </div>
                <div class="col-12 col-sm-12 col-md-9">
                  <h1 class="text-success">Introduction</h1><hr>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- links of js in the bootom of page content -->
    <?php
      require_once("res/links/js_links.php");
     ?>
  </body>
</html>
