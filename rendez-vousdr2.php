<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $first_name = $_POST['First-Name'];
   $last_name = $_POST['Last-Name'];
   $numero_tel = $_POST['numero-tel'];
   $date = $_POST['date'];
   $time = $_POST['time'];
   $gender = $_POST['gender'];
   $groupBlood = $_POST['groupBlood'];
   $sql="INSERT INTO patient_dr2 (`ID`, `first_name`, `last_name`, `gender`, `contact`, `date`, `time`, `groupBlood`)
    VALUES (NULL,'$first_name','$last_name','$gender','$numero_tel','$date','$time','$groupBlood')";
   $result = mysqli_query($conn, $sql);
   if ($result) {
    header("Location: dr2user.php?msg=New record created successfully");
 } else {
    echo "Failed: " . mysqli_error($conn);
 }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
    <title>Rendez-vous btn</title>
    <link rel="stylesheet" href="RV.css"/>
    
</head>
<body>
   <section id="appointment">
       <div class="container">
            <div class="formulaire">
                <h3>Prendre un rendez-vous</h3>
                <form action="#" method="post">
                         
                        <input placeholder="First Name" class="First-Name" name="First-Name" type="text" required="">
                        <input placeholder="Last Name" class="Last-Name" name="Last-Name" type="text" required="">
                        <input placeholder="Numero de contact" class="numero-tel" name="numero-tel" type="text" required="">
                        <input name="date" class="date" type="date" required="">
                        <select class="time" name="time">
                            <option value="9:00">9:00</option>
                            <option value="9:25">9:25</option>
                            <option value="9:50">9:50</option>
                            <option value="10:15">10:15</option>
                            <option value="10:40">10:40</option>
                            <option value="11:05">11:05</option>
                            <option value="11:30">11:30</option>
                            <option value="11:55">11:55</option>
                            <option value="12:20">12:20</option>
                            <option value="12:45">12:45</option>
                            <option value="13:10">13:10</option>
                            <option value="13:35">13:35</option>
                            <option value="14:00">14:00</option>                             
                        </select>
                        <div class="form-group">
                            <label class="gender">Gender:</label>
                            &nbsp;
                            <input type="radio" class="form-check-input" name="gender" id="male" value="male">
                            <label for="male" class="form-input-label">Male</label>
                            &nbsp;
                            <input type="radio" class="form-check-input" name="gender" id="female" value="female">
                            <label for="female" class="form-input-label">Female</label>
                         </div>
                         
                         <div class="form-group">
                            <label class="gender">Blood Group:</label>
                            &nbsp;
                            <input type="radio" class="form-check-input" name="groupBlood" id="A+" value="A+">
                            <label for="male" class="form-input-label">A+</label>
                            &nbsp;
                            <input type="radio" class="form-check-input" name="groupBlood" id="A-" value="A-">
                            <label for="female" class="form-input-label">A-</label>
                            &nbsp;
                            <input type="radio" class="form-check-input" name="groupBlood" id="B+" value="B+">
                            <label for="male" class="form-input-label">B+</label>
                            &nbsp;
                            <input type="radio" class="form-check-input" name="groupBlood" id="B-" value="B-">
                            <label for="female" class="form-input-label">B-</label>
                            &nbsp;
                            <input type="radio" class="form-check-input" name="groupBlood" id="AB+" value="AB+">
                            <label for="male" class="form-input-label">AB+</label>
                            &nbsp;
                            <input type="radio" class="form-check-input" name="groupBlood" id="O-" value="O-">
                            <label for="female" class="form-input-label">O-</label>
                            &nbsp;
                            <input type="radio" class="form-check-input" name="groupBlood" id="O+" value="O+">
                            <label for="male" class="form-input-label">O+</label>
                            &nbsp;
                            <input type="radio" class="form-check-input" name="groupBlood" id="AB-" value="AB-">
                            <label for="female" class="form-input-label">AB-</label>

                         </div> 
                         <div class="btnn">
                            <button class="submit-btn" name="submit"><a class="submit-btn">Save</a></button>
                        <button class="submit-btnn" name="submit" ><a class="submit-btnn" href="dr2user.php">Cancel</a></button>
                         </div>      
                       
                </form>
            </div>
          <div class="formulaire-image">
             <img src="pic.png" alt="" />
          </div>
       </div>
   </section>
  
       
   
</body>

</html>