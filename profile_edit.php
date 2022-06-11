<?php
require_once('connections/mysqli.php');

if ($_SESSION == NULL) {
  header("location:login.php");
  exit();
}

$sql = "SELECT * FROM tb_user WHERE user_username = '".$_SESSION['user_username']."'";
$query = mysqli_query($Connection,$sql);
$result = mysqli_fetch_array($query);

if (isset($_POST["save"])) {
  $sql_2 = "UPDATE tb_user SET user_name = '".$_POST["user_name"]."' , user_surname = '".$_POST["user_surname"]."' , user_sex = '".$_POST["user_sex"]."' , user_email = '".$_POST["user_email"]."' WHERE user_username = '".$_SESSION['user_username']."'";
  $query_2 = mysqli_query($Connection,$sql_2);

  header("location:profile.php?update=pass");
  exit();
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
  <div class="container-fluid">
    <div class="row justify-content-md-center">
      <div class="col-md-5 mb-4">
        <div class="card border-dark mt-2">
          <h5 class="card-header">แก้ไขข้อมูลผู้ใช้ ID : <?php echo $result[0]; ?></h5>
          <div class="card-body">
            <form method="post">
              <div class="mb-3">
                <label class="form-label">ชื่อผู้ใช้</label>
                <input type="text" class="form-control" value="<?php echo $result[1];?>" disabled/>
              </div>
              <div class="mb-3">
                <label class="form-label">ชื่อ</label>
                <input type="text" class="form-control" name="user_name" value="<?php echo $result[3];?>" required/>
              </div>
              <div class="mb-3">
                <label class="form-label">นามสกุล</label>
                <input type="text" class="form-control" name="user_surname" value="<?php echo $result[4];?>" required/>
              </div>
              <div class="mb-3">
                <label class="form-label">เพศ</label>
                <select class="form-select" name="user_sex">
                  <option value="ชาย" <?php if ($result[5] == 'ชาย') {echo " selected";} ?>>ชาย</option>
                  <option value="หญิง" <?php if ($result[5] == 'หญิง') {echo " selected";} ?>>หญิง</option>
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label">อีเมล์ </label>
                <input type="email" class="form-control" name="user_email" value="<?php echo $result[6];?>"/>
              </div>
              <button type="submit" class="btn btn-success" name="save">บันทึกข้อมูล</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
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
