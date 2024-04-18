
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css" />
  <title>Sign in & Sign up Form</title>
  <style>
    .alert {
      padding: 1rem;
      border-radius: 5px;
      color: white;
      margin: 1rem 0;
      font-weight: 500;
      width: 65%;
    }

    .alert-success {
      background-color: #42ba96;
    }

    .alert-danger {
      background-color: #fc5555;
    }

    .alert-info {
      background-color: #2E9AFE;
    }

    .alert-warning {
      background-color: #ff9966;
    }
    .Forget-Pass{
      display: flex;
      width: 65%;
    }
    .Forget{
      color: #2E9AFE;
      font-weight: 500;
      text-decoration: none;
      margin-left: auto;
      
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="" method="POST" class="sign-in-form">
        <?php
                           

                           if(isset($_POST['submit'])) {
                               $email = $_POST['email']; // Using 'name' for email input, as per HTML form
                               $password = $_POST['password'];

                               // Connect to your database
                               require_once "config.php"; // Assuming this file contains database connection code

                               // Prepare and execute the query to fetch user data
                               $sql = "SELECT * FROM user_form WHERE email = ?";
                               $stmt = mysqli_prepare($conn, $sql);
                               mysqli_stmt_bind_param($stmt, "s", $email);
                               mysqli_stmt_execute($stmt);
                               $result = mysqli_stmt_get_result($stmt);

                               if($row = mysqli_fetch_assoc($result)) {
                                   // Verify password
                                   if(password_verify($password, $row['password'])) {
                                       // Password is correct, set session variables and redirect user
                                       $_SESSION['user_id'] = $row['id']; // Assuming your user table has an 'id' column
                                       $_SESSION['user_type'] = $row['user_type'];
                                       if($row['user_type'] == 'admin'){
                                        $_SESSION['admin'] = $row['fullName'];
                                        header('location: OTP.php');
                                       }else if($row['user_type'] == 'user'){
                                        $_SESSION['admin'] = $row['fullName'];
                                        header('location: middlepage.php');
                                       } 
                                       
                                      /*
                                       header("Location: ./home.php"); // Redirect to home page
                                       exit(); */
                                   }
                                   
                                   else if($row['user_type'] == 'admin'){
                                    $_SESSION['admin'] = $row['fullName'];
                                    header('location: OTP.php');
                                   }else if($row['user_type'] == 'user'){
                                    $_SESSION['admin'] = $row['fullName'];
                                    header('location: contact.php');
                                   } 
                                   
                                   else {
                                       // Password is incorrect
                                       echo "<div class='alert alert-danger'>Incorrect password</div>";
                                   }
                               } else {
                                   // User with provided email not found
                                   echo "<div class='alert alert-danger'>User not found</div>";
                               }
                           }
                           ?>
          <h2 class="title">Sign in</h2>
         
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="email" placeholder="Email" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" />
          </div>
          <div class="Forget-Pass">
          <a href="Forget.php" class="Forget">Forget Password ?</a></div>
          <input type="submit" name="submit" value="Login" class="btn solid" />
          <p class="social-text">Or Sign in with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p> If you don't have an account before,click here to sign up</p>
         
          <a href="SignUp.php" class="btn transparent" id="sign-in-btn" style="padding:10px 20px;text-decoration:none">
            Sign up
          </a>
        </div>
        <img src="imgSignUpIn/Login.png" class="imagelogin" alt="" />
      </div>
    </div>
  </div>

  <script src="app.js"></script>
</body>

</html>