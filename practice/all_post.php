<?php

session_start();
include 'include/env.php';

$query = "SELECT * FROM all_post";
// $query = "SELECT * FROM all_post WHERE author = 'belal'";  //for single person query

$result = mysqli_query($conn, $query);

$posts = mysqli_fetch_all($result, 1);

// var_dump($posts);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">


    <style>

    </style>
</head>

<body>

    <!-- ----------for nav--------- -->

    <nav class="navbar navbar-expand-lg bg-light col-6 mx-auto rounded">
        <div class="container ">
            <a class="navbar-brand" href="#">Post Article</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php">Add Post </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./all_post.php">All Post </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <!-- -------------toast massage for success------ -->
    <?php
    if (isset($_SESSION['success'])) {
    ?>
        <div class="toast show" role="alert" style="position:absolute;bottom:20px;right:20px;" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">Article Post</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                <?= $_SESSION['success'] ?>
            </div>
        </div>
    <?php
    }
    ?>

    <!-- -------------table------ -->
    <div class="container col-8">
        <table class="table table-responsive table-md align-middle  table-striped mt-2">
            <tr>
                <td>#</td>
                <td>Post Title</td>
                <td>Post Description</td>
                <td>Author</td>
                <td>Action</td>
            </tr>

            <!-- -------php code------ -->
            <?php
            foreach ($posts as $key => $post) {
            ?>

                <tr>
                    <td><?= ++$key ?></td>
                    <td><?= $post['title'] ?></td>
                    <td><?= strlen($post['details']) > 50 ? substr($post['details'], 0, 50) . "...." : $post['details'] ?></td>
                    <td><?= $post['author'] ?></td>
                    <td>
                        <a class="btn btn-primary" href="./show_post.php?id= <?= $post['id'] ?>">Show</a>
                        <a class="btn btn-success" href="./edit_post.php?id= <?= $post['id'] ?>">Edit</a>

                        <a class="btn btn-danger" href="./controller/delete.php?id= <?= $post['id'] ?>">Delete</a>

                    </td>
                </tr>

            <?php
            }
            ?>

        </table>

    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>


<!-- //session end -->
<?php
session_unset();
?>