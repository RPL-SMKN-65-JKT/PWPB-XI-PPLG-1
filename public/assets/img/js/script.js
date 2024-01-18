// fixed
const header = document.querySelector("header");
const FixedNav = header.offsetTop;

if (window.pageYOffset > FixedNav) {
    header.classList.add("navbar-fixed");
} else {
    header.classList.remove("navbar-fixed");
}
