<?php
session_start();
require '../db.php';




?>

<?php require '../parts/Header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 m-auto">
            <div class="card">
                <div class="card-header">
                    <h2>Add Feature's</h2>
                </div>
                <div class="card-body">
                    <form action="insert_feat.php" method="POST">
                        <div class="mb-3">
                            <input type="text" name="count" class="form-control">
                        </div>

                        <div class="mb-3">
                            <input type="text" name="title" class="form-control">
                        </div>

                        <div class="mb-3">
                            <button class="btn btn-primary">Add Feature's</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>














<?php require '../parts/Footer.php' ?>