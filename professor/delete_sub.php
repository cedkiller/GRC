<?php
include('../conn.php');

if (isset($_GET['id']))
{
    $id = $_GET['id'];

    $sql = "DELETE FROM subject WHERE sub_id = '$id'";

    if (mysqli_query($conn, $sql))
    {
        header('Location: ./subject.php');
        exit();
    }
}
?>