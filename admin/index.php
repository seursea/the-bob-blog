<?php
include("templates/header.php");
?>

<div class="sidebar">
    <h1><a href="" class="text-light text-decoration-none" >Admin Panel</a></h1>
    <div class="menues p-4 mt-5">
        <div class="menu">
            <a href="create.php" class="text-light text-decoration-none"><strong>Create New Post</strong></a>
        </div>
        <div class="menu mt-5">
            <a href="../index.php" class="text-light text-decoration-none"><strong>View Website</strong></a>
        </div>
        <div class="menu mt-5">
            <a href="logout.php" class="btn btn-info">Logout</a>
        </div>
    </div>
</div>

<div class="content" >
    <div class="posts-list w-100 p-5"  style="margin: 0 0 0 150px;">
        <?php
        if (isset($_SESSION["create"])) {
        ?>
        <div class="alert alert-success" style="width:90%">
            <?php 
            echo $_SESSION["create"];
            ?>
        </div>
        <?php
        unset($_SESSION["create"]);
        }
        ?>
         <?php
        if (isset($_SESSION["update"])) {
        ?>
        <div class="alert alert-success" style="width:90%">
            <?php
            echo $_SESSION["update"];
            ?>
        </div>
        <?php
        unset($_SESSION["update"]);
        }
        ?>
        <?php
        if (isset($_SESSION["delete"])) {
        ?>
        <div class="alert alert-success"  style="width:90%">
            <?php 
            echo $_SESSION["delete"];
            ?>
        </div>
        <?php
        unset($_SESSION["delete"]);
        }
        ?>
        <table class="table table-bordered" style="margin: 0 0 0 10px; width:90%;">
            <thead>
                <tr>
                    <th style="width:10%;">Publication Date</th>
                    <th style="width:10%;">Title</th>
                    <th style="width:30%;">Content</th>
                    <th style="width:10%;">Tags</th>
                    <th style="width:15%;">Action</th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                include('../connect.php');
                $sqlSelect = "SELECT * FROM posts";
                $result = mysqli_query($con,$sqlSelect);
                while($data = mysqli_fetch_array($result)){
                ?>
                <tr>
                <td><?php echo $data["date"]?></td>
                <td><?php echo $data["title"]?></td>
                <td><?php echo $data["content"]?></td>
                <td><?php echo $data["tags"]?></td>
                <td>
                    <a class="btn btn-info" href="view.php?id=<?php echo $data["id"]?>">View</a>
                    <a class="btn btn-warning"  href="edit.php?id=<?php echo $data["id"]?>">Edit</a>
                    <a class="btn btn-danger" href="delete.php?id=<?php echo $data["id"]?>">Delete</a>
                </td>
                </tr>
                <?php
                }
                ?>
               
            </tbody>
        </table>
    </div>
</div>


<?php
include("templates/footer.php");
?>
