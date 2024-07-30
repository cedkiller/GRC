<?php

?>

<!-- sidebar -->
<div class="sidebar" id="sidebar">
    <a href="#" class="side_list">DASHBOARD</a>

    <h1 class="side_list2">MANAGE SECTION</h1>
    <ul class="side_list3"> 
        <li><a href="#"><i class="fa-regular fa-window-restore" style="margin-right: 15px;"></i>Add Section</a></li>
        <br>
        <li><a href="#"><i class="fa-solid fa-list" style="margin-right: 15px;"></i>Manage Section</a></li>
    </ul>

    <h1 class="side_list2">MANAGE SUBJECT</h1>
    <ul class="side_list3">
        <li><a href="#"><i class="fa-solid fa-book" style="margin-right: 15px;"></i>Add Subject</a></li>
        <br>
        <li><a href="#"><i class="fa-solid fa-list" style="margin-right: 15px;"></i>Manage Subject</a></li>
    </ul>

    <h1 class="side_list2">MANAGE PROFESSOR</h1>
    <ul class="side_list3">
        <li><a href="#"><i class="fa-solid fa-users" style="margin-right: 15px;"></i>Add Professor</a></li>
        <br>
        <li><a href="#"><i class="fa-solid fa-list" style="margin-right: 15px;"></i>Manage Professor</a></li>
    </ul>

    
</div>


     <script>
        const barIcon = document.getElementById('bar-icon');
        const xIcon = document.getElementById('x-icon');
        const sidebar = document.getElementById('sidebar');

        barIcon.addEventListener('click', () => {
            sidebar.classList.add('sidebar-visible');
            barIcon.classList.add('icon-bounce-rotate');
            setTimeout(() => {
                barIcon.style.display = 'none';
                xIcon.style.display = 'block';
                xIcon.classList.remove('icon-bounce-rotate');
            }, 300); // delay for the bounce-rotate effect
        });

        xIcon.addEventListener('click', () => {
            sidebar.classList.remove('sidebar-visible');
            xIcon.classList.add('icon-bounce-rotate');
            setTimeout(() => {
                xIcon.style.display = 'none';
                barIcon.style.display = 'block';
                barIcon.classList.remove('icon-bounce-rotate');
            }, 300); // delay for the bounce-rotate effect
        });
     </script>