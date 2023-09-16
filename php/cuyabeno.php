<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cuyabeno - Tours Ecuador</title>
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
      <img src="../img/avion.png" class="imagen_a"  style="transform: scaleX(-1);">
      <h1 class="titulo">Cuyabeno  &nbsp;</h1>
    </div>
    <div class="imagenes-portada">
      <div class="imagenes-portada-primero">
        <img src="../img/cuyabenoP0.jpg" alt="Estadia en Cuyabeno" class="w3-hover-opacity">

      </div>
      <div class=" imagenes-portada-segunda">
        <div class="portada-pri">
          <div class="portada-primera1"><img src="../img/cuyabenoP1.jpg" alt="Estadia en Cuyabeno" class="w3-hover-opacity"></div>
          <div class="portada-primera1"><img src="../img/cuyabenoP2.jpg" alt="Amanecer en el Cuyabeno" class="w3-hover-opacity"></div>
        </div>
        <div class="portada-pri">
          <div class="portada-primera1"><img src="../img/cuyabenoP3.jpg" alt="Turismo en Cuyabeno" class="w3-hover-opacity"></div>
          <div class="portada-primera1"><img src="../img/cuyabenoP4.jpg" alt="Río del Cuyabeno" class="w3-hover-opacity"></div>
        </div>
      </div>

    </div>
    <div class="contenedor-informacion">
      <div class="table-of-contents-sticky w3-hide-small">
        <div class="table-of-contents">
          <h3>Tour Cuyabeno</h3>
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
        <h4 class="w3-center">Día 1</h4>
        <div id="myTimeline">
            <div data-vtdate="Primera parada">
                <div data-vticon="true">
                    <i class="fas fa-volcano"></i>
                </div>
              <div class="image-column">
                <img src="../img/arribo-cuyabeno.jpg" alt="Entrada a la reserva Cuyabeno" class="cover-image">
              </div>
              <div class="content-column d1_cuyabeno_p1">
                <h3>Entrada a la reserva Cuyabeno</h3>
                <p>La aventura comienza a las 11:00 AM en la entrada a la reserva Cuyabeno, con un viaje en canoa río abajo hasta nuestro lodge (3 horas explorando el río en busca de monos, aves, etc).</p>
              </div>
            </div>
            <div data-vtdate="Segunda parada">
              <div data-vticon="true">
                    <i class="fas fa-camera"></i>
                </div>
              
              <div class="content-column d1_cuyabeno_p2">
                <h3>Almuerzo y tiempo para relajarse</h3>
                <p>Por la tarde explorará el río y las lagunas en busca de más fauna, nadará y disfrutará del atardecer.</p>
              </div>
            </div>
            <div data-vtdate="Tercera parada">
              <div data-vticon="true">
                    <i class="fas fa-water"></i>
                </div>
              <div class="image-column">
                <img src="../img/expedicion-canoa.jpg" alt="Expedición en canoa en el Cuyabeno" class="cover-image">
              </div>
              <div class="content-column d1_cuyabeno_p3">
                <h3>Expedición</h3>
                <p>Por la noche hará una expedición en canoa en busca de caimanes y después la cena. Para todos nuestros huéspedes interesados en conocer más sobre la selva amazónica, todas las noches el guía naturalista dará diferentes charlas como la “Cultura y comunidades, flora,
fauna y conservación ”.</p>
              </div>
            </div>
        </div>
        <h4 class="w3-center">Día 2</h4>
        <div id="myTimeline2" class="timeline-red">
            <div data-vtdate="Primera parada">
                <div data-vticon="true">
                    <i class="fas fa-volcano"></i>
                </div>
              <div class="image-column">
                <img src="../img/CUYABENO-caminata.jpg" alt="Caminata por los bosques de Cuyabeno" class="cover-image">
              </div>
              <div class="content-column d2_cuyabeno_p1">
                <h3>Caminata</h3>
                <p>Por la mañana después del
desayuno se realizará una caminata de aproximadamente 4 horas en el bosque primario acompañado del guía naturalista
quien le explicará sobre plantas medicinales, ranas, insectos, aves, etc.</p>
              </div>
            </div>
            <div data-vtdate="Segunda parada">
              <div data-vticon="true">
                    <i class="fas fa-camera"></i>
                </div>
            
              <div class="content-column d2_cuyabeno_p2">
                <h3>Almuerzo en el campamento y tiempo para relajarse.</h3>
                <p>Luego de 2 horas de descanso explorará los riachuelos en una canoa de remo tradicional para disfrutar de la singularidad de la naturaleza. Disfrutará de la puesta de sol en el río y, si las condiciones lo permiten, podrá ver delfines rosados.</p>
              </div>
            </div>
            <div data-vtdate="Tercera parada">
              <div data-vticon="true">
                    <i class="fas fa-water"></i>
                </div>
              
              <div class="content-column">
                <p class="d2_cuyabeno_p3">Retorno al albergue se prepara para la
caminata nocturna y después la cena. Esta noche tendrás la oportunidad de conocer y degustar las diferentes bebidas
tradicionales de la Amazonía</p>
              </div>
            </div>
        </div>
        <h4 class="w3-center">Día 3</h4>
        <div id="myTimeline3">
            <div data-vtdate="Primera parada">
                <div data-vticon="true">
                    <i class="fas fa-volcano"></i>
                </div>
              <div class="image-column">
                <img src="../img/riachuelos- bosque-inundado.jpg" alt="Bosque inundado en el Cuyabeno" class="cover-image">
              </div>
              <div class="content-column d3_cuyabeno_p1">
                <h3>Canoa a Remo</h3>
                <p>Después del desayuno, se
prepara para una mañana emocionante, explorará en total tranquilidad y silencio los riachuelos y el bosque inundado con su hábitat único en una canoa de remo tradicional. En esta actividad, al ir muy despacio y en silencio, tiene más oportunidad de observar más especies de monos, aves, perezosos, delfines y más.</p>
              </div>
            </div>
            <div data-vtdate="Segunda parada">
              <div data-vticon="true">
                    <i class="fas fa-camera"></i>
                </div>
              <div class="image-column">
                <img src="../img/chocolate-cuyabeno.jpg" alt="Chocolate en el Cuyabeno" class="cover-image">
              </div>
              <div class="content-column d3_cuyabeno_p2">
                <h3>Almuerzo en el campamento y tiempo para
relajarse.</h3>
                <p>Después de 2 horas de descanso preparará y degustará café y chocolate de forma tradicional. Por la noche después de la cena puede unirte a nuestras charlas o si le gusta la aventura hemos preparado para ti un lugar en medio del bosque donde puedes pasar unas horas o toda la noche disfrutando de los increíbles sonidos de la selva.</p>
              </div>
            </div>
        </div>
        <h4 class="w3-center">Día 4</h4>
        <div id="myTimeline4" class="timeline-red">
            <div data-vtdate="Primera parada">
                <div data-vticon="true">
                    <i class="fas fa-volcano"></i>
                </div>
              <div class="image-column">
                <img src="../img/kwichas-oriente.jpg" alt="Comunidades del Cuyabeno" class="cover-image">
              </div>
              <div class="content-column d4_cuyabeno_p1">
                <h3>Visita a comunidad</h3>
                <p>Luego de un delicioso desayuno visitaremos
la comunidad, allí una mujer indígena nos guiará por la comunidad, donde aprenderemos sobre su cultura, vestimenta, idioma pero sobre todo sobre su gastronomía ya que con ella prepararemos nuestro almuerzo.</p>
              </div>
            </div>
            <div data-vtdate="Segunda parada">
              <div data-vticon="true">
                    <i class="fas fa-camera"></i>
                </div>
              <div class="image-column">
                <img src="../img/limpia-cuyabeno.jpg" alt="Chamán en el Cuyabeno" class="cover-image">
              </div>
              <div class="content-column">
                <p class="d4_cuyabeno_p2">Por la tarde el chamán de la comunidad nos
enseñará sobre plantas medicinales y rituales del Amazonas. Luego de este emocionante día regresamos
al campamento, cenamos y nos relajamos.</p>
              </div>
            </div>
        </div>
        <h4 class="w3-center">Día 5</h4>
        <div id="myTimeline5">
            <div data-vtdate="Primera parada">
                <div data-vticon="true">
                    <i class="fas fa-volcano"></i>
                </div>
              <div class="image-column">
                <img src="../img/cuybeno-amanecer.jpg" alt="Amanecer en el Cuyabeno" class="cover-image">
              </div>
              <div class="content-column d5_cuyabeno_p1">
                <h3>Cuyabeno – Quito</h3>
                <p>Temprano en la mañana
explorará el río en busca de aves y disfrutará del amanecer. Luego de esta actividad regresará al campamento, desayunará y tendrá tiempo para organizar su equipaje. Luego tomará la canoa de regreso y explorará
el río Cuyabeno durante 2 horas en busca de más fauna hasta la entrada de la reserva (11 am), donde podrá tomar su transporte de regreso a casa.</p>
              </div>
            </div>
            <div data-vtdate="Fin del tour">
              <div data-vticon="true">
                    <i class="fas fa-camera"></i>
                </div>
              <div class="content-column">
                <p class="d5_cuyabeno_p2">Disfrute de un regreso cómodo a Quito.</p>
              </div>
            </div>
        </div>
      </section>
      <div class="reservas w3-hide-small">
        <div class="reservas-primero">
          <div id="dias">
            <div class="contenido-reserva-p">
              <p>5 <span class="dias">Días</span>&nbsp;</p>
            </div>
            <div class="icono-reserva">
              <i class="fa-solid fa-calendar-day"></i>
            </div>
          </div>
          <div id="noches">
            <div class="contenido-reserva-p">
              <p>4 <span class="noches">Noches</span> &nbsp;</p>
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
    <div class="descripcion w3-row">
      <h2 id="incluye">Incluye</h2>
      <p class="incluye_cuyabeno"></p>
      
    </div>
    <div class="descripcion w3-row">
      <h2 id="noIncluye">No incluye</h2>
      <p class="no_incluye_cuyabeno">  </p>
      
    </div>
    <div class="descripcion w3-row">
      <h2 id="indicaciones">Indicaciones</h2>
      <p class="indicaciones_cuyabeno"></p>
      
    </div>
    <div class="ubicacion">
      <h2 id="ubicacion">Ubicación</h2>
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.817733418739!2d-76.16873502616257!3d-0.03107793553989287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d3913fac13354f%3A0xb1b7330f58d66b0c!2sPiranha%20Ecolodge!5e0!3m2!1ses!2sec!4v1694227913748!5m2!1ses!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <?php include "footer.php";?>
  </div>
  <script src="../js/destino.js"></script>
  <script src="../js/translate.js"></script>
    <script src="../js/vertical-timeline.min.js"></script>
    <script>
  $('#myTimeline,#myTimeline2,#myTimeline3,#myTimeline4,#myTimeline5').verticalTimeline({
    startLeft: false,
    alternate: true,
    animate: "slide",
    arrows: true
});</script>
</body>

</html>