const role = localStorage.getItem("userRole");

if (!role) {
  window.location.href = "../login.html";
}

// agregamos la clase al body
document.body.classList.add(role);

