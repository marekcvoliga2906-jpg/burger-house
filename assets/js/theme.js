(function () {
    var root = document.documentElement;
    var storageKey = "burger-house-theme";
    var buttons = [];

    function getStoredTheme() {
        try {
            return localStorage.getItem(storageKey);
        } catch (error) {
            return null;
        }
    }

    function setStoredTheme(theme) {
        try {
            localStorage.setItem(storageKey, theme);
        } catch (error) {
            return;
        }
    }

    function resolveInitialTheme() {
        var storedTheme = getStoredTheme();

        if (storedTheme === "dark" || storedTheme === "light") {
            return storedTheme;
        }

        if (window.matchMedia && window.matchMedia("(prefers-color-scheme: dark)").matches) {
            return "dark";
        }

        return "light";
    }

    function applyTheme(theme) {
        root.setAttribute("data-theme", theme);

        buttons.forEach(function (button) {
            var label = theme === "dark" ? "Light Theme" : "Dark Theme";
            button.setAttribute("aria-pressed", theme === "dark" ? "true" : "false");
            button.setAttribute("aria-label", label);
            button.querySelector("[data-theme-label]").textContent = label;
        });
    }

    function toggleTheme() {
        var nextTheme = root.getAttribute("data-theme") === "dark" ? "light" : "dark";
        applyTheme(nextTheme);
        setStoredTheme(nextTheme);
    }

    document.addEventListener("DOMContentLoaded", function () {
        buttons = Array.prototype.slice.call(document.querySelectorAll("[data-theme-toggle]"));
        applyTheme(resolveInitialTheme());

        buttons.forEach(function (button) {
            button.addEventListener("click", toggleTheme);
        });
    });
}());
