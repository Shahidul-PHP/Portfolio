<?php

$id = $_SESSION['id'];
$select =   "SELECT * FROM users WHERE id=$id";
$res = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($res);

?>
<!DOCTYPE html>
<html lang="en">
<style>
    .img {
        width: 110px;
        height: 110px;
        border-radius: 50%;
    }
</style>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>

    </title>
    <link href="/Portfolio/admin_dashboard/assets/img/brand/favicon.png" rel="icon" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="/Portfolio/admin_dashboard/assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
    <link href="/Portfolio/admin_dashboard/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="/Portfolio/admin_dashboard/assets/css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />
</head>

<body class="">
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
        <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="mt-4 navbar-brand pt-0" href="#">
                <h1>PORTFOLIO</h1>
            </a>
            <!-- User -->
            <ul class="nav align-items-center d-md-none">
                <li class="nav-item dropdown">
                    <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ni ni-bell-55"></i>
                    </a>

                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media align-items-center">
                            <span class="avatar avatar-sm rounded-circle">
                                <img alt="Image placeholder" src="/Portfolio/admin_dashboard/assets/img/theme/team-1-800x800.jpg">
                            </span>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                        <div class=" dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome!</h6>
                        </div>
                        <a href="/Portfolio/admin_dashboard/examples/profile.html" class="dropdown-item">
                            <i class="ni ni-single-02"></i>
                            <span>My profile</span>
                        </a>
                        <div class="dropdown-divider"></div>
                    </div>
                </li>
            </ul>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Collapse header -->
                <div class="navbar-collapse-header d-md-none">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="#">
                                <img src="Portfolio/admin_dashboard/assets/img/brand/blue.png">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Form -->
                <form class="mt-4 mb-3 d-md-none">
                    <div class="input-group input-group-rounded input-group-merge">
                        <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fa fa-search"></span>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- Navigation -->
                <ul class="navbar-nav">

                    <?php if ($after_assoc['img'] == null) { ?>
                        <img class="img m-auto" src="https://cdn.pixabay.com/photo/2019/08/11/18/59/icon-4399701_960_720.png" alt="">
                    <?php } else { ?>
                        <img width="120" class="img mb-3 m-auto" src="../../Portfolio/uploads/users/<?= $after_assoc['img'] ?>" alt="">
                    <?php } ?>

                    <h2 class="m-auto mt-4 mb-2"><?= $after_assoc['name'] ?></h2>
                    <li class="mt-4 nav-item active">
                        <a class="nav-link  active " href="../../Portfolio/dashboard.php">
                            <i class="ni ni-tv-2 text-primary"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a id="menuBar" class="aa nav-link " href="/Portfolio/user_info/profile.php">
                            <i class="fa-sharp fa-solid fa-lock"></i> Admin Profie
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="menuBar" class="bb nav-link" href="../../Portfolio/user_info/users.php">
                            <i class="fa-sharp fa-solid fa-user"></i> User List
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="menuBar" class="nav-link" href="../../Portfolio/logo/add_logo.php">
                            <i class="fa-solid fa-plus"></i> Add Logo
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="menuBar" class="nav-link" href="../../Portfolio/banner/edit_banner.php">
                            <i class="fa-solid fa-pen-to-square"></i></i>Edit Banner
                        </a>
                    </li>

                    <li class="nav-item">
                        <a id="menuBar" id="menuBar" class="nav-link" href="../../Portfolio/social/social.php">
                            <i class="fa-solid fa-share-from-square"></i></i>Social Icon
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="menuBar" class="nav-link" href="../../Portfolio/SideAddress/details.php">
                            <i class="fa-solid fa-address-card"></i>Side Address
                        </a>
                    </li>
                    <li class="bg primary nav-item">
                        <a id="menuBar" class="nav-link" href="../../Portfolio/About/about.php">
                            <i class="fa-solid fa-eject"></i>About Me Section
                        </a>
                    </li>
                    <li class="bg primary nav-item">
                        <a id="menuBar" class="nav-link" href="../../Portfolio/about_img/about_img.php">
                            <i class="fa-solid fa-image"></i>About Image
                        </a>
                    </li>
                    <li class="bg primary nav-item">
                        <a id="menuBar" class="nav-link" href="../../Portfolio/Skills/add_skill.php"><i class="fa-solid fa-kitchen-set"></i>
                            Add Skill's
                        </a>
                    </li>
                    <li class="bg primary nav-item">
                        <a id="menuBar" class="nav-link" href="../../Portfolio/Service/add_service.php"><i class="fa-brands fa-servicestack"></i>
                            Add Service's
                        </a>
                    </li>
                    <li class="bg primary nav-item">
                        <a id="menuBar" class="nav-link" href="../../Portfolio/work/work.php"><i class="fa-solid fa-briefcase"></i>
                            Add New Work
                        </a>
                    </li>
                    <li class="bg primary nav-item">
                        <a id="menuBar" class="nav-link" href="../../Portfolio/Features/feat.php"><i class="fa-solid fa-briefcase"></i>
                            Feature's
                        </a>
                    </li>

                    <br>
                    <li class="nav-item" style="margin-top: 250px;">
                        <a id="menuBar" class="nav-link" href="../../Portfolio/logout.php">
                            <i class="fa-solid fa-house"></i> Log Out
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="main-content">
        <!-- Navbar -->
        <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
            <div class="container-fluid">
                <!-- Brand -->
                <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="#">admin dashbaord</a>
                <!-- Form -->
                <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
                    <div class="form-group mb-0">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                            <input class="form-control" placeholder="Search" type="text">
                        </div>
                    </div>
                </form>
                <!-- User -->
                <ul class="navbar-nav align-items-center d-none d-md-flex">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">

                                <div class="media-body ml-2 d-none d-lg-block">
                                    <span class="mb-0 text-sm  font-weight-bold"><?= $after_assoc['name'] ?></span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                            <div class=" dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome!</h6>
                            </div>
                            <a href="../../Portfolio/user_info/profile.php" class="dropdown-item">
                                <i class="ni ni-single-02"></i>
                                <span>My profile</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Navbar -->
        <!-- Header -->
        <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
            <div class="container-fluid">
                <div class="header-body">

                </div>
            </div>
        </div>
        <div class="container-fluid mt--7">
            <div class="row">