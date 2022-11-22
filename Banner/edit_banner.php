<?php
session_start();
require '../login_check.php';
require '../db.php';
// show query

$select_banner_data = "SELECT * FROM banner";
$banner_result = mysqli_query($db_connect, $select_banner_data);
$after_banner_assoc = mysqli_fetch_assoc($banner_result);


?>

<?php require '../parts/Header.php' ?>


<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h2>Edit Banner Information</h2>

                    <?php if (isset($_SESSION['success'])) { ?>
                        <strong class="text-danger"><?= $_SESSION['success'] ?></strong>
                    <?php }
                    unset($_SESSION['success']) ?>
                </div>
                <div class="card-body">
                    <form action="banner_post.php" method="POST">

                        <div class="mb-3">
                            <input type="text" name="sub_title" class="form-control" value="<?= $after_banner_assoc['sub_title'] ?>">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="header" class="form-control" value="<?= $after_banner_assoc['title'] ?>">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="desp" class="form-control" value="<?= $after_banner_assoc['desp'] ?>">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-warning">Update Banner Text</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h2>Update Banner Image</h2>
                </div>
                <div class="card-body">
                    <form action="update_banner_photo.php" method="POST">
                        <div class="mb-3">
                            <input type="file" name="banner_img" class="form-control" value="">
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="id" class="form-control" value="">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Upload Banner Image</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
































<?php require '../parts/Footer.php' ?>