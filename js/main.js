function contentLoaded() {

  // Funcionalidad de los carousels
  const galleryCarousel = document.getElementById('gallery-carousel');
  const backstageCarousel = document.getElementById('backstage-carousel');

  function carouselFunctionality(carousel) {
    const track = carousel.querySelector('.carousel__track');
    const slides = Array.from(track.children);

    let nextButton = carousel.querySelector('.carousel__button--right');
    let prevButton = carousel.querySelector('.carousel__button--left');

    let slideWidth = slides[0].getBoundingClientRect().width;

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

    prevButton.addEventListener('click', e => {
      const currentSlide = track.querySelector('.current-slide');
      const prevSlide = currentSlide.previousElementSibling;

      if(currentSlide.previousElementSibling) {
        moveToSlide(track, currentSlide, prevSlide);
      }

    })

    nextButton.addEventListener('click', e => {
      const currentSlide = track.querySelector('.current-slide');
      const nextSlide = currentSlide.nextElementSibling;

      if(currentSlide.nextElementSibling) {
        moveToSlide(track, currentSlide, nextSlide);
      }

    })
  }

  carouselFunctionality(galleryCarousel);
  carouselFunctionality(backstageCarousel);







}
