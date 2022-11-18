<?php
session_start();
require '../login_check.php';
require '../db.php';

$select_logo = "SELECT * FROM logos";
$make_query = mysqli_query($db_connect, $select_logo);


?>
<?php require '../parts/Header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>SL</th>
                                <th>Logo</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            <?php foreach ($make_query as $serial_no => $logo) { ?>
                                <tr>
                                    <td><?= $serial_no + 1 ?></td>
                                    <td><img width="70" src="../uploads/logo/<?= $logo['logo'] ?>" alt=""></td>

                                    <td>
                                        <a class="btn btn-<?= ($logo['status'] == 1) ? 'success' : 'secondary' ?> text-capitalize w-100" href="logo.php?id=<?= $logo['id']?>"><?= ($logo['status'] == 1) ? 'active' : 'deactive' ?></a>
                                    </td>

                                    <td>
                                        <button data-id="delete.php?id=<?= $logo['id'] ?>" class="delete-btn btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h3>Add a New Logo</h3>
                </div>
                <div class="card-body">
                    <form action="logo_post.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <input type="file" name="logo" id="">
                            <?php if (isset($_SESSION['error'])) { ?>
                                <strong class="text-danger mt-3"><?= $_SESSION['error'] ?></strong>
                            <?php }
                            unset($_SESSION['error']) ?>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary form-control">Upload Logo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>















































<?php require '../parts/Footer.php' ?>