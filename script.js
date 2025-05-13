// script.js

// Change header style on scroll
window.addEventListener('scroll', () => {
    const header = document.querySelector('.header');
    if (window.scrollY > 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            window.scrollTo({
                top: target.offsetTop - 70, // Adjust if navbar is fixed
                behavior: 'smooth'
            });
        }
    });
});

// Placeholder: Handle dropdown (if added in future)
document.querySelectorAll('.dropdown-toggle')?.forEach(drop => {
    drop.addEventListener('click', function (e) {
        e.preventDefault();
        const menu = this.nextElementSibling;
        if (menu) {
            menu.classList.toggle('show');
        }
    });
});
// if (!sessionStorage.getItem("hasReloaded")) {
//     sessionStorage.setItem("hasReloaded", "true");
//     location.reload();
// }

