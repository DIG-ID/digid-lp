$(function() {
  var blurObjects = $( '.box-header, .box-main-content' );
  var modal = $( '.modal-window' );
  var btnOpen = $( '.modal-open' );
  var btnClose = $( '.modal-close' );
  btnOpen.on( 'click', function(e) {
    e.preventDefault();
    modal.addClass('active');
    blurObjects.addClass('filter-blur');
  });

  btnClose.on( 'click', function(e) {
    e.preventDefault();
    modal.removeClass('active');
    blurObjects.removeClass('filter-blur');
  });

  $(window).on( 'click', function(e) {
    if (e.target == modal) {
      modal.removeClass('active');
      blurObjects.removeClass('filter-blur');
    }
  });

});
