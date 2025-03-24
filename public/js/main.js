// public/js/main.js

document.addEventListener('DOMContentLoaded', function () {
    // Mobile menu toggle
    const mobileMenuButton = document.querySelector('.mobile-menu-button');
    const navMenu = document.querySelector('.nav-menu');

    if (mobileMenuButton && navMenu) {
        mobileMenuButton.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });
    }

    // Contact form validation
    const contactForm = document.querySelector('#contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            const email = document.querySelector('#email').value;
            const message = document.querySelector('#message').value;

            if (!email || !message) {
                e.preventDefault();
                alert('Please fill in all required fields');
            }
        });
    }

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Add your JavaScript code here for interactivity and dynamic features
    console.log("Welcome to Action Humanitaire pour le développement et la lutte contre le chômage!");
});