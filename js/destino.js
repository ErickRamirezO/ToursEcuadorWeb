document.addEventListener("DOMContentLoaded", function() {
	var textWrapper = document.querySelector('.titulo');
	textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>");
	anime({
		targets: '.imagen_a',
		opacity: [0.5, 1],
		translateX: [250, -250],
		easing: "easeOutExpo",
		duration: 2700,
		complete: function() {
			anime({
				targets: '.imagen_a',
				rotateY: '180deg',
				easing: "easeOutExpo",
				duration: 1000
			});
		}
	});
	anime({
		targets: '.letter',
		opacity: [0, 1],
		easing: "easeOutExpo",
		duration: 600,
		offset: '-=775',
		delay: (el, i) => 34 * (i + 1)
	});

	//Imagenes
	anime({
		targets: ".imagenes-portada div",
		translateY: [-20, 0],
		opacity: [0, 1],
		easing: "easeOutExpo",
		delay: anime.stagger(150),
	});

	//Tabla de contenido
	anime({
		targets: ".table-of-contents li",
		translateY: [-20, 0],
		opacity: [0, 1],
		easing: "easeOutExpo",
		delay: anime.stagger(150),
	});
	anime({
		targets: ".table-of-contents-sticky",
		translateX: [-100, 0],
		opacity: [0, 1],
		duration: 1800,
		easing: "easeOutExpo",
		delay: anime.stagger(150),
	});

  //Información del destino
  anime({
		targets: ".reservas-primero div",
		translateY: [20, 0],
		opacity: [0, 1],
		easing: "easeOutExpo",
		delay: anime.stagger(100),
	});
	anime({
		targets: ".reservas-primero",
		translateX: [100, 0],
		opacity: [0, 1],
		duration: 1800,
		easing: "easeOutExpo",
		delay: anime.stagger(150),
	});
  // Manejar el evento clic en los enlaces de la tabla de contenidos
    $(".table-of-contents ul li a").on("click", function (e) {
        e.preventDefault(); // Evitar el comportamiento predeterminado del enlace

        var target = $(this).attr("href"); 
        var offset = $(target).offset().top; 

        // Animacion suave
        $("html, body").animate(
            {
                scrollTop: offset,
            },
            700
        );
    });
});