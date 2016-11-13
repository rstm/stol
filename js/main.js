$(document).ready(function() {

    // scroll to name by tag
  $(function() {
    $('a').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top - 10
          }, 1000);
          return false;
        }
      }
    });
    
    $('button').click(function() {
        var target = $('#' + $(this).attr('data-target'));
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top - 200
          }, 1000);
          return false;
        }
    });
  });
  
});