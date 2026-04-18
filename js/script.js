// ===== SMOOTH SCROLLING =====
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if(target) {
            target.scrollIntoView({ behavior: 'smooth' });
        }
    });
});

// ===== NAVBAR SCROLL EFFECT =====
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if(window.scrollY > 50) {
        navbar.style.boxShadow = '0 2px 30px rgba(0,0,0,0.2)';
        navbar.style.background = '#ffffff';
    } else {
        navbar.style.boxShadow = '0 2px 20px rgba(0,0,0,0.1)';
    }
});

// ===== FADE IN ANIMATION ON SCROLL =====
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if(entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, { threshold: 0.1 });

document.querySelectorAll('.feature-card, .pricing-card').forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(30px)';
    el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    observer.observe(el);
});
