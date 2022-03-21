import "./bootstrap";
import "./jquqery";

(() => {
    const menu = document.querySelector(".menu");
    // Menu scripts
    document.getElementById("menu-opener").addEventListener("click", () => {
        menu.classList.add("menu--active");
    });

    document.getElementById("menu-closer").addEventListener("click", () => {
        menu.classList.remove("menu--active");
    });
})();

// Vue
import "./vue";
