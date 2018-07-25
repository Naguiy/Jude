$(function() {
  $('#navToggle').click(function() {
    // #navToggleに.openNavを付加
    $(this).toggleClass('openNav');
    $('#drawer-menu-haikei').toggleClass('openNav');
  });
});
