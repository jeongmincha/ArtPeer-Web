function swapImages(){
  var $active = $('#slide_frame .active');
  var $next = ($('#slide_frame .active').next().length > 0) ? $('#slide_frame .active').next() : $('#slide_frame img:first');
  $active.fadeOut(function(){
    $active.removeClass('active');
    $next.fadeIn().addClass('active');
  });
}

setInterval('swapImages()', 2000);