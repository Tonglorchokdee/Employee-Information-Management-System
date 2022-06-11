<?php
require_once('../connections/mysqli.php');

if ($_SESSION == NULL) {
  header("location:../login.php");
  exit();
}elseif ($_SESSION["user_level"] != "admin") {
  header("location:../index.php");
  exit();
}

if (isset($_GET["add"])) {
  if ($_GET["add"] == "pass") {
    $check_submit = check_submit_p2("บันทึกข้อมูลเรียบร้อยแล้ว");
  }
}
if (isset($_GET["update"])) {
  if ($_GET["update"] == "pass") {
    $check_submit = check_submit_p2("บันทึกข้อมูลเรียบร้อยแล้ว");
  }
}
if (isset($_GET["delete"])) {
  if ($_GET["delete"] == "pass") {
    $check_submit = check_submit_p2("ลบข้อมูลออกจากระบบเรียบร้อยแล้ว");
  }
}

$num = 1;

$sql = "SELECT * FROM tb_user ORDER BY user_level ASC";
$query = mysqli_query($Connection,$sql);
?>
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
<body  background="../images/07.jpg">
    <?php include 'include/header.php'; ?>
    <div class="container-fluid">
      <div class="row">
        <?php include 'include/sidebarMenu.php'; ?>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <font color="white">
            <h1 class="h2">ข้อมูลผู้ใช้งาน</h1>
          </font>
            <div class="btn-toolbar mb-2 mb-md-0">
              <!-- เพิ่มข้อมูล -->
              <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#add_data">เพิ่มข้อมูล</button>
              <div class="modal fade" id="add_data" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                  <form class="modal-content" method="post" action="user_add_data.php">
                    <div class="modal-header">
                      <h5 class="modal-title">เพิ่มข้อมูลผู้ใช้งาน</h5>
                    </div>
                    <div class="modal-body">
                      <div class="mb-3">
                        <label class="form-label">ชื่อผู้ใช้</label>
                        <input type="text" class="form-control" name="user_username" required/>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">ชื่อ</label>
                        <input type="text" class="form-control" name="user_name" required/>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">นามสกุล</label>
                        <input type="text" class="form-control" name="user_surname" required/>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">เพศ</label>
                        <select class="form-select" name="user_sex">
                          <option value="ชาย">ชาย</option>
                          <option value="หญิง">หญิง</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">อีเมล์</label>
                        <input type="email" class="form-control" name="user_email"/>
                      </div>
                      <!-- <div>
                        <div class="mb-3">
                          <label class="form-label">แผนก</label>
                          <select class="form-select" name="fef_dep_id">
                            <option value="1">ฝ่ายการตลาด</option>
                            <option value="2">ฝ่ายขาย</option>
                            <option value="3">ฝ่ายลูกค้าสัมพันธ์</option>
                            <option value="4">ฝ่ายบัญชี</option>
                          </select>
                        </div>
                      </div> -->
                      <div>
                        <label class="form-label">ระดับผู้ใช้</label>
                        <select class="form-select" name="user_level">
                          <option value="member">สมาชิก</option>
                          <option value="admin">ผู้ดูแลระบบ</option>
                        </select>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                      <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <?php echo $check_submit;?>
          <table class="table table-danger table-striped"> <!-- table-sm -->
            <thead>
              <tr class="table-primary">
                <th scope="col" width="65px">ลำดับที่</th>
                <th scope="col">ชื่อผู้ใช้</th>
                <th scope="col" width="100px"></th>
                <th scope="col">ขื่อ</th>
                <th scope="col">นามสกุล</th>
                <th scope="col">เพศ</th>
                <th scope="col">อีเมล์</th>
                <th scope="col">ระดับผู้ใช้</th>
                <th scope="col">ตัวเลือก</th>
                
              </tr>
            </thead>
            <tbody>
              <?php
              while ($result = mysqli_fetch_array($query)) {
                ?>
                <tr>
                  <th scope="row"><?php echo $num++; ?></th>
                  <td><?php echo $result['user_username']; ?></td>
                  <td>

                  </td>
                  <td><?php echo $result['user_name']; ?></td>
                  <td><?php echo $result['user_surname']; ?></td>
                  <td><?php echo $result['user_sex']; ?></td>
                  <td><?php echo $result['user_email']; ?></td>
                  <td><?php if ($result['user_level'] == "member") {echo "สมาชิก";}else{echo "ผู้ดูแลระบบ";} ?></td>
                  <td>

                  
                    <!-- ปุ่มแก้ไข -->
                    <button type="button" class="btn btn-success btn-sm" onclick="window.location.href='user_edit.php?id=<?php echo $result['user_id'];?>'">แก้ไข<i class="bi bi-pencil-square"></i></button>
                    <!-- ลบข้อมูล-->
                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete_data<?php echo $result['user_id']; ?>">ลบ
                      <i class="bi bi-trash"></i>
                    </button>
                    <div class="modal fade" id="delete_data<?php echo $result['user_id']; ?>" tabindex="-1" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">ลบข้อมูล</h5>
                          </div>
                          <div class="modal-body">
                            กดยืนยันหากคุณต้องการลบผู้ใช้ <?php echo $result['user_username']; ?>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                            <button type="button" class="btn btn-primary" onclick="window.location.href='user_delete.php?id=<?php echo $result['user_id'];?>'">ยืนยัน</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <?php
              }
              ?>
            </tbody>
          </table>
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
