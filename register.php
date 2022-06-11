<?php
require_once('connections/mysqli.php');

if ($_SESSION != NULL) {
  header("location:index.php");
  exit();
}

$check_submit = "";
$user_username = "";
$user_name = "";
$user_surname = "";
$user_email = "";

if (isset($_POST["submit"])) {
  $sql = "SELECT * FROM tb_user WHERE user_username = '".trim($_POST['user_username'])."'";
  $query = mysqli_query($Connection,$sql);
  $result = mysqli_fetch_array($query,MYSQLI_ASSOC);

  $user_username = $_POST["user_username"];
  $user_name = $_POST["user_name"];
  $user_surname = $_POST["user_surname"];
  $user_email = $_POST["user_email"];

  if ($result) {
    $check_submit = '<div class="alert alert-danger" role="alert">';
    $check_submit .= '<span><i class="bi bi-info-circle"></i> ชื่อผู้ใช้นี้คนอื่นใช้แล้ว กรอกชื่อผู้ใช้ใหม่</span>';
    $check_submit .= '</div>';
  }else{
    $sql = "INSERT INTO tb_user (user_username,user_password,user_name,user_surname,user_sex,user_email) VALUES ('".$_POST["user_username"]."','".md5($_POST["user_password"])."','".$_POST["user_name"]."','".$_POST["user_surname"]."','".$_POST["user_sex"]."','".$_POST["user_email"]."')";
    $query = mysqli_query($Connection,$sql);

    header("location:login.php?register=success");
    exit();
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
            /* background-position: left top;
            background-size: cover;
            background-repeat: repeat; */

          }

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
            /* End body rules */

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

</head>

<!-- /END THE html  -->
<!-- ================================================ -->
<!-- START THE body --> 

<body>

<div1 class="">
    <div class="d-flex align-items-center min-vh-100">
        <div class="container offset-md-4 "> 
            <div class="row">
                <div class="col-md-7">
                    <div class="login-form bg-light mt-4 p-4">
                        <form action="" method="POST" class="row g-3">
                            <h4 >กรอกข้อมูลเพื่อสมัครสมาชิก</h4>
                            <div class="card-body px-4">
                                <div class="row g-2">

<!-- /END THE ...  -->
<!-- ================================================ -->
<!-- START THE text -->
      
                            <div class="col-md-6">
                              <label class="col-form-label">ชื่อผู้ใช้</label>
                              <input type="text" class="form-control" name="user_username" value="<?php echo $user_username;?>" placeholder="Enter Username" required/>
                            </div>
                            <div class="col-md-6">
                              <label class="col-form-label">รหัสผ่าน</label>
                              <input type="password" class="form-control" name="user_password" placeholder="Enter Password" required/>
                            </div>
                            <div class="col-md-6">
                              <label class="col-form-label">ชื่อ</label>
                              <input type="text" class="form-control" name="user_name" value="<?php echo $user_name;?>" placeholder="Enter Name" required/>
                            </div>
                            <div class="col-md-6">
                              <label class="col-form-label">นามสกุล</label>
                              <input type="text" class="form-control" name="user_surname" value="<?php echo $user_surname;?>" placeholder="Enter Surname" required/>
                            </div>
                            <div class="mb-3">
                              <label class="col-form-label">เพศ</label>
                              <select class="form-select" name="user_sex">
                                <option value="ชาย">ชาย</option>
                                <option value="หญิง">หญิง</option>
                              </select>
                            </div>
                            <div class="mb-3">
                              <label class="col-form-label">อีเมล์</label>
                              <input type="email" class="form-control" name="user_email" value="<?php echo $user_email;?>" placeholder="Enter Email"/>
                            </div>
                            
                            <hr class="mt-4">

                            <div class="col-12 text-center py-3">
                                <input type="submit" name="submit" class="btn btn-primary d-grid mx-auto w-75" value="สมัครสมาชิก">

                                <br>

                                <a href="index.php" type="button" class="btn btn-outline-info">กลับหน้าหลัก</a>
                                <a href="login.php" type="button" class="btn btn-outline-success">เข้าสู่ระบบ</a>


                                
                            </div>
                          </div>
                       </div>
                      </form>

<!-- /END THE text  -->
<!-- ================================================ -->
<!-- START THE ... -->

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div1>

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
