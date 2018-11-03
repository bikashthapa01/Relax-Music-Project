<?php 
    include('includes/header.php');
    require_once('db.php');


 if(!empty($_POST['music_id'])) {

        $music_id = $_POST['music_id'];
       
        $sql = 'DELETE FROM music WHERE id="'.$music_id.'"';

        if($conn->query($sql) === true){

           header('Location: dashboard.php');
   		 }

}

header('Location: dashboard.php');

