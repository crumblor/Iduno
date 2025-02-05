const themeSwitch = document.getElementById("theme-select")
const currentTheme = localStorage.getItem("theme");

if (currentTheme === "dark") {
    document.body.classList.add("dark-mode");
} else if (currentTheme === "light") {
    document.body.classList.add("light-mode");
} else {
    const prefersDark = window
    .matchMedia("(prefers-color-scheme: dark)")
    .matches;
    document.body
    .classList
    .add(prefersDark ? "dark-mode" : "light-mode");
}

themeSwitch.addEventListener('click', () => {
    const currentTheme = localStorage.getItem("theme");
    if (currentTheme === "dark") {
        document.body.classList.remove("dark-mode");
        document.body.classList.add("light-mode");
        localStorage.setItem("theme", "light");
    } else {
        document.body.classList.remove("light-mode");
        document.body.classList.add("dark-mode");
        localStorage.setItem("theme", "dark");
    }
})

