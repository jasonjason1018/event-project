$(function(){
  $(window).bind('scroll', winScroll).scroll();

  function winScroll() {
    var $win = $(window);
    if($win.scrollTop() > 30){
      $("header").addClass("scrolled");
    }else {
      $("header").removeClass("scrolled")
    }
  }
  $('.slider').slick({
    arrows: true,
    autoplay: true,
    autoplaySpeed: 3000,
  });
})


