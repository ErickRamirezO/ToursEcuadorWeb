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
        $('#contacto p').text(data['contacto']);

        //Slogan
        $(".frase_tours_ecuador").text(data['frase']);
        $(".frase_tours_ecuador1").text(data['fraseTours']);
        $(".toursPopulares").text(data['toursPopulares']);
        //Traduciendo el footer
        $(".siguenos").text(data['siguenos']);
        $(".copyright p").text(data['copyright']);

        $('.viaja').html(`<h3>${data['viaja']}</h3>`);
        $('.explora').html(`<h3>${data['explora']}</h3>`);
        $('.descubre').html(`<h3>${data['descubre']}</h3>`);
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
        //Titulo pagina contactanos
        $('.contactanos').text(data['contactanos']);
        //Traducción de los testimonios
        $('.t_Ire_Ale_Mui').text(data['Ire_Ale_Mui']);
        $('.t_Kleber_Mosquera').text(data['Kleber_Mosquera']);
        $('.t_Pauline_Schorter').text(data['Pauline_Schorter']);
        $('.t_Jean-Baptiste_Blaise').text(data['Jean-Baptiste_Blaise']);
        $('.t_Mathieu_Mokrzycki').text(data['Mathieu_Mokrzycki']);
      },
      error: function() {
        console.error('Error al cargar las traducciones de los elementos');
      }
    });
  }

});