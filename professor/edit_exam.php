<?php
if (isset($_POST['cancel']))
{
    header('Location: ./home.php');
    exit();
}
?>

<?php include('./header.php');?>
<?php include('./sidebar.php');?>

<?php
if (isset($_GET['id']))
{
    $id = $_GET['id'];

    $show = "SELECT * FROM add_exam WHERE add_exam_id = '$id'";
    $show2 = mysqli_query($conn, $show);
    $show3 = mysqli_fetch_assoc($show2);
}

$subject = "SELECT sub_name FROM subject";
$subject2 = mysqli_query($conn, $subject);


$section = "SELECT sec_name FROM section";
$section2 = mysqli_query($conn, $section);

?>

<div class="content">
    <div class="hidden_animation">
        <div style="display: flex; justify-content: center;">
            <br>
            <div class="div_exam">
            <img src="../img/exam2.jpg" alt="exam" class="img_exam">
                <div style="display: flex; justify-content: center;">
                    <div>
                    <form action="" method="POST">
                    <label for="add_exam_subject" class="label_exam">Subject</label><br>
                    <select name="add_exam_subject" id="add_exam_subject" class="input_exam">
                        <option value="<?php echo $show3['add_exam_subject'];?>"><?php echo $show3['add_exam_subject'];?></option>
                        <?php while ($subject3 = mysqli_fetch_assoc($subject2)) { ?>
                            <option value="<?php echo htmlspecialchars($subject3['sub_name']); ?>">
                                <?php echo htmlspecialchars($subject3['sub_name']); ?>
                            </option>
                        <?php } ?>
                    </select><br>
                    
                    <label for="add_exam_section" class="label_exam">Section</label><br>
                    <select name="add_exam_section" id="add_exam_section" class="input_exam">
                        <option value="<?php echo $show3['add_exam_section'];?>"><?php echo $show3['add_exam_section'];?></option>
                        <?php while ($section3 = mysqli_fetch_assoc($section2)) { ?>
                            <option value="<?php echo htmlspecialchars($section3['sec_name']); ?>">
                                <?php echo htmlspecialchars($section3['sec_name']); ?>
                            </option>
                        <?php } ?>
                    </select><br>
                    
                    <label for="add_exam_timer" class="label_exam">Timer</label><br>
                    <select name="add_exam_timer" id="add_exam_timer" class="input_exam">
                        <option value="600">10 Minutes</option>
                        <option value="1200">20 Minutes</option>
                        <option value="1800">30 Minutes</option>
                        <option value="2400">40 Minutes</option>
                        <option value="3000">50 Minutes</option>
                        <option value="3600">60 Minutes</option>
                    </select><br>
                    
                    <label for="add_exam_sched" class="label_exam">Schedule Deadline</label><br>
                    <input type="date" name="add_exam_sched" value="<?php echo $show3['add_exam_sched'];?>" id="add_exam_sched" class="input2_exam"><br>
                    
                    <label for="add_exam_title" class="label_exam">Exam Title</label><br>
                    <input type="text" name="add_exam_title" value="<?php echo $show3['add_exam_title'];?>" id="add_exam_title" placeholder="Enter exam title" class="input3_exam"><br><br><br>
                    
                    <input type="submit" value="Submit" name="submit" class="success_sub">
                    <input type="submit" value="Cancel" name="cancel" class="error_sub">
                </form>

                <?php
                if (isset($_POST['submit']))
                {
                    $add_exam_subject = $_POST['add_exam_subject'];
                    $add_exam_section = $_POST['add_exam_section'];
                    $add_exam_timer = $_POST['add_exam_timer'];
                    $add_exam_sched = $_POST['add_exam_sched'];
                    $add_exam_title = $_POST['add_exam_title'];

                    $sql = "UPDATE add_exam SET add_exam_subject = '$add_exam_subject', add_exam_section = '$add_exam_section', add_exam_timer = '$add_exam_timer', add_exam_sched = '$add_exam_sched', add_exam_title = '$add_exam_title' WHERE add_exam_id = '$id'";

                    if (mysqli_query($conn, $sql))
                    {
                        echo "<script>swal('Success!', 'Exam has been updated please go to manage exam!', 'success');</script>";
                    }
                }
                ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('./footer.php');?>