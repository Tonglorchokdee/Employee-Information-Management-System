<?php
require_once('../connections/mysqli.php');

if ($_SESSION == NULL) {
  header("location:../login.php");
  exit();
}elseif ($_SESSION["user_level"] != "admin") {
  header("location:../index.php");
  exit();
}

$id = $_GET["id"];

$sql = "SELECT * FROM tb_user WHERE user_id = '".$id."'";
$query = mysqli_query($Connection,$sql);
$result = mysqli_fetch_array($query,MYSQLI_ASSOC);

if (isset($_POST["submit"])) {
  $sql_2 = "UPDATE tb_user SET user_username = '".$_POST['user_username']."', user_name = '".$_POST['user_name']."', user_surname = '".$_POST['user_surname']."',
    user_sex = '".$_POST['user_sex']."', user_email = '".$_POST['user_email']."', user_level = '".$_POST['user_level']."' WHERE user_id = '".$id."'";
  $query_2 = mysqli_query($Connection,$sql_2);

  header("location:user.php?update=pass");
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
    <title>ระบบหลังบ้าน</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon"  href="../images/Tong.png" >        
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

<!-- /END THE ...  -->
<!-- ================================================ -->
<!-- START THE ... --> 

<body  background="../images/07.jpg">
    <?php include 'include/header.php'; ?>
    <div class="container-fluid">
      <div class="row">
        <?php include 'include/sidebarMenu.php'; ?>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <font color="white">
          <h1 class="h2">แก้ไขข้อมูลผู้ใช้งาน</h1>
          </font>
            
            <div class="btn-toolbar mb-2 mb-md-0">
              <button type="button" class="btn btn-secondary" onclick="window.location.href='user.php'">ย้อนกลับ</button>
            </div>
          </div>
          <div class="row justify-content-md-center">
            <div class="col-6">
              <div class="card">
                <h5 class="card-header"><?php echo 'ID : '.$result['user_id']; ?></h5>
                <div class="card-body">
                  <form method="post">

<!-- /END THE ...  -->
<!-- ================================================ -->
<!-- START THE ... --> 

                    <div class="mb-3">
                      <label class="form-label">ชื่อผู้ใช้</label>
                      <input type="text" class="form-control" name="user_username" value="<?php echo $result['user_username']; ?>" required/>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">ชื่อ</label>
                      <input type="text" class="form-control" name="user_name" value="<?php echo $result['user_name']; ?>" required/>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">นามสกุล</label>
                      <input type="text" class="form-control" name="user_surname" value="<?php echo $result['user_surname']; ?>" required/>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">เพศ</label>
                      <select class="form-select" name="user_sex">
                        <option value="ชาย" <?php if ($result["user_sex"] == 'ชาย') {echo " selected";} ?>>ชาย</option>
                        <option value="หญิง" <?php if ($result["user_sex"] == 'หญิง') {echo " selected";} ?>>หญิง</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">อีเมล์ </label>
                      <input type="email" class="form-control" name="user_email" value="<?php echo $result['user_email']; ?>"/>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">ระดับผู้ใช้</label>
                      <select class="form-select" name="user_level">
                        <option value="member" <?php if ($result["user_level"] == 'member') {echo " selected";} ?>>สมาชิก</option>
                        <option value="admin" <?php if ($result["user_level"] == 'admin') {echo " selected";} ?>>ผู้ดูแลระบบ</option>
                      </select>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">บันทึก</button>
                  </form>

<!-- /END THE ...  -->
<!-- ================================================ -->
<!-- START THE ... --> 

                </div>
              </div>
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
