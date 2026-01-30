const users = [
  { email: "admin@system.com", password: "1234", role: "admin" },
  { email: "auditor@system.com", password: "1234", role: "auditor" },
  { email: "medico@system.com", password: "1234", role: "medico" }
];

document.getElementById("loginForm").addEventListener("submit", function(e) {
  e.preventDefault();

  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;
  const error = document.getElementById("error");

  const user = users.find(
    u => u.email === email && u.password === password
  );

  if (!user) {
    error.textContent = "Usuario o contraseña incorrectos";
    return;
  }

  // Guardamos sesión (simulada)
  localStorage.setItem("userRole", user.role);
  localStorage.setItem("userEmail", user.email);

  // Redirección según rol
  if (user.role === "admin") {
    window.location.href = "admin/dashboard.html";
  }
});
