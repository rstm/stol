$(document).ready(function() {
    
    //send-mail
    $(".request").submit(function(e) {
                  
    $(this).find('input[type=submit]').html('Подождите...');
    var url = "send_mail.php"; // the script where you handle the form input.    
    
    $.ajax({
        type: "POST",
        url: url,
        data: $(this).serialize(), // serializes the form's elements.
        success: function(data)
        {
            if (data == 'ok') {
                $('#success_mail_send').fadeIn('fast');
            } else {
                $('#failed_mail_send').fadeIn('fast');
            }
            $(this).find('input[type=submit]').html('ОТПРАВИТЬ');
        }
    });
     e.preventDefault(); // avoid to execute the actual submit of the form.
  });

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
  
    $('.notice .close_notice').click(function() {
        $(this).parent().parent().fadeOut('fast');
    });
    
});