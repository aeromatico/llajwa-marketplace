$(document).ready(function() {

    setTimeout(function() {

        $("#aeroNotification").fadeOut(1500);
        $(".aeroNotifcation").fadeOut(3000);

    },1500);
            $('#tabs li').on('click', function() {
              var tab = $(this).data('tab');
          
              $('#tabs li').removeClass('is-active');
              $(this).addClass('is-active');
          
              $('#tab-content p').removeClass('is-active');
              $('p[data-content="' + tab + '"]').addClass('is-active');
            });    

});
