const menuIcon = document.getElementById("menuIcon");
const navbarMobile = document.querySelector('.navbar-mobile');
const body = document.querySelector('body');

menuIcon.addEventListener('click', function () {
    const displayValue = window.getComputedStyle(navbarMobile).display;

    if (displayValue == "none") {
        menuIcon.setAttribute('src', "assets/icons/feather/x.svg");
        navbarMobile.style.display = "block";
        body.classList.add('body-no-scroll');
    } else {
        menuIcon.setAttribute('src', "assets/icons/feather/menu.svg");
        navbarMobile.style.display = "none";
        body.classList.remove('body-no-scroll');
    }
})
