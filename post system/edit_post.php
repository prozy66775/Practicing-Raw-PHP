<?php

session_start();
$id = $_GET['id'];
include './include/env.php';
$query = "SELECT * FROM all_post WHERE id = $id";

$res = mysqli_query($conn, $query);

$fet = mysqli_fetch_assoc($res); // pich one row data

// var_dump($fet);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="./src/post-card.png">

    <style>

    </style>
</head>

<body>

    <!-- ----------for nav--------- -->
    <!---new nav added on slice metthod---1>

    <?= include 'nav.php' ?> 


    <!-- -------------form------ -->

    <div class=" card col-6 mx-auto mt-4">

        <div class="card-body ">
            <div class="text-center">
                <h4>Edit Post</h4>
            </div>
            <form class="col-11 mx-auto" action="controller/postEdit.php" method="post">
                <input type="hidden" name="id" value="<?= $fet['id'] ?>">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Post Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="title" value="<?= $fet['title'] ?>" />

                    <!-- ---------for showing error------- -->

                    <?php
                    if (isset($_SESSION['errors']['title'])) {
                    ?>
                        <span class="text-danger">
                            <?php
                            echo $_SESSION['errors']['title'];
                            ?>
                        </span>

                    <?php
                    }
                    ?>

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Post Details</label>
                    <textarea name="details" class="form-control"><?= $fet['details'] ?></textarea>

                    <!-- ---------for showing error------- -->

                    <?php
                    if (isset($_SESSION['errors']['details'])) {
                    ?>
                        <span class="text-danger">
                            <?php
                            echo $_SESSION['errors']['details'];
                            ?>
                        </span>

                    <?php
                    }
                    ?>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Author</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="author" value="<?= $fet['author'] ?>">

                    <!-- ---------for showing error------- -->

                    <?php
                    if (isset($_SESSION['errors']['author'])) {
                    ?>
                        <span class="text-danger">
                            <?php
                            echo $_SESSION['errors']['author'];
                            ?>
                        </span>

                    <?php
                    }
                    ?>

                </div>
                <button type="submit" value="Updating Post" name="update" class="btn btn-primary w-100">Update Post</button>
            </form>

        </div>


    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>


<!-- //session end -->
<?php
session_unset();
?>