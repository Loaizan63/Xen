const username = localStorage.getItem("username");
document.getElementById(
  "Nombreusa"
).innerHTML = `Has iniciado sesión como "${username}"`;
if (!username) {
  window.location.href = "login.html";
} else {
  document.getElementById("reviewUser").value = username;
}

document
  .getElementById("reviewForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    const product = document.getElementById("product").value;
    const reviewText = document.getElementById("reviewText").value;

    if (product && reviewText) {
      const reviews = JSON.parse(localStorage.getItem("reviews")) || [];
      reviews.push({ user: username, text: `${product}: ${reviewText}` });
      localStorage.setItem("reviews", JSON.stringify(reviews));

      alert(`Reseña enviada para el producto: ${product}`);
      document.getElementById("reviewForm").reset();
    } else {
      alert("Por favor, completa todos los campos.");
    }
  });

function logout() {
  const confirmLogout = confirm("¿Estás seguro de que deseas cerrar sesión?");
  if (confirmLogout) {
    localStorage.removeItem("username");
    window.location.href = "login.html";
  }
}
