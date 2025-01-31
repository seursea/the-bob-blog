<?php 
if (isset($_POST["create"])){
    include("../connect.php");
    $title = mysqli_real_escape_string($con, $_POST["title"]);
    $content = mysqli_real_escape_string($con, $_POST["content"]);
    $tags = mysqli_real_escape_string($con, $_POST["tags"]);
    $date = mysqli_real_escape_string($con, $_POST["date"]);
    
    $sqlInsert = "INSERT INTO posts(title, content, tags, date) VALUES ('$title','$content','$tags','$date')";
    if (mysqli_query($con, $sqlInsert)){
        session_start();
        $_SESSION["create"] = "Post added successfully";
        header("Location:index.php");
    }else{
        die("Data is not inserted!");
    }
}
?>

<?php 
if (isset($_POST["update"])){
    include("../connect.php");
    $title = mysqli_real_escape_string($con, $_POST["title"]);
    $content = mysqli_real_escape_string($con, $_POST["content"]);
    $tags = mysqli_real_escape_string($con, $_POST["tags"]);
    $date = mysqli_real_escape_string($con, $_POST["date"]);
    $id = mysqli_real_escape_string($con, $_POST["id"]);
    $sqlUpdate = "UPDATE posts SET title='$title', content='$content', tags='$tags', date='$date' WHERE id='$id'";
    if (mysqli_query($con, $sqlUpdate)){
        session_start();
        $_SESSION["update"] = "Post updated successfully";
        header("Location:index.php");
    }else{
        die("Data is not updated!");
    }
}
?>