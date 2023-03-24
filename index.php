<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
</head>

<body>
    <div class="home">

        <div class="card">
            <div class="">
                <h1 class="title">Add Resource</h1>
                <form method="POST" action="">
                    <label>Name:</label>
                    <input type="text" name="name" required><br><br>
                    <label>Email:</label>
                    <input type="email" name="email" required><br><br>
                    <label>Date of Birth:</label>
                    <input type="date" name="dob" required><br><br>
                    <input class="" type="submit" name="submit" value="submit">
                </form>
            </div>
        </div>
    </div>

</body>

</html>
<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    header('location:display.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];

    $insertquery = "insert into form(name,email,DOB) values('$name','$email','$dob')";

    $res = mysqli_query($con, $insertquery);
}
?>