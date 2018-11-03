<?php 
    include('includes/header.php');

    if(!empty($_POST['music_id'])) {

        $music_id = $_POST['music_id'];
        require_once('db.php');

        $sql = 'SELECT * FROM music WHERE id="'.$music_id.'"';
        $data = $conn->query($sql);

        if($data->num_rows>0){

            $row = $data->fetch_assoc();


        ?>


        <div class="site_content">
    <div class="add_content">
        <h1>Update: <?php echo $row['title']; ?></h1>
        <code id="msg"></code>
        <form class="add" action="update.php" method="POST">
            <input type="hidden" name="music_id" value="<?php echo $music_id; ?>">
            <p>
                <label>Title Of Music: </label>
                <input type="text" name="title" required value="<?php echo $row['title']; ?>">
            </p>

            <p>
                <label>Short Description: </label>
                <input type="text" name="description" required value="<?php echo $row['description']; ?>">
            </p>

            <p>
                <label>Album Image: </label>
                <input type="text" name="image_url" required value="<?php echo $row['image_url']; ?>">
            </p>

             <p>
                <label>Song Url: </label>
                <input type="text" name="music_url" required value="<?php echo $row['music_url']; ?>">
            </p>
            <button>Update</button>
        </form>
    </div>
</div>


   <?php 

   }
}

?>
<?php include('includes/footer.php'); ?>