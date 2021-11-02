
    /*----------------------------------------
	   Slider Activation
    ------------------------------------------*/

    /* Hero Slider Activation */
    var swiper = new Swiper('.hero-slider.swiper-container', {
        loop: true,
        speed: 1150,
        spaceBetween: 30,
        slidesPerView: 1,
        effect: 'fade',
        pagination: true,
        navigation: true,
  
        // Navigation arrows
        navigation: {
            nextEl: '.hero-slider .home-slider-next',
            prevEl: '.hero-slider .home-slider-prev'
        },
        pagination: {
            el: '.hero-slider .swiper-pagination',
            type: 'bullets',
            clickable: 'true'
          },
      });
  
      /* Product Deal Activation */
      var swiper = new Swiper('.product-deal-carousel .swiper-container', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 20,
        pagination: true,
        navigation: true,
        slideVisibleClass: 'swiper-slide-visible',
        watchSlidesVisibility:true,
  
        navigation: {
          nextEl: '.product-deal-carousel .swiper-deal-button-next',
          prevEl: '.product-deal-carousel .swiper-deal-button-prev'
        },
        pagination: {
          el: '.product-deal-carousel .swiper-pagination',
          type: 'bullets',
          clickable: 'true'
        }
        
      });
  
      // Testimonial Carousel
      var galleryThumbs = new Swiper('.testimonial-gallery-top', {
        slidesPerView: 1,
        loop: true,
        effect: 'fade',
        fadeEffect: {
          crossFade: true
        },
        grabCursor: false,
        centeredSlides: true,
      });
      var galleryTop = new Swiper('.testimonial-gallery-thumbs', {
        loop: true,
        effect: 'coverflow',      
        coverflowEffect: {
          rotate: 0,
          stretch: 0,
          depth: 50,
          modifier: 6,
          slideShadows : false,
          },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        thumbs: {
          swiper: galleryThumbs,
        }
      });
  
      // Single Product Carousel
      var productgalleryThumbs = new Swiper('.product-gallery-thumbs', {
        spaceBetween: 10,
        slidesPerView: 3,
        // loop: false,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
      });
      var galleryTop = new Swiper('.product-gallery-top', {
        spaceBetween: 10,
        loop: true,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        thumbs: {
          swiper: productgalleryThumbs
        }
      });
  
      /* Pruduct Carousel Activation */
      var productCarousel = new Swiper('.product-carousel .swiper-container', {
        loop: true,
        slidesPerView: 4,
        spaceBetween: 20,
        slideVisibleClass: 'swiper-slide-visible',
        watchSlidesVisibility:true,
        observer: true,
        observeParents: true,
  
        pagination: {
          el: '.product-carousel .swiper-pagination',
          type: 'bullets',
          clickable: 'true'
        },
  
        // Navigation arrows
        navigation: {
            nextEl: '.product-carousel .swiper-button-next',
            prevEl: '.product-carousel .swiper-button-prev',
        },		
        // Responsive breakpoints
        breakpoints: {
          // when window width is >= 320px
          320: {
          slidesPerView: 1,
          spaceBetween: 10
          },
          // when window width is >= 480px
          480: {
          slidesPerView: 2,
          spaceBetween: 20
          },
          // when window width is >= 768px
          768: {
          slidesPerView: 3,
          spaceBetween: 20
          },
          // when window width is >= 992px
          992: {
          slidesPerView: 3,
          spaceBetween: 20
          },
          // when window width is >= 1200px
          1200: {
          slidesPerView: 4,
          spaceBetween: 20
          }
        }
      });
  
      /* Modal Product Carousel Activation */
      var productCarousel = new Swiper('.modal-product-carousel .swiper-container', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 0,
        pagination: false,
        navigation: true,
        observer: true,
        observeParents: true,
  
        navigation: {
          nextEl: '.modal-product-carousel .swiper-product-button-next',
          prevEl: '.modal-product-carousel .swiper-product-button-prev'
        }
      });