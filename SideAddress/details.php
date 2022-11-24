<?php
session_start();
require '../db.php';

$select_address = "SELECT * FROM side_address";
$fol = mysqli_query($db_connect, $select_address);
$assoc = mysqli_fetch_assoc($fol);



?>

<?php require '../parts/Header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-lg-9 m-auto">
            <div class="card">
                <div class="card-header">
                    <h2>Developer Details Update</h2>

                    <?php if (isset($_SESSION['success'])) { ?>
                        <strong class="text-danger"><?= $_SESSION['success'] ?></strong>
                    <?php }
                    unset($_SESSION['success']) ?>
                </div>
                <div class="card-body">
                    <form action="details_post.php" method="POST">
                        <div class="mb-3">
                            <input value="<?= $assoc['address'] ?>" type="text" name="address" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <input value="<?= $assoc['phone'] ?>" type="text" name="phone" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <input value="<?= $assoc['email'] ?>" type="email" name="email" id="" class="form-control">
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-danger">Update Info</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>









<?php require '../parts/Footer.php'; ?>