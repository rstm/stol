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
    $('.menu a').click(function() {
      var id = $(this).attr('id');
      var target_id = id.substring(0, id.length - 7);
      var target = $('#' + target_id);
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 10
        }, 1000);
        return false;
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


  $('.paging span').on('click', function() {

    $('.show .content').animate({
        "opacity" : "0"
    }, 200, function() {
        
        var left_html = $('#reviews .left .content').html();
        var show_html = $('#reviews .show .content').html();

        $('.left').html(show_html);
        $('.show').html(left_html);

        $('.show').animate({
            "opacity" : "1"
        }, 200);
    });
  });
    
});