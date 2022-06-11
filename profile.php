<?php
require_once('connections/mysqli.php');

if ($_SESSION == NULL) {
  header("location:login.php");
  exit();
}

$check_submit = "";

$sql = "SELECT * FROM tb_user WHERE user_username = '".$_SESSION['user_username']."'";
$query = mysqli_query($Connection,$sql);
$result = mysqli_fetch_array($query);

if (isset($_GET['update'])) {
  if ($_GET['update'] == "pass") {
    $check_submit = '<div class="alert alert-success" role="alert">';
    $check_submit .= '<span><i class="bi bi-check2-circle"></i> บันทึกข้อมูลเรียบร้อยแล้ว</span>';
    $check_submit .= '</div>';
  }
}
?>

<!-- /END THE php  -->
<!-- ================================================ -->
<!-- START THE html --> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $title; ?></title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="shortcut icon"  href="images/Tong.png" >
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
        </style>

</head>

<!-- /END THE html  -->
<!-- ================================================ -->
<!-- START THE body --> 

<body class="default" background="images/06.jpg">
  <?php include 'includes/navbar.php';?>
  <form class="row g-3">
<div class="container col-xs-6 col-md-6 "> 
  
<div class="login-form  mt-4 p-4">
  <div class="row justify-content-md-center">
        <div class="col-md-auto"><?php echo $check_submit;?></div>
      </div>
  <div class="alert alert-secondary" role="alert">
    <h4  align = 'center' class="heading">ข้อมูลของคุณ <?php echo $result[3]; ?></h4>

    
<!-- /END THE ...  -->
<!-- ================================================ -->
<!-- START THE echo"$result[] --> 

      <p>   
      <div class="container">
        <div class="row">
          <div class="col">
          <!-- รับค่าตัวเเปรมาเเสดงผล    -->
          <h6 align = 'right'><?php echo"ชื่อผู้ใช้ : <br>"; ?></h6>        
          </div>
          <div class="col">  
          <h6 align = 'left'><?php echo"$result[1] <br>"; ?></h6> 
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col">
          <h6 align = 'right'><?php echo"ชื่อ - นามสกุล : <br>"; ?></h6>
          </div>
          <div class="col">  
          <h6 align = 'left'><?php echo"$result[3] &nbsp $result[4] <br>"; ?></h6>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col">
          <h6 align = 'right'><?php echo"เพศ : <br>"; ?></h6>
          </div>
          <div class="col">  
          <h6 align = 'left'><?php echo"$result[5] <br>"; ?></h6>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col">
          <h6 align = 'right'><?php echo"อีเมล์ : <br>"; ?></h6>
          </div>
          <div class="col">  
          <h6 align = 'left'><?php
              if ($result[6] == NULL) {
                echo "<span >ว่าง</span>";
              }else{
                echo "<span >$result[6]</span>";
              }
              ?></h6>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col">
          <h6 align = 'right'><?php echo"ระดับผู้ใช้ : <br>"; ?></h6>
          </div>
          <div class="col">  
          <h6 align = 'left'><span class="badge bg-primary"><?php if ($result[7] == "member") {echo "สมาชิก";}else{echo "ผู้ดูแลระบบ";} ?></span></h5></h6>
          </div>
        </div>
      </div>

<!-- /END THE START THE echo"$result[] -->
<!-- ================================================ -->
<!-- START THE blockquote--> 
      <hr>
        <figure class="text-end">
          <blockquote class="blockquote">
              <p><div class="spinner-grow spinner-grow-sm" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>   A well-known quote, contained in a blockquote element.</p>
          </blockquote>
        <figcaption class="blockquote-footer">Someone famous in 
              <cite title="Source Title">Source Title</cite>
        </figcaption>
      </figure>
    </div>
    <div class="mt-3">
              <a href="profile_edit.php" class="btn btn-success">แก้ไขข้อมูล</a>
    </div>
  </div>  
</div>
</div>
</form>
<?php mysqli_close($Connection);?>

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
