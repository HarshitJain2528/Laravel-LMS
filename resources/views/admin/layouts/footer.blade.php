<script src="{{asset('adminassets/js/graphs.js')}}"></script>
 <!-- Bootstrap 5 JS and Popper.js (required for Bootstrap components) -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
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
</body>
</html>
