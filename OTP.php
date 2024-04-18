<?php
session_start();
 include "config.php";
$ssql="SELECT `id`, `name`, `email`, `password`, `user_type`, `code`, `otp` FROM `user_form` ";
// Check if form is submitted
if(isset($_POST['submitt'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the entered OTP
        $enteredOTP1 = $_POST['otp1'];
        $enteredOTP2 = $_POST['otp2'];
        $enteredOTP3 = $_POST['otp3'];
        $enteredOTP4 = $_POST['otp4'];
        $enteredOTP5 = $_POST['otp5'];

        // Check if entered OTP is correct
        if ($enteredOTP1 == '2' && $enteredOTP2 == '1' && $enteredOTP3 == '1' && $enteredOTP4 == '3' && $enteredOTP5 == '2'  ) {
            // Redirect to middlepageadmin.php
            header("Location: middlepageadmin.php");
            exit();
        } else {
            // Display error message
            $errorMessage = "<div class='alert alert-danger'>Invalid OTP. Please try again.</div>";
        }
    }
}
?>
 <style>
        .alert {
            padding: 1rem;
            border-radius: 20px;
            color: white;
            margin: 1rem 0;
            font-weight: 500;
            width: 65%;
            margin-left: 70px;
        }
        .alert-danger {
            background-color: #fc5555;

        }



    </style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP page</title>
    <link rel="stylesheet" href="OTP.css">
</head>
<body>
    <div class="otp-card">
        <h1>OTP verification</h1>
        <p>Enter the admin code</p>
        <?php if (isset($errorMessage)) { ?>
            <p><?php echo $errorMessage; ?></p>
        <?php } ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="otp-card-inputs">
            
            
                <input type="text" name="otp1" maxlength="1" autofocus>
                <input type="text" name="otp2" maxlength="1">
                <input type="text" name="otp3" maxlength="1">
                <input type="text" name="otp4" maxlength="1">
                <input type="text" name="otp5" maxlength="1"> 
            </div>
            <button name="submitt" disabled>Verify</button>
        </form>
    </div>

    <script src="OTP.js"></script>
</body>
</html>