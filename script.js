// Mobile menu toggle
const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.nav-menu');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    navMenu.classList.toggle('active');
});

// Close mobile menu when clicking on a link
document.querySelectorAll('.nav-link').forEach(n => n.addEventListener('click', () => {
    hamburger.classList.remove('active');
    navMenu.classList.remove('active');
}));

// Modal functionality
const modal = document.getElementById('orderModal');
const closeModal = document.querySelector('.close');

function showOrderForm(liquidName) {
    document.getElementById('liquidName').value = liquidName;
    modal.style.display = 'block';
}

closeModal.addEventListener('click', () => {
    modal.style.display = 'none';
});

window.addEventListener('click', (event) => {
    if (event.target === modal) {
        modal.style.display = 'none';
    }
});

// Form submission
document.getElementById('orderForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = {
        liquidName: document.getElementById('liquidName').value,
        name: document.getElementById('name').value,
        phone: document.getElementById('phone').value,
        quantity: document.getElementById('quantity').value
    };
    
    // Здесь можно добавить отправку данных на сервер
    alert(`Спасибо, ${formData.name}! Ваш заказ на "${formData.liquidName}" в количестве ${formData.quantity} шт. принят. Мы свяжемся с вами по номеру ${formData.phone} в ближайшее время.`);
    
    modal.style.display = 'none';
    this.reset();
});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Header background on scroll
window.addEventListener('scroll', () => {
    const header = document.querySelector('.header');
    if (window.scrollY > 100) {
        header.style.background = 'rgba(255, 255, 255, 0.98)';
    } else {
        header.style.background = 'rgba(255, 255, 255, 0.95)';
    }
});