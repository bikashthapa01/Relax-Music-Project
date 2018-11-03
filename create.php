<?php 
    
    require_once('db.php');
    $user = "Admin";
    $hash = password_hash("!@#_Bikash",PASSWORD_DEFAULT);
    $check = "SELECT * FROM user WHERE username='".$user."'";
    $results = $conn->query($check);

    if($results->num_rows > 0){
         echo "Username is Already taken..";  
    }else {

        $sql = "INSERT INTO user(username,password) VALUES('".$user."','".$hash."')";
        if($conn->query($sql) === true){
            echo "New User Created." ;
            header('Location: index.php');
        }else {
            echo $sql." -> ".$conn->error;
      }

    }
?>