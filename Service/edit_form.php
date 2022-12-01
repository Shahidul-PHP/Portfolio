<?php
session_start();
require '../db.php';

$service_id = $_GET['id'];
$sel = "SELECT * FROM service_list WHERE id = $service_id";
$qry = mysqli_query($db_connect, $sel);
$assoc = mysqli_fetch_assoc($qry);


?>

<?php require '../parts/Header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h2>Edit Service Info</h2>
                   
                </div>
                <div class="card-body">
                    <form action="edit.php" method="POST">
                        <div class="mb-3">

                            <input type="hidden" name="id" class="form-control" value="<?=$service_id?>">

                            <input value="<?= $assoc['service_title'] ?>" class="form-control" type="text" name="tt" id="" placeholder="Title">

                        </div>
                        <div class="mb-3">
                            <input value="<?= $assoc['service_detail'] ?>" class=" form-control" type="text" name="dd" id="" placeholder="Description">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-danger">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>







<?php require '../parts/Footer.php' ?>