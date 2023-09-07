$(document).ready(function() {
  //ANIMACION TEXTO
  const destinos = document.querySelector('.frase_tours_ecuador1');
	var text = destinos.textContent;
	destinos.textContent = "";

	// Crear un span para cada letra del texto
	for (let i = 0; i < text.length; i++) {
		var letter = document.createElement('span');
		letter.textContent = text[i];
		destinos.appendChild(letter);
	}

	// Animación de cada letra del texto
	var letters = destinos.querySelectorAll('span');

	anime({
		targets: letters,
		opacity: [0, 1],
		top: "40%",
		duration: 200,
		easing: 'easeOutExpo',
		delay: function(el, i) {
			return i * 50;
		},
	});
  


const primero = document.querySelector('.primero'),
  segundo = document.querySelector('.segundo'),
  tercero = document.querySelector('.tercero');
document.addEventListener('click', e => {
  if (e.target.matches('.paginacion-pri')) {
    primero.style.display = 'block';
    segundo.style.display = 'none';
    tercero.style.display = 'none';
  } else if (e.target.matches('.paginacion-seg')) {
    primero.style.display = 'none';
    segundo.style.display = 'block';
    tercero.style.display = 'none';
  } else if (e.target.matches('.paginacion-ter')) {
    primero.style.display = 'none';
    segundo.style.display = 'none';
    tercero.style.display = 'block';
  }


})

  });