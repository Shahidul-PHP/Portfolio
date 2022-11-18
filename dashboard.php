<?php
session_start();
require 'db.php';
require 'login_check.php';
?>

<?php require 'parts/Header.php' ?>

<!DOCTYPE html>
<html lang="en">
<style>
    .img {
        width: 110px;
        height: 110px;
        border-radius: 50%;
        float: right;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container m-auto">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="">

                            <?php if ($after_assoc['img'] == null) { ?>
                                <img class="img" src="https://cdn.pixabay.com/photo/2019/08/11/18/59/icon-4399701_960_720.png" alt="">
                            <?php } else { ?>
                                <img class="img mb-5" src="uploads/users/<?= $after_assoc['img'] ?>" alt="">
                            <?php } ?>

                            <h3>Welcome To Dashboard, <strong><?= $after_assoc['name'] ?></strong></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>









































<?php require 'parts/Footer.php' ?>