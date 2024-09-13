 
 <?php
session_start();

?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script> -->
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
            background-color: #51afe9;
        }

        .alert-warning {
            background-color: #ff9966;
        }
    </style>
</head>

<body>
    <div class="container sign-up-mode">
        <div class="forms-container">
            <div class="signin-signup">
           
                <form action="" method="POST" class="sign-up-form">
                <h2 class="title">Sign up</h2>
                <?php
                                                        
                    if (isset($_POST["submit"])) {
                        $fullName = $_POST["name"];
                        $email = $_POST["email"];
                        $password = $_POST["password"];
                        $passwordRepeat = $_POST["cpassword"];
                        $user_type = $_POST["user_type"];                                                    
                        $passwordHash = password_hash($password, PASSWORD_DEFAULT);                                   
                        $errors = array();                                   
                        if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat) OR empty($user_type)) {
                            array_push($errors,"All fields are required");
                        }
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            array_push($errors, "Email is not valid");
                        }
                        if (strlen($password)<8) {
                            array_push($errors,"Password must be at least 8 charactes long");
                        }
                        if ($password!==$passwordRepeat) {
                            array_push($errors,"Password does not match");
                        }
                        require_once "config.php";
                        $sql = "SELECT * FROM user_form WHERE email = '$email'";
                        $result = mysqli_query($conn, $sql);
                        $rowCount = mysqli_num_rows($result);
                        if ($rowCount>0) {
                           array_push($errors,"Email already exists!");
                        }
                        if (count($errors)>0) {
                            foreach ($errors as  $error) {
                                echo "<div class='alert alert-danger'>$error</div>";
                            }
                        }else{                                                                
                            $sql = "INSERT INTO user_form (name, email, password,user_type) VALUES ( ?, ?, ? ,?)";
                            $stmt = mysqli_stmt_init($conn);
                            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
                            if ($prepareStmt) {
                                mysqli_stmt_bind_param($stmt,"ssss",$fullName, $email, $passwordHash,$user_type);
                                mysqli_stmt_execute($stmt);
                                echo "<div class='alert alert-success'>You are registered successfully.</div>";
                            }
                        }                                                                                   
                    }                     
                ?>                                                
                    
                    
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="name" placeholder="Username" />
                                                                                              
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email"  />
                    </div>
                    <div class="input-field"  >
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" />
                    </div>
                    <div class="input-field"  >
                        <i class="fas fa-lock"></i>
                        <input type="password" name="cpassword" placeholder="Confirm Password" />
                    </div>
                    <p>User Type<sup>*</sup></p>
                    <select class="user" name="user_type">
                        <option value="user">user</option>
                        <option value="admin">admin</option>
                    </select>
                    <style>
                        .user{
                            background:  #f0f0f0;
                            
                        }
                        select{                                  
                            backdrop-filter: blur(20px);
                            border: 1px solid ;
                            width: 50%;
                            padding:10px 15px;
                            font-size: 17px;
                            margin:8px 0;
                            border-radius: 55px;
                            margin-bottom: 10px; 
                        }
                    </style>
                    <input type="submit" name="submit" class="btn" value="Sign up" />
                    <p class="social-text">Or Sign up with social platforms</p>
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
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                      if you already have am account, click here to sign in
                    </p>
                    <a href="signIn.php" class="btn transparent" id="sign-in-btn" style="padding:10px 20px;text-decoration:none">
                        Sign in
                                                                                </a>
                </div>
                <img src="imgSignUpIn/SignUp.png" class="image" alt="" />
            </div>
        </div>
    </div>
    </div>
</body>

</html>