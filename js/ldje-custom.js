$( document ).ready(function() {
  $('header > .ldje-topbar > .left > .ldje-search').click(function(){
    $('.ldje-search-container').addClass('visible');
  });
  $('.ldje-search-container > .close').click(function(){
    $('.ldje-search-container').removeClass('visible');
  });

  $('span.menu-toggle').click(function(){
    $('header > .ldje-menu-mobile').toggleClass('visible');
  });

  function handler1() {
    $('span.menu-toggle > i').replaceWith('<i class="fas fa-times"></i>');
    $(this).addClass('opened');
    $(this).one("click", handler2);
  }
  function handler2() {
    $('span.menu-toggle > i').replaceWith('<i class="fas fa-bars"></i>');
    $(this).removeClass('opened');
    $(this).one("click", handler1);
  }
  $("span.menu-toggle").one("click", handler1);

  var zoomimg = $('.single-product div.product .woocommerce-product-gallery .woocommerce-product-gallery__trigger > img');

  $(zoomimg).replaceWith('<img src="http://localhost/ljde/wp-content/themes/ldje/assets/img/ldje-icon-zoom.svg" alt="">');

});
