<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <title>CIIE - Login</title>

    <!-- Vendor css -->

    <!-- Base css with customised bootstrap included -->
    <link rel="stylesheet" href="src/css/miri-ui-kit-free.css">

    <!-- Stylesheet for demo page specific css -->
</head>
<body class="login-page">
    <header class="miri-ui-kit-header header-no-bg-img header-navbar-only">
      
   </header>

<div align="center" style="background: white"> <img src="img/logo1.png" height="150px">  <img src="img/logo3.jpg" height="150px"> <img src="img/logo2.jpg" height="150px"> <img src="img/logo4.jpg" height="150px"> </div>
<div>  </div>

    <div class="card login-card" style="margin-top: 30px">
        <div class="card-body">
            <h3 class="text-center text-white font-weight-light mb-4">CIIE</h3>
            <form method="POST" action="loginin.php">
                <div class="form-group">
                    <input type="text" placeholder="Usuario" name="user" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Contraseña" name="pas" class="form-control">
                </div>
                <input type="submit" value="Iniciar Sesión" class="btn btn-danger btn-block mb-3">
            </form>
        </div>
    </div>

    <script src="../src/vendors/jquery/dist/jquery.min.js"></script>
    <script src="../src/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="../src/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>