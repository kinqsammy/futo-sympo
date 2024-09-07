function toggleMenu() {
    var menu = document.querySelector(".navbar-menu");
    var menubtn = document.querySelector(".menu-icon");

    if (menu.classList.contains('active')) {
        menu.classList.remove('active');
        menubtn.innerHTML = '&#9776;';

    } else {
        menu.classList.add('active');
        menubtn.innerHTML = '&times';
    }
}