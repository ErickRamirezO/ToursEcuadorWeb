$(document).ready(function() {
  
  const languageSwitch = $('#language-switch');

  // Al cargar la página, intenta restaurar el estado del switch desde sessionStorage
  const savedLanguage = sessionStorage.getItem('selectedLanguage');
  if (savedLanguage) {
    languageSwitch.prop('checked', savedLanguage === 'en');
    traducirElementos(savedLanguage);
  }

  languageSwitch.on('change', function() {
    const selectedLanguage = languageSwitch.is(':checked') ? 'en' : 'es';
    traducirElementos(selectedLanguage);

    // Guarda el estado del switch en sessionStorage
    sessionStorage.setItem('selectedLanguage', selectedLanguage);
  });

  function traducirElementos(language) {
    $.ajax({
      url: `../traducciones/${language}.json`,
      dataType: 'json',
      success: function(data) {
        //Traduciendo la barra de navegación
        $('#inicio p').text(data['inicio']);
        $('#acerca p, .acerca').text(data['acerca']);
        $('.todosLosTours').text(data["todosLosTours"]);
        $('.guianzaToursPrivados').text(data["guianzaToursPrivados"]);
        $('#contacto p').text(data['contacto']);

        //Slogan
        $(".frase_tours_ecuador").text(data['frase']);
        $(".frase_tours_ecuador1").text(data['fraseTours']);
        $(".toursPopulares").text(data['toursPopulares']);
        //Traduciendo el footer
        $(".siguenos").text(data['siguenos']);
        $(".copyright p").text(data['copyright']);

        $('.viaja').html(data['viaja']);
        $('.explora').html(data['explora']);
        $('.descubre').html(data['descubre']);
        sessionStorage.setItem('selectedLanguage', language);
        //Traduciendo lugar disponible de tours
        $('.disponibilidad').text(data['disponible']);
        $('.dispinibilidadN').text(data['disponibleN']);
        //Traducir lugares
        $('.Amazonia').text(data['amazonia']);
         $('.selva').text(data['selva']);
        $('.mitad').text(data['mitad']);
        $('.laguna').text(data['laguna']);
         $('.cotopaxi').text(data['cotopaxi']);
         $('.chimborazo').text(data['chimborazo']);
        $(".verTodosLosTours").text(data["verTodosLosTours"]);
        //Titulo pagina contactanos
        $('.contactanos').text(data['contactanos']);
        $(".direccion").html(data["direccion"]);
        $(".direccionTexto").text(data["direccionTexto"]);
        $(".telefonos").html(data["telefonos"]);
        $(".chatear").text(data["chatear"]);
        $(".correoElectronico").html(data["correoElectronico"]);
        $(".formularioDeContacto").html(data["formularioDeContacto"]);
        $("label[for='nombre']").text(data["nombreApellido"]);
        $("label[for='codigoPais']").text(data["codigoPais"]);
        $("label[for='telefono']").text(data["telefono"]);
        $("label[for='asunto']").text(data["asunto"]);
        $("#asunto").attr("placeholder", data["asuntoPlaceholder"]);
        $("label[for='mensaje']").text(data["mensaje"]);
        $("#mensaje").attr("placeholder", data["mensajePlaceholder"]);
        $("#enviar_btn").text(data["enviar"]);
        //Traducción de los testimonios
        $(".quienesSomos").text(data["quienesSomos"]);
        $(".quienesSomosTexto").text(data["quienesSomosTexto"]);
        $(".mision").text(data["mision"]);
        $(".misionTexto").text(data["misionTexto"]);
        $(".vision").text(data["vision"]);
        $(".visionTexto").text(data["visionTexto"]);
        $(".testimonios").text(data["testimonios"]);
        $('.t_Ire_Ale_Mui').text(data['Ire_Ale_Mui']);
        $('.t_Kleber_Mosquera').text(data['Kleber_Mosquera']);
        $('.t_Pauline_Schorter').text(data['Pauline_Schorter']);
        $('.t_Jean-Baptiste_Blaise').text(data['Jean-Baptiste_Blaise']);
        $('.t_Mathieu_Mokrzycki').text(data['Mathieu_Mokrzycki']);
        //Traducción de la tabla de contenidos y textos de la parte de abajo
        $(".table-of-contents li a[href='#itinerario'], #itinerario").text(data['itinerario']);
        $(".table-of-contents li a[href='#incluye'], #incluye").text(data['incluye']);
        $(".table-of-contents li a[href='#noIncluye'], #noIncluye").text(data['no_incluye']);
        $(".table-of-contents li a[href='#indicaciones'], #indicaciones").text(data['indicaciones']);
        $(".table-of-contents li a[href='#ubicacion'], #ubicacion").text(data['ubicacion']);
        //Traducción paradas
        $('span.vtimeline-date:contains("Inicio"), span.vtimeline-date:contains("Start")').text(data['inicioTour']);
        $('span.vtimeline-date:contains("Primera parada"), span.vtimeline-date:contains("First stop")').text(data['primeraParada']);
        $('span.vtimeline-date:contains("Segunda parada"),span.vtimeline-date:contains("Second stop")').text(data["segundaParada"]);
        $('span.vtimeline-date:contains("Tercera parada"),span.vtimeline-date:contains("Third stop")').text(data["terceraParada"]);
        $('span.vtimeline-date:contains("Cuarta parada"),span.vtimeline-date:contains("Fourth stop")').text(data["cuartaParada"]);
        $('span.vtimeline-date:contains("Quinta parada"), span.vtimeline-date:contains("Fifth stop")').text(data["quintaParada"]);
        $('span.vtimeline-date:contains("Sexta parada"),span.vtimeline-date:contains("Sixth stop")').text(data["sextaParada"]);
        $('span.vtimeline-date:contains("Séptima parada"), span.vtimeline-date:contains("Seventh stop")').text(data["séptimaParada"]);
        $('span.vtimeline-date:contains("Octava parada"), span.vtimeline-date:contains("Eighth stop")').text(data["octavaParada"]);
        $('span.vtimeline-date:contains("Novena parada"), span.vtimeline-date:contains("Ninth stop")').text(data["novenaParada"]);
        $('span.vtimeline-date:contains("Fin del Tour"), span.vtimeline-date:contains("End of Tour")').text(data["finDelTour"]);
        //Traducción sección tours privados y guianzas
        $(".guianzas").text(data["guianzas"]);
        $(".guianzasTitulo").text(data["guianzasTitulo"]);
        $(".guianzasTexto").text(data["guianzasTexto"]);
        $(".toursTitulo").text(data["toursTitulo"]);
        $(".toursTexto").text(data["toursTexto"]);
        //Traducción sección reservas
        $(".dias").text(data['dias']);
        $(".dia1").text(data['dia1']);
        $(".dia2").text(data['dia2']);
        $(".dia3").text(data['dia3']);
        $(".noches").text(data['noches']);
        $(".destinos").text(data['destinos']);
        $(".alimentacion").text(data['alimentacion']);
        $(".noAlimentacion").text(data['noAlimentacion']);
        $(".reservar").text(data['reservar']);
        $(".cotizar-tour").text(data['cotizar-tour']);
        //Traducción página Yasuni
        $(".d1_yasuni_desayuno").text(data['d1_yasuni_desayuno']);
        $(".d1_yasuni_p1").text(data['d1_yasuni_p1']);
        $(".d1_yasuni_p2").text(data['d1_yasuni_p2']);
        $(".d1_yasuni_p3").text(data['d1_yasuni_p3']);
        //DIA 2
        $(".d2_yasuni_p1").text(data['d2_yasuni_p1']);
        $(".d2_yasuni_entre_p1_p2").text(data['d2_yasuni_entre_p1_p2']);
        $(".d2_yasuni_p2").text(data['d2_yasuni_p2']);
        $(".d2_yasuni_p3").text(data['d2_yasuni_p3']);
        $(".d2_yasuni_p4").text(data['d2_yasuni_p4']);
        $(".d2_yasuni_p5").text(data['d2_yasuni_p5']);
        //DIA 3
        $(".d3_yasuni_p1").text(data['d3_yasuni_p1']);
        $(".d3_yasuni_p2").text(data['d3_yasuni_p2']);
        $(".d3_yasuni_p3").text(data['d3_yasuni_p3']);
        $(".d3_yasuni_p4").text(data['d3_yasuni_p4']);
        $(".d3_yasuni_entre_p4_p5").text(data['d3_yasuni_entre_p4_p5']);
        $(".d3_yasuni_p5").text(data['d3_yasuni_p5']);
        $(".d3_yasuni_p6").text(data['d3_yasuni_p6']);
        $(".d3_yasuni_p7").text(data['d3_yasuni_p7']);
        //DIA 4
        $(".d4_yasuni_p1").text(data['d4_yasuni_p1']);
        $(".d4_yasuni_p2").text(data['d4_yasuni_p2']);
        $(".d4_yasuni_p3").text(data['d4_yasuni_p3']);
        $(".d4_yasuni_entre_p3_p4").text(data['d4_yasuni_entre_p3_p4']);
        $(".d4_yasuni_p4").text(data['d4_yasuni_p4']);
        $(".d4_yasuni_p5").text(data['d4_yasuni_p5']);
        //DIA 5
        $(".d5_yasuni_p1").text(data['d5_yasuni_p1']);
        $(".d5_yasuni_p2").text(data['d5_yasuni_p2']);
        $(".d5_yasuni_p3").text(data['d5_yasuni_p3']);
        $(".d5_yasuni_p4").text(data['d5_yasuni_p4']);
        //DIA 6
        $(".d6_yasuni_inicio").text(data['d6_yasuni_inicio']);
        $(".d6_yasuni_p1").text(data['d6_yasuni_p1']);
        $(".d6_yasuni_p2").text(data['d6_yasuni_p2']);
        $(".d6_yasuni_fin").text(data['d6_yasuni_fin']);
        //comidas yasuní
        $(".desayuno").text(data['desayuno']);
        $(".almuerzo").text(data['almuerzo']);
        $(".cena").text(data['cena']);
        $(".descanso").text(data['descanso']);
        $(".cena_y_descanso").text(data['cena_y_descanso']);
        //incluye, no incluye e indicaciones yasuní----
        $("ul.incluyeYasuni").text(data['incluye_yasuni']);
        $("ul.noIncluyeYasuni").text(data['no_incluye_yasuni']);
        $("ul.indicacionesYasuni").text(data['indicaciones_yasuni']);
        //Traducción Indichuris
        $(".Indichuris_titulo").text(data["Indichuris_titulo"]);
        $(".Indichuris_p1").html(data["Indichuris_p1"]);
        $(".Indichuris_p2").html(data["Indichuris_p2"]);
        $(".Indichuris_p3").html(data["Indichuris_p3"]);
        $(".Indichuris_p4").html(data["Indichuris_p4"]);
        $(".Indichuris_p5").html(data["Indichuris_p5"]);
        $(".Indichuris_p6").text(data["Indichuris_p6"]);
        $(".Incluye_Indichuris").html(data["Incluye_Indichuris"]);
        $(".No_Incluye_Indichuris").html(data["No_Incluye_Indichuris"]);
        $(".Indicaciones_Indichuris").html(data["Indicaciones_Indichuris"]);

        //Traducción Otavalo
        $(".otavalo_p1").html(data["otavalo_p1"]);
        $(".otavalo_p2").html(data["otavalo_p2"]);
        $(".otavalo_p3").html(data["otavalo_p3"]);
        $(".otavalo_p4").html(data["otavalo_p4"]);
        $(".otavalo_p5").text(data["otavalo_p5"]);
        $("ul.incluyeOtavalo").html(data["incluyeOtavalo"]);
        $("ul.noIncluyeOtavalo").html(data["noIncluyeOtavalo"]);
        $("ul.indicacionesOtavalo").html(data["indicacionesOtavalo"]);

        //Traducción Cotopaxi-Quilotoa-Baños
        $(".d1_Cotopaxi_Quilotoa_Baños_p1").html(data["d1_Cotopaxi_Quilotoa_Baños_p1"]);
        $(".d1_Cotopaxi_Quilotoa_Baños_p2").html(data["d1_Cotopaxi_Quilotoa_Baños_p2"]);
        $(".d1_Cotopaxi_Quilotoa_Baños_p3").html(data["d1_Cotopaxi_Quilotoa_Baños_p3"]);
        $(".d1_Cotopaxi_Quilotoa_Baños_p4").html(data["d1_Cotopaxi_Quilotoa_Baños_p4"]);
        $(".d1_Cotopaxi_Quilotoa_Baños_p5").html(data["d1_Cotopaxi_Quilotoa_Baños_p5"]);
        $(".d1_Cotopaxi_Quilotoa_Baños_p6").html(data["d1_Cotopaxi_Quilotoa_Baños_p6"]);
        $(".d2_Cotopaxi_Quilotoa_Baños_p1").html(data["d2_Cotopaxi_Quilotoa_Baños_p1"]);
        $(".d2_Cotopaxi_Quilotoa_Baños_p2").html(data["d2_Cotopaxi_Quilotoa_Baños_p2"]);
        $(".d2_Cotopaxi_Quilotoa_Baños_p3").html(data["d2_Cotopaxi_Quilotoa_Baños_p3"]);
        $(".d2_Cotopaxi_Quilotoa_Baños_p4").html(data["d2_Cotopaxi_Quilotoa_Baños_p4"]);
        $(".d2_Cotopaxi_Quilotoa_Baños_p5").html(data["d2_Cotopaxi_Quilotoa_Baños_p5"]);
        $(".d2_Cotopaxi_Quilotoa_Baños_p6").html(data["d2_Cotopaxi_Quilotoa_Baños_p6"]);
        $(".d2_Cotopaxi_Quilotoa_Baños_p7").html(data["d2_Cotopaxi_Quilotoa_Baños_p7"]);
        $(".d2_Cotopaxi_Quilotoa_Baños_p8").html(data["d2_Cotopaxi_Quilotoa_Baños_p8"]);
        $(".d3_Cotopaxi_Quilotoa_Baños_p1").html(data["d3_Cotopaxi_Quilotoa_Baños_p1"]);
        $(".d3_Cotopaxi_Quilotoa_Baños_p2").html(data["d3_Cotopaxi_Quilotoa_Baños_p2"]);
        $(".d3_Cotopaxi_Quilotoa_Baños_p3").html(data["d3_Cotopaxi_Quilotoa_Baños_p3"]);
        $(".d3_Cotopaxi_Quilotoa_Baños_p4").html(data["d3_Cotopaxi_Quilotoa_Baños_p4"]);
        $(".d3_Cotopaxi_Quilotoa_Baños_p5").html(data["d3_Cotopaxi_Quilotoa_Baños_p5"]);
        $(".d3_Cotopaxi_Quilotoa_Baños_p6").html(data["d3_Cotopaxi_Quilotoa_Baños_p6"]);
        $(".d3_Cotopaxi_Quilotoa_Baños_p7").html(data["d3_Cotopaxi_Quilotoa_Baños_p7"]);
        $(".d3_Cotopaxi_Quilotoa_Baños_p8").html(data["d3_Cotopaxi_Quilotoa_Baños_p8"]);
        $("ul.incluye_Cotopaxi_Quilotoa_Baños").html(data["incluye_Cotopaxi_Quilotoa_Baños"]);
        $("ul.noIncluye_Cotopaxi_Quilotoa_Baños").html(data["noIncluye_Cotopaxi_Quilotoa_Baños"]);
        $("ul.indicaciones_Cotopaxi_Quilotoa_Baños").html(data["indicaciones_Cotopaxi_Quilotoa_Baños"]);
        $(".dia1_Cotopaxi_Quilotoa_Baños").text(data["dia1_Cotopaxi_Quilotoa_Baños"]);
        $(".dia2_Cotopaxi_Quilotoa_Baños").text(data["dia2_Cotopaxi_Quilotoa_Baños"]);
        $(".dia3_Cotopaxi_Quilotoa_Baños").text(data["dia3_Cotopaxi_Quilotoa_Baños"]);
        //Traducción Baños Quilotoa
        $(".d1_Baños_Quilotoa_p1").html(data["d1_Baños_Quilotoa_p1"]);
        $(".d1_Baños_Quilotoa_p2").html(data["d1_Baños_Quilotoa_p2"]);
        $(".d1_Baños_Quilotoa_p3").html(data["d1_Baños_Quilotoa_p3"]);
        $(".d1_Baños_Quilotoa_p4").html(data["d1_Baños_Quilotoa_p4"]);
        $(".d1_Baños_Quilotoa_p5").html(data["d1_Baños_Quilotoa_p5"]);
        $(".d1_Baños_Quilotoa_p6").html(data["d1_Baños_Quilotoa_p6"]);
        $(".d1_Baños_Quilotoa_p7").html(data["d1_Baños_Quilotoa_p7"]);
        $(".d1_Baños_Quilotoa_p8").html(data["d1_Baños_Quilotoa_p8"]);
        $(".d1_Baños_Quilotoa_p9").html(data["d1_Baños_Quilotoa_p9"]);
        $(".d2_Baños_Quilotoa_p1").html(data["d2_Baños_Quilotoa_p1"]);
        $(".d2_Baños_Quilotoa_p2").html(data["d2_Baños_Quilotoa_p2"]);
        $(".d2_Baños_Quilotoa_p3").html(data["d2_Baños_Quilotoa_p3"]);
        $(".d2_Baños_Quilotoa_p4").html(data["d2_Baños_Quilotoa_p4"]);
        $(".d2_Baños_Quilotoa_p5").html(data["d2_Baños_Quilotoa_p5"]);
        $(".d2_Baños_Quilotoa_p6").text(data["d2_Baños_Quilotoa_p6"]);
        $(".d2_Baños_Quilotoa_p7").html(data["d2_Baños_Quilotoa_p7"]);
        $("ul.incluye_Baños_Quilotoa").html(data["incluye_Baños_Quilotoa"]);
        $("ul.no_incluye_Baños_Quilotoa").html(data["no_incluye_Baños_Quilotoa"]);
        $("ul.indicaciones_Baños_Quilotoa").html(data["indicaciones_Baños_Quilotoa"]);
        $(".dia1_Baños_Quilotoa").text(data["dia1_Baños_Quilotoa"]);
        $(".dia2_Baños_Quilotoa").text(data["dia2_Baños_Quilotoa"]);
        //Traducción Guanabana
        $(".Guanabana_p1").html(data["Guanabana_p1"]);
        $(".Guanabana_p2").html(data["Guanabana_p2"]);
        $(".Guanabana_p3").html(data["Guanabana_p3"]);
        $(".Guanabana_p4").html(data["Guanabana_p4"]);
        $(".Guanabana_p5").html(data["Guanabana_p5"]);
        $(".Guanabana_p6").text(data["Guanabana_p5"]);
        $(".Guanabana_incluye").html(data["Guanabana_incluye"]);
        $(".Guanabana_No_incluye").html(data["Guanabana_No_incluye"]);
        $(".Indicaciones_Guanabana").html(data["Indicaciones_Guanabana"]);

        //Traducion Mindo
        $(".mindo_p1").html(data["mindo_p1"]);
        $(".mindo_p2").html(data["mindo_p2"]);
        $(".mindo_p3").html(data["mindo_p3"]);
        $(".mindo_p4").html(data["mindo_p4"]);
        $(".mindo_p5").html(data["mindo_p5"]);
        $(".mindo_p6").html(data["mindo_p6"]);
        $(".mindo_incluye").html(data["mindo_incluye"]);
        $(".mindo_no_incluye").html(data["mindo_no_incluye"]);
        $(".mindo_indicaciones").html(data["mindo_indicaciones"]);

        //Traduce Mitad del Mundo
        $(".mitad_mundo_p1").text(data["mitad_mundo_p1"]);
        $(".mitad_mundo_p2").html(data["mitad_mundo_p2"]);
        $(".mitad_mundo_p3").html(data["mitad_mundo_p3"]);
        $(".mitad_mundo_p4").text(data["mitad_mundo_p4"]);
        $(".mitad_mundo_incluye").html(data["mitad_mundo_incluye"]);
        $(".mitad_mundo_No_incluye").html(data["mitad_mundo_No_incluye"]);
        $(".mitad_mundo_indicaciones").html(data["mitad_mundo_indicaciones"]);

        // Traducir baños
        $(".baños_p1").html(data["baños_p1"]);
        $(".baños_p2").html(data["baños_p2"]);
        $(".baños_p3").html(data["baños_p3"]);
        $(".baños_p4").html(data["baños_p4"]);
        $(".baños_p5").html(data["baños_p5"]);
        $(".baños_p6").html(data["baños_p6"]);
        $(".baños_incluye").html(data["baños_incluye"]);
        $(".baños_no_incluye").html(data["baños_no_incluye"]);
        $(".baños_indicaciones").html(data["baños_indicaciones"]);

        //Traducir Misahualli
        $(".misahualli_P1").html(data["misahualli_P1"]);
        $(".misahualli_P2").html(data["misahualli_P2"]);
        $(".misahualli_P3").html(data["misahualli_P3"]);
        $(".misahualli_P4").html(data["misahualli_P4"]);
        $(".misahualli_P5").html(data["misahualli_P5"]);
        $(".misahualli_P6").text(data["misahualli_P6"]);
        $(".incluye_misahualli").html(data["incluye_misahualli"]);
        $(".no_incluye_misahualli").html(data["no_incluye_misahualli"]);
        $(".indicaciones_misahualli").html(data["indicaciones_misahualli"]);

        //Traducción Misahualli-Cotundo
        $(".d1_Misahualli_Cotundo_inicio").text(data["d1_Misahualli_Cotundo_inicio"]);
        $(".d1_Misahualli_Cotundo_p1").text(data["d1_Misahualli_Cotundo_p1"]);
        $(".d1_Misahualli_Cotundo_p2").text(data["d1_Misahualli_Cotundo_p2"]);
        $(".d1_Misahualli_Cotundo_p3").text(data["d1_Misahualli_Cotundo_p3"]);
        $(".d1_Misahualli_Cotundo_p4").text(data["d1_Misahualli_Cotundo_p4"]);
        $(".d1_Misahualli_Cotundo_p5").text(data["d1_Misahualli_Cotundo_p5"]);
        $(".d2_Misahualli_Cotundo_p1").text(data["d2_Misahualli_Cotundo_p1"]);
        $(".d2_Misahualli_Cotundo_p2").text(data["d2_Misahualli_Cotundo_p2"]);
        $(".d2_Misahualli_Cotundo_p3").text(data["d2_Misahualli_Cotundo_p3"]);
        $(".d2_Misahualli_Cotundo_fin").text(data["d2_Misahualli_Cotundo_fin"]);
        $("ul.incluye_Misahualli_Cotundo").html(data["incluye_Misahualli_Cotundo"]);
        $("ul.no_incluye_Misahualli_Cotundo").html(data["no_incluye_Misahualli_Cotundo"]);
        $("ul.indicaciones_Misahualli_Cotundo").html(data["indicaciones_Misahualli_Cotundo"]);

        //Traducción Cuenca Ingapirca
        $(".d1_Cuenca_Ingapirca_inicio").html(data["d1_Cuenca_Ingapirca_inicio"]);
        $(".d1_Cuenca_Ingapirca_p1").html(data["d1_Cuenca_Ingapirca_p1"]);
        $(".d1_Cuenca_Ingapirca_p2").text(data["d1_Cuenca_Ingapirca_p2"]);
        $(".d2_Cuenca_Ingapirca_p1").text(data["d2_Cuenca_Ingapirca_p1"]);
        $(".d2_Cuenca_Ingapirca_p2").text(data["d2_Cuenca_Ingapirca_p2"]);
        $(".d3_Cuenca_Ingapirca_inicio").text(data["d3_Cuenca_Ingapirca_inicio"]);
        $(".d3_Cuenca_Ingapirca_p1").text(data["d3_Cuenca_Ingapirca_p1"]);
        $(".d3_Cuenca_Ingapirca_p2").text(data["d3_Cuenca_Ingapirca_p2"]);
        $(".d3_Cuenca_Ingapirca_fin").text(data["d3_Cuenca_Ingapirca_fin"]);
        $(".incluye_Cuenca_Ingapirca").html(data["incluye_Cuenca_Ingapirca"]);
        $(".no_incluye_Cuenca_Ingapirca").html(data["no_incluye_Cuenca_Ingapirca"]);
        $(".indicaciones_Cuenca_Ingapirca").html(data["indicaciones_Cuenca_Ingapirca"]);
        //Traducción Baños - Indichuris
        $(".d1_Baños_Indichuris_inicio").text(data["d1_Baños_Indichuris_inicio"]);
        $(".d1_Baños_Indichuris_p1").text(data["d1_Baños_Indichuris_p1"]);
        $(".d1_Baños_Indichuris_p2").text(data["d1_Baños_Indichuris_p2"]);
        $(".d1_Baños_Indichuris_p3").text(data["d1_Baños_Indichuris_p3"]);
        $(".d1_Baños_Indichuris_p4").text(data["d1_Baños_Indichuris_p4"]);
        $(".d1_Baños_Indichuris_p5").text(data["d1_Baños_Indichuris_p5"]);
        $(".d1_Baños_Indichuris_p6").text(data["d1_Baños_Indichuris_p6"]);
        $(".d1_Baños_Indichuris_p7").text(data["d1_Baños_Indichuris_p7"]);
        $(".d1_Baños_Indichuris_p8").text(data["d1_Baños_Indichuris_p8"]);
        $(".d2_Baños_Indichuris_p1").text(data["d2_Baños_Indichuris_p1"]);
        $(".d2_Baños_Indichuris_p2").text(data["d2_Baños_Indichuris_p2"]);
        $(".d2_Baños_Indichuris_p3").text(data["d2_Baños_Indichuris_p3"]);
        $(".d2_Baños_Indichuris_p4").text(data["d2_Baños_Indichuris_p4"]);
        $(".d2_Baños_Indichuris_p5").text(data["d2_Baños_Indichuris_p5"]);
        $(".d2_Baños_Indichuris_fin").text(data["d2_Baños_Indichuris_fin"]);
        $(".incluye_Baños_Indichuris").html(data["incluye_Baños_Indichuris"]);
        $(".no_incluye_Baños_Indichuris").html(data["no_incluye_Baños_Indichuris"]);
        $(".indicaciones_Baños_Indichuris").html(data["indicaciones_Baños_Indichuris"]);

        //Traducción Cotopaxi Quilotoa
        $(".d1_Cotopaxi_Quilotoa_p1").html(data["d1_Cotopaxi_Quilotoa_p1"]);
        $(".d1_Cotopaxi_Quilotoa_p2").html(data["d1_Cotopaxi_Quilotoa_p2"]);
        $(".d1_Cotopaxi_Quilotoa_p3").html(data["d1_Cotopaxi_Quilotoa_p3"]);
        $(".d1_Cotopaxi_Quilotoa_p4").html(data["d1_Cotopaxi_Quilotoa_p4"]);
        $(".d1_Cotopaxi_Quilotoa_p5").html(data["d1_Cotopaxi_Quilotoa_p5"]);
        $(".d1_Cotopaxi_Quilotoa_p6").html(data["d1_Cotopaxi_Quilotoa_p6"]);
        $(".d1_Cotopaxi_Quilotoa_p7").html(data["d1_Cotopaxi_Quilotoa_p7"]);
        $(".d2_Cotopaxi_Quilotoa_p1").html(data["d2_Cotopaxi_Quilotoa_p1"]);
        $(".d2_Cotopaxi_Quilotoa_p2").html(data["d2_Cotopaxi_Quilotoa_p2"]);
        $(".d2_Cotopaxi_Quilotoa_p3").html(data["d2_Cotopaxi_Quilotoa_p3"]);
        $(".d2_Cotopaxi_Quilotoa_p4").html(data["d2_Cotopaxi_Quilotoa_p4"]);
        $(".d2_Cotopaxi_Quilotoa_p5").html(data["d2_Cotopaxi_Quilotoa_p5"]);
        $(".d2_Cotopaxi_Quilotoa_p6").html(data["d2_Cotopaxi_Quilotoa_p6"]);
        $(".d2_Cotopaxi_Quilotoa_p7").html(data["d2_Cotopaxi_Quilotoa_p7"]);
        $(".d2_Cotopaxi_Quilotoa_p8").html(data["d2_Cotopaxi_Quilotoa_p8"]);
        $(".incluye_Cotopaxi_Quilotoa").html(data["incluye_Cotopaxi_Quilotoa"]);
        $(".no_incluye_Cotopaxi_Quilotoa").html(data["no_incluye_Cotopaxi_Quilotoa"]);
        $(".indicaciones_Cotopaxi_Quilotoa").html(data["indicaciones_Cotopaxi_Quilotoa"]);

        //Traducir Cotundo
        $(".cotundo_p1").html(data["cotundo_p1"]);
        $(".cotundo_p2").html(data["cotundo_p2"]);
        $(".cotundo_p3").html(data["cotundo_p3"]);
        $(".cotundo_p4").html(data["cotundo_p4"]);
        $(".cotundo_p5").html(data["cotundo_p5"]);
        $(".cotundo_p6").text(data["cotundo_p6"]);
        $(".incluye_cotundo").html(data["incluye_cotundo"]);
        $(".no_incluye_cotundo").html(data["no_incluye_cotundo"]);
        $(".indicaciones_cotundo").html(data["indicaciones_cotundo"]);
        //Traducir Papallacat
        $(".papallacta_p1").text(data["papallacta_p1"]);
        $(".papallacta_p2").html(data["papallacta_p2"]);
        $(".papallacta_p3").html(data["papallacta_p3"]);
        $(".papallacta_p4").html(data["papallacta_p4"]);
        $(".papallacta_p5").html(data["papallacta_p5"]);
        $(".papallacta_p6").html(data["papallacta_p6"]);
        $(".papallacta_p7").text(data["papallacta_p7"]);
        $(".incluye_papallacta").html(data["incluye_papallacta"]);
        $(".no_incluye_papallacta").html(data["no_incluye_papallacta"]);
        $(".indicaciones_papallacta").html(data["indicaciones_papallacta"]);


        //Traducir Quilotoa
        $(".quilotoa_p1").html(data["quilotoa_p1"]);
        $(".quilotoa_p2").html(data["quilotoa_p2"]);
        $(".quilotoa_p3").html(data["quilotoa_p3"]);
        $(".quilotoa_p4").html(data["quilotoa_p4"]);
        $(".quilotoa_p5").html(data["quilotoa_p5"]);
        $(".quilotoa_p6").text(data["quilotoa_p6"]);
        $(".quilotoa_p7").text(data["quilotoa_p7"]);
        $(".quilotoa_p8").text(data["quilotoa_p8"]);
        $(".incluye_quilotoa").html(data["incluye_quilotoa"]);
        $(".no_incluye_quilotoa").html(data["no_incluye_quilotoa"]);
        $(".indicaciones_quilotoa").html(data["indicaciones_quilotoa"]);

        //Traducir Cotopaxi
        $(".volcan").text(data["volcan"]);
        $(".cotopaxi_p1").html(data["cotopaxi_p1"]);
        $(".cotopaxi_p2").html(data["cotopaxi_p2"]);
        $(".cotopaxi_p3").html(data["cotopaxi_p3"]);
        $(".cotopaxi_p4").html(data["cotopaxi_p4"]);
        $(".cotopaxi_p5").html(data["cotopaxi_p5"]);
        $(".cotopaxi_p6").html(data["cotopaxi_p6"]);
        $(".cotopaxi_p7").text(data["cotopaxi_p7"]);
        
        $(".incluye_cotopaxi").html(data["incluye_cotopaxi"]);
        $(".no_incluye_cotopaxi").html(data["no_incluye_cotopaxi"]);
        $(".indicaciones_cotopaxi").html(data["indicaciones_cotopaxi"]);

        //Traducir Chimborazo
        $(".Chimborazo_v").text(data["Chimborazo_v"]);
        $(".Chimborazo_p1").html(data["Chimborazo_p1"]);
        $(".Chimborazo_p2").html(data["Chimborazo_p2"]);
        $(".Chimborazo_p3").html(data["Chimborazo_p3"]);
        $(".Chimborazo_p4").html(data["Chimborazo_p4"]);
        $(".Chimborazo_p5").html(data["Chimborazo_p5"]);
        $(".Chimborazo_p6").text(data["Chimborazo_p6"]);
        $(".incluye_Chimborazo").html(data["incluye_Chimborazo"]);
        $(".no_incluye_Chimborazo").html(data["no_incluye_Chimborazo"]);
        $(".indicaciones_Chimborazo").html(data["indicaciones_Chimborazo"]);

        //Traducir Cuyabeno
        $(".d1_cuyabeno_p1").html(data["d1_cuyabeno_p1"]);
        $(".d1_cuyabeno_p2").html(data["d1_cuyabeno_p2"]);
        $(".d1_cuyabeno_p3").html(data["d1_cuyabeno_p3"]);
        $(".d2_cuyabeno_p1").html(data["d2_cuyabeno_p1"]);
        $(".d2_cuyabeno_p2").html(data["d2_cuyabeno_p2"]);
        $(".d2_cuyabeno_p3").text(data["d2_cuyabeno_p3"]);
        $(".d3_cuyabeno_p1").html(data["d3_cuyabeno_p1"]);
        $(".d3_cuyabeno_p2").html(data["d3_cuyabeno_p2"]);
        $(".d4_cuyabeno_p1").html(data["d4_cuyabeno_p1"]);
        $(".d4_cuyabeno_p2").text(data["d4_cuyabeno_p2"]);
        $(".d5_cuyabeno_p1").html(data["d5_cuyabeno_p1"]);
        $(".d5_cuyabeno_p2").text(data["d5_cuyabeno_p2"]);
        $(".incluye_cuyabeno").html(data["incluye_cuyabeno"]);
        $(".no_incluye_cuyabeno").html(data["no_incluye_cuyabeno"]);
        $(".indicaciones_cuyabeno").html(data["indicaciones_cuyabeno"]);
         //Traducir Quito Tours
       
        $(".quito_bus_p1").html(data["quito_bus_p1"]);
        $(".quito_bus_p2").html(data["quito_bus_p2"]);
        $(".quito_bus_p3").html(data["quito_bus_p3"]);
        $(".quito_bus_p4").html(data["quito_bus_p4"]);
        $(".quito_bus_p5").html(data["quito_bus_p5"]);
        $(".quito_bus_p6").html(data["quito_bus_p6"]);
        $(".quito_bus_p7").html(data["quito_bus_p7"]);
        $(".titulo_quito_bus").html(data["titulo_quito_bus"]);
        $(".quito-bus-des").text(data["quito-bus-des"]);
        $(".incluye-quito-tour").html(data["incluye-quito-tour"]);
      },
      error: function() {
        console.error('Error al cargar las traducciones de los elementos');
      }
    });
  }

});