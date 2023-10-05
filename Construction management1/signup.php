<html>
<head>
    <title>Register Here</title>
    <link rel="stylesheet" type="text/css" href="css/signup.css">
    <link rel="stylesheet" type="text/css" href="js/signup.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
    <?php 
         
         include("connect.php");
         if(isset($_POST['register'])){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $conpassword = $_POST['conpassword'];
            $usertype =$_POST['usertype'];

         //verifying the unique email

         $verify_query = mysqli_query($conn,"SELECT Email FROM users WHERE Email='$email' && Password='$password'");

         if(!$verify_query){
            die("Query failed:". mysqli_error($conn));
         }
          if( mysqli_num_rows($verify_query) > 0){
             $error[]='user already exist';
                } else{
    
                   if($password != $conpassword){
                   $error[] = 'password not matched!';
                      } else{
                        $insert ="INSERT INTO users (Firstname,Lastname,Email,Password,Confirmpassword,Usertype) VALUES('$firstname','$lastname','$email','$password','$conpassword','$usertype')";
                        mysqli_query($conn,$insert);
                        header('location:login.php');
                            }
                        }
            mysqli_close($conn);            
    }

    
         
        ?>
        <h1>Registration form</h1>
        <div class="form-container">
            <form action="signup.php" method="post" >
            <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.' </span>';
                    };
                };

            ?>
                <div class="input-name">
                    <i class="fa fa-user user"></i>
                    <input type="text" placeholder="First Name" class="name" name="firstname" required>
                    <span>
                        <i class="fa fa-user user"></i>
                        <input type="text" placeholder="Last Name" class="name" name="lastname" required>
                    </span>
                </div>
                <div class="input-name">
                    <i class="fa fa-envelope email"></i>
                    <input type="email" placeholder="Email" class="text-name" name="email" required>
                </div>
                <div class="input-name">
                      <i class="fa fa-lock Lock"></i>
                      <input type="password" autocomplete="off" placeholder="Password" class="text-name" name="password" required>
                </div>
                <div class="input-name">
                     <i class="fa fa-lock Lock"></i>
                     <input type="password" placeholder="Confirm Password" class="text-name" name="conpassword" required>
                </div>
                <div class="input-name">
                    <select class="usertype" name="usertype" placeholder="UserType">
                        <option>User type</option>
                        <!-- <i class="fa fa-user user"></i> -->
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>
                    <div class="arrow"></div>
                </div>

                <div class="input-name">
                    <input type="checkbox" class="check-button" id="cb" name="chckbtn"required>
                    <label for="cb" class="check">I accept the terms and conditions.</label>
                </div>
                <div class="link">
                  <td><input type="submit" class="button" value="Register" name="register"></td>
                  <p>Already have an account? <a href="login.php">Login now</a></p>
                </div>
            </form>
                </div>
    </div>
</body>
</html>
 