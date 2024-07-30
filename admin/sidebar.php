<?php

?>

<!-- sidebar -->
<div class="sidebar" id="sidebar">
         <!-- Sidebar content goes here -->
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