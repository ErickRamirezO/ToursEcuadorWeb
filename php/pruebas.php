<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tours Ecuador</title>
  <link rel="icon" href="../img/iconToursEcuador.png" type="image/png" sizes="32x32"/>
  <link rel="stylesheet" href="../css/estilo_index.css" type="text/css">
  <link rel="stylesheet" href="../css/estilo_destinos.css" type="text/css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
</head>

<body>
  <div class="principal">
    <?php include "navbar.php";?>
    <div class="titulo_destino">
      <img src="../img/avion.png" class="imagen_a" style="transform: scaleX(-1);">
      <h1 class="titulo">Titulo del destino</h1>
    </div>
    <div class="imagenes-portada">
      <div class="imagenes-portada-primero">
        <img src="../img/dos.jpg" class="w3-hover-opacity">

      </div>
      <div class=" imagenes-portada-segunda">
        <div class="portada-pri">
          <div class="portada-primera1"><img src="../img/dos.jpg" class="w3-hover-opacity"></div>
          <div class="portada-primera1"><img src="../img/dos.jpg" class="w3-hover-opacity"></div>
        </div>
        <div class="portada-pri">
          <div class="portada-primera1"><img src="../img/dos.jpg" class="w3-hover-opacity"></div>
          <div class="portada-primera1"><img src="../img/dos.jpg" class="w3-hover-opacity"></div>
        </div>
      </div>

    </div>
    <div class="contenedor-informacion">
      <div class="table-of-contents-sticky w3-hide-small">
        <div class="table-of-contents">
          <h3>Tour</h3>
          <ul>
            <li>
              <a href="#itinerario">Itinerario</a>
            </li>
            <li><a href="#descripcion">Descripción</a></li>
            <li>
              <a href="#ubicacion">Ubicación</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="ag-timeline-block linea-tiempo">
        <div class="ag-timeline_title-box">
          <div class="ag-timeline_tagline">Itinerario</div>
        </div>
        <section class="ag-section">
          <div class="ag-format-container">
            <div class="js-timeline ag-timeline">
              <div class="js-timeline_line ag-timeline_line">
                <div class="js-timeline_line-progress ag-timeline_line-progress"></div>
              </div>
              <div class="ag-timeline_list">
                <div class="js-timeline_item ag-timeline_item">
                  <div class="ag-timeline-card_box">
                    <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                      <div class="ag-timeline-card_point"><i class="fa-solid fa-location-dot fa-lg"></i>
                      </div>
                    </div>
                    <div class="ag-timeline-card_meta-box">
                      <div class="ag-timeline-card_meta">Inicio</div>
                    </div>
                  </div>
                  <div class="ag-timeline-card_item">
                    <div class="ag-timeline-card_inner">
                      <div class="ag-timeline-card_img-box">
                        <img
                          src="https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/timeline/images/img-13.png"
                          class="ag-timeline-card_img" width="640" height="360" />
                      </div>
                      <div class="ag-timeline-card_info">
                        <div class="ag-timeline-card_title">Punto #</div>
                        <div class="ag-timeline-card_desc">
                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                          commodo ligula
                          eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                          parturient
                          montes, nascetur ridiculus mus.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="js-timeline_item ag-timeline_item">
                  <div class="ag-timeline-card_box">
                    <div class="ag-timeline-card_meta-box">
                      <div class="ag-timeline-card_meta">Punto #</div>
                    </div>
                    <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                      <div class="ag-timeline-card_point"><i class="fas fa-camera fa-lg"></i></div>
                    </div>
                  </div>
                  <div class="ag-timeline-card_item">
                    <div class="ag-timeline-card_inner">
                      <div class="ag-timeline-card_img-box">
                        <img
                          src="https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/timeline/images/img-6.png"
                          class="ag-timeline-card_img" width="640" height="360" alt="" />
                      </div>
                      <div class="ag-timeline-card_info">
                        <div class="ag-timeline-card_title">Punto #</div>
                        <div class="ag-timeline-card_desc">
                          Vivamus elementum semper nisi. Aenean vulputate eleifend
                          tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend
                          ac, enim.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="js-timeline_item ag-timeline_item">
                  <div class="ag-timeline-card_box">
                    <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                      <div class="ag-timeline-card_point"><i class="fas fa-camera fa-lg"></i></div>
                    </div>
                    <div class="ag-timeline-card_meta-box">
                      <div class="ag-timeline-card_meta">Punto #</div>
                    </div>
                  </div>
                  <div class="ag-timeline-card_item">
                    <div class="ag-timeline-card_inner">
                      <div class="ag-timeline-card_img-box">
                        <img
                          src="https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/timeline/images/img-5.png"
                          class="ag-timeline-card_img" width="640" height="360" alt="" />
                      </div>
                      <div class="ag-timeline-card_info">
                        <div class="ag-timeline-card_title">Punto #</div>
                        <div class="ag-timeline-card_desc">
                          Donec pede justo, fringilla
                          vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,
                          imperdiet a,
                          venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
                          Integer
                          tincidunt.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="js-timeline_item ag-timeline_item">
                  <div class="ag-timeline-card_box">
                    <div class="ag-timeline-card_meta-box">
                      <div class="ag-timeline-card_meta">Punto #</div>
                    </div>
                    <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                      <div class="ag-timeline-card_point"><i class="fas fa-camera fa-lg"></i></div>
                    </div>
                  </div>
                  <div class="ag-timeline-card_item">
                    <div class="ag-timeline-card_inner">
                      <div class="ag-timeline-card_img-box">
                        <img
                          src="https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/timeline/images/img-4.png"
                          class="ag-timeline-card_img" width="640" height="360" alt="" />
                      </div>
                      <div class="ag-timeline-card_info">
                        <div class="ag-timeline-card_title">Punto #</div>
                        <div class="ag-timeline-card_desc">
                          Nullam dictum felis eu pede mollis pretium. Integer
                          tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean
                          vulputate eleifend
                          tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend
                          ac, enim.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="js-timeline_item ag-timeline_item">
                  <div class="ag-timeline-card_box">
                    <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                      <div class="ag-timeline-card_point"><i class="fas fa-camera fa-lg"></i></div>
                    </div>
                    <div class="ag-timeline-card_meta-box">
                      <div class="ag-timeline-card_meta">Punto #</div>
                    </div>
                  </div>
                  <div class="ag-timeline-card_item">
                    <div class="ag-timeline-card_inner">
                      <div class="ag-timeline-card_img-box">
                        <img
                          src="https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/timeline/images/img-3.png"
                          class="ag-timeline-card_img" width="640" height="360" alt="" />
                      </div>
                      <div class="ag-timeline-card_info">
                        <div class="ag-timeline-card_title">Punto #</div>
                        <div class="ag-timeline-card_desc">
                          Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.
                          Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper
                          libero, sit amet
                          adipiscing sem neque sed ipsum.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="js-timeline_item ag-timeline_item">
                  <div class="ag-timeline-card_box">
                    <div class="ag-timeline-card_meta-box">
                      <div class="ag-timeline-card_meta">Punto #</div>
                    </div>
                    <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                      <div class="ag-timeline-card_point"><i class="fas fa-camera fa-lg"></i></div>
                    </div>
                  </div>
                  <div class="ag-timeline-card_item">
                    <div class="ag-timeline-card_inner">
                      <div class="ag-timeline-card_img-box">
                        <img
                          src="https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/timeline/images/img-2.png"
                          class="ag-timeline-card_img" width="640" height="360" />
                      </div>
                      <div class="ag-timeline-card_info">
                        <div class="ag-timeline-card_title">Punto #</div>
                        <div class="ag-timeline-card_desc">
                          Aenean vulputate eleifend
                          tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend
                          ac, enim.
                          Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="js-timeline_item ag-timeline_item">
                  <div class="ag-timeline-card_box">
                    <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                      <div class="ag-timeline-card_point"><i class="fa-solid fa-location-dot fa-lg"></i></div>
                    </div>
                    <div class="ag-timeline-card_meta-box">
                      <div class="ag-timeline-card_meta">Fin del recorrido</div>
                    </div>
                  </div>
                  <div class="ag-timeline-card_item">
                    <div class="ag-timeline-card_inner">
                      <div class="ag-timeline-card_img-box">
                        <img
                          src="https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/timeline/images/img-1.png"
                          class="ag-timeline-card_img" width="640" height="360" />
                      </div>
                      <div class="ag-timeline-card_info">
                        <div class="ag-timeline-card_title">Fin recorrido</div>
                        <div class="ag-timeline-card_desc">
                          Donec pede justo, fringilla
                          vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,
                          imperdiet a,
                          venenatis vitae, justo.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div class="reservas w3-hide-small">
        <div class="reservas-primero">
          <div id="dias">
            <div class="contenido-reserva-p">
              <p>7 Días&nbsp;</p>
            </div>
            <div class="icono-reserva">
              <i class="fa-solid fa-calendar-day"></i>
            </div>
          </div>
          <div id="noches">
            <div class="contenido-reserva-p">
              <p>2 Noches &nbsp;</p>
            </div>
            <div class="icono-reserva">
              <i class="fas fa-moon"></i>
            </div>
          </div>
          <div id="destino">
            <div class="contenido-reserva-p">
              <p>5 Destinos &nbsp;</p>
            </div>
            <div class="icono-reserva">
              <i class="fa-solid fa-bus"></i>
            </div>
          </div>
          <div id="alimentacion">
            <div class="contenido-reserva-p">
              <p>Alimentación</p>
            </div>
            <div class="icono-reserva">
              <i class="fas fa-apple-alt"></i>
            </div>
          </div>
          <div class="contacto-reserva" id="reserva">
            <div class="reserva-primero">
              <div class="contenido-reserva-p">
                <p>Reservar &nbsp;</p>
              </div>
              <div class="icono-reserva">
                <i class="fa-brands fa-whatsapp fa-lg"></i>
              </div>
            </div>
          </div>
          <div class="contacto-reserva" id="privado">
            <div class="reserva-primero">
              <div class="contenido-reserva-p">
                <p>Cotizar tour privado &nbsp;</p>
              </div>
              <div class="icono-reserva">
                <i class="fa-brands fa-whatsapp fa-lg"></i>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="descripcion w3-row">
      <h2>Descripción</h2>
    </div>
    <div class="ubicacion">
      <h2>Ubicación</h2>
    </div>
    <?php include "footer.php";?>
  </div>
  <script src="../js/destino.js"></script>
  <script src="../js/timeline.js"></script>
  <script src="../js/translate.js"></script>
</body>

</html>