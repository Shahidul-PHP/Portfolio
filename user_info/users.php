<?php
session_start();
require '../login_check.php';
require '../db.php';
// show query

$show_user = "SELECT * FROM users";
$result = mysqli_query($db_connect, $show_user);

?>

<?php require '../parts/Header.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-11 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>Current User List</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Email</th>
                                <th>Action's</th>
                            </tr>
                            <?php foreach ($result as $key => $users_list) { ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $users_list['name'] ?></td>
                                    <td><img width="130" src="../uploads/users/<?=$users_list['img']?>" alt=""></td>
                                    
                                    <td><?= $users_list['email'] ?></td>
                                    <td>
                                        <a href="edit.php?id=<?= $users_list['id'] ?>" class="btn btn-primary">Edit</a>

                                        <button data-id="delete.php?id=<?= $users_list['id'] ?>" class="delete-btn btn btn-warning">Delete</button>
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

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $('.delete-btn').click(function() {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    link = $(this).attr('data-id');
                    window.location.href = link;
                }
            })
        });
    </script>

    <?php if (isset($_SESSION['success'])) { ?>
        <script>
            Swal.fire(
                'Deleted!',
                '<?= $_SESSION['success'] ?>',
                'success'
            )
        </script>
    <?php }
    unset($_SESSION['success']) ?>