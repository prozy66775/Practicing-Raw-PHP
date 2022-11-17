<?php
session_start();
include "../include/env.php";
// print_r($_POST);
// exit();



if (isset($_POST['update'])) {

    //all request are define with separate variable
    $id = $_POST['id'];
    $title = $_POST['title'];
    $details = $_POST['details'];
    $author = $_POST['author'];

    $query = "UPDATE all_post SET title='$title' ,details='$details',author='$author' WHERE id = $id";
    $res = mysqli_query($conn, $query);


    if ($res) {
        header("location:../all_post.php");
        $_SESSION['success'] = "Your Post Update Successfully";
    }
} else {
    header("location:../all_post.php");
}
