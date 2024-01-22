    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const currentLocation = window.location.href;

            const links = document.querySelectorAll('.nav_link');

            links.forEach(link => {
                link.classList.remove('active'); // Remove 'active' class from all links
                if (link.href === currentLocation) {
                    link.classList.add('active'); // Add 'active' class to the current link
                }
            });
        });
    </script>
    <!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- jQuery -->

</body>
</html>
