<?php
include('../conn.php');
if (isset($_GET['id']))
{
    $id = $_GET['id'];

    $sql = "DELETE FROM add_exam WHERE add_exam_id = '$id'";

    if (mysqli_query($conn, $sql))
    {
        header('Location: ./exam.php');
        exit();
    }
}
?>