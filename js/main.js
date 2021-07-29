window.addEventListener("load", function(){
  new Glider(document.querySelector(".carrusellista"), {
      slidesToShow: 5,
      slidesToScroll: 5,
      draggable: true,
      dots: '.carruselindicadores',
      arrows: {
        prev: '.carruselanterior',
        next: '.carruselsiguiente'
      }
    });
});

window.addEventListener("load", function(){
  new Glider(document.querySelector(".carrusellistaa"), {
      slidesToShow: 5,
      slidesToScroll: 5,
      draggable: true,
      dots: '.carruselindicadoress',
      arrows: {
        prev: '.carruselanteriorr',
        next: '.carruselsiguientee'
      }
    });
});

var mySwiper = new Swiper('.contenedorswipper', {
// Optional parameters
direction: 'horizontal',
loop: true,


// Navigation arrows
navigation: {
  nextEl: '.swiper-button-next',
  prevEl: '.swiper-button-prev',
},


})

$('.count').each(function () {
  var $this = $(this);
  jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
    duration: 1000,
    easing: 'swing',
    step: function () {
      $this.text(Math.ceil(this.Counter));
    }
  });
});