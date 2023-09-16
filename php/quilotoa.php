<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quilotoa - Tours Ecuador</title>
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
      <h1 class="titulo laguna">La Laguna de Quilotoa &nbsp;&nbsp;</h1>
    </div>
    <div class="imagenes-portada">
      <div class="imagenes-portada-primero">
        <img src="../img/quilotoap0.jpg" alt="La Laguna de Quilotoa" class="w3-hover-opacity">

      </div>
      <div class=" imagenes-portada-segunda">
        <div class="portada-pri">
          <div class="portada-primera1"><img src="../img/quilotoap01.jpg" alt="Laguna de Quilotoa" class="w3-hover-opacity"></div>
          <div class="portada-primera1"><img src="../img/quilotoap02.jpg" alt="Laguna de Quilotoa" class="w3-hover-opacity"></div>
        </div>
        <div class="portada-pri">
          <div class="portada-primera1"><img src="../img/quilotoap030.jpg" alt="Comunidades en Quilotoa" class="w3-hover-opacity"></div>
          <div class="portada-primera1"><img src="../img/quilotoap04.jpg" alt="Quilotoa Mirador" class="w3-hover-opacity"></div>
        </div>
      </div>

    </div>
    <div class="contenedor-informacion">
      <div class="table-of-contents-sticky w3-hide-small">
        <div class="table-of-contents">
          <h3>Tour Quilotoa</h3>
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
                <img src="../img/rutaV.jpg" alt="Ruta de los Volcanes" class="cover-image">
              </div>
              <div class="content-column quilotoa_p1">
                <h4>Ruta de los volcanes</h4>
                <p> Nuestra aventura comienza por la "Avenida de los Volcanes", en su trayecto podremos apreciar los Ilinizas, el Rumiñahui, Cotopaxi.</p>
              </div>
            </div>
            <div data-vtdate="Segunda parada">
              <div data-vticon="true">
                    <i class="fas fa-camera"></i>
                </div>
              <div class="image-column">
                <img src="../img/canonToachi.jpg" alt="Cañón del Toachi" class="cover-image">
              </div>
              <div class="content-column quilotoa_p2">
                <h3>Cañón del Toachi</h3>
                <p>Avistamiento al majestuoso Cañón del Toachi.</p>
              </div>
            </div>
            <div data-vtdate="Tercera parada">
              <div data-vticon="true">
                    <i class="fas fa-water"></i>
                </div>
              <div class="image-column">
                <img src="../img/lagunaQuilotoa.jpg" alt="Laguna del Quilotoa" class="cover-image">
              </div>
              <div class="content-column quilotoa_p3">
                <h3>Laguna del Quilotoa</h3>
                <p>Siguiente parada, Laguna del Quilotoa, en el cual se podrá observar el majestuoso volcán con su laguna de agua color turquesa. Pasaremos a degustar de un delicioso desayuno con una gran vista hacia la laguna.</p>
              </div>
            </div>
            <div data-vtdate="Cuarta parada">
              <div data-vticon="true">
                    <i class="fas fa-camera"></i>
                </div>
              <div class="image-column">
                <img src="../img/caminatalagunaQuilotoa.jpg" alt="Caminata en Laguna del Quilotoa" class="cover-image">
              </div>
              <div class="content-column quilotoa_p4">
                <h3>Caminata a la Laguna del Quilotoa</h3>
                <p>Procederemos al descenso por senderos con paisajes mágicos. En la laguna realizaremos un deporte acuático Kayak, paseo en bote por la laguna.</p>
              </div>
            </div>
            <div data-vtdate="Quinta parada">
              <div data-vticon="true">
                    <i class="fas fa-camera"></i>
                </div>
              <div class="image-column">
                <img src="../img/museoQuilotoa.jpg" alt="Museo del Quilotoa" class="cover-image">
              </div>
              <div class="content-column quilotoa_p5">
                <h3>Museo del Quilotoa</h3>
                <p>Recorrido por el museo del Quilotoa y la galería de artesanías.</p>
              </div>
            </div>
            <div data-vtdate="Sexta parada">
              <div data-vticon="true">
                    <i class="fas fa-camera"></i>
                </div>
          
              <div class="content-column">
                <p class="quilotoa_p6">Visita viviendas tradicionales</p>
              </div>
            </div>
            <div data-vtdate="Séptima parada">
              <div data-vticon="true">
                    <i class="fas fa-camera"></i>
                </div>
              <div class="image-column">
                <img src="../img/quilotoaArte.jpg" alt="Tradiciones en el Quilotoa" class="cover-image">
              </div>
              <div class="content-column">
                <p class="quilotoa_p7" >Tiempo de compras</p>
              </div>
            </div>
            <div data-vtdate="Fin del Tour">
              <div data-vticon="true">
                <i class="fa-solid fa-location-dot"></i>
              </div>
              <div class="content-column">
                <p class="quilotoa_p8" >Retorno a Quito</p>
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
              <p>6 <span class="destinos">Destinos</span> &nbsp;</p>
            </div>
            <div class="icono-reserva">
              <i class="fa-solid fa-bus"></i>
            </div>
          </div>
          <div id="alimentacion">
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
      <p class="incluye_quilotoa"></p>
     
    </div>
    <div class="descripcion w3-row">
      <h2 id="noIncluye">No incluye</h2>
      <p class="no_incluye_quilotoa"></p>
      
    </div>
    <div class="descripcion w3-row">
      <h2 id="indicaciones">Indicaciones</h2>
      <p class="indicaciones_quilotoa"></p>
      
    </div>
    <div class="ubicacion">
      <h2 id="ubicacion">Ubicación</h2>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15957.478000663596!2d-78.91436587072666!3d-0.8594118306738628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d4ecf2f2a74419%3A0x92c280f1f5d7614c!2sLaguna%20de%20Quilotoa!5e0!3m2!1ses!2sec!4v1694115773169!5m2!1ses!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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