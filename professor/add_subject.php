<?php
if (isset($_POST['cancel']))
{
    header('Location: ./home.php');
    exit();
}
?>

<?php include("../professor/header.php");?>
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
                        <input type="text" placeholder="Add a subject" name="subject" class="input_sub">
                        <br><br>
                        <input type="submit" value="Submit" name="submit" class="success_sub">
                        <input type="submit" value="Cancel" name="cancel" class="error_sub">
                    </form>
                    <?php
                        if (isset($_POST['submit']))
                        {
                            $subject = $_POST['subject'];

                            $sql = "INSERT INTO subject(sub_name) VALUES('$subject')";

                            if (mysqli_query($conn, $sql))
                            {
                                echo "<script>swal('Success!', 'Subject has been added!', 'success');</script>";
                            }
                        }
                        ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("../professor/footer.php");?>
