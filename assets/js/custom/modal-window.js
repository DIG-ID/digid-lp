$(function() {
  var modal = $( '.modal-window' );
  var btnOpen = $( '.modal-open' );
  var btnClose = $( '.modal-close' );
  btnOpen.on( 'click', function(e) {
    e.preventDefault();
    modal.addClass('active');
    $( '.box-header, .box-main-content' ).addClass('filter-blur');
  });

  btnClose.on( 'click', function(e) {
    e.preventDefault();
    modal.removeClass('active');
    $( '.box-header, .box-main-content' ).removeClass('filter-blur');
  });

  $(window).on( 'click', function(e) {
    if (e.target == modal) {
      modal.removeClass('active');
      $( '.box-header, .box-main-content' ).removeClass('filter-blur');
    }
  });

});
