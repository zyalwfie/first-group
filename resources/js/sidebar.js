const menuButton = document.querySelector('#menu-button');
const overlay = document.querySelector('#overlay');
const sidebar = document.querySelector('#sidebar');

menuButton.addEventListener('click', () => {
    if (overlay.classList.contains('hidden')) {
        overlay.classList.remove('hidden');
        setTimeout(() => {
            sidebar.classList.remove('-translate-x-full');
            sidebar.classList.add('translate-x-0');
        }, 100);
    }
});

window.addEventListener('click', (e) => {
    if (e.target === overlay) {
        sidebar.classList.remove('translate-x-0');
        sidebar.classList.add('-translate-x-full');
        setTimeout(() => {
            overlay.classList.add('hidden');
        }, 100);
    }
})