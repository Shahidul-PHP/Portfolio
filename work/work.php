<?php
session_start();
require '../db.php';

$select_skills = "SELECT * FROM works";
$res_skills = mysqli_query($db_connect, $select_skills);



?>

<?php require '../parts/Header.php' ?>

<div class="container">
    <div class="row">

        <div class="col-lg-12 mb-2">
            <div class="card">
                <div class="card-header">
                    <h2>My Skill's Are Here</h2>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-responsive">
                        <tr>
                            <th>SL</th>
                            <th>User Name</th>
                            <th>Category</th>
                            <th>Sub Title</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Thumbnail Image</th>
                            <th>Featured Image</th>
                        </tr>
                        <?php foreach ($res_skills as $sl => $works) { ?>
                            <tr>
                                <td><?= $sl + 1 ?></td>

                                <td>
                                    <?php
                                    $user_id = $works['user_id'];
                                    $select_user = "SELECT * FROM users WHERE id = $user_id";
                                    $make_qr = mysqli_query($db_connect, $select_user);
                                    $make_assoc = mysqli_fetch_assoc($make_qr);
                                    echo $make_assoc['name'];
                                    ?>
                                </td>
                                <td><?= $works['category'] ?></td>
                                <td><?= substr($works['sub_title'], 0, 30) ?></td>
                                <td><?= substr($works['title'], 0, 30) ?></td>
                                <td><?= substr($works['desp'], 0, 30) ?></td>
                                <td><img width="100" src="../uploads/work/thumb/<?= $works['thumb_img'] ?>" alt=""></td>

                                <td><img width="100" src="../uploads/work/feat/<?= $works['thumb_img'] ?>" alt=""></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3>Add New Work</h3>
                    <?php if (isset($_SESSION['work'])) { ?>
                        <strong class="text-success"><?= $_SESSION['work'] ?></strong>
                    <?php }
                    unset($_SESSION['work']) ?>
                </div>
                <div class="card-body">
                    <form action="work_post.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="" class="form-label">Category</label>
                            <input value="<?= $after_assoc['id'] ?>" type="hidden" name="user_id" class="form-control">
                            <input type="text" name="category" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Sub Title</label>
                            <input type="text" name="sub_title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Description</label>
                            <textarea class="form-control" name="desp" id="" cols="30" rows="10"></textarea>
                        </div>
                        <!-- thumbnail image -->
                        <div class="mb-3">
                            <label for="" class="form-label">Set a Thumbnail Image</label>
                            <input type="file" name="thumb_img" class="form-control">

                        </div>
                        <!-- preview image -->
                        <div class="mb-3">
                            <label for="" class="form-label">Set a Preview Image</label>
                            <input type="file" name="feat_img" class="form-control">
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Add Work</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>







<?php require '../parts/Footer.php' ?>