<?php 
    include('includes/header.php');
    require_once('db.php');


    if(!isset($_SESSION['username']) && !isset($_SESSION['password'])) {

        header("Location: index.php");
    }


?>

<div class="site_content">
    <div class="add_content">
        <h1>Add New Music</h1>
        <code id="msg"></code>
        <form class="add" action="add.php" method="POST">
            <p>
                <label>Title Of Music: </label>
                <input type="text" name="title" required>
            </p>

            <p>
                <label>Short Description: </label>
                <input type="text" name="description" required>
            </p>

            <p>
                <label>Album Image: </label>
                <input type="text" name="image_url" required>
            </p>

             <p>
                <label>Song Url: </label>
                <input type="text" name="music_url" required>
            </p>
            <p>
                <label>Category: </label>
                <?php 

                    $query = "SELECT name FROM category";
                    $data = $conn->query($query);
                ?>
                <select name="category">
                    <?php  

                        if($data->num_rows > 0){
                            while($row = $data->fetch_assoc()) { ?>
                               <option value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?></option>
                            <?php }
                        }

                     ?>
                    
                </select>
            </p>
            <button>Add New Music</button>
        </form>
    </div>
</div>


<?php
        if(!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['image_url']) && !empty($_POST['music_url']) && !empty($_POST['category'])){

                $title = $_POST['title'];
                $desc = $_POST['description'];
                $image = $_POST['image_url'];
                $music = $_POST['music_url'];
                $category = $_POST['category'];

                require_once('db.php');
                $sql = 'INSERT INTO music(title,description,image_url,music_url,category) values("'.$title.'","'.$desc.'","'.$image.'","'.$music.'","'.$category.'")';
                if($conn->query($sql) === true){
                    ?>
                        <script type="text/javascript"> document.getElementById('msg').innerHTML = 'Music Added Successfully.';</script>
                    <?php
                }else {
                    ?>
                        <script type="text/javascript"> document.getElementById('msg').innerHTML = 'An Error Occured.';</script>
                    <?php
                }


            }

?>
<?php include('includes/footer.php'); ?>