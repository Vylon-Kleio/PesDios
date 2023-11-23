const body = document.querySelector("body");
const toggleMode = body.querySelector(".mode-toggle");
const toggleSidebar = body.querySelector(".sidebar-toggle");
const sidebar = body.querySelector("nav");

toggleMode.addEventListener("click", () => {
  body.classList.toggle("dark");
});

toggleSidebar.addEventListener("click", () => {
  sidebar.classList.toggle("close");
});
