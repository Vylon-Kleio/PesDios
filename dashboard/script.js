const body = document.querySelector("body");
const toggleMode = body.querySelector(".mode-toggle");
const toggleSidebar = body.querySelector(".sidebar-toggle");
const sidebar = body.querySelector("nav");

let getMode = localStorage.getItem("mode");
let getStatus = localStorage.getItem("status");

if (getMode && getMode === "dark") {
  body.classList.toggle("dark");
}

if (getStatus && getStatus === "close") {
  sidebar.classList.toggle("close");
}

toggleMode.addEventListener("click", () => {
  body.classList.toggle("dark");
  if (body.classList.contains("dark")) {
    localStorage.setItem("mode", "dark");
  } else {
    localStorage.setItem("mode", "light");
  }
});

toggleSidebar.addEventListener("click", () => {
  sidebar.classList.toggle("close");
  if (sidebar.classList.contains("close")) {
    localStorage.setItem("status", "close");
  } else {
    localStorage.setItem("status", "open");
  }
});
