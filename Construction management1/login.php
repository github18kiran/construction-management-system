<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Here</title>
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="container">
  <?php 
  include ("connect.php");
  error_reporting(0);

  if(isset($_POST['login'])){
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    $usertype=$_POST['usertype'];
    
    $select="SELECT * FROM users WHERE Email = '$email' && Password='$password'";
      
    $result=mysqli_query($conn, $select);

          if( mysqli_num_rows($result) > 0){

          $row = mysqli_fetch_array($result);

          if($row['usertype'] == 'admin'){
          
            $_SESSION['admin_name'] = $row['name'];
            header('location:admin.php');

          }elseif($row['usertype'] == 'user'){
          
              $_SESSION['user_name'] = $row['name'];
              header('location:user.php');
            }
          }else{
            $error[] = 'Incorrect email or password!';
          }
        mysqli_close($conn);            
};
?>
    <h1>Login</h1>
    <div class="form-container">
        <form action="login.php" method="post" >
        <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.' </span>';
                    }
                }

            ?>
            <!-- <div class="input-name">
                <i class="fa fa-user user"></i>
                <input type="text" placeholder="User Name" class="name" name="username" required>
            </div> -->
            <div class="input-name">
                <i class="fa fa-envelope email"></i>
                <input type="email" placeholder="Email" class="text-name" name="email" required>
            </div>
            <div class="input-name">
                  <i class="fa fa-lock Lock"></i>
                  <input type="password" placeholder="Password" class="text-name" name="password" required>
            </div>
            <div class="input-name">
              <td><input type="submit" class="button" value="Login" name="login"></td>
              <p>Don't have an account? <a href="signup.php">Register now</a></p>
            </div>
        </form>
    </div>
</div>
</body>
</html>
