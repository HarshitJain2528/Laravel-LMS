<script src="{{asset('adminassets/js/graphs.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <!-- Bootstrap 5 JS and Popper.js (required for Bootstrap components) -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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

    // 
    let popup = document.getElementById('popup');
    setTimeout(function() {
        popup.style.display = 'none';
    }, 2000);

</script>
</body>
</html>
