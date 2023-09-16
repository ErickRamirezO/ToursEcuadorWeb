<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tours Ecuador</title>
  <link rel="icon" href="../img/iconToursEcuador.png" type="image/png" sizes="32x32"/>
  <link rel="stylesheet" href="css/estilo_index.css" type="text/css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/themes/splide-skyblue.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="
https://cdn.jsdelivr.net/npm/@ciar4n/izmir@1.0.1/izmir.min.css
" rel="stylesheet">
  <script src="
https://cdn.jsdelivr.net/npm/animejs@3.2.1/lib/anime.min.js
"></script>
</head>

<body>
  <div class="principal">
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="index.php"><p>Inicio</p></a>
      <a onclick="toggleTours()"><p>Tours &nbsp;<i class="fa fa-caret-down" style="display: none;"></i><i class="fa fa-caret-up"></i></p></a>
      <div id="toursDropdown">
        <a href="php/tours.php"><p class="todo-tours todosLosTours">Todos los tours</p></a>
        <a href="php/tours-privados.php"><p class="privado-tours guianzaToursPrivados">Tours privados y Guianzas</p></a>
      </div>
      <a href="php/acerca.php"><p>Acerca de nosotros</p></a>
      <a href="php/contacto.php"><p>Contacto</p></a>
    </div>
    <div class="cabecera">
      <div class="logo">
        <a href="index.php">
          <img src="img/logoToursEcuador.png"></a>
      </div>
      <div class="menu">
        <div id="inicio">
          <a href="index.php"> <p> Inicio</p></a>
        </div>
        <div class="tours-m" id="tours">
          <p >Tours <i class="fa-solid fa-chevron-up"></i></p>
          <div class="tours-destinos-nav">
            <a href="php/tours.php"><p class="todo-tours todosLosTours">Todos los tours</p></a>
            <a href="php/tours-privados.php"><p class="privado-tours guianzaToursPrivados">Tours privados y Guianzas</p></a>
          </div>
        </div>
        <div id="acerca">
          <a href="php/acerca.php"><p>Acerca de nosotros</p></a>
        </div>
        <div id="contacto">
          <a href="php/contacto.php"><p>Contacto</p></a>
        </div>
        <div id="traduccion">
          <label class="switch">
            <input type="checkbox" id="language-switch">
            <span class="slider"></span>
            <span class="language-text">EN</span>
            <span class="language-text">ES</span>
          </label>
        </div>
        <div class="hamburguer-icon">
          <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
        </div>
      </div>
</div>
    <div class="portada">
      <div class="encabezado">
        <img src="img/FotoJet.jpg">
        <div class="text-overlay frase_tours_ecuador w3-mobile w3-center">
          Vive y viaja mientras puedas
        </div>
      </div>
      <div class="indexportada">
        <div id="primera-portada" class="w3-hide-small w3-hide-medium">
          <figure class="c4-izmir c4-gradient-bottom c4-image-zoom-in">
            <img src="img/uno.jpg">
            <figcaption class="c4-layout-bottom-center">
              <div class="c4-fade-up viaja">
                <h3>Viaja</h3>
              </div>
            </figcaption>
          </figure>
        </div>
        <div id="segunda-portada">
          <figure class="c4-izmir c4-gradient-bottom c4-image-zoom-in">
            <img src="img/cinco.jpg">
            <figcaption class="c4-layout-bottom-center">
              <div class="c4-fade-up explora">
                <h3>
                  Explora
                </h3>
              </div>
            </figcaption>
          </figure>
        </div>
        <div id="tercera-portada" class="w3-hide-small w3-hide-medium">
          <figure class="c4-izmir c4-gradient-bottom c4-image-zoom-in">
            <img src="img/dos.jpg">
            <figcaption class="c4-layout-bottom-center">
              <div class="c4-fade-up descubre">
                <h3>
                  Descubre
                </h3>
              </div>
            </figcaption>
          </figure>
        </div>
      </div>
    </div>

    <div id="tours_populares">
      <section class="splide" aria-label="Splide Basic HTML Example">
        <h2 style="text-align:center;font-weight:bold;" class="toursPopulares">Tours populares</h2>
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide">
              <div class="tours_populares_item">
                <div class="tours_populares_imagen">
                  <a href="php/baños.php"> <img src="img/BañosP.jpg"><a>
                </div>
                <div class="tours_populares_info">
                  <div class="tours_populares_info_titulo">
                    <a href="php/baños.php"><p>Baños</p> </a>
                  </div>
                  <div class="tours_populares_info_dis_y_pais">
                    <div>
                      <button class="disponibilidad">Disponible</button>
                    </div>
                    <div>
                      <p><i class="fa-solid fa-location-dot"></i> Baños De Agua Santa</p>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="splide__slide">
              <div class="tours_populares_item">
                <div class="tours_populares_imagen">
                 <a href="php/cotopaxi.php"> <img src="img/cotopaxiP.jpg"></a>
                </div>
                <div class="tours_populares_info">
                  <div class="tours_populares_info_titulo">
                 <a href="php/cotopaxi.php">   <p class="cotopaxi">Volcán Cotopaxi</p></a>
                  </div>
                  <div class="tours_populares_info_dis_y_pais">
                    <div>
                      <button class="disponibilidad">Disponible</button>
                    </div>
                    <div>
                      <p><i class="fa-solid fa-location-dot"></i> Latacunga</p>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="splide__slide">
              <div class="tours_populares_item">
                <div class="tours_populares_imagen">
                  <a href="php/quilotoa.php">  <img src="img/QuilotoaP.jpg"></a>
                </div>
                <div class="tours_populares_info">
                  <div class="tours_populares_info_titulo">
                    <a href="php/quilotoa.php">  <p class="laguna">Laguna del Quilotoa</p></a>
                  </div>
                  <div class="tours_populares_info_dis_y_pais">
                    <div>
                      <button class="disponibilidad">Disponible</button>
                    </div>
                    <div>
                      <p><i class="fa-solid fa-location-dot"></i> Latacunga</p>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="splide__slide">
              <div class="tours_populares_item">
                <div class="tours_populares_imagen">
                <a href="php/otavalo.php">  <img src="img/otavaloP.jpg"></a>
                </div>
                <div class="tours_populares_info">
                  <div class="tours_populares_info_titulo">
                   <a href="php/otavalo.php"> <p>Otavalo</p></a>
                  </div>
                  <div class="tours_populares_info_dis_y_pais">
                    <div>
                      <button class="disponibilidad">Disponible</button>
                    </div>
                    <div>
                      <p><i class="fa-solid fa-location-dot"></i> Otavalo</p>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="splide__slide">
              <div class="tours_populares_item">
                <div class="tours_populares_imagen">
                  <img src="img/papallactaP.jpg">
                </div>
                <div class="tours_populares_info">
                  <div class="tours_populares_info_titulo">
                    <p>Papallacta</p>
                  </div>
                  <div class="tours_populares_info_dis_y_pais">
                    <div>
                      <button class="disponibilidad">Disponible</button>
                    </div>
                    <div>
                      <p><i class="fa-solid fa-location-dot"></i> Quijos</p>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="splide__slide">
              <div class="tours_populares_item">
                <div class="tours_populares_imagen">
                  <img src="img/mindoP.jpg">
                </div>
                <div class="tours_populares_info">
                  <div class="tours_populares_info_titulo">
                    <p>Mindo</p>
                  </div>
                  <div class="tours_populares_info_dis_y_pais">
                    <div>
                      <button class="disponibilidad">Disponible</button>
                    </div>
                    <div>
                      <p><i class="fa-solid fa-location-dot"></i> San Miguel de los Bancos</p>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
     <a href="php/tours.php" class="tours-b"> <button class="tours_populares_button verTodosLosTours">Ver todos los tours</button>     </a>
    </div><br>

    <footer>
  <div class="w3-padding-16 w3-center w3-row">
    <div class="w3-third w3-center logo-footer">
      <img src="img/logoToursEcuador.png">
      <p style="font-weight: bold;" class="frase_tours_ecuador">“Vive y viaja mientras puedas”</p>
    </div>
    <div align="center" class="w3-third w3-center w3-padding-16">
      <p style="font-weight:bold;" class="siguenos">SÍGUENOS</p>
      <div class="redes_sociales_footer ">
        <div>
          <a href="https://instagram.com/tours_ecuador?igshid=MWZjMTM2ODFkZg==" target="new"><i class="fa-brands fa-instagram fa-lg"></i> </a>
        </div>
        <div>
          <a href="https://www.tiktok.com/@tours_ecuador" target="new"> <i class="fa-brands fa-tiktok fa-lg"></i></a>
        </div>
        <div>
          <a href="https://www.facebook.com/profile.php?id=100063757313937" target="new"> <i class="fa-brands fa-facebook-f fa-lg"></i></a>
        </div>
        <div>
         <a href="https://api.whatsapp.com/send?phone=593978622270" target="new">  <i class="fa-brands fa-whatsapp fa-lg"></i></a>
        </div>
      </div>
      <div class="ubicacion_footer w3-mobile w3-center">
        <i class="fa-solid fa-location-dot"></i>
        <p>Calle Venezuela y Espejo</p>
      </div>
    </div>
    <div align="center" class="w3-third footer_enlaces w3-padding-16">
      <a href="php/tours.php"><b>Todos los tours</b></a>
      <a href="php/acerca.php"><b>Acerca de nosotros</b></a>
      <a href="php/contacto.php"><b>Contáctanos</b></a>
    </div>
  </div>
  <div class="copyright w3-center">
    <p>© Copyright Tours Ecuador ® All rights reserved. Quito, Ecuador.          </p>
  </div>
</footer>
  </div>
  <script src="js/translate.js"></script>
  <script src="js/slider.js"></script>
  <script src="js/index.js"></script>
  <script src="js/sidenav.js"></script>
</body>

</html>