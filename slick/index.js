$(document).on("ready", function () {
    $(".un").slick({
      dots: true,
      slidesToShow: 1,
      slidesToScroll: 1,
    });
    $(".deux").slick({
      dots: false,
      vertical: true,
      slidesToShow: 5,
      slidesToScroll: 1,
      centerMode: true,
      autoplay: true,
      autoplaySpeed: 200,
      draggable: false,
      arrows: false,
    });
  });