<?php 

include "db.php"; 

if (isset($_GET['userId'])) {

    $user_id = $_GET['userId'];

    $sql = "DELETE FROM `patient` WHERE `userId`='$user_id'";

     $result = $link->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully!";
        header( "refresh:2; url=./view_patient_info.php" ); 

    }else{

        echo "Error:" . $sql . "<br>" . $link->error;

    }

} 

?>