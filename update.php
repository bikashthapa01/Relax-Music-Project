<?php

    
    include('includes/header.php');

    if(!isset($_SESSION['username']) && !isset($_SESSION['password'])) {

        header("Location: index.php");
    }else{

        if(!empty($_POST['music_id']) && !empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['image_url']) && !empty($_POST['music_url'])){
                $id = $_POST['music_id'];
                $title = $_POST['title'];
                $desc = $_POST['description'];
                $image = $_POST['image_url'];
                $music = $_POST['music_url'];

                require_once('db.php');

                $sql = 'UPDATE music SET title="'.$title.'",description="'.$desc.'",image_url="'.$image.'",music_url="'.$music.'" WHERE id="'.$id.'"';
                if($conn->query($sql) === true){
                    header('Location: dashboard.php');
                }

            }

    }


 ?>