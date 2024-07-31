<?php

?>

<?php include("../student/header.php");?>
<?php include("../student/sidebar.php");?>

<div class="content">
    <h1>Hello World!</h1>
    <h1><?php echo $_SESSION['stud_id'];?></h1>
    <h1><?php echo $_SESSION['stud_name'];?></h1>
</div>

<?php include("../student/footer.php");?>
