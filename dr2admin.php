<?php
include "db_conn.php";

?>
<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title>Dashboard DR2 Admin</title>
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
              <span class="nav-item">Admin</span>
            </a></li>
            <li><a href="dr2admin.php">
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
    
            <li><a href="middlepageadmin.php" class="logout">
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
                <img src="dr2.jpg" alt="" class="img">
               <h2 class="tony">DOCTOR  MICHAEL</h2><br>
            </div>
             <h3 class="dr1">General Surgery Doctor</h3> <br> 
             <button class="btnadd"><a href="RVdr2admin.php" class="btnadd">Add appointment +</a></button>
     
                <div class="patient--card">
                        <div class="amount">
                            <h1 class="title"> Total Patients </h1>
                            
                             <?php
                               $dash_user_query="SELECT * FROM `patient_dr2`";
                               $dash_user_query_run=mysqli_query($conn,$dash_user_query);

                               if($user_total=mysqli_num_rows($dash_user_query_run)){
                                echo'<h4 class="mb-0"> '.$user_total.'</h4>'; 
                               }else{
                                echo'<h4 class="mb-0"> No data </h4>'; 
                               }
                             ?>  
                        </div>  
                </div>
             
             <style>
                    .title{
                        font-size: 30px;
                        color: #51afe9;
                        filter: drop-shadow(0 0 2px #51afe9);
                        margin-left: 20px;
                    }
                    .mb-0{
                        font-size: 40px;
                        margin-left: 108px;
                    }
                    .patient--card{
                        bottom: 150px;
                        position: relative;
                        float: left;
                         margin-left: 900px;
                        background: rgba(229,223,223);
                        border-radius: 20px;
                        padding: 1.2rem;
                        width: 290px;
                        height: 150px;
                        display:flex;
                        
                        align-items: center;
                        transition: all 0.5s ease-in-out;

                    }
                  
                                

             </style>


          </div>

<!----------------------------------------------------------->

          <section class="attendance">
            
            <div class="attendance-list">
            <h1 class="h1">Patients List</h1>
                      
 
                       <!--------------------Search box------------------------->
            <form method="post"> 
                <input class="search" type="text" placeholder="Search patient" name="search"> 
                <button class="btn" name="submit" style="background-color:#4692b8;border-color:#4692b8">Search</button>  
            </form> 
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
                         
                          .h1{
                            margin-right: 70px;
                            color: #51afe9;
                            filter: drop-shadow(0 0 5px #a7dcfe);
                            font-size: 25px;
                          }                  
                          .search{
                            height: 60px;
                            border: none;
                            border-radius: 20px;
                            width: 240px;
                            font-weight: 800;
                            font-size: 19px;
                          
                          }
                          .btn{
                            width: 100px;
                            height: 34px;
                            font-size: 17px;
                            text-transform: uppercase;
                            border-radius: 20px;
                            background-color: #51afe9;
                            color: #fff;
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
                        
                        <table  class="table table-hover text-center" > 
            <?php 
              if(isset($_POST['submit'])){ 
                $search=$_POST['search']; 
                include "db_conn.php"; 
                $sql="SELECT * FROM `patient_dr2` WHERE ID like '%$search%' or first_name like '%$search%'"; 
                $result=mysqli_query($conn ,$sql); 
                if($result){ 
                if(mysqli_num_rows($result)>0){ 
                    echo ' <thead class="table-primary"> 
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
                        <th>Status</th>
                        </tr>
                    </thead> 
                    ';  
                    while($row=mysqli_fetch_assoc($result)){ 
                    echo '<tbody> 
                    <?php 
                    include "db_conn.php"; 
     
                      //read all row from database table 
                      $sql = "SELECT * FROM  patient_dr2"; 
                      $result = mysqli_query($conn, $sql); 
     
                      //read data of each row 
                      while($row = mysqli_fetch_assoc($result)){ 
                        ?> 
                        <tr> 
                            <td>'.$row['ID'].'</td> 
                            <td>'.$row['first_name'].'</td> 
                            <td>'.$row['last_name'].'</td> 
                            <td>'.$row['contact'].'</td> 
                            <td>'.$row['date'].'</td> 
                            <td>'.$row['time'].'</td> 
                            <td>'.$row['gender'].'</td> 
                            <td>'.$row['groupBlood'].'</td> 

                            <td> 
                                <a href="editadmindr2.php?id='.$row['ID'].'" class="link-dark"> 
                                <i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a> 
                                <a href="deleteadmindr2.php?id='.$row['ID'].'" class="link-dark"> 
                                <i class="fa-solid fa-trash fs-5"></i></a> 
                            </td> 
                            <td> 
                            <a href="statusadmindr2.php?ID=' .$row['ID'].'$status=0" class=" btn_success name="status">Accept</a>
                           
                                 
                           </td> 

                        </tr> 
                        <?php 
                      }
                   ?> 
                   </tbody>'; 
                } 
            }else{ 
                echo '<h2 class=text-danger>Data not found</h2>'; 
            } 
            } 
          } 
        ?> 
    </table> 
    <table class="table table-hover text-center" > 
        <thead class="table-primary"> 
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
                <th>Status</th>
              </tr>
        </thead> 
        <tbody> 
 
                    <?php 
                    include "db_conn.php"; 
     
                      //read all row from database table 
                      $sql = "SELECT * FROM patient_dr2"; 
                      $result = mysqli_query($conn, $sql); 
     
                      //read data of each row 
                      while($row = mysqli_fetch_assoc($result)){ 
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
                            <a href="editadmindr2.php?id=<?php echo $row['ID'] ?>"class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>

                            <a href="deleteadmindr2.php?id=<?php echo $row['ID'] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5 "></i></a>
                            </td>
                            <td>
                                <?php
                                $sql = "SELECT * FROM `patient_dr2`";
                                
                                if($row['status']==1){
                                    echo '<p><a href="statusadmindr2.php?ID=' .$row['ID'].'$status=0" class=" btn_success name="status">Accept</a></p>';
                                }else{
                                    echo '<p><a href="statusadmindr2.php?ID=' .$row['ID'].'$status=1" class=" btn_danger name="status">Refuse</a></p>';
                                }
                                ?>
                            </td> 
                        </tr> 
                        <?php 
                      }    
     
                    ?> 
                     <style>
                            .btn_success{
                                width: 10px;
                                color: green;
                            }
                            .btn_danger{
                                width: 10px;
                                color: red;
                            }

                    </style>
             </tbody> 
        </table> 

            </div>
          </section>
        </section>
      </div>
    
    </body>
    </html>
    </span>