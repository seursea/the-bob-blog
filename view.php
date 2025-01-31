<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Bob Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <header class="p-4 text-center" style="background-color:#18453b;;">
        <h1><a href="" style="color:white;"><strong>The Bob Blog</strong></a></h1>
    </header>
    <div class="post-list mt-4">
        <div class="container">
            <?php 
            $id = $_GET['id'];
            if ($id){
                include("connect.php");
                $sqlSelect = "SELECT * FROM posts WHERE id='$id'";
                $result = mysqli_query($con, $sqlSelect);
                while($data = mysqli_fetch_array($result)) {
                ?>
                    <div class="post mt-4 p-5" style="background-color:light;">
                        <h1><?php echo $data['title']; ?></h1>
                        <p><?php echo $data['date']; ?></p>
                        <p><?php echo $data['content']; ?></p>
                        <p>Tags: <?php echo $data['tags']; ?></p>
                    </div>
                <?php
                }
            }else{
                echo "No Post Found";
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