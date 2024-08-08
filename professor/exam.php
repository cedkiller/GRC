<?php include('./header.php');?>
<?php include('./sidebar.php');?>

<?php
$prof_name = $_SESSION['prof_name'];
$sql = "SELECT * FROM add_exam WHERE add_exam_prof = '$prof_name'";
$result = mysqli_query($conn, $sql);
?>

<div class="content">
    <div class="hidden_animation">
        <div style="display:flex; flex-wrap:wrap;">
            <?php
            while ($row = mysqli_fetch_assoc($result))
            {
            ?>
            <div class="div_exam20">
                <img src="../img/exam.jpg" alt="exam" class="img_exam20">
                <p style="font-family: Arial, Helvetica, sans-serif; padding-left: 15px; font-size:15px;">
                    <span style="font-weight:bold;">Subject:</span> <?php echo $row['add_exam_subject'];?>
                    <br>
                    <span style="font-weight:bold;">Section:</span> <?php echo $row['add_exam_section'];?>
                    <br>
                    <span style="font-weight:bold;">Professor:</span> <?php echo $row['add_exam_prof'];?>
                    <br>
                    <span style="font-weight:bold;">Title:</span> <?php echo $row['add_exam_title'];?>
                    <br>
                    <span style="font-weight:bold;">Code:</span> <?php echo $row['add_exam_code'];?>
                    <br>
                    <span style="font-weight:bold;">Deadline:</span> <?php echo $row['add_exam_sched'];?>
                </p>
                <div style="display: flex; justify-content: center;">
                    <div style="display: flex;"> 
                        <a href="#" style="text-decoration: none; color:black;"><i class="fa-solid fa-plus" id="icon_exam21" title="Add question to this exam"></i></a>
                        <a href="edit_exam.php?id=<?php echo $row['add_exam_id'];?>" style="text-decoration: none; color:black;"><i class="fa-regular fa-pen-to-square" id="icon_exam20" title="Edit exam"></i></a>
                        <a href="#" style="text-decoration: none; color:black;"><i class="fa-solid fa-inbox" id="icon_exam20" title="This exam will go to archive"></i></a>
                        <a href="delete_exam.php?id=<?php echo $row['add_exam_id'];?>" style="text-decoration: none; color:black;"><i class="fa-solid fa-trash" id="icon_exam20" title="Delete exam"></i></a>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</div>

<?php include('./footer.php');?>