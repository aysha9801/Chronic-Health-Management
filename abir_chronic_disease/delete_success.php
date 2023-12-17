<?php

include "db.php"; 

if (isset($_GET['user_Id'])) {
    $user_id = $_GET['user_Id'];

    $sql = "DELETE FROM `patient` WHERE `user_Id`='$user_id'";

    // Assuming chronic_disease is a method in your db.php file
    $result = $link->chronic_disease($sql);

    if ($result == TRUE) {
        echo "Delete successful";
        header("Location: view_patient_info.php");
        exit(); 
    } else {
        echo "Error: " . $sql . "<br>" . $link->error;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Success</title>
    
</head>
<body>

    <div class="container">
        <h2>Delete Success</h2>
        <p>Record deleted successfully!</p>
        <a href="view_patient_info.php" class="btn btn-secondary">Back to Patient Information</a>
    </div>

</body>
</html>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);