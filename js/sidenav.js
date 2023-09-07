function openNav() {
  var sideNav = document.getElementById("mySidenav");
  var overlay = document.getElementById("overlay");

  sideNav.style.width = "250px";
  overlay.style.display = "block";

  // Agregar una clase para activar la transición de fade
  sideNav.classList.add("open");
}

function closeNav() {
  var sideNav = document.getElementById("mySidenav");
  var overlay = document.getElementById("overlay");

  // Remover la clase para desactivar la transición de fade
  sideNav.classList.remove("open");

  // Esperar un breve momento antes de ocultar el sideNav y el overlay
  setTimeout(function() {
    sideNav.style.width = "0";
    overlay.style.display = "none";
  }, 300); // Ajusta la duración de la animación (ms)
}

function closeNavOnResize() {
  if (window.innerWidth > 640) { 
    closeNav();
  }
}

window.addEventListener("resize", closeNavOnResize);