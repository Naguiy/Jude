$(function () {
  /*初期表示*/
  $('.eachCorner').hide();
  $('.eachCorner').eq(0).show();
  $('.changeTab').eq(0).addClass('is-active');
  /*クリックイベント*/
  $('.changeTab').each(function () {
    $(this).on('click', function () {
      var index = $('.changeTab').index(this);
      $('.changeTab').removeClass('is-active');
      $(this).addClass('is-active');
      $('.eachCorner').hide();
      $('.eachCorner').eq(index).show();
    });
  });
});
