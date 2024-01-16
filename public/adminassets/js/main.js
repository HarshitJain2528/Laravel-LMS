document.addEventListener("DOMContentLoaded", function(event) {
    const showNavbar = (toggleId, navId, bodyId, headerId) => {
        const toggle = document.getElementById(toggleId),
            nav = document.getElementById(navId),
            bodypd = document.getElementById(bodyId),
            headerpd = document.getElementById(headerId);

        const isSidebarToggled = localStorage.getItem('sidebarToggled');

        // Function to toggle sidebar based on saved state
        const toggleSidebar = () => {
            nav.classList.toggle('show');
            toggle.classList.toggle('bx-x');
            bodypd.classList.toggle('body-pd');
            headerpd.classList.toggle('body-pd');
            // Save the state in localStorage
            const isToggled = nav.classList.contains('show');
            localStorage.setItem('sidebarToggled', isToggled);
        };

        // Check if the sidebar was toggled before
        if (isSidebarToggled && isSidebarToggled === 'true') {
            toggleSidebar();
        }

        // Event listener for toggling sidebar
        toggle.addEventListener('click', () => {
            toggleSidebar();
        });
    };

    showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header');


    /*===== LINK ACTIVE =====*/
    // const linkColor = document.querySelectorAll('.nav_link')

    // function colorLink(){
    // if(linkColor){
    // linkColor.forEach(l=> l.classList.remove('active'))
    // this.classList.add('active')
    // }
    // }
    // linkColor.forEach(l=> l.addEventListener('click', colorLink))


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

     // Your code to run since DOM is loaded and ready
    });
