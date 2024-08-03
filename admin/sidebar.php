<?php

?>

<!-- sidebar -->
<div class="sidebar" id="sidebar">
    <a href="#" class="side_list">DASHBOARD</a>

    <h1 class="side_list2">LIST OF PROFESSOR</h1>
    <ul class="side_list3"> 
        <li><a href="./list_prof.php"><i class="fa-solid fa-list" style="margin-right: 15px;"></i>View Professor's</a></li>
    </ul>

    <h1 class="side_list2">LIST OF STUDENT</h1>
    <ul class="side_list3">
        <li><a href="#"><i class="fa-solid fa-list" style="margin-right: 15px;"></i>View Student's</a></li>
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
