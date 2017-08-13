$(document).ready(function() {

    cutReviewText();
    showHideTextTails();

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


  $('.sub_slide').on('click', function() {
    switchContent($(this), $('#reviews .show'));
  });

  $('body').on('click', '.more_text', function() {
    $(this).parent().find('.dots').hide();
    $(this).hide();
    // $(this).next('.text_tail').removeClass('hidden');
    $(this).next('.text_tail').show('fast');
    // $('.show').css('height', 'auto');
    // $('.show').addClass('auto_height');
    $(this).parent().append('<span class="less_text">Скрыть</span>');
  });
    
  $( "body" ).on('click', '.less_text', function() {
    $(this).hide();
    $(this).prev('.text_tail').hide('fast');
    $(this).parent().find('.dots').show();
    $(this).parent().find('.more_text').show();
    // $('.show').removeClass('auto_height');
    $(this).remove();
    // $(this).append('<span class="less_text">Скрыть</span>');
  });
    
});

function switchContent(one, two) {

    var one_content = $(one).find('.content');
    var two_content = $(two).find('.content');
    
    $(two_content).animate({
        "opacity" : "0"
    }, 200);
    $(one_content).animate({
        "opacity" : "0"
    }, 200, function() {
        
        var one_html = $(one_content).html();
        var two_html = $(two_content).html();

        $(one_content).html(two_html);
        $(two_content).html(one_html);
        
        // showHideTextTails();

        $(one_content).animate({
            "opacity" : "1"
        }, 200);
        $(two_content).animate({
            "opacity" : "1"
        }, 200);
    });
};

function cutReviewText() {
    $('.slide .content p').each(function(review) {
      text = $(this).text();
      length = 300;

      if (text.length > length) {
        trimmedString = text.substring(0, length - 3);
        $(this).text(trimmedString);
        $(this).append('<span class="dots">...</span>');
        $(this).append('<span class="more_text">Читать полностью</span>');
        $(this).append('<span class="text_tail hidden">' + text.substring(length - 3, text.length) + '</span>');
      }
      else
        $(this).text(text);
    });
}

function showHideTextTails() {
    // $('.slide.show .content .text_tail').removeClass('hidden');
    // $('.sub_slide .content .text_tail').addClass('hidden');

    // $('.slide.show .content .dots').addClass('hidden');
    // $('.slide .content .dots').removeClass('hidden');
    // $('.slide .content .text_tail').addClass('hidden');
}