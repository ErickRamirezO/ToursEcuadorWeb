<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Baños - Tours Ecuador</title>
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
      <h1 class="titulo">Baños de Agua Santa &nbsp;</h1>
    </div>
    <div class="imagenes-portada">
      <div class="imagenes-portada-primero">
        <img src="../img/baños1_1.jpg" class="w3-hover-opacity" alt="Baños teleférico">

      </div>
      <div class=" imagenes-portada-segunda">
        <div class="portada-pri">
          <div class="portada-primera1"><img src="../img/baños1_5.jpg" alt="Baños Mirador el camino a la luna" class="w3-hover-opacity"></div>
          <div class="portada-primera1"><img src="../img/baños1_2.jpg" alt="Baños caminatada turística" class="w3-hover-opacity"></div>
        </div>
        <div class="portada-pri">
          <div class="portada-primera1"><img src="../img/baños1_3.jpg" alt="Baños Animal Park" class="w3-hover-opacity"></div>
          <div class="portada-primera1"><img src="../img/baños1_4.jpg" alt="Mirador Las Manos de Dios en Baños" class="w3-hover-opacity"></div>
        </div>
      </div>

    </div>
    <div class="contenedor-informacion">
      <div class="table-of-contents-sticky w3-hide-small">
        <div class="table-of-contents">
          <h3>Tour Baños de Agua Santa</h3>
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
                <img src="../img/rutaV.jpg" class="cover-image" alt="Ruta de los volcanes Ecuador">
              </div>
              <div class="content-column baños_p1">
                <h3>Ruta de los volcanes</h3>
                <p> Comenzamos con nuestra aventura por
la "Avenida de los Volcanes" , en su trayecto podremos apreciar Ilinizas, Rumiñahui, y el volcán Cotopaxi</p>
              </div>
            </div>
            <div data-vtdate="Segunda parada">
              <div data-vticon="true">
                    <i class="fas fa-camera"></i>
                </div>
              <div class="image-column">
                <img src="../img/rutaC.jpg" class="cover-image" alt="Ruta de las cascadas Baños">
              </div>
              <div class="content-column baños_p2">
                <h3>Ruta de las cascadas</h3>
                <p>Continuamos con la ruta de las cascadas,
realizaremos varias paradas para explorar la zona, observaremos la Cascada del Agoyán, y haremos una parada en Manto de la Novia dónde tendremos la oportunidad de cruzar en una tarabita considerada una de las más grandes del Ecuador. (Opcional no incluye)</p>
              </div>
            </div>
            <div data-vtdate="Tercera parada">
              <div data-vticon="true">
                    <i class="fas fa-water"></i>
                </div>
              <div class="image-column">
                <img src="../img/pailon-cascada.jpg" class="cover-image" alt="Baños El Pailón del Diablo">
              </div>
              <div class="content-column baños_p3">
                <h3>Pailón del diablo</h3>
                <p>Continuamos a Río Verde donde se
encuentra la Cascada Pailón del Diablo. Caminata hasta la Cascada Pailón del Diablo, con 80 metros de altura y 20 metros de profundidad</p>
              </div>
            </div>
            <div data-vtdate="Cuarta parada">
              <div data-vticon="true">
                    <i class="fas fa-camera"></i>
                </div>
              <div class="image-column">
                <img src="../img/puente.jpg" class="cover-image" alt="Juegos extremos en Baños">
              </div>
              <div class="content-column baños_p4">
                <h3>Juegos extremos</h3>
                <p>Realizaremos una parada para la realización de juegos extremos como: Salto de Tarzán,Canopy como puente Tibetano, escalada y el puente de cristal (Opcional no incluye)</p>
              </div>
            </div>
            <div data-vtdate="Quinta parada">
              <div data-vticon="true">
                    <i class="fas fa-camera"></i>
                </div>
              <div class="image-column">
                <img src="../img/columpio.jpg" class="cover-image" alt="Columpio del fin del mundo junto a la casa del arbol en Baños">
              </div>
              <div class="content-column baños_p5">
                <h3>Columpio del fin del mundo</h3>
                <p>El columpio del fin del mundo se encuentra en la Casa del árbol</p>
              </div>
            </div>
            <div data-vtdate="Fin del Tour">
              <div data-vticon="true">
                <i class="fa-solid fa-location-dot"></i>
              </div>
              <div class="content-column baños_p6">
                <h3>Retorno a Quito</h3>
                <p>Visita a un paradero de dulces
típicos donde se degustara de jugo de caña, si desean pueden comprar</p>
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
              <p>9 <span class="destinos">Destinos</span> &nbsp;</p>
            </div>
            <div class="icono-reserva">
              <i class="fa-solid fa-bus"></i>
            </div>
          </div>
          <div id="alimentacion" class="w3-hide">
            <div class="contenido-reserva-p">
              <p class="noAlimentacion">No Alimentación</p>
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
                <p class="cotizar-tour">Cotizar tour privado </p>
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
      <ul class="baños_incluye"> 
        <li>Transporte de turismo full equipo</li>
        <li>Seguro de viajes</li> 
        <li>Guía todo el trayecto</li> 
        <li>Ingreso Pailón del diablo</li> 
        <li>Tarabita en Manto de la Novia</li> 
        <li>Casa del árbol</li>  
        <li>Columpio del fin del mundo</li>  
      </ul>
    </div>
    <div class="descripcion w3-row">
      <h2 id="noIncluye">No incluye</h2>
      <ul class="baños_no_incluye"> 
        <li>Actividades extras (deportes extremos)</li> 
        <li>Gastos personales del turista</li> 
        <li>Desayuno, almuerzo</li>  </ul>
    </div>
    <div class="descripcion w3-row">
      <h2 id="indicaciones">Indicaciones</h2>
      <ul class="baños_indicaciones">
        <li>Ropa cómoda </li> 
        <li>Gorra</li> 
        <li>Bloqueador solar</li> 
        <li>Zapatos de buen labrado</li> 
        <li>Paraguas o poncho de agua</li>
        <li>Cámara de fotos</li>  
      </ul>
    </div>
    <div class="ubicacion">
      <h2 id="ubicacion">Ubicación</h2>
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127635.0614274305!2d-78.57798217667258!3d-1.41848049421079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d3972a036b79f5%3A0x6edaa151458b5deb!2sBa%C3%B1os%20de%20Agua%20Santa!5e0!3m2!1ses!2sec!4v1694107963630!5m2!1ses!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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