<?php 

include("Navbar.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <style>
        .table-header {
          background-color: #E0DEDE; /* لون رأس الجدول */
        }
        .gray-row {
          background-color: #E0DEDE; /* لون رمادي */
        }
      </style>
</head>
  <body>
    <div class="container">
        <h2>Personal Informations:</h2>
        <table class="table">
          <thead class="table-header">
            <tr>
              <th>Name</th>
              <th>ID</th>
              <th>Sex</th>
              <th>Nationality</th>
              <th>Email</th>
              <th>Phon Number</th>
              <th>Birth Date</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Ahmed</td>
              <td>1234</td>
              <td>male</td>
              <td>yemani</td>
              <td>ahmed@gmail.com</td>
              <td>7777777777</td>
              <td>15/11/1999</td>
            </tr>
            <tr class="gray-row">
              <td>Address</td>
              <td>Fees</td>
              <td>Section</td>
              <td>Year</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>.......</td>
              <td>350</td>
              <td>SE</td>
              <td>4th</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>


 

  </body>
</html>