<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yasuní - Tours Ecuador</title>
  <link rel="icon" href="../img/iconToursEcuador.png" type="image/png" sizes="32x32"/>
  <link rel="stylesheet" href="../css/estilo_index.css" type="text/css">
  <link rel="stylesheet" href="../css/estilo_destinos.css" type="text/css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"
    integrity="sha512-z4OUqw38qNLpn1libAN9BsoDx6nbNFio5lA6CuTp9NlK83b89hgyCVq+N5FdBJptINztxn1Z3SaKSKUS5UP60Q=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link href="../css/vertical-timeline.css" rel="stylesheet" type="text/css">
</head>

<body>
  <div class="principal">
    <?php include "sidenav.php";?>
    <?php include "navbar.php";?>
    <div class="titulo_destino">
      <img src="../img/avion.png" class="imagen_a" style="transform: scaleX(-1);">
      <h1 class="titulo">Yasuní &nbsp;</h1>
    </div>
    <div class="imagenes-portada">
      <div class="imagenes-portada-primero">
        <img src="../img/yasuniP0.jpg" class="w3-hover-opacity">

      </div>
      <div class=" imagenes-portada-segunda">
        <div class="portada-pri">
          <div class="portada-primera1"><img src="../img/yasuniP1.jpg" class="w3-hover-opacity"></div>
          <div class="portada-primera1"><img src="../img/yasuniP2.jpg" class="w3-hover-opacity"></div>
        </div>
        <div class="portada-pri">
          <div class="portada-primera1"><img src="../img/yasuniP3.jpg" class="w3-hover-opacity"></div>
          <div class="portada-primera1"><img src="../img/yasuniP4.jpg" class="w3-hover-opacity"></div>
        </div>
      </div>

    </div>
    <div class="contenedor-informacion">
      <div class="table-of-contents-sticky w3-hide-small">
        <div class="table-of-contents">
          <h3>Tour Yasuní</h3>
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
        <h2 id="itinerario" class="w3-center">Itinerario</h2>
        <h3 class="w3-center">Día 1</h3>
        <div id="myTimeline">
            <div data-vtdate="Inicio">
                <div data-vticon="true">
                    <i class="fas fa-bread-slice"></i>
                </div>
              <div class="content-column d1_yasuni_desayuno">
                Desayuno / americano
              </div>
            </div>
            <div data-vtdate="Primera parada">
              <div data-vticon="true">
                    <i class="fas fa-moon"></i>
                </div>
              <div class="image-column">
                <img src="../img/Zarpe-rio-Napo.jpg" class="cover-image">
              </div>
              <div class="content-column d1_yasuni_p1">
                Zarpe de Coca a Sacha Ñampi a través del rio Napo
              </div>
            </div>
            <div data-vtdate="Segunda parada">
              <div data-vticon="true">
                    <i class="fas fa-moon"></i>
                </div>
              <div class="image-column">
                <img src="../img/arribo-yasuni.jpg" class="cover-image">
              </div>
              <div class="content-column d1_yasuni_p2">
                Arribo a Sacha Ñampi
              </div>
            </div>
            <div>
              <div data-vticon="true">
                    <i class="fas fa-drumstick-bite"></i>
                </div>
              <div class="content-column almuerzo">
                Almuerzo
              </div>
            </div>
            <div data-vtdate="Tercera parada">
              <div data-vticon="true">
                    <i class="fas fa-moon"></i>
                </div>
              <div class="image-column">
                <img src="../img/cedron.jpg" class="cover-image">
              </div>
              <div class="content-column d1_yasuni_p3">
                Se realizará senderismo por alrededor de 2h30, se podrá observar gran cantidad de plantas medicinales y el 
árbol más grande del Yasuni.
              </div>
            </div>
            <div>
              <div data-vticon="true">
                    <i class="fas fa-drumstick-bite"></i>
                </div>
              <div class="content-column cena">
                Cena
              </div>
            </div>
            <div data-vtdate="Cuarta parada">
              <div data-vticon="true">
                <i class="fas fa-moon"></i>
              </div>
              <div class="image-column">
                <img src="../img/danza.jpg" class="cover-image">
              </div>
              <div class="content-column d1_yasuni_p4">
                Danza de la cultura Kichwa
              </div>
            </div>
            <div>
              <div data-vticon="true">
                <i class="fa-solid fa-bed"></i>
              </div>
              <div class="content-column descanso">
                Descanso
              </div>
            </div>
        </div>
        <h3 class="w3-center">Día 2</h3>
        <div id="myTimeline2" class="timeline-red">
          <div data-vtdate="Inicio">
            <div data-vticon="true">
              <i class="fas fa-bread-slice"></i>
            </div>
            <div class="content-column desayuno">
              Desayuno
            </div>
          </div>
          <div data-vtdate="Primera parada">
            <div data-vticon="true">
              <i class="fas fa-hiking"></i>
            </div>
            <div class="image-column">
                <img src="../img/rio-Tambocha-Yasuni.jpg" class="cover-image">
              </div>
            <div class="content-column d2_yasuni_p1">
              Se realizará senderismo por alrededor de 3h30, hasta llegar al rio Tambocha Yasuní.<br>
Full caminata, navegación a canoa remo por zonas inundables
Observación de monos, aves y saladero de guanganas. 
            </div>
          </div>
          <div>
            <div data-vticon="true">
              <i class="fas fa-drumstick-bite"></i>
            </div>
            <div class="content-column d2_yasuni_entre_p1_p2">
              Almuerzo en el rio Jatuncocha
            </div>
          </div>
          <div data-vtdate="Segunda parada">
            <div data-vticon="true">
              <i class="fas fa-water"></i>
            </div>
            <div class="image-column">
                <img src="../img/yasuni-rio.jpg" class="cover-image">
              </div>
            <div class="content-column d2_yasuni_p2">
              Navegación en canoa a motor pequeños, lugar donde se observará aves, nutrias, hasta llegar al rio Yasuní.
            </div>
          </div>
          <div data-vtdate="Tercera parada">
            <div data-vticon="true">
              <i class="fas fa-camera"></i>
            </div>
            <div class="content-column d2_yasuni_p3">
              Registro en el control del MEA.
            </div>
          </div>
          <div data-vtdate="Cuarta parada">
            <div data-vticon="true">
              <i class="fas fa-camera"></i>
            </div>
            <div class="image-column">
                <img src="../img/delfin-yasuni.jpg" class="cover-image">
              </div>
            <div class="content-column d2_yasuni_p4">
              Salida a la bocana del rio Yasuní, para observar a los delfines.
            </div>
          </div>
          <div data-vtdate="Quinta parada">
            <div data-vticon="true">
              <i class="fas fa-camera"></i>
            </div>
            <div class="image-column">
                <img src="../img/Arribo-ecolodge.jpg" class="cover-image">
              </div>
            <div class="content-column d2_yasuni_p5">
              Arribo al ecolodge
            </div>
          </div>
          <div>
            <div data-vticon="true">
              <i class="fas fa-drumstick-bite"></i>
            </div>
            <div class="content-column cena">
              Cena
            </div>
          </div>
          <div>
            <div data-vticon="true">
              <i class="fa-solid fa-bed"></i>
            </div>
            <div class="content-column descanso">
              Descanso
            </div>
          </div>
        </div>
        <h3 class="w3-center">Día 3</h3>
        <div id="myTimeline3">
          <div data-vtdate="Inicio">
            <div data-vticon="true">
              <i class="fas fa-bread-slice"></i>
            </div>
            <div class="content-column desayuno">
              Desayuno
            </div>
          </div>
          <div data-vtdate="Primera parada">
            <div data-vticon="true">
              <i class="fas fa-water"></i>
            </div>
            <div class="image-column">
                <img src="../img/rio-Aguarico.jpg" class="cover-image">
              </div>
            <div class="content-column d3_yasuni_p1">
              Traslado al rio Aguarico
            </div>
          </div>
          <div data-vtdate="Segunda parada">
            <div data-vticon="true">
              <i class="fa-solid fa-camera"></i>
            </div>
            <div class="image-column">
                <img src="../img/Avistamiento-delfines.jpg" class="cover-image">
              </div>
            <div class="content-column d3_yasuni_p2">
              Avistamiento de delfines
            </div>
          </div>
          <div data-vtdate="Tercera parada">
            <div data-vticon="true">
              <i class="fas fa-camera"></i>
            </div>
            <div class="image-column">
                <img src="../img/Visita-Cultura-Secoya.jpg" class="cover-image">
              </div>
            <div class="content-column d3_yasuni_p3">
              Visita Cultura Secoya, lugar donde el turista tendrá una bienvenida con una danza tradicional, su forma de convivencia y degustará de su alimentación típica.
            </div>
          </div>
          <div data-vtdate="Cuarta parada">
            <div data-vticon="true">
              <i class="fas fa-camera"></i>
            </div>
            <div class="content-column d3_yasuni_p4">
              Retorno al ecolodge
            </div>
          </div>
          <div>
            <div data-vticon="true">
              <i class="fas fa-bread-slice"></i>
            </div>
            <div class="content-column d3_yasuni_entre_p4_p5">
              Almuerzo en el ecolodge
            </div>
          </div>
          <div data-vtdate="Quinta parada">
            <div data-vticon="true">
              <i class="fas fa-camera"></i>
            </div>
            <div class="image-column">
                <img src="../img/Cosecha-cacao.jpg" class="cover-image">
              </div>
            <div class="content-column d3_yasuni_p5">
              Cosecha de cacao
            </div>
          </div>
          <div data-vtdate="Sexta parada">
            <div data-vticon="true">
              <i class="fas fa-camera"></i>
            </div>
            <div class="image-column">
                <img src="../img/Elaboracion-chocolate.jpg" class="cover-image">
              </div>
            <div class="content-column d3_yasuni_p6">
              Elaboración de la pasta de chocolate al carbón
            </div>
          </div>
          <div>
            <div data-vticon="true">
              <i class="fas fa-bread-slice"></i>
            </div>
            <div class="content-column cena">
              Cena
            </div>
          </div>
          <div data-vtdate="Séptima parada">
            <div data-vticon="true">
              <i class="fa-solid fa-frog"></i>
            </div>
            <div class="image-column">
                <img src="../img/Observacion-insectos.jpg" class="cover-image">
              </div>
            <div class="content-column d3_yasuni_p7">
              Observación nocturna de insectos, ranas
            </div>
          </div>
          <div>
            <div data-vticon="true">
              <i class="fa-solid fa-bed"></i>
            </div>
            <div class="content-column descanso">
              Descanso
            </div>
          </div>
        </div>
        <h3 class="w3-center">Día 4</h3>
        <div id="myTimeline4" class="timeline-red">
          <div data-vtdate="Inicio">
            <div data-vticon="true">
              <i class="fas fa-bread-slice"></i>
            </div>
            <div class="content-column desayuno">
              Desayuno
            </div>
          </div>
          <div data-vtdate="Primera parada">
            <div data-vticon="true">
              <i class="fa-solid fa-dove"></i>
            </div>
            <div class="image-column">
                <img src="../img/avesYasuni.jpg" class="cover-image">
              </div>
            <div class="content-column d4_yasuni_p1">
              Visita Rio Tamcocha, observación de aves
            </div>
          </div>
          <div data-vtdate="Segunda parada">
            <div data-vticon="true">
              <i class="fas fa-hiking"></i>
            </div>
            <div class="image-column">
                <img src="../img/Sendero_yasuni.jpg" class="cover-image">
              </div>
            <div class="content-column d4_yasuni_p2">
              Se realizará senderismo por alrededor de 1h30 desde el rio Tambococha hasta salir al rio Yasuní, MEA.
            </div>
          </div>
          <div data-vtdate="Tercera parada">
            <div data-vticon="true">
              <i class="fas fa-camera"></i>
            </div>
            <div class="image-column">
                <img src="../img/laguna-Tambococha.jpg" class="cover-image">
              </div>
            <div class="content-column d4_yasuni_p3">
              Visita laguna Tambococha
            </div>
          </div>
          <div>
            <div data-vticon="true">
              <i class="fas fa-drumstick-bite"></i>
            </div>
            <div class="content-column d4_yasuni_entre_p3_p4">
              Almuerzo en la Laguna
            </div>
          </div>
          <div data-vtdate="Cuarta parada">
            <div data-vticon="true">
              <i class="fa-solid fa-fish-fins"></i>
            </div>
            <div class="image-column">
                <img src="../img/pesca-de-piranas.jpg" class="cover-image">
              </div>
            <div class="content-column d4_yasuni_p4">
              Pesca recreativa
            </div>
          </div>
          <div data-vtdate="Quinta parada">
            <div data-vticon="true">
              <i class="fas fa-camera"></i>
            </div>
            <div class="content-column d4_yasuni_p5">
              Retorno y arribo al ecologe
            </div>
          </div>
          <div>
            <div data-vticon="true">
              <i class="fa-solid fa-bed"></i>
            </div>
            <div class="content-column cena_y_descanso">
              Cena y Descanso
            </div>
          </div>
        </div>
        <h3 class="w3-center">Día 5</h3>
        <div id="myTimeline5">
          <div data-vtdate="Inicio">
            <div data-vticon="true">
              <i class="fas fa-bread-slice"></i>
            </div>
            <div class="content-column desayuno">
              Desayuno
            </div>
          </div>
          <div data-vtdate="Primera parada">
            <div data-vticon="true">
              <i class="fas fa-camera"></i>
            </div>
            <div class="image-column">
                <img src="../img/Pichincha-lomaa.jpg" class="cover-image">
              </div>
            <div class="content-column d5_yasuni_p1">
              Ingreso a Pichincha loma alta, visita de saladeros de animales, full flora y fauna.
            </div>
          </div>
          <div>
            <div data-vticon="true">
              <i class="fas fa-bread-slice"></i>
            </div>
            <div class="content-column almuerzo">
              Almuerzo
            </div>
          </div>
          <div data-vtdate="Segunda parada">
            <div data-vticon="true">
              <i class="fas fa-camera"></i>
            </div>
            <div class="image-column">
                <img src="../img/Laguna-Quistococha.jpg" class="cover-image">
              </div>
            <div class="content-column d5_yasuni_p2">
              Visita laguna Quistococha, pesca de pirañas
            </div>
          </div>
          <div data-vtdate="Tercera parada">
            <div data-vticon="true">
              <i class="fa-solid fa-campground"></i>
            </div>
            <div class="image-column">
                <img src="../img/Camping.jpg" class="cover-image">
              </div>
            <div class="content-columnd5_yasuni_p3">
              Camping en carpas en la selva, laguna o guardianía del MAE.
            </div>
          </div>
          <div>
            <div data-vticon="true">
              <i class="fas fa-bread-slice"></i>
            </div>
            <div class="content-column cena">
              Cena
            </div>
          </div>
          <div data-vtdate="Cuarta parada">
            <div data-vticon="true">
              <i class="fa-solid fa-camera"></i>
            </div>
            <div class="image-column">
                <img src="../img/caimanes.jpg" class="cover-image">
              </div>
            <div class="content-column d5_yasuni_p4">
              Avistamiento nocturno de caimán 
            </div>
          </div>
          <div>
            <div data-vticon="true">
              <i class="fa-solid fa-bed"></i>
            </div>
            <div class="content-column descanso">
              Descanso
            </div>
          </div>
        </div>
        <h3 class="w3-center">Día 6</h3>
        <div id="myTimeline6" class="timeline-red">
          <div data-vtdate="Inicio">
            <div data-vticon="true">
              <i class="fa-solid fa-dove"></i>
            </div>
            <div class="image-column">
                <img src="../img/Navegacion-aves.jpg" class="cover-image">
              </div>
            <div class="content-column d6_yasuni_inicio">
              Navegación por la laguna para observar aves
            </div>
          </div>
          <div>
            <div data-vticon="true">
              <i class="fas fa-bread-slice"></i>
            </div>
            <div class="content-column desayuno">
              Desayuno
            </div>
          </div>
          <div data-vtdate="Primera parada">
            <div data-vticon="true">
              <i class="fa-solid fa-location-dot"></i>
            </div>
            <div class="content-column d6_yasuni_p1">
              Traslado y Arribo a ecolodge. Disfrutaremos de un Almuerzo
            </div>
          </div>
          <div data-vtdate="Segunda parada">
            <div data-vticon="true">
              <i class="fa-solid fa-location-dot"></i>
            </div>
            <div class="image-column">
                <img src="../img/EL-COCA.jpg" class="cover-image">
              </div>
            <div class="content-column d6_yasuni_p2">
               Retorno a El Coca
            </div>
          </div>
          <div data-vtdate="Fin del Tour">
            <div data-vticon="true">
              <i class="fa-solid fa-location-dot"></i>
            </div>
            <div class="content-column d6_yasuni_fin">
              Arribo a El Coca, fin de tour.
            </div>
          </div>
        </div>
      </section>
      
      <div class="reservas w3-hide-small">
        <div class="reservas-primero reservas">
          <div id="dias">
            <div class="contenido-reserva-p">
              <p>6 <span class="dias">Días</span>&nbsp;</p>
            </div>
            <div class="icono-reserva">
              <i class="fa-solid fa-calendar-day"></i>
            </div>
          </div>
          <div id="noches">
            <div class="contenido-reserva-p">
              <p>5 <span class="noches">Noches</span> &nbsp;</p>
            </div>
            <div class="icono-reserva">
              <i class="fas fa-moon"></i>
            </div>
          </div>
          <div id="destino">
            <div class="contenido-reserva-p">
              <p>5 <span class="destinos">Destinos</span> &nbsp;</p>
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
    <br>
    <div class="descripcion w3-row">
      <h2 id="incluye">Incluye</h2>
      <ul class="incluyeYasuni">
        <li>Asistencia personalizada en El Coca</li>
        <li>Hotel en El Coca un día antes del ingreso a Yasuní</li>
        <li>Transporte fluvial 4 horas directo</li>
        <li>Alojamiento en cabañas privadas</li>
        <li>Alimentación completa durante el tour</li>
        <li>Entrada a senderos y actividades culturales</li>
        <li>Botas de caucho y ponchos de agua</li>
      </ul>
    </div>
    <div class="descripcion w3-row">
      <h2 id="noIncluye">No incluye</h2>
      <ul class="noIncluyeYasuni">
        <li>Transporte terrestre o aéreo hasta la ciudad de Coca y regreso a origen</li>
        <li>Propinas, comidas y bebidas extras</li>
        <li>Transporte fluvial a Perú \"población de Pantoja\"</li>
        <li>Actividades no especificadas en el programa</li>
        <li>Pago de medicamentos o consumos extras</li>
      </ul>
    </div>
    <div class="descripcion w3-row">
      <h2 id="indicaciones">Indicaciones</h2>
      <ul class="indicacionesYasuni">
        <li>Ropa cómoda</li>
        <li>Gorra</li>
        <li>Bloqueador solar</li>
        <li>Cambio de zapatillas</li>
        <li>Cámara de fotos</li>
        <li>Repelente de mosquitos</li>
        <li>Botas de caucho (en caso de tener)</li>
      </ul>
    </div>
    <div class="ubicacion">
      <h2 id="ubicacion">Ubicación</h2>
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3316524037373!2d-75.45309352615827!3d-0.8949151353212582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d96b619e564d77%3A0xf541d8e6b10ca25c!2sSacha%20%C3%91ampi%20Ecolodge.%20%22Tour%20Yasuni%20Amazonia%20Ecuador%22.!5e0!3m2!1ses!2sec!4v1694227944225!5m2!1ses!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <?php include "footer.php";?>
  </div>
  <script src="../js/destino.js"></script>
  <script src="../js/translate.js"></script>
    <script src="../js/vertical-timeline.min.js"></script>
    <script>
  $('#myTimeline, #myTimeline2, #myTimeline3, #myTimeline4, #myTimeline5, #myTimeline6').verticalTimeline({
    startLeft: false,
    alternate: true,
    animate: "slide",
    arrows: true
});</script>
</body>

</html>