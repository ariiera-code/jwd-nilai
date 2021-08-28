<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Source CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/lostyles.css">
  <link rel="stylesheet" href="css/boxicons.min.css">
  <!--aos-->
  <link rel="stylesheet" href="css/aos.css">


  <title>Login Form</title>

</head>


<body>

  <div class="row m-0 p-0">
    <div class="col-6 d-none d-md-block pl-0">
      <img src="img/login/pic.svg" alt="login" class="img">
    </div>
    <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
      <div class="col-12">
        <div class="text-center">
          <div class="text">
            <img src="img/portal/logo.png" class="logo">
            <h1 class="atas h3">Halo! Selamat Datang!</h1>
          </div>
          <form id="login-form" class="form" method="post" action="cek.php">
            <div class="text-input text-left pt-4">
              <div class="form-group"><label>Username</label>
                <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Enter username" required="yes">
              </div>
              <div class="form-group"><label>Password</label>
                <div class="input-group">
                  <input type="password" name="password" id="password" class="form-control" data-toggle="password" placeholder="Password" required="yes">
                </div>
              </div>
              <div class="form-row pt-4">
                <div class="col-1"></div>
                <div class="col-10 border d-flex justify-content-center" style="background-color:#f19933; cursor:pointer; height: 60px;">
                  <button type="submit" class="text-center font-weight-bold text-light my-auto">Login
                  </button>
                </div>
                <div class="col-1"></div>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/boxicons.js"></script>
  <script src="js/jquery-3.5.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/style.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!--AOS-->
  <script src="js/aos.js"></script>
  <!--Install AOS-->
  <script>
    AOS.init();
  </script>

</body>

</html>