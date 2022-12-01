<?php
session_start();
require '../db.php';

$select_skills = "SELECT * FROM skills";
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
                    <table class="table table-striped">
                        <tr>
                            <th>SL</th>
                            <th>Skill's</th>
                            <th>Details</th>
                            <th>Percantage</th>
                            <th>Status</th>
                        </tr>
                        <?php foreach ($res_skills as $sl => $skills) { ?>
                            <tr>
                                <td><?= $sl + 1 ?></td>
                                <td><?= $skills['title_sk'] ?></td>
                                <td><?= $skills['desp_sk'] ?></td>
                                <td><?= $skills['percentage'] ?></td>

                                <td>
                                    <a href="skill_status.php?id=<?= $skills['id'] ?>" class="w-100 btn btn-<?= $skills['status'] == 1 ? 'success' : 'secondary' ?>"><?= $skills['status'] == 1 ? 'active' : 'deactive' ?></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3>Add Skill</h3>
                    <?php if (isset($_SESSION['skill'])) { ?>
                        <strong class="text-success"><?= $_SESSION['skill'] ?></strong>
                    <?php }
                    unset($_SESSION['skill']) ?>
                </div>
                <div class="card-body">
                    <form action="skill_post.php" method="POST">
                        <div class="mb-3">
                            <label for="" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Desp</label>
                            <input type="text" name="desp" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Percentage</label>
                            <input type="number" name="percentage" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Add Skill</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>







<?php require '../parts/Footer.php' ?>