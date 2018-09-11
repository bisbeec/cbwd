$(document).ready(function() { 
      // Add smooth scrolling to all links
      $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function(){

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });

      $(function() {
        $("#hamburger").click(function() {
            $(".bar-one").toggleClass("barOneEffect");
            $(".bar-two").toggleClass("barTwoEffect");
            $(".bar-three").toggleClass("barThreeEffect");
            $("#nav").toggleClass("nav-show");
        });
      });

      $(function() {
        $("#nav li").click(function() {
            $("#nav").removeClass("nav-show");
            $(".bar-one").removeClass("barOneEffect");
            $(".bar-two").removeClass("barTwoEffect");
            $(".bar-three").removeClass("barThreeEffect");
        });
      });


    $(document).on('touchstart', function() {
        detectTap = true; //detects all touch events
    });
    $(document).on('touchmove', function() {
        detectTap = false; //Excludes the scroll events from touch events
    });
    $(document).on('click touchend', function(event) {
        if (event.type == "click") detectTap = true; //detects click events 
           if (detectTap){
              //here you can write the function or codes you wanna execute on tap
               $("#nav li a::after").css("display","none"); 

           }
     });

})

