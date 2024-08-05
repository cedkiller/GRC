
<?php include("../professor/header.php");?>
<?php
if (isset($_GET['id']))
{
    $id = $_GET['id'];

    $show = "SELECT sub_name FROM subject WHERE sub_id = '$id'";
    $show2 = mysqli_query($conn, $show);
    $show3 = mysqli_fetch_assoc($show2);

    if (isset($_POST['submit']))
    {
        $subject = $_POST['subject'];

        $sql = "UPDATE subject SET sub_name = '$subject' WHERE sub_id = '$id'";

        if (mysqli_query($conn, $sql))
        {
            header('Location: ./subject.php');
            exit();
        }
    }
}
?>
<?php include("../professor/sidebar.php");?>

<div class="content">
    <div style="display: flex; justify-content: center;" class="hidden_animation">
        <div class="div_sub">
            <center><img src="../img/new3.png" alt="new3.png" class="img_sub"></center>
            <br>
            <div style="display: flex; justify-content: center;">
                <div>
                    <form action="" method="POST">
                        <input type="text" placeholder="Edit a subject" name="subject" value="<?php echo $show3['sub_name'];?>" class="input_sub">
                        <br><br>
                        <input type="submit" value="Submit" name="submit" class="success_sub">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("../professor/footer.php");?>
