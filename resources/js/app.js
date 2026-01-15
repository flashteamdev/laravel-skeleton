import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.data("theme", () => ({
    open: false,
    darkMode: localStorage.getItem("theme") === "dark",
    init() {
        this.$watch("darkMode", (val) => {
            localStorage.setItem("theme", val ? "dark" : "light");
            if (val) {
                document.documentElement.classList.add("dark");
            } else {
                document.documentElement.classList.remove("dark");
            }
        });
    },
    toggle() {
        this.darkMode = !this.darkMode;
    },
}));

Alpine.start();
