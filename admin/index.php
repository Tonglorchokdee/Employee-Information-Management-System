<?php
require_once('../connections/mysqli.php');

if ($_SESSION == NULL) {
  header("location:../login.php");
  exit();
}elseif ($_SESSION["user_level"] != "admin") {
  header("location:../index.php");
  exit();
}
?>

<!-- /END THE ...  -->
<!-- ================================================ -->
<!-- START THE ... --> 

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="shortcut icon"  href="../images/Tong.png" >
    <title>ระบบหลังบ้าน</title>
          <!-- fonts -->

          <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Kanit:300">

        <style>
          body{
            font-family: kanit;
            
            /* background-color: #666666; */
            background-position: left top;
            background-size: cover;
            background-repeat: repeat;
          }
          .Hello{
            transform: translate(40px, 14px);
          }

        </style>

</head>

<!-- /END THE ...  -->
<!-- ================================================ -->
<!-- START THE ... --> 

<body  background="../images/07.jpg">
    <?php include 'include/header.php'; ?>
    <div class="container-fluid">
      <div class="row">
        <?php include 'include/sidebarMenu.php'; ?>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"> 
        <div class="d-grid gap-2 col-6 mx-auto">

<!-- /END THE ...  -->
<!-- ================================================ -->
<!-- START THE ... --> 

            <font color="white">
            <div class="container">
            <div class="Hello">
              <h1 class="display-4">Hello, Admin!</h1>
            </div>
              <br>
              <h1 class="display-4"> </h1>
              <br>
              <h1 class="display-4"> </h1>
              <br>
              <h1 class="display-4"> </h1>
              <br>
              <h1 class="display-4"> </h1>
              <br>
              <h1 class="display-4"> </h1>
              <br>
              <h1 class="display-4"> </h1>
              <br>
              <h1 class="display-4"> </h1>
              <br>
              <h1 class="display-4"> </h1>
              <br>
              <h1 class="display-4"> </h1>
              <br>
              <h1 class="display-4"> </h1>
              <br>
              <h1 class="display-4"> </h1>
              <br>
              <h1 class="display-4"> </h1>
              <br>
              <h1 class="display-4"> </h1>
              <br>
              <h1 class="display-4"> </h1>
              <br>
              <h1 class="display-4"> </h1>
              <br>
              <h1 class="display-4"> </h1>
              <br>
              <h1 class="display-4"> </h1>
              <br>
              <h1 class="display-4"> </h1>
              <br>
              <h1 class="display-4"> </h1>
              <br>
              <h1 class="display-4"> </h1>
              <br>
              <h1 class="display-4"> </h1>
              <br>
              <h1 class="display-4"> </h1>
              <br>

              </font>

<!-- /END THE ...  -->
<!-- ================================================ -->
<!-- START THE ... --> 

            </div>
            
          </div>
          

        </main>
        

      </div>
    </div>
    <?php mysqli_close($Connection); ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    
  </body>
</html>
