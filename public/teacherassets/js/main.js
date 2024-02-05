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
});
