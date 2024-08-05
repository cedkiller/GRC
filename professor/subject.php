<?php include("../professor/header.php");?>
<?php include("../professor/sidebar.php");?>

<?php
$sql = "SELECT * FROM subject";
$result = mysqli_query($conn, $sql);
?>

<div class="content">
    <div style="display: flex; justify-content: center;" class="hidden_animation">
        <div>
            <br>
         <table id="example" class="table table-striped">
            <thead>
                <tr>
                    <th>Subject Name</th>
                    <th>Action_Edit</th>
                    <th>Action_Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['sub_name']; ?></td>
                    <td><a href="./edit_sub.php?id=<?php echo $row['sub_id'];?>" style="text-decoration: none;"><i class="fa-solid fa-pen-to-square" id="edit_sub"></i></a></td>
                    <td><a href="./delete_sub.php?id=<?php echo $row['sub_id'];?>" style="text-decoration: none;"><i class="fa-solid fa-trash" id="delete_sub"></i></a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
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

<?php include("../professor/footer.php");?>
