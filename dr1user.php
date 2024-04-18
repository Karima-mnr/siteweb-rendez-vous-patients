<?php
include "db_conn.php";
?>
<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title>Dashboard DR1</title>
      <link rel="stylesheet" href="dr1user.css" />
      <!-- Font Awesome Cdn Link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>
    <body>
      <div class="container">

      <nav>
          <ul>
            <li><a href="#" class="logo">
              <img src="log.png">
              <span class="nav-item">User</span>
            </a></li>
            <li><a href="dr1user.php">
              <i class="fas fa-menorah"></i>
              <span class="nav-item">Dashboard</span>
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
    
            <li><a href="middlepage.php" class="logout">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">Log out</span>
            </a></li>
          </ul>
        </nav>
    
    
        <section class="main">
          <div class="main-top">
            <h1>El wanchariss</h1>
            <i class="fas fa-user-cog"></i>
          </div>
          <div class="card--container">
            <div class="center">
                <img src="dr1.jpg" alt="" class="img">
               <h2 class="tony">Doctor Tony</h2><br>
            </div>

             <h3 class="dr1">General Surgery Doctor</h3> <br> 
             <button class="btnadd"><a href="rendez-vous.php" class="btnadd">Add appointment +</a></button>
                
          </div>

          <section class="attendance">
            <div class="attendance-list">
              <h1>Patients List</h1>
              <?php
              
              if (isset($_GET["msg"])) {
                $msg = $_GET["msg"];
                echo '<div class="alert alert-success" role="alert">
                
                ' . $msg . '
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
              }
              
  /*
              if(isset($_GET['date']) && $_GET['date'] !=''){
                $date= validate($_GET['date']);
                $enguires= mysqli_query($conn , "SELECT * FROM patient_dr1 WHERE date='$date' ORDER BY ID DESC" );
             }else{
               $enguires= mysqli_query($conn , "SELECT * FROM patient_dr1  ORDER BY ID DESC" );
             }
             if($enguires){
                if( mysqli_num_rows($enguires ) >0){
  */
              ?>
                  

              <style>
                h1{
                  color: #51afe9;
                  filter: drop-shadow(0 0 5px #a7dcfe);
                  font-size: 25px;
                 }
                 .alert {
                              padding: 1rem;
                              border-radius: 15px;
                              color: white;
                              margin: 1rem 0;
                              font-weight: 500;
                              width: 65%;
                              text-align: center;
                             
                            }
  
                            .alert-success {
                                background-color: #42ba96;
                                width: 370px;
                            }

              </style>
            
              <?php
              
                  if (isset($_GET["msg"])) {
                    $msg = $_GET["msg"];
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    ' . $msg . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
                  }
            
              ?> 
            <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Contact Num</th>
                    <th>Date </th>
                    <th>Time</th>
                    <th>Gender</th>
                    <th>GroupBlood</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                     $sql="SELECT * FROM `patient_dr1`";
                     $result = mysqli_query($conn, $sql);
                     while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                  <tr>
                    <td><?php echo $row['ID'] ?></td>
                    <td><?php echo $row['first_name'] ?></td>
                    <td><?php echo $row['last_name'] ?></td>
                    <td><?php echo $row['contact'] ?></td>
                    <td><?php echo $row['date'] ?></td>
                    <td><?php echo $row['time'] ?></td>
                    <td><?php echo $row['gender'] ?></td>
                    <td><?php echo $row['groupBlood'] ?></td>
                    <td class="icons">
                      <a href="edit.php?id=<?php echo $row['ID'] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>

                        <a href="delete.php?id=<?php echo $row['ID'] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5 "></i></a>
                    </td>
                  </tr>
                  <?php
                     }
                  ?>
                 
                </tbody>
              </table>
            </div>
          </section>
        </section>
      </div>
    
    </body>
    </html>
    </span>