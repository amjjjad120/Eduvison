<?php
include("Navbar.php");

?>
<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>اختيار السنة والفصل الدراسي</title>
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  <style>
      .container label{

width: 15%;
   }
    /*  CSS لتحديد ظل input  */
    .form-control {
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); /*  ظل خفيف  */
    }
  </style>
</head>
<body>

<div class="container">
  <div class="form-group d-flex flex-row">
    <label for="yearSelect">Select Year:</label>
    <select class="form-control" id="yearSelect">
      <option>Choose</option>
      <option>2023</option>
      <option>2024</option>
      <option>2025</option>
    </select>
  </div>
  <div class="form-group d-flex flex-row">
    <label for="termSelect">Select Term:</label>
    <select class="form-control" id="termSelect">
      <option>Choose</option>
      <option>First Term</option>
      <option>Second Term</option>
      <option>Summer Term</option>
    </select>
  </div>
  <a type="button" class="btn btn-primary" href="degrees2.php">Show</a>
</div>

</body>
</html>