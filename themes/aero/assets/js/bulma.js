  document.addEventListener('DOMContentLoaded', function(){
            var carousels = bulmaCarousel.attach();
          }, false);

          $(document).ready(function() {
          
            // Check for click events on the navbar burger icon
            $(".navbar-burger").click(function() {
          
                // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                $(".navbar-burger").toggleClass("is-active");
                $(".navbar-menu").toggleClass("is-active");
          
            });
            
            $('#tabs li').on('click', function() {
              var tab = $(this).data('tab');
          
              $('#tabs li').removeClass('is-active');
              $(this).addClass('is-active');
          
              $('#tab-content p').removeClass('is-active');
              $('p[data-content="' + tab + '"]').addClass('is-active');
            });
            
          }); 
          
          
                    //   (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
                    //   function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
                    //   e=o.createElement(i);r=o.getElementsByTagName(i)[0];
                    //   e.src='//www.google-analytics.com/analytics.js';
                    //   r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
                    //   ga('create','UA-XXXXX-X','auto');ga('send','pageview');
                  