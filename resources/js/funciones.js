// Función para mostrar la notificación flotante
function mostrarNotificacion(mensaje) {
    // Crear el elemento de notificación
    const notificacion = document.createElement('div');
    notificacion.className = 'notification';
    notificacion.textContent = mensaje;
    
    // Agregar la notificación al cuerpo del documento
    document.body.appendChild(notificacion);
    
    // Ocultar la notificación después de 3 segundos
    setTimeout(function() {
        notificacion.classList.add('hidden');
        // Eliminar la notificación del DOM después de que desaparezca
        setTimeout(function() {
            notificacion.remove();
        }, 500);
    }, 3000);
}

// Mostrar la notificación al cargar la página si hay un parámetro en la URL
document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    
    if (urlParams.has('registered') && urlParams.get('registered') === 'success') {
        mostrarNotificacion('Usuario registrado con éxito.');
    }

    if (urlParams.has('login') && urlParams.get('login') === 'success') {
        const usuario = urlParams.get('usuario');
        mostrarNotificacion('¡Bienvenido, ' + usuario + '!');
    }
});

let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
