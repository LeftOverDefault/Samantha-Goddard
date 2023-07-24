
document.addEventListener("scroll", () => {
    const header = document.querySelector("header");
    const heroHeader = document.querySelector(".hero-text");
    const aboutHeader = document.querySelector(".about-header-text");
    const successHeader = document.querySelector(".success-header-text");

    if (window.scrollY > 0) {
        header.classList.add("scrolled");
        heroHeader.classList.add("visible");
    } else if (window.scrollY > 2250) {
        aboutHeader.classList.add("visible");
        successHeader.classList.add("visible");
    } else {
        header.classList.remove("scrolled");
        heroHeader.classList.remove("visible");
        aboutHeader.classList.remove("visible");
        successHeader.classList.remove("visible");
    }
});