<?php 
session_start();
if (!isset($_SESSION["user"])){
    header("Location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>
    <div class="dashboard d-flex justify-content-between">
        <div class="sidebar p-4 vh-100" style="background-color:#18453b; position:fixed;" >
            <h1 style="background-color:#18453b; padding:10px;"><a href="" class="text-light text-decoration-none">Admin Panel</a></h1>
            <div class="menues p-4 mt-5">
                <div class="menu">
                    <a href="create.php" class="text-light text-decoration-none"><strong>Create New Post</strong></a>
                </div>
                <div class="menu mt-5">
                    <a href="../index.php" class="text-light text-decoration-none"><strong>View Website</strong></a>
                </div>
                <div class="menu mt-5">
                    <a href="logout.php" class="btn btn-outline-light">Logout</a>
                </div>
            </div>
        </div>
    