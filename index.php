<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Bob Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <header class="pl-5 pt-4 pb-4 pr-5 text-center d-flex justify-content-between align-items-center" style="background-color:#18453b;"> 
        <h1><a href="" style="color:white; font-weight:bold; font-family:Calibri;">The Bob Blog</a></h1>
    </header>
    <div class="post-list mt-4">
        <div class="container">
            <?php 
            include("connect.php");
            $sqlSelect = "SELECT * FROM posts";
            $result = mysqli_query($con, $sqlSelect);
            while($data = mysqli_fetch_array($result)) {
            ?>

                <div class="row mb-4 p-5 bg-light">
                    <div class="col-sm-2">
                        <?php echo $data['date']; ?>
                    </div>
                    <div class="col-sm-2">
                        <strong><?php echo $data['title']; ?></strong>
                    </div>
                    <div class="col-sm-5">
                        <?php echo $data['content']; ?>
                    </div>
                    <div class="col-sm-1">
                        <?php echo $data['tags']; ?>
                    </div>
                    <div class="col-sm-2">
                        <center><a href="view.php?id=<?php echo $data['id']; ?>" class="btn btn-outline-dark">READ MORE</a></center>
                    </div>
                </div>

            <?php
            }
            ?>
        </div>
    </div>
    
</body>
<footer>
    <div class="footer bg-light p-4 mt-4 fixed-bottom">
        <a href="admin/index.php" class="text-dark">Admin Panel</a>
    </div>
</footer>
</html>