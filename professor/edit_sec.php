
<?php include("../professor/header.php");?>
<?php
if (isset($_GET['id']))
{
    $id = $_GET['id'];

    $show = "SELECT sec_name FROM section WHERE sec_id = '$id'";
    $show2 = mysqli_query($conn, $show);
    $show3 = mysqli_fetch_assoc($show2);

    if (isset($_POST['submit']))
    {
        $section = $_POST['section'];

        $sql = "UPDATE section SET sec_name = '$section' WHERE sec_id = '$id'";

        if (mysqli_query($conn, $sql))
        {
            header('Location: ./section.php');
            exit();
        }
    }
}
?>
<?php include("../professor/sidebar.php");?>

<div class="content">
    <div style="display: flex; justify-content: center;" class="hidden_animation">
        <div class="div_sub">
            <img src="../img/exam2.jpg" alt="exam" class="img2_sub">
            <center><img src="../img/new3.png" alt="new3.png" class="img_sub"></center>
            <br>
            <div style="display: flex; justify-content: center;">
                <div>
                    <form action="" method="POST">
                        <input type="text" placeholder="Edit a section" name="section" value="<?php echo $show3['sec_name'];?>" class="input_sub">
                        <br><br>
                        <input type="submit" value="Submit" name="submit" class="success_sub">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("../professor/footer.php");?>
