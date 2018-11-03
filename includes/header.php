<?php     

    ob_start();
    if(!isset($_SESSION)) {
        session_start();
    }
    require_once('db.php'); 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Relax Music</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <header>
        <div class="site_branding">
            <h1>Relax Music</h1>
            <?php 
                if(isset($_SESSION['username'])){
                        $username = $_SESSION['username'];
                    ?>
                    <span class="logout">
                        <nav>
                            <a href="#"><?php echo "Welcome ".$username." | "; ?></a>
                            <a href="dashboard.php">Home</a>
                            <a href="add.php">Add</a>
                            <a href="category.php">Categories</a>
                            <a href="logout.php">Logout</a>
                        </nav>
                    </span> <?php
                }
            ?>
        </div>
    </header>
<!-- 
    <nav class="menu">
        <ul>
           <li><a href="#">Home</a></li> 
           <li><a href="#">DropDown</a>

                <ul>
                    <li><a href="#">Menu 1</a></li>
                    <li><a href="#">Menu 2</a></li>
                </ul>

           </li>
        </ul>
    </nav> -->