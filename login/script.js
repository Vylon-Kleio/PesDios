const wrapper = document.querySelector(".wrapper");
const login = document.querySelector(".login-link");
const register = document.querySelector(".register-link");

register.addEventListener("click", () => {
  wrapper.classList.add("active");
});

login.addEventListener("click", () => {
  wrapper.classList.remove("active");
});

document.addEventListener("keydown", (e) => {
  if (e.key.toLowerCase() === "p" && e.ctrlKey && e.altKey && e.shiftKey) {
    location.href = "../dashboard/dashboard.html";
  }
});

function validate() {
  const username = document.querySelector("#user-login").value;
  const password = document.querySelector("#pass-login").value;
  if (username === "admin" && password === "admin") {
    location.href = "../dashboard/dashboard.html";
    console.log("Login successful");
    return false;
  } else {
    alert("Login failed");
    return false;
  }
}
