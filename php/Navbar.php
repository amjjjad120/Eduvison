<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
 <link rel="stylesheet" href="../css/controlstudent.css">
 <link rel="stylesheet" href="../boot/css/bootstrap.min.css">
 

</head>
  <body>
      
<button class="menu-toggle" onclick="toggleMenu()">☰</button>
<div class="overlay" onclick="toggleMenu()"></div>

<div class="sidebar">
    <img  class="img" src="../images/Logoedu.png" alt="">
    <div class="logo">

        <div class="logo-placeholde">
            <img  class="img" src="../images/Logoedu.png" alt="">
        </div>
        <h1>EduVision</h1>
        <div  class="imguser">
            <img  class="hh" src="../images\user1.svg" alt=""></div>
    </div>

    <a class="nav-item" href="../php/profil.php">

        <div class="icon-placeholder">  <img  class="profile-img" src="../images/user1.svg" alt=""></div>

        Profile
    </a>
    <a class="nav-item" href="../php/subject.php" >
        <div class="icon-placeholder" onclick="changePage()">   <img  class="profile-img" src=" ../images\student1.svg" alt=""></div>
        Subject
    </a>
    <a class="nav-item" href="../php/Exam.php" >
        <div class="icon-placeholder" onclick="changePage()">   <img  class="profile-img" src=" ../images\student1.svg" alt=""></div>
        Exams
    </a>
    <a class="nav-item" href="../php/Degrees1.php">
        <div class="icon-placeholder"><img  class="profile-img" src="../images/control.svg" alt=""></div>
<!--        <button onclick="changePage()">التالي</button>-->
<!--        <div class="icon-placeholder"><img  class="profile-img" src="images\contacts_208px.png" alt=""></div>-->
       Degrees
    </a>
    <a class="nav-item" href="../php/Homework1.php">
        <div class="icon-placeholder"><img  class="profile-img" src="../images/degrees1.svg" alt=""></div>
        Home Work
    </a>
    <a class="nav-item" href="../php/Attendence1.php">
        <div class="icon-placeholder"><img  class="profile-img" src="../images/ATTENDANCE11.svg" alt=""></div>
        Attendance
    </a>
    <a class="nav-item" href="../php/Payment.php">
        <div class="icon-placeholder"><img  class="profile-img" src="../images/ATTENDANCE11.svg" alt=""></div>
       Payment
    </a>
   
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-cog"></i> Setting
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="changepassowrd.php"><i class="fas fa-key"></i> Change Password</a>
              <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </div>
          </div>
        

</div>

<div class="main-content">
    <div class="header">
        <div class="welcome-text"></div>
        <div class="profile-section">
<div class="profile-img"><img  class="profile-img" src="../images/ic_notifications_active_24px.svg" alt=""></div>

            <div class="profile-img"><img  class="profile-img" src="../images/ic_sms_24px.svg" alt=""></div>
            <div class="profile-img"><img  class="profile-img" src="../images\user1.svg" alt=""></div>
                    </div>
        
    </div>
    <input type="search" class="search-bar" placeholder="Search...">
    <div class="profile-content">
    </div>
</div>

    <script src="../javascript/controlstudent.js"></script>
 
    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>   

   </body>
</html>