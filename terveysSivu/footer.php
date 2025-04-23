<!-- Footer -->
<footer class="footer">
        <div class="container">
            <div class="social-links mb-4">
                <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <p class="copyright">
                &copy; <?php echo date('Y'); ?> Terveyssivusto. Kaikki oikeudet pidätetään.
            </p>
        </div>
    </footer>

    <!-- Bootstrap JS ja muut tarvittavat JavaScript-kirjastot -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- AOS Animations -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <!-- Yleinen JavaScript -->
    <script>
        // AOS Animation Initialization
        AOS.init({
            duration: 800,
            once: true
        });
    </script>

    <?php if(isset($page_scripts)): ?>
        <?php echo $page_scripts; ?>
    <?php endif; ?>
</body>
</html>