<?php include("../admin/header.php");?>
<?php include("../admin/sidebar.php");?>

<?php
$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);
?>

<div class="content">
    <div style="display: flex; justify-content: center;" class="hidden_animation">
        <div>
            <br>
         <table id="example" class="table table-striped">
            <thead>
                <tr>
                    <th>Student Name</th>
                    <th>Student Number</th>
                    <th>Email</th>
                    <th>Account Created</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['stud_name']; ?></td>
                    <td><?php echo $row['stud_number']; ?></td>
                    <td><?php echo $row['stud_email']; ?></td>
                    <td><?php echo $row['stud_created']; ?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Student Name</th>
                    <th>Student Number</th>
                    <th>Email</th>
                    <th>Account Created</th>
                </tr>
            </tfoot>
        </table>

        <!-- jQuery -->
        <script src='https://code.jquery.com/jquery-3.7.0.js'></script>
        <!-- Data Table JS -->
        <script src='https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js'></script>
        <script src='https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.min.js'></script>
        <script src='https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js'></script>
        <!-- Script JS -->
        <script>
            $(document).ready(function() {
                $('#example').DataTable({
                    "columnDefs": [
                        { "orderable": false, "targets": -1 } // Ensure this targets the correct column
                    ],
                    language: {
                        'paginate': {
                            'previous': '<span class="fa fa-chevron-left"></span>',
                            'next': '<span class="fa fa-chevron-right"></span>'
                        },
                        "lengthMenu": 'Display <select class="form-control input-sm">'+
                            '<option value="10">10</option>'+
                            '<option value="20">20</option>'+
                            '<option value="30">30</option>'+
                            '<option value="40">40</option>'+
                            '<option value="50">50</option>'+
                            '<option value="-1">All</option>'+
                            '</select> results'
                    }
                });
            });
        </script>
        </div>
    </div>
</div>

<?php include("../admin/footer.php");?>
