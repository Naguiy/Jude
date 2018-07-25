$(function() {
  $(window).on('load scroll',function() {
    if($(window).scrollTop() > 350) {
      $("#nav").addClass('appear');
    } else {
      $("#nav").removeClass('appear');
    }
  });
});
