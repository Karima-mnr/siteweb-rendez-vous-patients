<?php
include "db_conn.php";
$id=$_GET['id'];

if (isset($_POST["submit"])) {
   $first_name = $_POST['First-Name'];
   $last_name = $_POST['Last-Name'];
   $numero_tel = $_POST['numero-tel'];
   $date = $_POST['date'];
   $time = $_POST['time'];
   $gender = $_POST['gender'];
   $groupBlood = $_POST['groupBlood'];
   $sql=" UPDATE `patient_dr3` SET `first_name`='$first_name',`last_name`='$last_name',`gender`='$gender',`contact`='$numero_tel',`date`='$date',`time`='$time',`groupBlood`='$groupBlood' WHERE ID=$id";
   $result = mysqli_query($conn, $sql);
   if ($result) {
    header("Location: dr3admin.php?msg=Date update successfully");
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
                <h3>Edit User Information</h3>
                <?php
                   
                    $sql = "SELECT * FROM `patient_dr3` WHERE ID = $id LIMIT 1";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                ?>
                <form action="#" method="post">
                         
                        <input value="<?php echo $row['first_name'] ?>" class="First-Name" name="First-Name" type="text" required="">
                        <input value="<?php echo $row['last_name'] ?>" class="Last-Name" name="Last-Name" type="text" required="">
                        <input value="<?php echo $row['contact'] ?>" class="numero-tel" name="numero-tel" type="text" required="">
                        <input name="date" class="date" type="date" required="" value="<?php echo $row['date'] ?>">
                        <select placeholder="<?php echo $row['time'] ?>" class="time" name="time" value="<?php echo $row['time'] ?>">
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
                            <input type="radio" class="form-check-input" name="gender" id="male" value="male"  value="male" <?php echo ($row["gender"] == 'male') ? "checked" : ""; ?>>
                            <label for="male" class="form-input-label">Male</label>
                            &nbsp;
                            <input type="radio" class="form-check-input" name="gender" id="female" value="female" <?php echo ($row["gender"] == 'female') ? "checked" : ""; ?>>
                            <label for="female" class="form-input-label">Female</label>
                         </div>
                         
   
                         <div class="form-group">
                            <label class="gender">Blood Group:</label>
                            &nbsp;
                            <input type="radio" class="form-check-input" name="groupBlood" id="A+" value="A+" <?php echo ($row["groupBlood"] == 'A+') ? "checked" : ""; ?>>
                            <label for="male" class="form-input-label">A+</label>
                            &nbsp;
                            <input type="radio" class="form-check-input" name="groupBlood" id="A-" value="A-" <?php echo ($row["groupBlood"] == 'A-') ? "checked" : ""; ?>>
                            <label for="female" class="form-input-label">A-</label>
                            &nbsp;
                            <input type="radio" class="form-check-input" name="groupBlood" id="B+" value="B+" <?php echo ($row["groupBlood"] == 'B+') ? "checked" : ""; ?>>
                            <label for="male" class="form-input-label">B+</label>
                            &nbsp;
                            <input type="radio" class="form-check-input" name="groupBlood" id="B-" value="B-" <?php echo ($row["groupBlood"] == 'B-') ? "checked" : ""; ?>>
                            <label for="female" class="form-input-label">B-</label>
                            &nbsp;
                            <input type="radio" class="form-check-input" name="groupBlood" id="AB+" value="AB+" <?php echo ($row["groupBlood"] == 'AB+') ? "checked" : ""; ?>>
                            <label for="male" class="form-input-label">AB+</label>
                            &nbsp;
                            <input type="radio" class="form-check-input" name="groupBlood" id="O-" value="O-" <?php echo ($row["groupBlood"] == 'O-') ? "checked" : ""; ?>>
                            <label for="female" class="form-input-label">O-</label>
                            &nbsp;
                            <input type="radio" class="form-check-input" name="groupBlood" id="O+" value="O+" <?php echo ($row["groupBlood"] == 'O+') ? "checked" : ""; ?>>
                            <label for="male" class="form-input-label">O+</label>
                            &nbsp;
                            <input type="radio" class="form-check-input" name="groupBlood" id="AB-" value="AB-" <?php echo ($row["groupBlood"] == 'AB-') ? "checked" : ""; ?>>
                            <label for="female" class="form-input-label">AB-</label>

                         </div> 
                         <div class="btnn">      
                            <button   class="submit-btn" name="submit"><a  class="submit-btn">Update</a></button>
                            <button class="submit-btnn" name="submit"><a class="submit-btnn" href="dr3admin.php">Cancel</a></button>
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