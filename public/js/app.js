// $(function (){
  var elem = document.querySelector('.masonry');
  var msnry = new Masonry( elem, {
    itemSelector: ".masonry-item",
    columnWidth: 200,
    gutter : 20,
    columnWidth : ".masonry-sizer",
    percentPosition : true,
  });

  $(window).load(function(){
    var $container = $('.masonry');
    $container.imagesLoaded(function(){
      $container.masonry({
        itemSelector: ".masonry-item",
      });
    });
  });
// });