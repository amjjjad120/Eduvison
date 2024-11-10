<?php
include("Navbar.php");

?>

<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>معلومات الدفع</title>
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  <style>

   .container label{

width: 20%;
   }
  </style>
</head>
<body>

<div class="container">
  <form> 
    <div class="form-group d-flex flex-row"> 
      <label for="studentName" class="mr-sm-2">Student Name</label>
      <input type="text" class="form-control mb-4 mr-sm-8" id="studentName" value="name">
    </div>

    <div class="form-group d-flex flex-row">
      <label  for="cardNumber" class="mr-sm-2">Card Number:</label>
      <input type="text" class="form-control mb-2 mr-sm-2" id="cardNumber" value="1234 1234 1234">
    </div>

    <div class="form-group d-flex flex-row">
      <label for="cardCode" class="mr-sm-2">Card Code:</label>
      <input type="text" class="form-control mb-2 mr-sm-2" id="cardCode" value="CVC">
    </div>

    <div class="form-group d-flex flex-row">
      <label for="expiryDate" class="mr-sm-2">Expiry Date:</label>
      <input type="text" class="form-control mb-2 mr-sm-2" id="expiryDate" value="mon/year">
    </div>

    <div class="form-group d-flex flex-row">
      <label for="amount" class="mr-sm-2">The Amount:</label>
      <input type="text" class="form-control mb-2 mr-sm-2" id="amount" value="000.1">
    </div>

    <button type="submit" class="btn btn-primary mb-2">Confirm</button>
  </form>
</div>

</body>
</html>