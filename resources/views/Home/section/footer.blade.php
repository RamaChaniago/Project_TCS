<style>
.social-icons {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    gap: 15px;
}

.social-icons a {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: rgba(255, 255, 255, 0.2);
    color: white;
    transition: all 0.3s ease;
}

.social-icons a:hover {
    background-color: #007bff;
    color: white;
    transform: scale(1.1);
}

.social-icons a i {
    font-size: 20px;
    margin: 0;
    padding: 0;
}

</style>

<footer class="bg-dark text-white py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <img src="{{ asset('img/logo-white.png') }}" alt="ToeflPCT Logo" class="mb-4" height="50">
                <p>ToeflPCT is your trusted partner for TOEFL training and certification. We help thousands of students achieve their target TOEFL scores every year.</p>
                <div class="social-icons mt-3">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li><a href="/courses">Courses</a></li>
                    <li><a href="/about-us">About Us</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/blog">Blog</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6">
                <h5>Courses</h5>
                <ul class="list-unstyled">
                    <li><a href="/courses.one-on-one">One-on-One</a></li>
                    <li><a href="/courses.certification-test">Certification Test</a></li>
                    <li><a href="/courses.live-class">Live Classes</a></li>
                    <li><a href="/courses.learning-package">Learning Packages</a></li>
                    <li><a href="/courses.smart-book">Smart Books</a></li>
                </ul>
            </div>
            <div class="col-lg-4">
                <h5>Newsletter</h5>
                <p>Subscribe to get special offers, free giveaways, and exclusive promotions.</p>
                <form class="d-flex mt-3">
                    <input type="email" class="form-control me-2" placeholder="Your email address">
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
                <div class="mt-3">
                    <p class="mb-1"><i class="fas fa-phone-alt me-2"></i> +62 123 4567 890</p>
                    <p class="mb-1"><i class="fas fa-envelope me-2"></i> info@toeflpct.com</p>
                    <p><i class="fas fa-map-marker-alt me-2"></i> Jakarta, Indonesia</p>
                </div>
            </div>
        </div>
        <div class="footer-bottom mt-4 pt-4 border-top border-secondary">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2025 ToeflPCT. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="/terms">Terms & Conditions</a></li>
                        <li class="list-inline-item"><a href="/privacy">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="/faq">FAQ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

{{-- //tdjsksb --}}
