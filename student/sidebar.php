<?php

?>

<!-- sidebar -->
<div class="sidebar" id="sidebar">
    <a href="#" class="side_list">DASHBOARD</a>

    <h1 class="side_list2">AVAILABLE EXAM</h1>
    <ul class="side_list3"> 
        <div class="dropdown2">
            <button class="dropbtn2" onclick="toggleDropdown(this)">Professor 1</button>
            <div class="dropdown-content2">
                <a href="#">Admin Profile</a>
                <a href="#">Logout</a>
            </div>
        </div>
        <div class="dropdown2">
            <button class="dropbtn2" onclick="toggleDropdown(this)">Professor 2</button>
            <div class="dropdown-content2">
                <a href="#">Admin</a>
                <a href="#">Logout</a>
            </div>
        </div>

    </ul>

    <h1 class="side_list2">TAKEN EXAM</h1>
    <ul class="side_list3">
        <li><a href="#"><i class="fa-solid fa-list" style="margin-right: 15px;"></i>Result</a></li>
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

    function toggleDropdown(button) {
        // Close all dropdowns
        const dropdowns = document.querySelectorAll('.dropdown2');
        dropdowns.forEach(dropdown => {
            if (dropdown.contains(button)) {
                dropdown.classList.toggle('active');
            } else {
                dropdown.classList.remove('active');
            }
        });
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn2')) {
            const dropdowns = document.querySelectorAll('.dropdown2');
            dropdowns.forEach(dropdown => {
                dropdown.classList.remove('active');
            });
        }
    }


</script>
