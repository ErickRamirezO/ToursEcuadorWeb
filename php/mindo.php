<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mindo- Tours Ecuador</title>
  <link rel="icon" href="../img/iconToursEcuador.png" type="image/png" sizes="32x32"/>
  <link rel="stylesheet" href="../css/estilo_index.css" type="text/css">
  <link rel="stylesheet" href="../css/estilo_destinos.css" type="text/css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="../css/vertical-timeline.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"
    integrity="sha512-z4OUqw38qNLpn1libAN9BsoDx6nbNFio5lA6CuTp9NlK83b89hgyCVq+N5FdBJptINztxn1Z3SaKSKUS5UP60Q=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
  <div class="principal">
    <?php include "sidenav.php";?>
    <?php include "navbar.php";?>
    <div class="titulo_destino">
      <img src="../img/avion.png" class="imagen_a" style="transform: scaleX(-1);">
      <h1 class="titulo">Mindo &nbsp;</h1>
    </div>
    <div class="imagenes-portada">
      <div class="imagenes-portada-primero">
        <img src="../img/mindoP4.jpg" class="w3-hover-opacity" alt="Letras Mindo">

      </div>
      <div class=" imagenes-portada-segunda">
        <div class="portada-pri">
          <div class="portada-primera1"><img src="../img/mindoP0.jpg" class="w3-hover-opacity" alt="Río en Mindo" ></div>
          <div class="portada-primera1"><img src="../img/mindoP1.jpg" class="w3-hover-opacity" alt="Río en Mindo recorridos turísticos"></div>
        </div>
        <div class="portada-pri">
          <div class="portada-primera1"><img src="../img/mindoP2.jpg" class="w3-hover-opacity" alt="Mindo turismo"></div>
          <div class="portada-primera1"><img src="../img/mindoP3.jpg" class="w3-hover-opacity" alt="Mindo turismo"></div>
        </div>
      </div>

    </div>
    <div class="contenedor-informacion">
      <div class="table-of-contents-sticky w3-hide-small">
        <div class="table-of-contents">
          <h3>Tour Mindo</h3>
          <ul>
           <li><a href="#itinerario">Itinerario</a></li>
            <li><a href="#incluye">Incluye</a></li>
            <li><a href="#noIncluye">No incluye</a></li>
            <li><a href="#indicaciones">Indicaciones</a></li>
            <li><a href="#ubicacion">Ubicación</a></li>
          </ul>
        </div>
      </div>
      <section class="linea-tiempo">
        <h3 id="itinerario" class="w3-center">Itinerario</h3>
        <div id="myTimeline">
            <div data-vtdate="Primera parada">
                <div data-vticon="true">
                    <i class="fas fa-volcano"></i>
                </div>
              <div class="image-column">
                <img src="../img/reservaColibri.jpg" class="cover-image">
              </div>
              <div class="content-column mindo_p1">
                <h3>La Reserva de Colibrí</h3>
                <p> Durante nuestro trayecto hacia Mindo, haremos una parada en un jardín oculto que se encuentra en medio del bosque nublado. Aquí, tendrás la oportunidad de deleitarte con la observación de aves y disfrutar de la naturaleza. La entrada tiene un costo de $5.00 y no está incluida en el tour.</p>
              </div>
            </div>
            <div data-vtdate="Segunda parada">
              <div data-vticon="true">
                    <i class="fas fa-camera"></i>
                </div>
              <div class="image-column">
                <img src="../img/mariposas.jpg" class="cover-image" alt="El Santuario de las Mariposas">
              </div>
              <div class="content-column mindo_p2">
                <h3>El Santuario de las Mariposas</h3>
                <p>Visitarás el Santuario de las Mariposas en Mindo, donde tendrás la oportunidad de conocer y fotografiar las diversas especies de mariposas que habitan en esta rica región de Ecuador. La entrada al santuario tiene un valor de $8.00 y no está incluida en el paquete.</p>
              </div>
            </div>
            <div data-vtdate="Tercera parada">
              <div data-vticon="true">
                    <i class="fas fa-water"></i>
                </div>
              <div class="image-column">
                <img src="../img/CascadaNambillo.jpg" class="cover-image" alt="Cascada Mindo Nambillo">
              </div>
              <div class="content-column mindo_p3">
                <h3>Cascada Mindo Nambillo</h3>
                <p>Comienza tu experiencia con una asombrosa panorámica del bosque nublado desde la tarabita. Luego, tras este breve paseo, emprenderemos una caminata por un sendero que nos llevará hasta la cascada. Disfruta de este recorrido rodeado por un frondoso bosque. La entrada a esta actividad está incluida y tiene un costo de $5.00.</p>
              </div>
            </div>
            <div data-vtdate="Cuarta parada">
              <div data-vticon="true">
                    <i class="fas fa-camera"></i>
                </div>
              <div class="image-column">
                <img src="../img/chocolate-Mindo.jpg" class="cover-image" alt="Chocolate de Mindo">
              </div>
              <div class="content-column mindo_p4">
                <h3>Empresa local de chocolate Mindo</h3>
                <p>Explora una fábrica de chocolate ecuatoriano de origen local, donde tendrás la oportunidad de adentrarte en el mundo del cacao, conocer su relevancia, su proceso de producción y saborear una amplia gama de chocolates de alta calidad. Disfruta de la amalgama de sabores y amplía tu conocimiento sobre los distintos porcentajes de cacao a través de una degustación breve, que está incluida en la experiencia.</p>
              </div>
            </div>
            <div data-vtdate="Quinta parada">
              <div data-vticon="true">
                    <i class="fas fa-camera"></i>
                </div>
              
              <div class="content-column mindo_p5">
                <h3>Almuerzo</h3>
                <p>En medio de este programa, tendrás la oportunidad de saborear un almuerzo autóctono en la zona. Te sugerimos probar la trucha frita, que es el plato característico de la región. (El almuerzo no está incluido en el costo del tour).</p>
              </div>
            </div>
            <div data-vtdate="Fin del Tour">
              <div data-vticon="true">
                <i class="fa-solid fa-location-dot"></i>
              </div>
              <div class="content-column mindo_p6">
                <h3>Retorno a Quito</h3>
                <p> Relájate durante un regreso cómodo a Quito, y ten en cuenta que el servicio de desembarque en tu hotel está incluido.</p>
              </div>
            </div>
        </div>
      </section>
      <div class="reservas w3-hide-small">
        <div class="reservas-primero">
          <div id="dias">
            <div class="contenido-reserva-p">
              <p>1 <span class="dias">Días</span>&nbsp;</p>
            </div>
            <div class="icono-reserva">
              <i class="fa-solid fa-calendar-day"></i>
            </div>
          </div>
          <div id="noches">
            <div class="contenido-reserva-p">
              <p>0 <span class="noches">Noches</span> &nbsp;</p>
            </div>
            <div class="icono-reserva">
              <i class="fas fa-moon"></i>
            </div>
          </div>
          <div id="destino">
            <div class="contenido-reserva-p">
              <p>4 <span class="destinos">Destinos</span> &nbsp;</p>
            </div>
            <div class="icono-reserva">
              <i class="fa-solid fa-bus"></i>
            </div>
          </div>
          <div id="alimentacion" >
            <div class="contenido-reserva-p">
              <p class="alimentacion">Alimentación</p>
            </div>
            <div class="icono-reserva">
              <i class="fas fa-apple-alt"></i>
            </div>
          </div>
           
          <div class="contacto-reserva" id="reserva">
            <a class="reserva-primero" href="https://api.whatsapp.com/send?phone=593984769613" target="new"> 
            <div class="reserva-primero">
              <div class="contenido-reserva-p">
                <p class="reservar">Reservar</p>
              </div>
              <div class="icono-reserva">
               <i class="fa-brands fa-whatsapp fa-lg"></i>
              </div>
            </div>
               </a>
          </div>
          
          <div class="contacto-reserva" id="privado">
             <a class="reserva-primero" href="https://api.whatsapp.com/send?phone=593984769613" target="new"> 
            <div class="reserva-primero">
              <div class="contenido-reserva-p">
                <p class="cotizar-tour">Cotizar tour privado</p>
              </div>
              <div class="icono-reserva">
                <i class="fa-brands fa-whatsapp fa-lg"></i>
              </div>

            </div>
             </a>
          </div>
        </div>
      </div>
    </div>
    <div class="descripcion w3-row">
      <h2 id="incluye">Incluye</h2>
      <p class="mindo_incluye"> </p>
    </div>
    <div class="descripcion w3-row">
      <h2 id="noIncluye">No incluye</h2>
      <p class="mindo_no_incluye"></p>
      
    </div>
    <div class="descripcion w3-row">
      <h2 id="indicaciones">Indicaciones</h2>
      <p class="mindo_indicaciones"> </p>
    </div>
    <div class="ubicacion">
      <h2 id="ubicacion">Ubicación</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15959.26751747546!2d-78.78549777079117!3d-0.048695541364892035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d57c4699565207%3A0x7341c14f9b735b21!2sMindo!5e0!3m2!1ses!2sec!4v1694209487496!5m2!1ses!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <?php include "footer.php";?>
  </div>
  <script src="../js/destino.js"></script>
  <script src="../js/translate.js"></script>
    <script src="../js/vertical-timeline.min.js"></script>
    <script>
  $('#myTimeline').verticalTimeline({
    startLeft: false,
    alternate: true,
    animate: "slide",
    arrows: true
});</script>
</body>

</html>