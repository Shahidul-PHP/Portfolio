<?php
session_start();
require '../db.php';

$select_icons = "SELECT * FROM social";
$query_icon = mysqli_query($db_connect, $select_icons);


?>

<?php require '../parts/Header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h2>Upload Icon</h2>
                    <?php if (isset($_SESSION['done'])) { ?>
                        <strong class="text-danger"><?= $_SESSION['done'] ?></strong>
                    <?php }
                    unset($_SESSION['done']) ?>
                    <?php
                    $font = array(
                        "fa fa-youtube",
                        "fa fa-amazon",
                        "fa fa-facebook",
                        "fa fa-facebook-messenger",
                        "fa fa-facebook-square",
                        "fa fa-twitch",
                        "fa fa-twitter",
                        "fa fa-twitter-square",
                        "fa fa-instagram",
                        "fa fa-pinterest",
                        "fa fa-pinterest-p",
                        "fa fa-pinterest-square",
                        "fa fa-external-link-square-alt",
                        "fa fa-reddit",
                        "fa fa-reddit-alien",
                        "fa fa-reddit-square",
                        "fa fa-telegram",
                        "fa fa-snapchat",
                        "fa fa-snapchat-ghost",
                        "fa fa-snapchat-square",
                    );
                    ?>
                </div>
                <div class="card-body">
                    <form action="icon_post.php" method="POST">
                        <div class="mb-3">
                            <?php foreach ($font as $fonts) { ?>
                                <i style="font-family:fontawesome; margin-right:12px; font-size:18px; color:black;" class="<?= $fonts ?>"></i>
                            <?php } ?>
                        </div>
                        <div class="mb-3">
                            <input id="icon" type="text" name="icon" class="form-control" placeholder="Icon">
                        </div>
                        <div class="mb-3">
                            <input id="" type="text" name="link" class="form-control" placeholder="Link">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-warning">Upload Icon</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h2>Show Added Icon's</h2>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>SL</th>
                            <th>Icon</th>
                            <th>Status</th>
                        </tr>
                        <?php foreach ($query_icon as $sl => $show_icon) { ?>
                            <tr>
                                <td><?= $sl + 1 ?></td>
                                
                                <td><i style="font-size: 22px;" class="<?= $show_icon['icon'] ?>"></i></td>
                                <td>
                                    <a href="show_icon.php?id=<?= $show_icon['id'] ?>" class="w-100 btn btn-<?= $show_icon['status'] == 1 ? 'success' : 'secondary' ?>"><?= $show_icon['status'] == 1 ? 'active' : 'deactive' ?></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/v4-shims.min.css" integrity="sha512-p++g4gkFY8DBqLItjIfuKJPFvTPqcg2FzOns2BNaltwoCOrXMqRIOqgWqWEvuqsj/3aVdgoEo2Y7X6SomTfUPA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if (isset($_SESSION['limit'])) { ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Max Limit Cross !!',
            text: '<?= $_SESSION['limit'] ?>',
        })
    </script>
<?php }
unset($_SESSION['limit']) ?>


<?php require '../parts/Footer.php'; ?>
<script>
    $('.fa').click(function() {
        let class_icon = $(this).attr('class');
        $('#icon').attr('value', class_icon);
    });
</script>