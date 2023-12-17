<?php
include "db.php";
$sql = "SELECT * FROM patient";
$result = mysqli_query($link, $sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>View Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Patient Information</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Date of Birth</th>
                    <th>Contact</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Emergency </th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <td><?php echo $row['userId']; ?></td>
                            <td><?php echo $row['first_name']; ?></td>
                            <td><?php echo $row['last_name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td><?php echo $row['dateOfBirth']; ?></td>
                            <td><?php echo $row['contactNo']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['emergencyContactNo']; ?></td>
                            <td>
                                <a class="btn btn-info" href="update.php?userId=<?php echo $row['userId']; ?>">Edit</a>&nbsp;
                                <a class="btn btn-danger" href="delete.php?userId=<?php echo $row['userId']; ?>">Delete</a>
                            </td>
                        </tr>
                <?php
                    }
                } else {
                    echo "Error: " . mysqli_error($link);
                }
                mysqli_close($link);
                ?>
            </tbody>
        </table>
        <a style="color:black;" class="btn btn-warning" href="form.php"><b>Create User</b></a>
    </div>
</body>

</html>
