import "./bootstrap";
import "./jquqery";

document.addEventListener("click", () => {
    document.querySelector(".custom-cursor--outer").classList.add("clicking");

    setTimeout(() => {
        document
            .querySelector(".custom-cursor--outer")
            .classList.remove("clicking");
    }, 250);
});

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

// Vue
import "./vue";
