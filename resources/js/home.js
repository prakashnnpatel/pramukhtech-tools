var Home = (function () {    
    return {
        init: function () {
            // Toggle submenus
            document.querySelectorAll('.submenu-toggle').forEach(btn => {
                btn.addEventListener('click', () => {
                btn.parentElement.classList.toggle('open');
                });
            });

            // Handle active class on submenu items
            document.querySelectorAll('.submenu li a').forEach(link => {
                link.addEventListener('click', (e) => {
                document.querySelectorAll('.submenu li a').forEach(l => l.classList.remove('active'));
                e.currentTarget.classList.add('active');

                // Ensure parent submenu is open
                const parent = e.currentTarget.closest('.has-submenu');
                document.querySelectorAll('.has-submenu').forEach(menu => menu.classList.remove('open'));
                parent.classList.add('open');
                });
            });

            // Toggle sidebar collapse
            document.querySelector('.sidebar-toggle').addEventListener('click', () => {
                const sidebar = document.querySelector('.sidebar');
                sidebar.classList.toggle('collapsed');

                // Change toggle icon direction
                const icon = document.querySelector('.sidebar-toggle i');
                icon.classList.toggle('fa-angle-left');
                icon.classList.toggle('fa-angle-right');
            });
            
            const toggleBtn = document.querySelector('.sidebar-toggle');
            const body = document.body;

            toggleBtn.addEventListener('click', () => {
            if (window.innerWidth <= 768) {
                body.classList.toggle('sidebar-open');
            }
            });
        }
    };
})();

$(function () {
    Home.init();
});
window.Home = Home;
