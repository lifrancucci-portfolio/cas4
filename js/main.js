function contentLoaded() {

  // INTRO
  // const introPieces = Array.from(document.querySelector('.hero-overlay').children);
  //
  // for(let i = 0; i < introPieces.length;) {
  //   introPieces[i].classList.add('fade-out');
  //   introPieces[i].addEventListener('transitionend', i++);
  // }


  // function introFadeOut() {
  //
  // }
  // introFadeOut();

  // CAROUSELS
  const galleryCarousel = document.getElementById('gallery-carousel');
  const backstageCarousel = document.getElementById('backstage-carousel');

  function carouselFunctionality(carousel) {

    // Seleccionar los elementos dentro del carousel que se reciba como argumento
    const track = carousel.querySelector('.carousel__track');
    const slides = Array.from(track.children);

    const nextButton = carousel.querySelector('.carousel__button--right');
    const prevButton = carousel.querySelector('.carousel__button--left');

    const slideWidth = slides[0].getBoundingClientRect().width;

    // Posicionar cada slide al lado de la otra
    const setSlidePosition = (slide, index) => {
      slide.style.left = slideWidth * index + 'px';
    }
    slides.forEach(setSlidePosition);

    // Mover a la slide correspondiente
    const moveToSlide = (track, currentSlide, targetSlide) => {
      track.style.transform = 'translateX(-' + targetSlide.style.left +')';

      currentSlide.classList.remove('current-slide');
      targetSlide.classList.add('current-slide');
    }

    // Agregar event listeners para los botones de avance y retroceso
    prevButton.addEventListener('click', e => {
      const currentSlide = track.querySelector('.current-slide');
      const prevSlide = currentSlide.previousElementSibling;

        // Solo ir a la slide siguiente si esta existe
      if(currentSlide.previousElementSibling) {
        moveToSlide(track, currentSlide, prevSlide);
      }
    });

    nextButton.addEventListener('click', e => {
      const currentSlide = track.querySelector('.current-slide');
      const nextSlide = currentSlide.nextElementSibling;

      // Solo ir a la slide siguiente si esta existe
      if(currentSlide.nextElementSibling) {
        moveToSlide(track, currentSlide, nextSlide);
      }
    });
  }

  // Llamar a la función para cada carousel de la página
  carouselFunctionality(galleryCarousel);
  carouselFunctionality(backstageCarousel);

  // MODELOS
  const models = document.querySelectorAll('.model__container');
  const selected = document.getElementById('model__selected');

  models.forEach(model => {
    model.addEventListener('mouseover', () => {
      let content = model.innerHTML;
      selected.innerHTML = content;
    });
  })


  // CONTACTO
  const opLayer = document.getElementById('contact-ol');
  console.log(opLayer.offsetTop);

  // VIDEO
  const videoLayer = document.getElementById('video');

  let changeOpacity = function(el) {

    return function curriedApplyOpacity(e) {
      // Tomar el rango que va del inicio del Div hasta el final, y normalizarlo a una escala de 0 a 1

      // Valores de salida
      let min = 0;
      let max = 1;

      // Valores de entrada
      let rangeMin = 0;
      let rangeMax = el.clientHeight + (window.innerHeight / 3);

      // VALUE: llega a 0 cuando estamos a media pantalla del Div a mostrar
      let posInDiv = window.scrollY - (el.offsetTop - rangeMax);
      console.log("Offset: " + posInDiv);

      // OPACITY se calcula con una función de normalización que determina el inicio del Div + 2/3 de la altura de la ventana como 0, y el final del Div como 1

      // Versión completa:
      // let opacity = (max - min) / (rangeMax - rangeMin) * (posInDiv - min) + rangeMin;

      // Versión simplificada (si ambos valores mínimos son 0):
      let opacity = max / rangeMax * posInDiv;

      console.log("Opacity: " + opacity);
      el.style.opacity = opacity;
    };

  }

  window.addEventListener('scroll', changeOpacity(opLayer));

  window.addEventListener('scroll', changeOpacity(videoLayer));


}
