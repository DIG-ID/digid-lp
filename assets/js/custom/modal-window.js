$(function() {
  var blurObjects = $( '.box-header, .box-main-content' );
  var blurBG = $( '.box-wrapper--image' );
  var modal = $( '.modal-window' );
  var btnOpen = $( '.modal-open' );
  var btnClose = $( '.modal-close' );
  btnOpen.on( 'click', function(e) {
    e.preventDefault();
    modal.addClass('active');
    blurBG.addClass('active');
    blurObjects.addClass('filter-blur');
  });

  btnClose.on( 'click', function(e) {
    e.preventDefault();
    modal.removeClass('active');
    blurBG.removeClass('active');
    blurObjects.removeClass('filter-blur');
  });

  $(document).on('mouseup', function(e) {
    // if the target of the click isn't the container nor a descendant of the container
    if (!modal.is(e.target) && modal.has(e.target).length === 0) {
      modal.removeClass('active');
      blurBG.removeClass('active');
      blurObjects.removeClass('filter-blur');
    }
  });

});
