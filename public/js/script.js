$(function () {
  $('.menu-button').click(function () {
    $(this).toggleClass('active');
    if ($(this).hasClass('active')) {
      $('.menu').addClass('active');
    } else {
      $('.menu').removeClass('active');
    }
  });

  $('.menu ul li').click(function () {
    $('.menu-button').removeClass('active');
    $('.menu').removeClass('active');
  });
});
