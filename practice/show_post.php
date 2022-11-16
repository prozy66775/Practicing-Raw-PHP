<?php
// var_dump($_GET);
$id = $_GET['id'];
include './include/env.php';

$query = "SELECT * FROM all_post WHERE id =$id";

$resu = mysqli_query($conn, $query);

$fetch = mysqli_fetch_assoc($resu);
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

    <!-- -------------table------ -->


    <!-- <table class="table table-responsive table-md align-middle  table-striped mt-2" >


        <tr>
            <td>Post Title</td>
            <td>Post Description</td>
            <td>Author</td>
        </tr>
        <tr>
         
            <td><?= $fetch['title'] ?>/td>
            <td><?= $fetch['details'] ?></td>
            <td><?= $fetch['author'] ?></td>
      
        </tr>


  
</table> -->

    <div class="card col-6 mx-auto mt-3">
        <div class="card-header">
            <h6> Post Title :</h6>

            <p> <?= $fetch['title'] ?></p>

        </div>

        <div class="card-body">
            <h6> Post Details :</h6>

            <p class="text-justify"> <?= $fetch['details'] ?> </p>

        </div>

        <div class="card-footer">
            <h6> Author :</h6>
            <p> <?= $fetch['author'] ?></p </div>
        </div>


        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>


<!-- //session end -->