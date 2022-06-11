<?php
require_once('connections/mysqli.php');

// $query = 
// " SELECT u.user_id,u.user_username,u.user_password,u.user_name,u.user_surname,u.user_sex,u.user_email,u.ref_dep_id,u.user_level
// FROM tb_department as p
// INNER JOIN tb_user as u ON p.dep_id = u.ref_dep_id"
// or die;

// $result = mysqli_set_charset($Connection,$query); 

// echo $query;
// exit;

$num = 1;
$sql = " SELECT u.user_id,u.user_username,u.user_password,u.user_name,u.user_surname,u.user_sex,u.user_email,u.ref_dep_id,u.user_level
FROM tb_department as p
INNER JOIN tb_user as u ON p.dep_id = u.ref_dep_id";
$query = mysqli_query($Connection,$sql);
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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<body class="default" background="images/00.jpg">
  <?php include 'includes/navbar.php';?>
  <div class="container-fluid">
    <div class="row justify-content-md-center">
      <div class="col-md-8 py-4">

<!-- /END THE ...  -->
<!-- ================================================ -->
<!-- START THE ... --> 

              <table class="table table-light table-striped">
                    <thead class="table table-dark  table-hover">
                      <tr>
                      <th scope="col" width="65px">ลำดับที่</th>
                      <!-- <th scope="col">ชื่อผู้ใช้</th> -->
                      <th scope="col" width="1px"></th>
                      <th scope="col">ขื่อ - นามสกุล</th>
                      <!-- <th scope="col">นามสกุล</th> -->
                      <!-- <th scope="col">เพศ</th> -->
                      <!-- <th scope="col">อีเมล์</th> -->
                      <th scope="col">แผนก</th>
                      <!-- <th scope="col">ระดับผู้ใช้</th> -->
                      </tr>
                    </thead>

<!-- /END THE ...  -->
<!-- ================================================ -->
<!-- START THE dep_id --> 


                <br>
                  <tbody>
                      <?php
                                        
                      require_once('connections/mysqli.php');

                      $query1 = " SELECT u.*,d.dep_name
                      FROM tb_user as u
                      INNER JOIN tb_department as d ON d.dep_id = u.ref_dep_id
                      ORDER BY d.dep_id asc"
                      or die ;

                      $result1 =  mysqli_query($Connection, $query1);

                        // echo $query1;
                        // exit;

                      ?>

                      <?php

                      foreach ($result1 as $row) {
                        ?>
                        
                        <tr>
                        <th scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $num++; ?></th>
                        <!-- <td><?php echo $row['user_username']; ?></td> -->
                        <td></td>
                        <td><?php echo $row['user_name']; ?> &nbsp;&nbsp;
                        <?php echo $row['user_surname']; ?></td>
                        <!-- <td><?php echo $row['user_sex']; ?></td> -->
                        <!-- <td><?php echo $row['user_email']; ?></td> -->
                        <td><?php echo $row['dep_name']; ?></td>
                        <!-- <td><?php if ($row['user_level'] == "member") {echo "สมาชิก";}else{echo "ผู้ดูแลระบบ";} ?></td> -->
                      </tr>
                    <?php
                    }
                  ?>

                </tbody>

<!-- /END THE dep_id  -->
<!-- ================================================ -->
<!-- START THE ... --> 

              </table>
            </main>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php mysqli_close($Connection);?>

  <!-- ============================================================================== -->

  <!-- $query = 
" SELECT u.user_id,u.user_username,u.user_password,u.user_name,u.user_surname,u.user_sex,u.user_email,u.ref_dep_id,u.user_level
FROM tb_department as p
INNER JOIN tb_user as u ON p.dep_id = u.ref_dep_id"
or die;

$result = mysqli_set_charset($Connection,$query); 

// echo $query1;
// exit; -->

  <!-- ============================================================================== -->


  

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
