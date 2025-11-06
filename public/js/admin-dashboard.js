// public/js/admin-dashboard.js
document.addEventListener('DOMContentLoaded', function () {
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.getElementById('main-content');
    const toggleBtn = document.getElementById('sidebar-toggle');

    if (!toggleBtn) return;

    function toggleSidebar() {
        sidebar.classList.toggle('collapsed');
        mainContent.classList.toggle('sidebar-collapsed');
        const icon = toggleBtn.querySelector('i');
        if (sidebar.classList.contains('collapsed')) {
            icon.className = 'fas fa-chevron-right';
        } else {
            icon.className = 'fas fa-chevron-left';
        }
    }

    toggleBtn.addEventListener('click', toggleSidebar);

    // Responsif
    function checkScreenSize() {
        if (window.innerWidth <= 991) {
            sidebar.classList.add('collapsed');
            mainContent.classList.add('sidebar-collapsed');
            toggleBtn.querySelector('i').className = 'fas fa-chevron-right';
        } else {
            sidebar.classList.remove('collapsed');
            mainContent.classList.remove('sidebar-collapsed');
            toggleBtn.querySelector('i').className = 'fas fa-chevron-left';
        }
    }

    checkScreenSize();
    window.addEventListener('resize', checkScreenSize);
});