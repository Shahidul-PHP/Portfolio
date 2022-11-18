<?php
session_start();
require '../db.php';
require '../parts/Header.php';
?>
<div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px;margin-top:95px;margin-left:-24px;background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class=""></span>
    <!-- Header container -->
    <!-- Page content -->
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="opacity-8">
                    <div class=" pt-0 pt-md-4">
                        <div class="row">
                            <!-- image  -->
                            <div class="card bg-secondary shadow">
                                <div class="card-header bg-white border-0">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h3 class="text-center">Upload Your Image</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="photo_post.php" method="POST" enctype="multipart/form-data">
                                        <input type="file" name="photo" id="">

                                        <input type="hidden" name="id" id="" value="<?= $after_assoc['id'] ?>">
                                        
                                        <button class="btn mt-5 btn-success">Upload Image</button>
                                    </form>
                                    <?php if (isset($_SESSION['error'])) { ?>
                                        <p class="text-danger"><?= $_SESSION['error'] ?></p>
                                    <?php }
                                    unset($_SESSION['error']) ?>
                                </div>
                            </div>
                            <!-- img end -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow opacity-9">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0"><?= $after_assoc['name'] ?></h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="#" class="btn btn-sm btn-primary">Edit Information</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="profile_post.php" method="POST">
                            <h3 class=" text-muted mb-5 text-center">Admin information</h3>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Username</label>
                                            <input name="id" type="hidden" id="input-username" class="form-control form-control-alternative" value="<?= $after_assoc['id'] ?>">
                                            <input name="name" type="text" id="input-username" class="form-control form-control-alternative" value="<?= $after_assoc['name'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-email">Email address</label>
                                            <input name="email" type="email" id="input-email" class="form-control form-control-alternative" value="<?= $after_assoc['email'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">Password</label>
                                            <input name="password" type="password" id="input-first-name" class="form-control form-control-alternative" placeholder="Update Password" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit">Update Info</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
    </div>
</div>
<!--   Core   -->
<script src="../admin_dashbaord/assets/js/plugins/jquery/dist/jquery.min.js"></script>
<script src="../admin_dashbaord/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!--   Optional JS   -->
<!--   Argon JS   -->
<script src="../admin_dashbaord/assets/js/argon-dashboard.min.js?v=1.1.2"></script>
<script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
<script>
    window.TrackJS &&
        TrackJS.install({
            token: "ee6fab19c5a04ac1a32a645abde4613a",
            application: "argon-dashboard-free"
        });
</script>


<?php require '../parts/Footer.php'; ?>