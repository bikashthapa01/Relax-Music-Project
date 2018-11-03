<?php 



    include('includes/header.php');

    
 if(isset($_SESSION['username']) && isset($_SESSION['password'])) {

        header("Location: dashboard.php");
    }

?> 

    <div class="site_content">
        <div class="login">
            <h3 class="login_header">Login to System</h3>
            <div class="center" id="msg"></div>
            <form class="form" id="login_form" method="POST" action="index.php">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button>Login</button>
            </form>
        </div>
    </div>


<?php 

   if(!empty($_POST['username']) && !empty($_POST['password'])){

        $username = $_POST['username'];
        
        require('db.php');


        $sql = "select password from user where username='".$username."'";
        $results = $conn->query($sql);

        if($results->num_rows > 0){

            $row = $results->fetch_assoc();

            $hash = $row['password'];
            $password = $_POST['password'];

            if(password_verify($password,$hash)){

                $_SESSION['valid'] = true;
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $hash;
                $_SESSION['timeout'] = time();

                header('Location: dashboard.php');
            }else {
                echo "<script>document.getElementById('msg').innerHTML = 'Incorect Password';</script>";
            }

           

        }else {
            echo "<script>document.getElementById('msg').innerHTML = 'User Doesnot Exists.';</script>";
        }

   }

?>
<?php include('includes/footer.php'); ?>