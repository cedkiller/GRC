<?php
include('../conn.php');

if (isset($_GET['id']))
{
    $id = $_GET['id'];

    $sql = "DELETE FROM section WHERE sec_id = '$id'";

    if (mysqli_query($conn, $sql))
    {
        header('Location: ./section.php');
        exit();
    }
}
?>