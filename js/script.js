const menuToggle = document.querySelector(".menu");
const navbar = document.querySelector(".navbar");

document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") {
        menuToggle.id = "inactive";
    }
});

menuToggle.addEventListener("click", () => {
    if (menuToggle.id === "active") {
        menuToggle.id = "inactive";
    } else {
        menuToggle.id = "active";
    }
});

menuToggle.addEventListener("blur", () => {
    menuToggle.id = "inactive";
});

document.addEventListener("scroll", () => {
    menuToggle.id = "inactive";
    if (window.scrollY > 0) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
}, true);
