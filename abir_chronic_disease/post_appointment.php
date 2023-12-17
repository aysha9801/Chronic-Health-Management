<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    // Check connection
    if ($link->connect_error) {
        die("Connection failed: " . $link->connect_error);
    }

    // Collect form data
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $selectedDoctor = $_POST['select_doctor'];
    $email = $_POST['email'];
    $contactNo = $_POST['contact_no'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    // SQL statement to insert data into the "appointment" table
    $sql = "INSERT INTO appointment (first_name, last_name, doctor_name, email, contact_no, date, time)
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    // Use prepared statement to prevent SQL injection
    $stmt = $link->prepare($sql);
    $stmt->bind_param("sssssss", $firstName, $lastName, $selectedDoctor, $email, $contactNo, $date, $time);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Appointment booked successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $link->error;
    }

    // Close the connection
    $stmt->close();
    $link->close();
} else {
    // Redirect to the form page if accessed directly without submitting the form
    header("Location: appointment.php");
    exit();
}
?>