<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="../index.php"><p>Inicio</p></a>
  <a onclick="toggleTours()"><p>Tours &nbsp;<i class="fa fa-caret-down"></i></p></a>
  <div id="toursDropdown">
    <a href="tours.php"><p>Destinos</p></a>
    <a href=""><p>Tours privados</p></a>
    <a href=""><p>Guianzas</p></a>
  </div>
  <a href="acerca.php"><p>Acerca de nosotros</p></a>
  <a href="contacto.php"><p>Contacto</p></a>
</div>

<script src="../js/sidenav.js"></script>
<script>
function toggleTours() {
  var toursDropdown = $("#toursDropdown");

  if (toursDropdown.hasClass("open")) {
    // Ocultar los elementos de tours con una animación de acordeón
    toursDropdown.removeClass("open");
  } else {
    // Mostrar los elementos de tours con una animación de acordeón
    toursDropdown.addClass("open");
  }
}
</script>
