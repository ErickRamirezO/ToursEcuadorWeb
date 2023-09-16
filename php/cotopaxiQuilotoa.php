<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cotopaxi Quilotoa - Tours Ecuador</title>
  <link rel="icon" href="../img/iconToursEcuador.png" type="image/png" sizes="32x32"/>
  <link rel="stylesheet" href="../css/estilo_index.css" type="text/css">
  <link rel="stylesheet" href="../css/estilo_destinos.css" type="text/css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
      <h1 class="titulo">Cotopaxi Quilotoa &nbsp;&nbsp;</h1>
    </div>
    <div class="imagenes-portada">
      <div class="imagenes-portada-primero">
        <img src="../img/cotopaxiP0.jpg" class="w3-hover-opacity">

      </div>
      <div class=" imagenes-portada-segunda">
        <div class="portada-pri">
          <div class="portada-primera1"><img src="../img/quilotoap02.jpg" class="w3-hover-opacity"></div>
          <div class="portada-primera1"><img src="../img/cotopaxiP2.jpg" class="w3-hover-opacity"></div>
        </div>
        <div class="portada-pri">
          <div class="portada-primera1"><img src="../img/quilotoap04.jpg" class="w3-hover-opacity"></div>
          <div class="portada-primera1"><img src="../img/cotopaxiP3.jpg" class="w3-hover-opacity"></div>
        </div>
      </div>

    </div>
    <div class="contenedor-informacion">
      <div class="table-of-contents-sticky w3-hide-small">
        <div class="table-of-contents">
          <h3>Tour Cotopaxi - Quilotoa</h3>
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
        <h4 class="w3-center dia1">Día 1</h4>
        <div id="myTimeline">
            <div data-vtdate="Primera parada">
                <div data-vticon="true">
                    <i class="fas fa-volcano"></i>
                </div>
              <div class="image-column">
                <img src="../img/machachi.jpg" class="cover-image">
              </div>
              <div class="content-column d1_Cotopaxi_Quilotoa_p1">
                <h4>Parada en Machachi</h4>
                <p>Esta será nuestra primera parada, ideal para comprar un snack, utilizar los baños y hacer uso de cajeros automáticos antes de ingresar al emocionante Parque Nacional Cotopaxi.</p>
              </div>
            </div>
            <div data-vtdate="Segunda parada">
              <div data-vticon="true">
                    <i class="fas fa-camera"></i>
                </div>
              <div class="image-column">
                <img src="../img/parqueN.jpg" class="cover-image">
              </div>
              <div class="content-column d1_Cotopaxi_Quilotoa_p2">
                <h4>Ingreso al Parque Nacional Cotopaxi</h4>
                <p>Comienza la aventura en el Parque Nacional Cotopaxi, una reserva ecológica única que combina el paisaje del páramo andino, suelos volcánicos y hermosas lagunas.</p>
              </div>
            </div>
            <div data-vtdate="Tercera parada">
              <div data-vticon="true">
                    <i class="fas fa-water"></i>
                </div>
              <div class="image-column">
                <img src="../img/lagunadeL.jpg" class="cover-image">
              </div>
              <div class="content-column d1_Cotopaxi_Quilotoa_p3">
                <h4>Visita a la Laguna de Limpiopungo</h4>
                <p>En esta impresionante laguna, tendrás la oportunidad de observar diversas especies de aves y plantas nativas mientras disfrutas de la belleza del páramo andino.</p>
              </div>
            </div>
            <div data-vtdate="Cuarta parada">
              <div data-vticon="true">
                    <i class="fas fa-camera"></i>
                </div>
              <div class="image-column">
                <img src="../img/centroI.jpg" class="cover-image">
              </div>
              <div class="content-column d1_Cotopaxi_Quilotoa_p4">
                <h4>Centro de Interpretación Mariscal Sucre</h4>
                <p>Obtén información detallada sobre el Parque Nacional Cotopaxi en el Centro de Interpretación, conocido como Museo del Parque. Además, visita la tienda de recuerdos y disfruta de una pausa en la cafetería.</p>
              </div>
            </div>
            <div data-vtdate="Quinta parada">
              <div data-vticon="true">
                    <i class="fas fa-camera"></i>
                </div>
              <div class="image-column">
                <img src="../img/refugioJR.jpg" class="cover-image">
              </div>
              <div class="content-column d1_Cotopaxi_Quilotoa_p5">
                <h4>Caminata al refugio José Rivas (4864 mts)</h4>
                <p>Desde los años 70, este refugio ha sido un lugar de acogida para montañistas profesionales y aficionados que buscan explorar el majestuoso Cotopaxi. Esta caminata te llevará a las faldas del volcán.</p>
              </div>
            </div>
            <div data-vtdate="Sexta parada">
              <div data-vticon="true">
                    <i class="fas fa-camera"></i>
                </div>
             
              <div class="content-column d1_Cotopaxi_Quilotoa_p6">
                <h4>Parada para el almuerzo</h4>
                <p>Disfruta de la comida típica de la zona, como el caldo de gallina, el locro y el borrego asado, con opciones vegetarianas disponibles. (Almuerzo no incluido)</p>
              </div>
            </div>
            <div data-vtdate="Séptima parada">
              <div data-vticon="true">
                    <i class="fas fa-moon"></i>
                </div>
              
              <div class="content-column d1_Cotopaxi_Quilotoa_p7">
                <h4>Noche en una hostería cerca del volcán Cotopaxi</h4>
                <p>Realiza el check-in en la hostería para una noche de descanso antes de continuar tu emocionante viaje.</p>
              </div>
            </div>
        </div>
         <h4 class="w3-center dia2">Día 2</h4>
        <div id="myTimeline2" class="timeline-red">
            <div data-vtdate="Primera parada">
                <div data-vticon="true">
                    <i class="fas fa-volcano"></i>
                </div>
              <div class="image-column">
                <img src="../img/familia.jpg" class="cover-image">
              </div>
              <div class="content-column d2_Cotopaxi_Quilotoa_p1">
                <h4>Visita a una familia en el páramo</h4>
                <p>Sumérgete en la vida en el campo y aprende sobre la importancia de la crianza de cuyes para las comunidades andinas mientras visitas a una familia local.</p>
              </div>
            </div>
            <div data-vtdate="Segunda parada">
              <div data-vticon="true">
                    <i class="fas fa-camera"></i>
                </div>
              <div class="image-column">
                <img src="../img/lagunaQuilotoa.jpg" class="cover-image">
              </div>
              <div class="content-column d2_Cotopaxi_Quilotoa_p2">
                <h4>Quilotoa tour</h4>
                <p>Explora el espectacular Cráter de Quilotoa, donde una laguna de color verdeazulado espera ser descubierta debido a la acumulación de azufre.</p>
              </div>
            </div>
            <div data-vtdate="Tercera parada">
              <div data-vticon="true">
                    <i class="fas fa-water"></i>
                </div>
              <div class="image-column">
                <img src="../img/caminatalagunaQuilotoa.jpg" class="cover-image">
              </div>
              <div class="content-column d2_Cotopaxi_Quilotoa_p3">
                <h4>Caminata y visita a la Laguna de Quilotoa</h4>
                <p>Realiza una caminata alrededor del cráter y disfruta de vistas panorámicas mientras visitas la impresionante Laguna de Quilotoa.</p>
              </div>
            </div>
            <div data-vtdate="Cuarta parada">
              <div data-vticon="true">
                    <i class="fas fa-camera"></i>
                </div>
              
              <div class="content-column d2_Cotopaxi_Quilotoa_p4">
                <h4>Almuerzo</h4>
                <p>Deléitate con otra deliciosa comida típica de la zona en tu día de exploración.</p>
              </div>
            </div>
            <div data-vtdate="Quinta parada">
              <div data-vticon="true">
                    <i class="fas fa-camera"></i>
                </div>
              <div class="image-column">
                <img src="../img/Comunidad-Tigua.jpg" class="cover-image">
              </div>
              <div class="content-column d2_Cotopaxi_Quilotoa_p5">
                <h4>Visita a un taller artesanal en la Comunidad de Tigua</h4>
                <p>Explora las vibrantes artesanías locales, con pinturas que presentan formas geométricas y figurativas, representando épocas precolombinas y coloniales.</p>
              </div>
            </div>
            <div data-vtdate="Sexta parada">
              <div data-vticon="true">
                    <i class="fas fa-camera"></i>
                </div>
              <div class="image-column">
                <img src="../img/canonToachi.jpg" class="cover-image">
              </div>
              <div class="content-column d2_Cotopaxi_Quilotoa_p6">
                <h4>Parada para observar el Cañón del Toachi</h4>
                <p>Contempla el paisaje único del Cañón del Río Toachi, formado por erupciones del volcán Quilotoa.</p>
              </div>
            </div>
            <div data-vtdate="Séptima parada">
              <div data-vticon="true">
                    <i class="fas fa-moon"></i>
                </div>
            
              <div class="content-column d2_Cotopaxi_Quilotoa_p7">
                <h4>Mirador</h4>
                <p>Disfruta de vistas panorámicas en un mirador de la región.</p>
              </div>
            </div>
          <div data-vtdate="Octava parada">
              <div data-vticon="true">
                    <i class="fas fa-moon"></i>
                </div>
              <div class="content-column d2_Cotopaxi_Quilotoa_p8">
                <h4>Regreso a Quito</h4>
              </div>
            </div>
        </div>
      </section>
      <div class="reservas w3-hide-small">
        <div class="reservas-primero">
          <div id="dias">
            <div class="contenido-reserva-p">
              <p>2 <span class="dias">Días</span>&nbsp;</p>
            </div>
            <div class="icono-reserva">
              <i class="fa-solid fa-calendar-day"></i>
            </div>
          </div>
          <div id="noches">
            <div class="contenido-reserva-p">
              <p>1 <span class="noches">Noches</span> &nbsp;</p>
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
      <ul class="incluye_Cotopaxi_Quilotoa">
        <li>Transporte de turismo full equipo</li>
        <li>Seguro de viajes</li>
        <li>Guía todo el trayecto</li>
        <li>Entrada al Parque Nacional Cotopaxi</li>
        <li>Visita Laguna de Limpiopungo, visita al Centro de Interpretación, Caminata al primer refugio</li>
        <li>Entrada laguna de Quilotoa</li>
        <li>Visita familia en el páramo</li>
      </ul>
    </div>
    <div class="descripcion w3-row">
      <h2 id="noIncluye">No incluye</h2>
      <ul class="no_incluye_Cotopaxi_Quilotoa">
        <li>Actividades extras</li>
        <li>Gastos personales del turista</li>
        <li>Hotel en Cotopaxi</li>
      </ul>
    </div>
    <div class="descripcion w3-row">
      <h2 id="indicaciones">Indicaciones</h2>
      <ul class="indicaciones_Cotopaxi_Quilotoa">
        <li>Ropa cómoda y abrigada </li>
        <li>Gorra y gorro de lana </li>
        <li>Bloqueador </li>
        <li>Zapatillas de buen labrado  </li>
        <li>Guantes</li>
        <li>Cámara de fotos</li>
      </ul>
    </div>
    <div class="ubicacion">
      <h2 id="ubicacion">Ubicación</h2>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15957.478000663596!2d-78.91436587072666!3d-0.8594118306738628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d4ecf2f2a74419%3A0x92c280f1f5d7614c!2sLaguna%20de%20Quilotoa!5e0!3m2!1ses!2sec!4v1694115773169!5m2!1ses!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510649.95660680736!2d-79.19004361625912!3d-0.7755833635119481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d44e5dbbd52ce7%3A0x61297ba77301c1e8!2sVolc%C3%A1n%20Cotopaxi!5e0!3m2!1ses-419!2sec!4v1694712208328!5m2!1ses-419!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <?php include "footer.php";?>
  </div>
  <script src="../js/destino.js"></script>
  <script src="../js/translate.js"></script>
    <script src="../js/vertical-timeline.min.js"></script>
    <script>
  $('#myTimeline, #myTimeline2').verticalTimeline({
    startLeft: false,
    alternate: true,
    animate: "slide",
    arrows: true
});</script>
</body>

</html>