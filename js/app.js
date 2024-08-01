const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('show_animation');
        }
        else {
            entry.target.classList.remove('show_animation');
        }
    });
});

const hiddenElements = document.querySelectorAll('.hidden_animation');
hiddenElements.forEach((el) => observer.observe(el));

const hiddenElements2 = document.querySelectorAll('.hidden_animation2');
hiddenElements2.forEach((el) => observer.observe(el));