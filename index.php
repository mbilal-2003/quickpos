<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickPOS - The Last POS System You'll Ever Need</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<!-- ===== NAVIGATION ===== -->
<nav class="navbar">
    <div class="nav-container">
        <div class="logo">
            <i class="fas fa-cash-register"></i>
            <span>QuickPOS</span>
        </div>
        <ul class="nav-links">
            <li><a href="#features">Features</a></li>
            <li><a href="#pricing">Pricing</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <a href="#" class="btn-signup">Sign Up</a>
    </div>
</nav>

<!-- ===== HERO SECTION ===== -->
<section class="hero">
    <div class="hero-content">
        <h1>The Last POS System<br>You'll Ever Need</h1>
        <p>Streamline your sales, manage inventory, and grow your business with QuickPOS — the smartest point of sale solution.</p>
        <a href="#" class="btn-primary">Get Started for Free</a>
    </div>
    <div class="hero-image">
        <img src="images/pos-mockup.png" alt="QuickPOS Mockup">
    </div>
</section>

<!-- ===== FEATURES SECTION ===== -->
<section class="features" id="features">
    <div class="section-header">
        <h2>Why Choose QuickPOS?</h2>
        <p>Everything you need to run your business smoothly</p>
    </div>
    <div class="features-grid">
        <div class="feature-card">
            <i class="fas fa-boxes"></i>
            <h3>Inventory Management</h3>
            <p>Track stock levels in real-time and never run out of your best-selling products.</p>
        </div>
        <div class="feature-card">
            <i class="fas fa-chart-line"></i>
            <h3>Sales Analytics</h3>
            <p>Get detailed insights into your sales performance with beautiful reports.</p>
        </div>
        <div class="feature-card">
            <i class="fas fa-plug"></i>
            <h3>Easy Integration</h3>
            <p>Connect with your favorite tools and payment gateways in minutes.</p>
        </div>
        <div class="feature-card">
            <i class="fas fa-mobile-alt"></i>
            <h3>Mobile Friendly</h3>
            <p>Manage your business from anywhere with our mobile-ready interface.</p>
        </div>
    </div>
</section>

<!-- ===== PRICING SECTION ===== -->
<section class="pricing" id="pricing">
    <div class="section-header">
        <h2>Simple, Transparent Pricing</h2>
        <p>Choose the plan that works best for your business</p>
    </div>
    <div class="pricing-grid">
        <div class="pricing-card">
            <h3>Basic</h3>
            <div class="price">$9<span>/mo</span></div>
            <ul>
                <li><i class="fas fa-check"></i> 1 Register</li>
                <li><i class="fas fa-check"></i> Basic Reports</li>
                <li><i class="fas fa-check"></i> Email Support</li>
                <li><i class="fas fa-times"></i> Advanced Analytics</li>
            </ul>
            <a href="#" class="btn-plan">Get Started</a>
        </div>
        <div class="pricing-card popular">
            <div class="popular-badge">Most Popular</div>
            <h3>Pro</h3>
            <div class="price">$29<span>/mo</span></div>
            <ul>
                <li><i class="fas fa-check"></i> 5 Registers</li>
                <li><i class="fas fa-check"></i> Advanced Reports</li>
                <li><i class="fas fa-check"></i> Priority Support</li>
                <li><i class="fas fa-check"></i> Advanced Analytics</li>
            </ul>
            <a href="#" class="btn-plan">Get Started</a>
        </div>
        <div class="pricing-card">
            <h3>Enterprise</h3>
            <div class="price">$99<span>/mo</span></div>
            <ul>
                <li><i class="fas fa-check"></i> Unlimited Registers</li>
                <li><i class="fas fa-check"></i> Custom Reports</li>
                <li><i class="fas fa-check"></i> 24/7 Support</li>
                <li><i class="fas fa-check"></i> Custom Integrations</li>
            </ul>
            <a href="#" class="btn-plan">Get Started</a>
        </div>
    </div>
</section>

<!-- ===== CONTACT SECTION ===== -->
<section class="contact" id="contact">
    <div class="section-header">
        <h2>Get In Touch</h2>
        <p>Have questions? We'd love to hear from you</p>
    </div>
    <div class="contact-form">
        <form action="process_form.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
            <button type="submit" class="btn-primary">Send Message</button>
        </form>
    </div>
</section>

<!-- ===== FOOTER ===== -->
<footer class="footer">
    <div class="footer-container">
        <div class="footer-logo">
            <i class="fas fa-cash-register"></i>
            <span>QuickPOS</span>
        </div>
        <div class="social-links">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
        </div>
        <p class="copyright">&copy; 2026 QuickPOS. All rights reserved.</p>
    </div>
</footer>

<script src="js/script.js"></script>
</body>
</html>