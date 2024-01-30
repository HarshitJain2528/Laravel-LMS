    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const currentLocation = window.location.href;

            const links = document.querySelectorAll('.nav_link');

            links.forEach(link => {
                link.classList.remove('active');
                if (link.href === currentLocation) {
                    link.classList.add('active');
                }
            });
        });
    </script>

    <script>
        setTimeout(function() {
            document.getElementById('close').style.display = 'none';
        }, 2000);
    </script>
    <!-- Bootstrap Bundle with Popper -->
    <script src="{{asset('teacherassets/js/video-link.js')}}"></script>
    <script src="{{asset('teacherassets/js/question.js')}}"></script>
    <script src="{{asset('teacherassets/js/chat.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- jQuery -->

</body>
</html>
