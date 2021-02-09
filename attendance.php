<!DOCTYPE html>
<html>
    <head>
        <title>attendance_page</title>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
        <?php include 'css.php';?>
</head>
<body>
    
<?php include 'leftbar.php';?>
<div class="all-content-wrapper">
<div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo1" src="img/logo/logo.png" alt="" /></a>
                    </div>

                    
                </div>
            </div>
        </div>
        <?php include 'header.php';?>
        
<div class='jumbotron'>
  <h2> Attendance Management System
</div>
<div class='container'>
<table class="table table-striped">
  <thead class='thead-dark'>
    <tr>
      <th scope="col">Rollno</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Attendance</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td><button class='btn btn-info btn-lg'></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td><button class='btn btn-info btn-lg'></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>

      <td><button class='btn btn-info btn-lg'></td>
    </tr>
  </tbody>
</table>
</div>
<script>
    $( ".btn-info" ).click(function() {
  //$(this).removeClass('btn-info');
  $(this).toggleClass('btn-success');
  $(this).toggleClass('btn-info');
});
    <script>
    <?php include 'scripts.php';?>
</body>
</html>