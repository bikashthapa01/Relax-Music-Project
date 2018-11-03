<?php 

    include('includes/header.php');
    
 

    if(!isset($_SESSION['username']) && !isset($_SESSION['password'])) {

        header("Location: index.php");

    }else {
    	if(!empty($_GET['category'])){
	    	$cat = $_GET['category'];
	        $username = $_SESSION['username'];
	        require_once('db.php');
	        $sql = 'SELECT * FROM music WHERE category="'.$cat.'" ORDER BY id DESC';
	        $data = $conn->query($sql);
    	}else {

    		header("Location: dashboard.php");

    	}
    }
?>



<div class="site_content">
    <div class="dashboard_content">
        <h2 class="dash_title"><?php echo $cat; ?></h2>

        <?php 

            if($data->num_rows>0){
                while($row = $data->fetch_assoc()){ 
                    $title = $row['title'];
                    $description = $row['description'];
                    $image = $row['image_url'];
                    $music = $row['music_url'];
                       ?>

                        <div class="post">
                            <img src="<?php echo $image;?>">
                            <h2><?php echo $title; ?></h2>
                            <p><?php  echo $description; ?> <small>Category: <?php echo $row['category']; ?></small></p>
                            <div class="player">
                                <button onclick="playMusic('<?php echo $music; ?>');">Play</button>
                            </div>

                            <div class="edit">
                                <form method="POST" action="edit.php">
                                    <input type="hidden" name="music_id" value="<?php echo $row['id']; ?>">
                                    <button>Edit</button>
                                </form>
                            </div>
                             <div class="remove">
                                <form method="POST" action="delete.php">
                                    <input type="hidden" name="music_id" value="<?php echo $row['id']; ?>">
                                    <button>Delete</button>
                                </form>
                            </div>
                        </div>
                <?php }

            }else {
                echo "An Error Occured.";
            }

        ?>

<div id="player">
    
</div>

<script type="text/javascript">
    var player = document.getElementById('audio');

    function playMusic(msg){
        document.getElementById('player').innerHTML = "<div id='player'> <audio src='"+msg+"' autoplay></audio></div>";
        
    }
</script>
    </div>
</div>
<?php include('includes/footer.php'); ?>