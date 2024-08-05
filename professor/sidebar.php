
<!-- sidebar -->
<div class="sidebar" id="sidebar">
    <a href="./home.php" class="side_list">DASHBOARD</a>

    <h1 class="side_list2">MANAGE SUBJECT</h1>
    <ul class="side_list3"> 
        <li><a href="./add_subject.php"><i class="fa-solid fa-book" style="margin-right: 15px;"></i>Add Subject</a></li>
        <br>
        <li><a href="./subject.php"><i class="fa-solid fa-list" style="margin-right: 15px;"></i>Manage Subject</a></li>
    </ul>

    <h1 class="side_list2">MANAGE SECTION</h1>
    <ul class="side_list3"> 
        <li><a href="./add_section.php"><i class="fa-solid fa-table" style="margin-right: 15px;"></i>Add Section</a></li>
        <br>
        <li><a href="./section.php"><i class="fa-solid fa-list" style="margin-right: 15px;"></i>Manage Section</a></li>
    </ul>

    <h1 class="side_list2">MASTERLIST</h1>
    <ul class="side_list3"> 
        <li><a href="#"><i class="fa-solid fa-list-ol" style="margin-right: 15px;"></i>View Masterlist</a></li>
    </ul>

    <h1 class="side_list2">MANAGE EXAM</h1>
    <ul class="side_list3"> 
        <li><a href="#"><i class="fa-regular fa-window-restore" style="margin-right: 15px;"></i>Add Exam</a></li>
        <br>
        <li><a href="#"><i class="fa-solid fa-list" style="margin-right: 15px;"></i>Manage Exam</a></li>
    </ul>

    <h1 class="side_list2">RESULT</h1>
    <ul class="side_list3">
        <li><a href="#"><i class="fa-solid fa-star" style="margin-right: 15px;"></i>Result of Exam</a></li>
    </ul>

    <h1 class="side_list2">ARCHIVE</h1>
    <ul class="side_list3"> 
        <li><a href="#"><i class="fa-solid fa-box-archive" style="margin-right: 15px;"></i>View Archive</a></li>
    </ul>
    
</div>


<script>
    const barIcon = document.getElementById('bar-icon');
    const xIcon = document.getElementById('x-icon');
    const sidebar = document.getElementById('sidebar');

    // Initially, the sidebar should be visible, so hide the bar icon and show the x icon
    barIcon.style.display = 'none';
    xIcon.style.display = 'block';
    sidebar.classList.add('sidebar-visible');

    barIcon.addEventListener('click', () => {
        sidebar.classList.add('sidebar-visible');
        sidebar.classList.remove('sidebar-hidden');
        barIcon.classList.add('icon-bounce-rotate');
        setTimeout(() => {
            barIcon.style.display = 'none';
            xIcon.style.display = 'block';
            xIcon.classList.remove('icon-bounce-rotate');
        }, 300); // delay for the bounce-rotate effect
    });

    xIcon.addEventListener('click', () => {
        sidebar.classList.remove('sidebar-visible');
        sidebar.classList.add('sidebar-hidden');
        xIcon.classList.add('icon-bounce-rotate');
        setTimeout(() => {
            xIcon.style.display = 'none';
            barIcon.style.display = 'block';
            barIcon.classList.remove('icon-bounce-rotate');
        }, 300); // delay for the bounce-rotate effect
    });
</script>
