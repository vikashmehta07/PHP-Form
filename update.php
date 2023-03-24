<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Update</title>
</head>

<body>
    <?php
    include 'connection.php';


    $ids = $_GET['id'];
    $showquery = "select * from form where id={$ids}";
    $showdata = mysqli_query($con, $showquery);
    $arrdata = mysqli_fetch_array($showdata);

    if (isset($_POST['submit'])) {
        header('location:display.php');
        $idupdate = $_GET['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];


        $updatequery = "update form set id=$idupdate, name='$name' ,email='$email', DOB='$dob' where id=$idupdate";

        $res = mysqli_query($con, $updatequery);
    }
    ?>

    <div class="home">

        <div class="card">
            <div class="">
                <h1 class="title">Edit Details</h1>

                <form method="POST" action="">
                    <label>Name:</label>
                    <input type="text" name="name" value="<?php echo $arrdata["name"] ?>" required><br><br>
                    <label>Email:</label>
                    <input type="email" name="email" value="<?php echo $arrdata["email"] ?>" required><br><br>
                    <label>Date of Birth:</label>
                    <input type="date" name="dob" value="<?php echo $arrdata["DOB"] ?>" required><br><br>
                    <input type="submit" name="submit" value="Update">
                </form>
            </div>
        </div>
    </div>


</body>

</html>