<?php
include 'connection.php';

$id = $_GET['id'];

$deletequery = "delete from form where id=$id ";

$query = mysqli_query($con, $deletequery);

header('location:display.php');
?>
