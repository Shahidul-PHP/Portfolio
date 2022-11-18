<?php
session_start();
require '../login_check.php';
require '../db.php';

// edit query

$id = $_GET['id'];
$select = "SELECT * FROM users WHERE id = $id";
$res = mysqli_query($db_connect, $select);
$make_assoc = mysqli_fetch_assoc($res);


?>

<?php require '../parts/Header.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="card bg-secondary shadow col-lg-8 m-auto">
        <div class="card-body">
            <form action="update.php" method="POST">
                <h3 class="heading-small text-muted mb-4">Update User Info</h3>
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-10 m-auto">
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">Username</label>
                                <input name="name" type="text" id="input-username" class="form-control form-control-alternative" value="<?= $make_assoc['name'] ?>">

                                <input name="id" type="hidden" id="input-username" class="form-control form-control-alternative" value="<?= $make_assoc['id']?>">
                            </div>
                        </div>
                        <div class="col-lg-10 m-auto">
                            <div class="form-group">
                                <label class="form-control-label" for="input-email">Email address</label>
                                <input name="email" type="email" id="input-email" class="form-control form-control-alternative" value="<?= $make_assoc['email'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class=" row">
                                <div class="col-lg-10 m-auto">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Password</label>
                                        <input name="password" type="password" id="input-first-name" class="form-control form-control-alternative" placeholder="Update Password" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-10 m-auto">
                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit">Update Info</button>
                                    </div>
                                </div>
                            </div>
                        </div>
            </form>
        </div>
    </div>
</body>

</html>








<?php require '../parts/Footer.php' ?>