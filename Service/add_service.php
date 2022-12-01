<?php
session_start();
require '../db.php';

$select_serv = "SELECT * FROM service_list";
$service_query = mysqli_query($db_connect, $select_serv);



?>

<?php require '../parts/Header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="">Add Service's</h2>
                    <?php if (isset($_SESSION['dd'])) { ?>
                        <strong class="text-danger"><?= $_SESSION['dd'] ?></strong>
                    <?php }
                    unset($_SESSION['dd']) ?>
                    <?php
                    $service_icons = array(
                        "fa-solid fa-code",
                        "fa-solid fa-figma",
                        "fa-solid fa-phone",
                        "fa-solid fa-pen-to-square",
                        "fa-solid fa-lightbulb",
                        "fa-solid fa-lock"
                    );
                    ?>
                </div>
                <div class="card-body">
                    <form action="add_service_post.php" method="POST">
                        <?php foreach ($service_icons as $serv_icon) { ?>
                            <i style="font-family:fontawesome; margin-right:15px; font-size:22px; color:black;" class="<?= $serv_icon ?>"></i>
                        <?php } ?>
                        <div class="mb-3 mt-4">
                            <input class="form-control" type="text" name="icon" id="icon" placeholder="Icon">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="text" name="service_title" id="" placeholder="Title">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="text" name="service_detail" id="" placeholder="Description">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-danger">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-12 mt-3">
            <div class="card">
                <div class="card-header">
                    <h2>Show Added Service's</h2>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>SL</th>
                            <th>Icon</th>
                            <th>Title</th>
                            <th>Details</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach ($service_query as $sl => $serivces) { ?>
                            <tr>
                                <td><?= $sl + 1 ?></td>
                                <td><i style="font-size:22px;" class="<?= $serivces['icon'] ?>"></i></td>

                                <td><?= $serivces['service_title'] ?></td>
                                <td><?= $serivces['service_detail'] ?></td>
                                <td>
                                    <a href="edit_form.php?id=<?= $serivces['id'] ?>" class="btn btn-primary">Update</a>
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

<script>
    $('.fa-solid').click(function() {
        let class_icon = $(this).attr('class');
        $('#icon').attr('value', class_icon);
    });
</script>