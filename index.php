<!DOCTYPE html>
<html>
  <head>
    <title>Final Year Project</title>
    <?php
      include("res/links/fav.php");
      require_once("res/cdn/bootstrap_cdn.php");
      require_once("res/links/css_links.php");
      require_once("res/links/fonts.php");
    ?>
  </head>
  <body>
    <!-- php codes -->
    <?php
    //variable declarations
      $btn_submit = isset($_GET['btn_submit']);
      if($btn_submit){
        $function_name = null;
        $number_array = trim($_GET['number_array']);
        if(isset($_GET['function_name'])){
          $function_name = $_GET['function_name'];
        }
      }
     ?>
    <!-- php codes ends -->
    <!-- web app content starts here -->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="index.php">
        <img src="./res/img/logo.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        3 TIER SYSTEM
      </a>
    </nav>
    <!-- breadcrumb -->
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
      <li class="breadcrumb-item<?php if(!$btn_submit){echo " active";}?>"><?php if($btn_submit){echo "<a href='index.php'>";} ?><i class="fa fa-server" aria-hidden="true"></i> Server<?php if($btn_submit){echo "</a>";} ?></li>
      <li class="breadcrumb-item <?php if($btn_submit){echo "active visible animated fadeInDown";} else{echo "invisible";} ?>"><i class="fa fa-bullhorn" aria-hidden="true"></i> Output</li>
    </ol>
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-1 icon_sign">
          <i class="fa fa-server active" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Main server"></i>
          <a href="bd_server.php"><i class="fa fa-database" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Hadoop Big Data server"></i></a>
          <a href="bd_secondary_server.php"><i class="fa fa-database" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Secondary Big Data server"><span class="badge badge-success"><span class="fa fa-folder"></span></span></i></a>
          <a href="documentation.php"><i class="fa fa-file-text-o" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Documentation"></i></a>
        </div>
        <!-- card display div -->
        <div class="col-12 col-sm-12 col-md-5">
          <div class="card card_hover">
            <div class="card-header">
              <i class="fa fa-circle" aria-hidden="true"></i> Server application
            </div>
            <div class="card-body">
              <form method="get">
                Enter Value
                <div class="row numb_fields">
                  <div class="col"><input class="form-control" type="text" placeholder="Seperate numbers with coma (,)" name="number_array" autofocus/></div>
                </div>
                <hr>
                Choose operation
                <select class="form-control" name="function_name">
                  <option value="none" disabled selected>Choose function</option>
                  <option value="add">Add</option>
                  <option value="sub">Substract</option>
                  <option value="mul">Multiply</option>
                  <option value="avg">Average</option>
                </select>
                <hr>
                <!-- button for submit -->
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                  <button type="submit" class="btn btn-default" name="btn_submit">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="animated fadeInLeft text-center col-12 col-sm-12 col-md-1 icon_process <?php if($btn_submit){echo "visible";} else{echo "invisible";} ?>">
          <i class="fa fa-<?php if($number_array == "" or $function_name == null){echo "exclamation";} else{echo 'long-arrow-right';} ?> <?php if($btn_submit){echo "animated slideInLeft animate_r";}?>"></i>
        </div>
        <!-- result display div -->
        <div class="col-12 col-sm-12 col-md-5 <?php if($btn_submit){echo "visible";if($number_array != "" and $function_name != null){echo " animated pulse";}} else{echo "invisible";}?>">
          <div class="card div_shadow">
            <div class="card-header">
              <i class="fa fa-<?php if($number_array == "" or $function_name == null){echo "exclamation-circle";} else{echo 'circle';} ?>"></i> Output <?php if($number_array == "" or $function_name == null){echo "<span class='badge badge-warning'>Warning</span>";} ?>
            </div>
            <div class="card-body">
              <!-- output display -->
              <span>
                <?php
                  if($btn_submit){
                    $output_status_check_select = true;
                    $output_status_check_field = true;
                    //check if options is checked or not
                    if($function_name == null){
                      echo "<div class='alert alert-danger animated shake'>You have to choose one operation or function</div>";
                      $output_status_check_select = false;
                    }
                    //if field is left empty
                    if($number_array == ""){
                      echo "<div class='alert alert-danger animated shake'>You have not entered any value</div>";
                      $output_status_check_field = false;
                    }
                    if($output_status_check_select && $output_status_check_field){
                      //next operation after checking of conditions
                      //explode the string number_array
                      $unpro_arr = explode(",",$number_array);
                      $result_arr = 0;
                      //according to the operator funtion calling for result
                      if($function_name == 'add'){
                        $result_arr = add_arr($unpro_arr);
                      } elseif ($function_name == 'sub') {
                        $result_arr = sub_arr($unpro_arr);
                      } elseif ($function_name == 'mul') {
                        $result_arr = mul_arr($unpro_arr);
                      } elseif ($function_name == 'avg') {
                        $result_arr = avg_arr($unpro_arr);
                      }
                      echo "<p>Answer :</p><h1 class='text-success animated flipInX' style='animation-delay:0.5s;'>$result_arr</h1>";
                      echo "<hr>";
                      //display the results with operations name
                      echo "<div class='text-info'>Operation choosen is : <span class='badge badge-info'>$function_name<span></div>";
                      echo "<div class='row'><div class='col-4 text-info'>Entered numbers:</div><div class='col-8'>";
                      foreach ($unpro_arr as $num_key => $num_value) {
                        $delay = $num_key/6;
                        echo "<span class='badge badge-dark animated flipInY' style='animation-delay : ".$delay."s;'>".$num_value."</span> ";
                      }
                      echo "</div></div>";
                    }
                  }
                 ?>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- web app content ends here -->
    <!-- links of js in the bootom of page content -->
    <?php
      require_once("res/links/js_links.php");
     ?>
  </body>
  <?php
  //user difined functions for operations
    function add_arr($unpro_arr){
      $result = 0;
      foreach ($unpro_arr as $num) {
        $result += $num;
      }
      return $result;
    }
    //function for sub
    function sub_arr($unpro_arr){
      $result = 0;
      foreach ($unpro_arr as $num_key => $num_value) {
         if($num_key == 0){
           $result = $num_value;
           continue;
         }
        $result -= $num_value;
      }
      return (float)$result;
    }
    //function for mul
    function mul_arr($unpro_arr){
      $result = 1;
      foreach ($unpro_arr as $num) {
        $result *= $num;
      }
      return $result;
    }
    //function for avg
    function avg_arr($unpro_arr){
      $flag = true;
      foreach ($unpro_arr as $num_key => $num_value) {
        $data_type = gettype($num_value);
        $arr_len = count($unpro_arr);
        $result = (integer)(add_arr($unpro_arr))/$arr_len;
      }
      return $result;

    }
   ?>
</html>
