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
    <script src="{{asset('teacherassets/js/video-link.js')}}"></script>
    <script src="{{asset('teacherassets/js/question.js')}}"></script>
    <script src="{{asset('teacherassets/js/teacher-profile.js')}}"></script>
    <script src="{{asset('teacherassets/js/assignment-submit.js')}}"></script>
    <script src="{{asset('teacherassets/js/communication.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</body>
</html>
