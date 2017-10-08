<!DOCTYPE html>
<html>
  <head>
    <title>Big Data server</title>
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
      <li class="breadcrumb-item active"><i class="fa fa-database" aria-hidden="true"></i> Big Data acess</li>
    </ol>
    <!-- main content -->
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-1 icon_sign">
          <a href="index.php"><i class="fa fa-server" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Main server"></i></a>
          <i class="fa fa-database active" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Big Data server"></i>
          <a href="bd_secondary_server.php"><i class="fa fa-database" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Secondary Big Data server"><span class="badge badge-success"><span class="fa fa-folder"></span></span></i></a>
          <a href="documentation.php"><i class="fa fa-file-text-o" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Documentation"></i></a>
        </div>
        <!-- card display div -->
        <div class="col-12 col-sm-12 col-md-5">
          <div class="card card_hover">
            <div class="card-header">
              <i class="fa fa-circle" aria-hidden="true"></i> Hadoop Big Data Access
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
                      <option value="add">Pig</option>
                      <option value="sub">Hive</option>
                    </select>
                  </div>
                </div>
                <hr>
                Operation
                <select class="form-control" name="function_name">
                  <option value="none" disabled selected>Choose operation</option>
                  <option value="add">Add</option>
                  <option value="avg">Average</option>
                  <option value="avg">Analyse all data</option>
                  <option value="avg">Show number of data</option>
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
                  <button type="Reset" class="btn btn-danger" name="btn_submit">Reset</button>
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
