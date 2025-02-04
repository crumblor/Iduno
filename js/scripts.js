// const prefersDark = window
// .matchMedia("(prefers-color-scheme: dark)")
// .matches;
// document.body
// .classList
// .add(prefersDark ? "dark-mode" : "light-mode");

const currentTheme = localStorage.getItem("theme");
if (currentTheme === "dark") {
    document.body.classList.add("dark-mode");
} else {
    document.body.classList.add("light-mode");
}

const themeSwitch = document.getElementById("theme-select")

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

