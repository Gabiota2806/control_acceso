document.addEventListener('DOMContentLoaded', () => {
    const menuButton = document.getElementById('mobile-menu-button');
    const sidebar = document.getElementById('mobile-sidebar');
    const overlay = document.getElementById('mobile-sidebar-overlay');

    if (!menuButton || !sidebar || !overlay) {
        return;
    }

    const closeSidebar = () => {
        sidebar.classList.add('hidden');
        overlay.classList.add('hidden');
        menuButton.setAttribute('aria-expanded', 'false');
    };

    menuButton.addEventListener('click', () => {
        const isOpen = menuButton.getAttribute('aria-expanded') === 'true';

        if (isOpen) {
            closeSidebar();
        } else {
            sidebar.classList.remove('hidden');
            overlay.classList.remove('hidden');
            menuButton.setAttribute('aria-expanded', 'true');
        }
    });

    overlay.addEventListener('click', closeSidebar);

    document.querySelectorAll('[data-sidebar-link]').forEach((link) => {
        link.addEventListener('click', closeSidebar);
    });
});
