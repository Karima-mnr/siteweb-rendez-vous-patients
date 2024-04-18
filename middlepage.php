<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Middle page</title>
    <link rel="stylesheet" href="middlepage.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
   
    <!--------------------------- Dashboard Side Nav Bar ---------------------------------------------->
    <nav>
          <ul>
            <li><a href="#" class="logo">
              <img src="log.png">
              <span class="nav-item">User</span>
            </a></li>

            <li><a href="home.php">
            <i class=" fas fa-solid fa-house-medical"></i>
                <span class="nav-item">Home</span>
              </a></li>
            <li><a href="drs.php">
            <i class=" fas fa-solid fa-user-nurse"></i>
              <span class="nav-item">Doctors</span>
            </a></li>

            <li><a href="contact.php">
              <i class="fas fa-comment"></i>
              <span class="nav-item">Message</span>
            </a></li>
 
            <li><a href="services.php">
            <i class=" fas fa-solid fa-hospital"></i>
              <span class="nav-item">Services</span>
            </a></li>
            <li><a href="#">
              <i class="fas fa-cog"></i>
              <span class="nav-item">Setting</span>
            </a></li>
    
          
          </ul>
        </nav>
 
    <!--//////////////////////////////////////////////////////////////////////////////////////////////-->
    <div class="card-container">
        <div class="card">
            <img src="imgmiddlep/dr1.jpg " class="img1">
            <div class="card-content">
               <h1>Doctor Tony</h1>
               <p>General Surgery doctor</p>
               <button> <a href="dr1user.php" class="card-button">Click Here</a></button>
            </div>
        </div>

        <div class="card">
            <img src="imgmiddlep/dr2.jpg" class="img2">
            <div class="card-content">
               <h1>Doctor Michael</h1>
               <p>Pediatrics doctor</p>
               <button><a href="dr2user.php" class="card-button">Click Here</a></button>
            </div>
        </div>

        <div class="card">
            <img src="imgmiddlep/dr3.jpg" class="im3">
            <div class="card-content">
               <h1>Doctor Lio</h1>
               <p>Gynecology doctor</p>
               <button> <a href="dr3user.php" class="card-button">Click Here</a></button>
            </div>
        </div>
    </div>
    
</body>
</html>