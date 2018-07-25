$(document).ready(function() {
  var pagetop = $('.pagetop-btn');
  $(window).scroll(function() {
    if($(this).scrollTop() > 300) {
      pagetop.fadeIn();
    } else {
      pagetop.fadeOut();
    }
  });
  pagetop.click(function() {
    $('body, html').animate({ scrollTop: 0}, 500);
    return false;
  });
});
