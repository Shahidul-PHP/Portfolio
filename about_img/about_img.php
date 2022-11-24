<?php
session_start();
require '../db.php';

$select_img = "SELECT * FROM about_img";
$query = mysqli_query($db_connect, $select_img);


?>

<?php require '../parts/Header.php' ?>


<div class="container">
    <div class="row">
        <div class="col-lg-5">
            <div class="card">
                <div class="card-header">
                    <h2>Upload Image</h2>
                    <?php if (isset($_SESSION['error'])) { ?>
                        <strong class="text-success"><?= $_SESSION['error'] ?></strong>
                    <?php }
                    unset($_SESSION['error']) ?>

                    <?php if (isset($_SESSION['success'])) { ?>
                        <strong class="text-success"><?= $_SESSION['success'] ?></strong>
                    <?php }
                    unset($_SESSION['success']) ?>
                </div>
                <div class="card-body">
                    <form action="about_img_post.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <input class="form-control" type="file" name="photo" id="">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-warning">Upload Image</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="card">
                <div class="card-header">
                    <h2>Uploaded Image Here</h2>
                    <?php if(isset($_SESSION['success2'])){?>
                        <strong class="text-primary"><?= $_SESSION['success2']?></strong>
                    <?php } unset($_SESSION['success2'])?>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>SL</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach ($query as $sl => $ural_pakhi) { ?>
                            <tr>
                                <td><?= $sl + 1 ?></td>
                                <td><img width="70" src="../uploads/about_image/<?= $ural_pakhi['img'] ?>" alt=""></td>
                                <td>
                                    <a class="btn btn-<?=($ural_pakhi['status'] == 1) ? 'success' : 'secondary' ?> text-capitalize w-100" href="img_status.php?id=<?= $ural_pakhi['id']?>"><?= ($ural_pakhi['status'] == 1) ? 'active' : 'deactive' ?></a>
                                </td>
                                <td>
                                    <a href="delete.php?id=<?=$ural_pakhi['id']?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require '../parts/Footer.php' ?>