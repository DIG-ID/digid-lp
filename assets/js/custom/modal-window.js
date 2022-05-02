$(function() {
  var modal = $( '.modal-window' );
  var btnOpen = $( '.modal-open' );
  var btnClose = $( '.modal-close' );
  btnOpen.on( 'click', function(e) {
    e.preventDefault();
    modal.addClass('active');
  });

  btnClose.on( 'click', function(e) {
    e.preventDefault();
    modal.removeClass('active');
  });

  $(window).on( 'click', function(e) {
    if (e.target == modal) {
      modal.removeClass('active');
    }
  });

});
