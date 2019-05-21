(function ($) {
  Drupal.behaviors.ideallogic = {
    attach: function (context) {
      $('.ideallogic-session-toggle', context).once('ideallogicToggleSessions', function () {
        $(this).click(function () {
          if ($(this).prev().is(':visible')) {
            $(this).prev().hide("default");
            $(this).text('See Sessions and Register');
          } else {
            $(this).prev().show("default");
            $(this).text('Hide Sessions');
          }
        })
      });
    }
  };
})(jQuery);

