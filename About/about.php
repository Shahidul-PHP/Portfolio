<?php
session_start();
require '../db.php';

$select_pera = "SELECT * FROM about";
$about_res = mysqli_query($db_connect, $select_pera);
$assoc_about = mysqli_fetch_assoc($about_res);

?>

<?php require '../parts/Header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-lg-9 m-auto">
            <div class="card">
                <div class="card-header">
                    <h2>About Me</h2>
                    <?php if(isset($_SESSION['about'])){ ?>
                        <strong class="text-primary"><?= $_SESSION['about']?></strong>
                    <?php } unset($_SESSION['about']) ?>
                </div>
                <div class="card-body">
                    <form action="about_post.php" method="POST">
                        <div class="mb-3">                     
                            <input class="form-control" value="<?= $assoc_about['about']?>" name="about" id="" cols="30" rows="10"></input>
                        </div>
                        <div class="mb-3">
                            <button class="btn">Add </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>








<?php require '../parts/Footer.php'; ?>