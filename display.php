<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="display.css">
    <title>Data list</title>

</head>

<body>
    <div class="btn">
        <button class="add_btn" onclick="window.location.href = 'index.php';">Add Resource</button>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php

            include 'connection.php';

            $selectquery = "select * from form";
            $query = mysqli_query($con, $selectquery);
            while ($res = mysqli_fetch_array($query)) {
                $dob = new DateTime($res['DOB']);
                $now = new DateTime();
                $age = $now->diff($dob)->y;
                // Displaying data in the table
                echo '<tr>';
                echo '<td>' . $res['id'] . '</td>';
                echo '<td>' . $res['name'] . '</td>';
                echo '<td>' . $res['email'] . '</td>';
                echo '<td>' . $age . '</td>';
                echo '<td>';
                echo '<a href="update.php?id=' . $res['id'] . '"><i class="fa fa-edit"></i></a> ';
                echo '</td>';
                echo '<td>';
                echo '<a href="delet.php?id=' . $res['id'] . '"><i class="fa fa-trash"></i></a>';
                echo '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>

</html>