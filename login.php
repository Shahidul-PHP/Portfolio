<?php 
session_start() ;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Login page
    </title>
    <!-- Favicon -->
    <link href="assets/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
    <link href="assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="assets/css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />
    <style>
        .col-lg-6 {
            margin-top: -56px;
        }

        .col-lg-5 {
            margin-top: -69px;
        }
    </style>
</head>

<body class="bg-default">
    <div class="main-content">
        <!-- Navbar -->
        <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
            <div class="container px-4">
                <a class="navbar-brand" href="../index.html">
                    <h3 class="text-white">Portfolio
                    </h3>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-collapse-main">
                    <!-- Collapse header -->
                    <div class="navbar-collapse-header d-md-none">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a href="#">

                                </a>
                            </div>
                            <div class="col-6 collapse-close">
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Navbar items -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="signup.php">
                                <i class="ni ni-key-25"></i>
                                <span class="nav-link-inner--text">Create Account</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header -->
        <div class="header bg-gradient-primary py-7 py-lg-8">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-6">
                            <h1 class="text-white">Portfolio Login</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <!-- Page content -->
        <div class="container mt--8 pb-5">
            <!-- Table -->
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="card bg-secondary shadow border-0">

                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center text-muted mb-4">
                                <h3>Login Using Your Information</h3>
                            </div>

                            <form role="form" action="login_post.php" method="POST">
                                <div class="form-group">
                                    <div class="input-group input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input value="<?= isset($_SESSION['login_value'])?  $_SESSION['login_value'] : '' ?>" name="email" class="form-control" placeholder="Email" type="email">
                                    </div>
                                    <?php if (isset($_SESSION['error'])) { ?>
                                        <p class="text-danger"><?= $_SESSION['error'] ?></p>
                                    <?php }
                                    unset($_SESSION['error']) ?>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input name="password" class="form-control" placeholder="Password" type="password">
                                    </div>
                                    <?php if (isset($_SESSION['Passerror'])) { ?>
                                        <p class="text-danger"><?= $_SESSION['Passerror'] ?></p>
                                    <?php }
                                    unset($_SESSION['Passerror']) ?>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary mt-4">Login</button>
                                </div>
                                <br><br>
                                <strong class="">New Here ? <a href="signup.php">Create a New Account</a></strong>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    </div>
    <!--   Core   -->
    <script src="assets/js/plugins/jquery/dist/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!--   Optional JS   -->
    <!--   Argon JS   -->
    <script src="assets/js/argon-dashboard.min.js?v=1.1.2"></script>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script>
        window.TrackJS &&
            TrackJS.install({
                token: "ee6fab19c5a04ac1a32a645abde4613a",
                application: "argon-dashboard-free"
            });
    </script>
    <?php if (isset($_SESSION['signup_success'])) { ?>
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '<?= $_SESSION['signup_success'] ?>',
                showConfirmButton: false,
                timer: 2500
            })
        </script>
    <?php }
    unset($_SESSION['signup_success']) ?>
</body>
</html>

<?php 
    unset($_SESSION['login_value']);
?>