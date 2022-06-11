<?php
require_once('connections/mysqli.php');
?>

<?php
require_once('connections/mysqli.php');

$num = 1;
$sql = "SELECT * FROM tb_user ORDER BY user_level ASC";
$query = mysqli_query($Connection,$sql);
?>
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

<!-- /END THE ...  -->
<!-- ================================================ -->
<!-- START THE ... --> 

<body class="default" background="images/01.jpg">
  <?php include 'includes/navbar.php';?>
  <div class="container-fluid">
    <div class="row justify-content-md-center">
      <div class="col-md-8 py-4">

<!-- /END THE ...  -->
<!-- ================================================ -->
<!-- START THE ... --> 

        <form class="row" method="POST">
          <div class="col col-lg-2">
            <select class="form btn btn-warning" name="select" required>
              <option value="" selected disabled>-- เลือกข้อมูล</option>
              <option value="user_username" <?php if (isset($_POST['select'])) {if ($_POST['select'] == 'user_username') {echo 'selected';}} ?>>ชื่อผู้ใช้</option>
              <option value="user_name" <?php if (isset($_POST['select'])) {if ($_POST['select'] == 'student_prefix') {echo 'selected';}} ?>>ชื่อ</option>
              <option value="user_sex" <?php if (isset($_POST['select'])) {if ($_POST['select'] == 'user_sex') {echo 'selected';}} ?>>เพศ</option>
              <option value="user_email" <?php if (isset($_POST['select'])) {if ($_POST['select'] == 'user_email') {echo 'selected';}} ?>>อีเมล์</option>
              <option value="user_level" <?php if (isset($_POST['select'])) {if ($_POST['select'] == 'user_level') {echo 'selected';}} ?>>ระดับผู้ใช้</option>
            </select>
                </div>
                <div class="col">
                  <input type="text" class="form-control" name="value" value="<?php if (isset($_POST['value'])) {echo $_POST['value'];} ?>" required/>
                </div>
                <div class="col-md-auto">
                  <button type="submit" name="submit" class="btn btn-success">ค้นหา</button>
                </div>
        </form>

<!-- /END THE ...  -->
<!-- ================================================ -->
<!-- START THE ... --> 

                  <table class="table table-light table-striped">
                    <thead class="table table-dark  table-hover">
                      <tr>
                      <th scope="col" width="65px">ลำดับที่</th>
                      <th scope="col">ชื่อผู้ใช้</th>
                      <th scope="col" width="1px"></th>
                      <th scope="col">ขื่อ</th>
                      <th scope="col">นามสกุล</th>
                      <th scope="col">เพศ</th>
                      <th scope="col">อีเมล์</th>
                      <th scope="col">ระดับผู้ใช้</th>
                      </tr>
                    </thead>

<!-- /END THE ...  -->
<!-- ================================================ -->
<!-- START THE ... -->  
                    
              <?php
              
              if (isset($_POST['submit'])) {
                $num = 1;
                $sql = "SELECT * FROM tb_user WHERE ".$_POST['select']." LIKE '".$_POST['value']."%'";
                $query = mysqli_query($Connection,$sql);
                $check_data = mysqli_num_rows($query);
                if ($check_data == 0) {
                  echo '<p class="text-center py-4"><span class="badge bg-danger" style="font-size: 20px;">ไม่พบข้อมูล</span></p>';
                }else{
                  ?>
                  <br>
                    <tbody>
                      <?php
                      while ($result = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                        <th scope="row"><?php echo $num++; ?></th>
                        <td><?php echo $result['user_username']; ?></td>
                        <td></td>
                        <td><?php echo $result['user_name']; ?></td>
                        <td><?php echo $result['user_surname']; ?></td>
                        <td><?php echo $result['user_sex']; ?></td>
                        <td><?php echo $result['user_email']; ?></td>
                        <td><?php if ($result['user_level'] == "member") {echo "สมาชิก";}else{echo "ผู้ดูแลระบบ";} ?></td>
                        
                        <?php
                      }
                      ?>
                    </tbody>
                  </table>
                  <?php
                }
              }
              ?>

                <br>

                  <tbody>
                    <?php
                    while ($result = mysqli_fetch_array($query)) {
                      ?>
                      <tr>
                        <th scope="row"><?php echo $num++; ?></th>
                        <td><?php echo $result['user_username']; ?></td>
                        <td></td>
                        <td><?php echo $result['user_name']; ?></td>
                        <td><?php echo $result['user_surname']; ?></td>
                        <td><?php echo $result['user_sex']; ?></td>
                        <td><?php echo $result['user_email']; ?></td>
                        <td><?php if ($result['user_level'] == "member") {echo "สมาชิก";}else{echo "ผู้ดูแลระบบ";} ?></td>
                      </tr>
                    <?php
                  }
                  ?>
                </tbody>
              </table>
            </main>
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
