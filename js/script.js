const menuToggle = document.querySelector(".menu");
const navbar = document.querySelector(".navbar");


menuToggle.addEventListener("click", () => {
    if (menuToggle.id === "active") {
        menuToggle.id = "inactive";
    } else {
        menuToggle.id = "active";
    }
});

document.addEventListener("scroll", () => {
    if (window.scrollY > 0) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
}, true);

menuToggle.addEventListener("blur", () => {
    menuToggle.id = "inactive";
});