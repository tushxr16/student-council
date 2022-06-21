/*if ($(window).width() >= 993)
  $(".dropdown").click(function () {
    return false;
  });*/
$('.arrow').click(function(){
  var win=$(window).height()-100;
  $("html, body").animate({ scrollTop: win },1000);
})