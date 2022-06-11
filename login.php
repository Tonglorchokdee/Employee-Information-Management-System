<?php
require_once('connections/mysqli.php');

if ($_SESSION != NULL) {
  header("location:index.php");
  exit();
}

$check_submit = "";
$user_username = "";

if (isset($_POST["submit"])) {
  $sql = "SELECT * FROM tb_user WHERE user_username = '".mysqli_real_escape_string($Connection,$_POST['user_username'])."' and user_password = '".mysqli_real_escape_string($Connection,md5($_POST['user_password']))."'";
  $query = mysqli_query($Connection,$sql);
  $result = mysqli_fetch_array($query,MYSQLI_ASSOC);

  if (!$result) {
    $user_username = $_POST['user_username'];
    $check_submit = '<div class="alert alert-danger" role="alert">';
    $check_submit .= '<span><i class="bi bi-info-circle"></i> ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง กรุณาตรวจสอบใหม่อีกครั้ง</span>';
    $check_submit .= '</div>';
  }else{
    $_SESSION["user_username"] = $result["user_username"];
    $_SESSION["user_level"] = $result["user_level"];

    if ($_SESSION["user_level"] == 'admin') {
      header("location:admin/index.php");
      exit();
    }else{
      header("location:index.php");
      exit();
    }
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
          * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }
            /* End Global rules */

            /* Start body rules */
            body {
            background-image: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%);
            background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);
            background-attachment: fixed;
            background-repeat: no-repeat;

                font-family: 'kanit', kanit;
            /*   the main font */
                font-family: 'kanit', sans-serif;
            opacity: .95;
            /* background-image: linear-gradient(to top, #d9afd9 0%, #97d9e1 100%); */
            }

            
            /* Start form  attributes */
            form {
                height: auto;
                border-radius: 5px;
                margin: 2% auto;
                box-shadow: 0 9px 50px hsla(20, 67%, 75%, 0.31);
                padding: 2% ;
                background-image: linear-gradient(-225deg, #E3FDF5 50%, #FFE6FA 50%);
            }

        </style>

          <!-- <style>
          * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }
            /* End Global rules */

            /* Start body rules */
            body {
            background-image: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%);
            background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);
            background-attachment: fixed;
            background-repeat: no-repeat;

                font-family: 'kanit', kanit;
            /*   the main font */
                font-family: 'kanit', sans-serif;
            opacity: .95;
            /* background-image: linear-gradient(to top, #d9afd9 0%, #97d9e1 100%); */
            }

            
            /* Start form  attributes */
            form {
                height: auto;
                border-radius: 5px;
                margin: 2% auto;
                box-shadow: 0 9px 50px hsla(20, 67%, 75%, 0.31);
                padding: 2% ;
                background-image: linear-gradient(-225deg, #E3FDF5 50%, #FFE6FA 50%);
            }

        </style> -->

</head>
<body>

<!-- /END THE html  -->
<!-- ================================================ -->
<!-- START THE body --> 

  <!-- <?php //include 'includes/navbar.php';?> -->
  
  <div class="d-flex align-items-center min-vh-100">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <div class="login-form bg-light mt-4 p-4">
                        <form action="" method="POST" class="row g-3">
                            <h4 >เข้าสู่ระบบ</h4>
                            <div class="card-body px-4">
                                <div class="row g-2">
                                    <div class="col-12">
                                        <label for="user_username" class="col-form-label">ชื่อผู้ใช้งาน:</label>
                                        <input type="text" class="form-control" id="user_username" name="user_username" value="<?php echo $user_username;?>"placeholder="Enter Username" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="user_password" class="col-form-label">รหัสผ่าน:</label>
                                        <input type="password" class="form-control" id="user_password" name="user_password" placeholder="password" required>
                                    </div>
                                    <div class="col-12 text-center py-3">
                                        <input type="submit" name="submit" class="btn btn-primary d-grid mx-auto w-75" value="เข้าสู่ระบบ">

                                        <hr class="mt-4">
                                        <a href="index.php" type="button" class="btn btn-outline-info">กลับหน้าหลัก</a>
                                        <a href="register.php" type="button" class="btn btn-outline-success">สมัครสมาชิก</a>

                                    </div>
                                </div>
                            </div>
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

<!-- /END THE body  -->
<!-- ================================================ -->
<!-- START THE javascript --> 

<?php
if (isset($_GET["register"])) {
  if ($_GET["register"] == "success") {
    ?>
    <script type="text/javascript">
      alert("สมัครสมาชิกสำเร็จ");
    </script>
    <?php
  }
}
?>
