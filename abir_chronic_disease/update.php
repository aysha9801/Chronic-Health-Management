<?php 

include "db.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['update'])) {
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    $user_id = $_POST['user_id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $contactNo = $_POST['contactNo'];
    $gender = $_POST['gender']; 
    $address = $_POST['address'];
    $emergencyContactNo = $_POST['emergencyContactNo'];

    
    $sql = "UPDATE `patient` SET 
            `first_name`='$firstname',
            `last_name`='$lastname',
            `email`='$email',
            `password`='$password',
            `dateOfBirth`='$dateOfBirth',
            `contactNo`='$contactNo',
            `gender`='$gender',
            `address`='$address',
            `emergencyContactNo`='$emergencyContactNo'
            WHERE `userId`='$user_id'"; 

    echo "SQL Query: $sql";

    $result = $link->query($sql); 

    if ($result == TRUE) {
        echo "Record updated successfully.";
        header("refresh:2; url=./view_patient_info.php"); 
    } else {
        echo "Error:" . $sql . "<br>" . $link->error;
    }
}





if (isset($_GET['userId'])) {
    $user_id = $_GET['userId'];
    echo '<pre>';
    print_r($_GET);
    echo '</pre>';

    $sql = "SELECT * FROM `patient` WHERE `userId`='$user_id'";
    $result = $link->query($sql); 

    if ($result->num_rows > 0) {        
        while ($row = $result->fetch_assoc()) {
            $first_name = $row['firstname'];
            $lastname = $row['lastname'];
            $email = $row['email'];
            $password  = $row['password'];
            $dateOfBirth = $row['dateOfBirth'];
            $contactNo = $row['contactNo'];
        
            $gender = $row['gender'];
           
        
            $address = $row['address'];
            $emergencyContactNo = $row['emergencyContactNo'];
            $userId = $row['userId'];
        } 
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <title>Patient Update Form</title>
        </head>
        <body>
            <h2>Patient Update Form</h2>
            <form action="" method="post">
                <fieldset>
                    <legend>Personal information:</legend>
                    First name:<br>
                    <input type="text" name="firstname" value="<?php echo $first_name; ?>">
                    <input type="hidden" name="user_id" value="<?php echo $userId; ?>">
                    <br>
                    Last name:<br>
                    <input type="text" name="lastname" value="<?php echo $lastname; ?>">
                    <br>
                    Email:<br>
                    <input type="email" name="email" value="<?php echo $email; ?>">
                    <br>
                    Password:<br>
                    <input type="password" name="password" value="<?php echo $password; ?>">
                    <br>
                    Date Of Birth:<br>
                    <input type="date" name="dateOfBirth" value="<?php echo $dateOfBirth; ?>">                    
                    <br>
                    Concact Number:<br>
                    <input type="tel" name="contactNo" value="<?php echo $contactNo; ?>">                    
                    <br>

                    Gender:<br>
                    <input type="radio" name="gender" value="Male" <?php if($gender == 'Male'){ echo "checked";} ?> >Male
                    <input type="radio" name="gender" value="Female" <?php if($gender == 'Female'){ echo "checked";} ?>>Female
                    <br> 
                
                    
                    
                    Address:<br>
                    <input type="text" name="address" value="<?php echo $address; ?>">                    
                    <br>
                    Emergency Contact Number:<br>
                    <input type="tel" name="emergencyContactNo" value="<?php echo $emergencyContactNo; ?>">                    
                    <br>
                    <input type="submit" value="Update" name="update">
                </fieldset>
            </form>
        </body>
        </html> 
    <?php
    } else { 
        header('Location: view_patient_info.php');
    } 
}
?>
