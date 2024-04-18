<div class="container" style="background: #ebe9e9;border-radius: 15px;width:90%"> 
        <?php 
        if(isset($_GET['msg'])){ 
            $msg = $_GET['msg']; 
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"> 
            '.$msg.' 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button> 
           </div>'; 
        } 
        ?> 
 
        <h2 style="color:#4692b8;margin: 20px;">Patients</h2> 
        <br> 
        <a class="btn btn-dark mb-3" href="Create_patient.php" role="button" style="margin:15px;background-color:#4692b8;border-color:#4692b8;">Add Patient</a> 
        <form method="post"> 
                <input type="text" placeholder="Search patient" name="search"> 
                <button class="btn btn-dark btn-sm" name="submit" style="background-color:#4692b8;border-color:#4692b8">Search</button> 
        </form> 
        <table class="table table-hover text-center" > 
            <?php 
              if(isset($_POST['submit'])){ 
                $search=$_POST['search']; 
                include "db_conn.php"; 
                $sql="SELECT * FROM `patient_dr1` WHERE ID like '%$search%' or first_name like '%$search%'"; 
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
                      $sql = "SELECT * FROM  patient_dr1"; 
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
                            </td> 
                            <td> 
                                <a href="editadmindr1.php?id='.$row['ID'].'" class="link-dark"> 
                                <i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a> 
                                <a href="deleteadmindr1.php?id='.$row['ID'].'" class="link-dark"> 
                                <i class="fa-solid fa-trash fs-5"></i></a> 
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
                      $sql = "SELECT * FROM patient_dr1"; 
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
                            <a href="editadmindr1.php?id=<?php echo $row['ID'] ?>"class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>

                            <a href="deleteadmindr1.php?id=<?php echo $row['ID'] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5 "></i></a>
                            </td>
                            <td>
                                <?php
                                $sql = "SELECT * FROM `patient_dr1`";
                                
                                if($row['status']==1){
                                    echo '<p><a href="statusadmindr1.php?ID=' .$row['ID'].'$status=0" class=" btn_success name="status">Accept</a></p>';
                                }else{
                                    echo '<p><a href="statusadmindr1.php?ID=' .$row['ID'].'$status=1" class=" btn_danger name="status">Refuse</a></p>';
                                }
                                ?>
                            </td> 
                        </tr> 
                        <?php 
                      }    
     
                    ?> 
             </tbody> 
        </table> 
    </div> 
 
 
    <!-- Bootstrap --> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script> 
</body> 
</html>