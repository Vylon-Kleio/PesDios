const wrapper = document.querySelector(".wrapper");
const login = document.querySelector(".login-link");
const register = document.querySelector(".register-link");

register.addEventListener("click", () => {
  wrapper.classList.add("active");
});

login.addEventListener("click", () => {
  wrapper.classList.remove("active");
});

function validate() {
  const username = document.querySelector("#user-login").value;
  const password = document.querySelector("#pass-login").value;
  if (username == "admin" && password == "admin") {
    location.href = "../dashboard/dashboard.html";
  } else {
    alert("Login failed");
  }
}
