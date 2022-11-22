<?php
session_start();
require '../login_check.php';
require '../db.php';
// show query

$select_banner_data = "SELECT * FROM banner";
$banner_result = mysqli_query($db_connect, $select_banner_data);
$after_banner_assoc = mysqli_fetch_assoc($banner_result);

$select_banner_data_img = "SELECT * FROM banner_img";
$banner_result_img = mysqli_query($db_connect, $select_banner_data_img);


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

                    <?php if (isset($_SESSION['successImg'])) { ?>
                        <strong class="text-warning"><?= $_SESSION['successImg'] ?></strong>
                    <?php }
                    unset($_SESSION['successImg']) ?>

                    <?php if (isset($_SESSION['error'])) { ?>
                        <strong class="text-warning"><?= $_SESSION['error'] ?></strong>
                    <?php }
                    unset($_SESSION['error']) ?>
                </div>
                <div class="card-body">
                    <form action="update_banner_photo.php" method="POST" enctype="multipart/form-data">
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
        <div class="col-lg-8 mt-3">
            <div class="card">
                <div class="card-header">
                    <h2>Change Profile Status</h2>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>SL</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach ($banner_result_img as $sl => $banner) { ?>
                            <tr>
                                <td><?= $sl + 1 ?></td>

                                <td><img width="110" src="../uploads/banner/<?= $banner['img'] ?>" alt=""></td>
                                <td> <a class="btn btn-<?= ($banner['status'] == 1) ? 'success' : 'secondary' ?> text-capitalize w-100" href="banner.php?id=<?= $banner['id'] ?>"><?= ($banner['status'] == 1) ? 'active' : 'deactive' ?></a></td>

                                <td>
                                    <a href="delete_banner.php?id=<?= $banner['id'] ?>" class="delete-btn btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<?php if (isset($_SESSION['delete'])) { ?>
    <script>
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: '<?= $_SESSION['delete']?>',
            showConfirmButton: false,
            timer: 2500
        })
    </script>
<?php  } unset($_SESSION['delete']) ?>





























<?php require '../parts/Footer.php' ?>