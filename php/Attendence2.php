<?php
include("Navbar.php");

?>
<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>الحضور والغياب</title>
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  <style>
    .table-header {
      background-color: #E0DEDE; 
    }
  </style>
</head>
<body>

<div class="container">
  <table class="table">
    <thead class="table-header">
      <tr>
        <th>Subject</th>
        <th>Present</th>
        <th>Absent</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>math</td>
        <td><input type="radio" name="attendance1" value="present"></td>
        <td><input type="radio" name="attendance1" value="absent"></td>
        <td>2024-11-06</td>
      </tr>
      <tr>
        <td>Arabic</td>
        <td><input type="radio" name="attendance2" value="present"></td>
        <td><input type="radio" name="attendance2" value="absent"></td>
        <td>2024-11-06</td>
      </tr>
      </tbody>
  </table>
  <div style="display: flex; justify-content: center;">
  <button type="submit" class="btn btn-primary">Save</button>
</div>

</div>

</body>
</html>