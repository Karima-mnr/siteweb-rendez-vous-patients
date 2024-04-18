<?php
session_start();
if (isset($_SESSION['Email_Session'])) {
    header("Location: index.php");
    die();
}

include('config.php');

$msg = "";
if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $CodeReset = mysqli_real_escape_string($conn, md5(rand()));
    if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM user_form WHERE email='{$email}'")) > 0) {
        $query = mysqli_query($conn, "UPDATE user_form SET code='{$CodeReset}' WHERE email='{$email}'");
        if ($query) {
            // Send email using SendGrid API
            $url = 'https://api.sendgrid.com/v3/mail/send';
            $data = [
                'personalizations' => [
                    [
                        'to' => [['email' => $email]],
                        'subject' => 'Welcome To My Website'
                    ]
                ],
                'from' => ['email' => 'karimamnr10@gmail.com'],
                'content' => [
                    [
                        'type' => 'text/html',
                        'value' => '<p>This is the Verification Link: <b><a href="http://localhost/coursephp/P1/Sliding/change-Password.php?Reset=' . $CodeReset . '">http://localhost/coursephp/P1/Sliding/change-Password.php?Reset=' . $CodeReset . '</a></b></p>'
                    ]
                ]
            ];

            $headers = [
                'Authorization: Bearer YOUR_SENDGRID_API_KEY',
                'Content-Type: application/json'
            ];

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($ch);
            curl_close($ch);

            if ($response) {
                $msg = "<div class='alert alert-info'>We've sent a verification code to your email address.</div>";
            } else {
                $msg = "<div class='alert alert-danger'>Failed to send email.</div>";
            }
        }
    } else {
        $msg = "<div class='alert alert-danger'>This email '{$email}' was not found.</div>";
    }
}
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
    </style>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup" style="left: 50%;z-index:99;">
                <form action="" method="POST" class="sign-in-form">
                    <h2 class="title">Forget Password</h2>
                    <?php echo $msg ?>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="email" placeholder="Email" />
                    </div>
                    <input type="submit" name="submit" value="Send" class="btn solid" />
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

        
    </div>

    <script src="app.js"></script>
</body>

</html>