<?php
require_once('connections/mysqli.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">  
    <title><?php echo $title; ?></title>

<!-- >>>>>>>>> -->
<!-- ================================================ -->
<!-- START THE link -->

    <link rel="shortcut icon"  href="images/Tong.png" >
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
  <!-- fonts -->
   <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Kanit:300">

<!-- /END THE link -->
<!-- ================================================ -->
<!-- START THE style -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">

    <style>
         
      body{
        font-family: kanit;
        
        /* background-color: #666666; */
        background-position: left top;
        background-size: cover;
        background-repeat: repeat;
      }
      

      .alert{
        transform: translate(px, 0px);
      }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      body {
        padding-top: 3rem;
        padding-bottom: 3rem;
        color: #5a5a5a;
      }

      .carousel {
        margin-bottom: 4rem;
      }

      .carousel-caption {
        bottom: 3rem;
        z-index: 10;
      }


      .marketing .col-lg-4 {
        margin-bottom: 1.5rem;
        text-align: center;
      }
      .marketing h2 {
        font-weight: 400;
      }

      .marketing .col-lg-4 p {
        margin-right: .75rem;
        margin-left: .75rem;
      }


      .featurette-divider {
        margin: 5rem 0; 
      }

      .featurette-heading {
        font-weight: 300;
        line-height: 1;
   
        letter-spacing: -.05rem;
      }

      @media (min-width: 40em) {
  
        .carousel-caption p {
          margin-bottom: 1.25rem;
          font-size: 1.25rem;
          line-height: 1.4;
        }

        .featurette-heading {
          font-size: 50px;
        }
      }

      @media (min-width: 62em) {
        .featurette-heading {
          margin-top: 7rem;
        }
      }
   </style>
<!-- /END THE style -->
<!-- ================================================ -->
<!-- START THE body -->

  </head>
  <body>

<!-- >>>>>>>>> -->
<!-- ================================================ -->
<!-- START THE navbar -->

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

 
<!-- /END THE navbar -->
<!-- ================================================ -->
<!-- START THE bottom กับ liveToast --> 

<main>
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="images/T01/001.jpg" class="d-block w-100" alt="..">
        <div class="container">
          <div class="carousel-caption text-start">
            <!-- <h1>Example headline.</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" id="liveToastBtn" href="#">Sign up today</a></p> -->
          <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
              <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                  <div class="spinner-grow text-danger" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
                   &nbsp; &nbsp; <strong class="me-auto">สมัครวันนี้รับฟรี !</strong>
                  <small>59 mins ago</small>
                  <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                <font color="black"> เงินจำนวน 1 ล้านบาท และเครื่องบิน</font> <font color="red">MMS รุ่น 09 </font>
                </div>
              </div>
            </div>
            <script>
              var toastTrigger = document.getElementById('liveToastBtn')
            var toastLiveExample = document.getElementById('liveToast')
            if (toastTrigger) {
              toastTrigger.addEventListener('click', function () {
                var toast = new bootstrap.Toast(toastLiveExample)
                toast.show()
              })
            }
            </script>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="images/T01/002.jpg" class="d-block w-100" alt="..">
        <div class="container">
          <!-- <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div> -->
        </div>
      </div>
      <div class="carousel-item">
      <img src="images/T01/003.jpg" class="d-block w-100" alt="..">
        <div class="container">
          <!-- <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div> -->
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<!-- /END THE bottom กับ liveToast -->
<!-- ================================================ -->
<!-- START THE Three columns of text below the carousel --> 

  <div class="container marketing">
    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
      <img src="images/T01/07.png" class="bd-placeholder-img rounded-circle" width="140" height="140" alt="..">
        <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
        <h2>Chairman</h2>
        <p>ผู้นำสูงสุดของคณะกรรมการ (บอร์ด) มีหน้าที่กำกับและติดตามให้มั่นใจว่าการปฏิบัติหน้าที่ของคณะกรรมการให้เป็นไปอย่างมีประสิทธิภาพ </p>
        <p><a class="btn btn-secondary" href="view.php">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src="images/T01/02.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" alt="..">
      <h2>President</h2>
        <p>ซึ่งเป็นผู้บริหารสูงสุดของบริษัท มีหน้าที่บริหารงานของบริษัทให้เป็นไปตามทิศทางและนโยบายที่คณะกรรมการได้กำหนดไว้</p>
        <p><a class="btn btn-secondary" href="view.php">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src="images/T01/06.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" alt="..">
        <h2>Manager</h2>
        <p>ทำหน้าที่จัดการ วางแผน ควบคุมงานให้เป็นไปตามจุดหมายของงานที่ตั้งไว้ กำหนด Flow โครงสร้างต่างๆ เน้นงานมากกว่าคน คอยกำกับให้ทุกอย่างดำเนินไปในทิศทางที่ถูกที่ควร </p>
        <p><a class="btn btn-secondary" href="view.php">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

<!-- /END THE Three columns of text below the carousel  -->
<!-- ================================================ -->
<!-- START THE FEATURETTES --> 

    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">ผู้นำสูงสุดของคณะกรรมการ <span class="text-muted">นำโดย ดร.มินิเรเกรต์ »</span></h2>
        <p class="lead">เมื่อเข้าสู่ยุคแห่งการอวสารของหล่าผู้ประเทศ เลยจัดตั้งองค์กรเผชิญหน้ากับภัยพิบัติที่กำลังจะมาถึง ในอีก 2 ปีข้างหน้า โดยมีดร.มินิเรเกรต์ เป็นผู้นำ</p>
      </div>
      <div class="col-md-5">

      <img src="images/T01/11.jpg" class="d-block w-100" alt="..">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">นักเรียนดีเด่นของห้อง Z <span class="text-muted">ความสามารถวอเคาะห์เอกภพ...</span></h2>
        <p class="lead">อดีตเธอมาจากดาวดวงหนึาง ซึ่งอยู่แสนไกลจากโลก นับล้านๆไมล์ เป้าหมายหลักของเธอคือช่วยสนัทสนุนองค์กนต่อต้านรัฐบาลที่ไม่แห่งชอบด้วยเหล่าชุนชน </p>
      </div>
      <div class="col-md-5 order-md-1">
      <img src="images/T01/09.jpg" class="d-block w-100" alt="..">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">โปรแกรมเมอร์ <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">นักเขียนโปรแกรมหรือนักพัฒนาซอฟแวร์ มีหน้าที่หลักคือการเขียนโปรแกรมคอมพิวเตอร์โดยใช้ภาษาทางโปรแกรมคอมพิวเตอร์ อย่างภาษาฮาลเวท จากโลกอีกแห่งหนึ่งโดยเียนรู้จาก...</p>
      </div>
      <div class="col-md-5">

        <img src="images/T01/10.jpg" class="d-block w-100" alt="..">
      </div>
    </div>

    <hr class="featurette-divider">

  </div><!-- /.container -->

<!-- /END THE Three columns of text below the carousel  -->
<!-- ================================================ -->
<!-- START THE FOOTER --> 


  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>

    <a id="button"></a>
    
    <p>&copy; พนักงานบริษัทรีเจนเนทเตอร์ &middot; <a href="#">TONG</a> &middot; <a href="#">MUST</a></p>
  </footer>

<!-- /END THE Three columns of text below the carousel  -->
<!-- ================================================ -->
<!-- Optional JavaScript; choose one of the two! --> 

</main>


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
