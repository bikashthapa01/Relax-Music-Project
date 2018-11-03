<?php 
    include('includes/header.php');
    require_once('db.php');


    if(!isset($_SESSION['username']) && !isset($_SESSION['password'])) {

        header("Location: index.php");
    }


?>

<div class="site_content">
    <div class="add_content">
        <div class="list_of_cat">
            <h3>All Categories: </h3>
            <?php 
                    $query = "SELECT name FROM category";
                    $data = $conn->query($query);
                ?>
                <ul>
                    <?php  

                        if($data->num_rows > 0){
                            while($row = $data->fetch_assoc()) { ?>
                               <li><?php echo $row['name'] ?> 
                                   <small>
                                        <form method="POST" action="delete.php">
                                            <input type="hidden" name="cat_id" value="<?php echo $row['id']; ?>">
                                            <button>Delete</button>
                                        </form>
                                    </small>
                                </li>
                            <?php }
                        }

                     ?>
                    
                </ul>
        </div>
        <h1>Add New Category</h1>
        <code id="msg"></code>
        <form class="add" action="category.php" method="POST">
            <p>
                <label>Title Of Category: </label>
                <input type="text" name="name" required>
            </p>

            <button>Add New Music</button>
        </form>
    </div>
</div>


<?php
        if(!empty($_POST['name'])){

                $name = $_POST['name'];
                

                require_once('db.php');
                $sql = 'INSERT INTO category(name) values("'.$name.'")';
                if($conn->query($sql) === true){
                    ?>
                        <script type="text/javascript"> document.getElementById('msg').innerHTML = 'New Category Added Successfully.';</script>

                    <?php

                    header("Location: category.php");
                }else {
                    ?>
                        <script type="text/javascript"> document.getElementById('msg').innerHTML = 'An Error Occured.';</script>
                    <?php
                }


            }

?>
<?php include('includes/footer.php'); ?>