<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
    <img src="./images/Tong.png" alt="" width="30" height="24">
      <a class="navbar-brand" href="#">ระบบจัดการข้อมูลพนักงาน</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">หน้าหลัก</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="show.php">สมาชิกทั้งหมด</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="show_department.php"><i class="bi bi-house-door"></i> เเผนก</a>
        </li>
        </ul>
          <!-- <button class="btn btn-outline-success"  id="liveToastBtn" type="submit">Search</button> -->
          <?php
        if ($_SESSION == NULL) {
          ?>
          <button class="btn btn-outline-primary" type="submit" onclick="window.location.href='login.php'">เข้าสู่ระบบ</button>
          <?php
        }else{
          ?>
          <div class="btn-group">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false"><?php echo "<i class='bi bi-people'></i> ".$result_tb_user[3].' '.$result_tb_user[4].' '; ?></button>
            <ul class="dropdown-menu dropdown-menu-lg-end">
              <li><button class="dropdown-item" type="button" onclick="window.location.href='profile.php'">ข้อมูลส่วนตัว</button></li>
              <?php
              if ($_SESSION["user_level"] == "admin") {
                ?>
                <li><button class="dropdown-item" type="button" onclick="window.location.href='admin/index.php'">ระบบหลังบ้าน</button></li>
                <?php
              }
              ?>
              <hr>
              <li><button class="dropdown-item" type="button" onclick="window.location.href='logout.php'">ออกจากระบบ</button></li>
            </ul>
          </div>
          <?php
        }
        ?>
      </div>
    </div>
  </nav>
</header>
<br>
<br>