<?php
include("templates/header.php");
?>

<div class="post w-90 p-5" style="margin: 0 0 0 300px; width:90%;">
    <?php
    $id = $_GET["id"];
    if ($id){
        include("../connect.php");
        $sqlSelectPost = "SELECT * FROM posts WHERE id = $id";
        $result = mysqli_query($con, $sqlSelectPost);
        while ($data = mysqli_fetch_array($result)) {
        ?>
        <h1><?php echo $data['title']; ?></h1>
        <p><?php echo $data['date']; ?></p>
        <p><?php echo $data['content']; ?></p>
        <?php
        }
    } else {
        echo "Post Not Found";
    }
    ?>
</div>

<?php
include("templates/footer.php");
?>