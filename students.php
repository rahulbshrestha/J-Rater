<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="utf-8">
    <title>Students</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">    
    <script src = "js/scripts.js"></script>
  </head>
  
  <body>
   <?php
         $dbhost = 'localhost';
         $dbuser = 'rashrestha';
         $dbpass = 'YsSAm5Aa';
         $dbname = 'wry';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
         if(!$conn){
            die('Could not connect: ' . mysqli_error());
         }
         echo "Connected successfully from students.php!";
   ?>
    <!-- Header section starts -->
    <header id="home" class="home-area">    
      <div class="overlay"></div>
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <a href="index.html" class="navbar-brand"><img src="images/logo.png" alt=""></a>  
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="students.php">Students</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link page-scroll" href="courses.php">Courses</a>
              </li>                            
              <li class="nav-item">
                <a class="nav-link page-scroll" href="instructors.php">Instructors</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#Discussion">Discussion</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#help">Help</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="imprint.php">Imprint</a>
              </li>  
            </ul>
          </div>
        </div>
      </nav>  
      <div class="container">      
        <div class="row space-100">
          <div class="col-lg-7 col-md-12 col-xs-12">
            <div class="contents">
              <h2 class="head-title">Students Sign Up Form </h2>
              <form action= "students_input.php" method = "post">
                  Student ID: <br>
                 <input type="text" name="student_id"><br>
                 First Name:<br>
                 <input type="text" name="firstname"><br>
                 Last Name<br>
                 <input type="text" name="lastname"><br>
                 Major:<br>
                 <input type="text" name="major"><br>
                 Year:<br>
                 <input type="text" name="year"><br>
                 <br>
                 <input type="submit" value="Submit" name = "submit">
            </form>
            </div>
          </div>  
          <div class="col-lg-5 col-md-12 col-xs-12">
            <!--Add something here later-->

         </div>            
          </div>
  
       
      </div>             
    </header>
    <!-- Header Section End --> 
  </body>
</html>
