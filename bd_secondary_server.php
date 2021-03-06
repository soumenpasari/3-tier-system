<!DOCTYPE html>
<html>
  <head>
    <title>Big Data Secondary server access</title>
    <?php
      include("res/links/fav.php");
      require_once("res/cdn/bootstrap_cdn.php");
      require_once("res/links/css_links.php");
      require_once("res/links/fonts.php");
    ?>
  </head>
  <body>
    <!-- web app content starts here -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="index.php">
        <img src="./res/img/logo.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        3-T-S
      </a>
      <ul class="navbar-nav">
        <li class="nav-item active"><a href="index.php" class="nav-link">App</a></li>
        <li class="nav-item"><a href="documentation.php" class="nav-link">Documentation</a></li>
        <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
      </ul>
    </nav>
    <!-- breadcrumb -->
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
      <li class="breadcrumb-item active"><i class="fa fa-database" aria-hidden="true"></i> Secondary Big Data acess</li>
    </ol>
    <!-- main content -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-1 icon_sign">
          <a href="index.php"><i class="fa fa-server" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Main server"></i></a>
          <a href="bd_server.php"><i class="fa fa-database" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Big Data server"></i></a>
          <i class="fa fa-database active" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Secondary Big Data server"><span class="badge badge-success"><span class="fa fa-folder"></span></span></i>
        </div>
        <!-- card display div -->
        <div class="col-12 col-sm-12 col-md-4">
          <div class="card card_hover">
            <div class="card-header">
              <i class="fa fa-circle" aria-hidden="true"></i> Secondary Big Data Access
            </div>
            <div class="card-body">
              <form method="post">
                <div class="row">
                  <div class="col-12 col-sm-12 col-md-6">
                    Database
                    <select class="form-control" name="db_name">
                      <option value="none" disabled selected>Choose database</option>
                      <option value="add">100YearWeatherCollection</option>
                      <option value="sub">Videos</option>
                      <option value="mul">CityBike</option>
                      <option value="avg">City</option>
                    </select>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6">
                    Query language
                    <select class="form-control" name="query_lang_name">
                      <option value="none" disabled selected>Choose query language</option>
                      <option value="add">C</option>
                      <option value="sub">C++</option>
                      <option value="sub">Java</option>
                    </select>
                  </div>
                </div>
                <hr>
                Operation
                <select class="form-control" name="function_name">
                  <option value="none" disabled selected>Choose operation</option>
                  <option value="add" data-type="string">Name</option>
                  <option value="avg" data-type="string">Cast</option>
                  <option value="avg" data-type="array">Genre</option>
                  <option value="avg" data-type="number">Rating</option>
                  <option value="avg" data-type="year">Year</option>
                </select>
                <br>
                <div class="row">
                  <div class="col-12 col-sm-12 col-md-6">
                    From
                    <input type="number" class="form-control" name="year_range_from" placeholder="Year"/>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6">
                    To
                    <input type="number" class="form-control" name="year_range_to" placeholder="Year"/>
                  </div>
                </div>
                <hr>
                <!-- button for submit -->
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                  <button type="submit" class="btn btn-default" name="btn_submit">Submit</button>
                  <button type="Reset" class="btn btn-flat text-danger" name="btn_submit">Reset</button>
                </div>
              </form>
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
