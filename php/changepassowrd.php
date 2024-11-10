<?php 
include("Navbar.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../boot/css/bootstrap.min.css">
    <style>

 
        body{
          font-family: simplified ;
        }


  
    </style>
</head>
<body>
   
<div class="container">
<h2>Change Passowrd:</h2>
    <form class="p-5"> 
      <div class="form-group d-flex flex-row "> 
        <label for="studentName" class="mr-sm-2 w-50">Old passowrd</label>
        <input type="text" class="form-control mb-4 mr-sm-8 shadow border-0 border-bottom-2" id="studentName" value="name">
      </div>
      <div class="form-group d-flex flex-row"> 
        <label for="studentName" class="mr-sm-2  w-50">New passowrd</label>
        <input type="text" class="form-control mb-4 mr-sm-8 shadow border-0" id="studentName" value="name">
      </div>
      <div class="form-group d-flex flex-row"> 
        <label for="studentName" class="mr-sm-2  w-50">Confirm Passowrd</label>
        <input type="text" class="form-control mb-4 mr-sm-8 shadow border-0" id="studentName" value="name">
      </div>
      <div class="d-flex justify-content-end">
        <button type="button" class="btn btn-outline-danger btn-cancel me-2">Cancel</button>
        <button type="submit" class="btn btn-outline-primary ml-3">Submit</button>
      </div>
    </form>
</div>
    
</body>
</html>