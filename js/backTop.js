
$(document).ready(function(){
    
    //Applying with Javascript,check if the window has been scrolled 
    //    back to the top of the page, and the back to top icon would  
    //    fade by using the JQuery method .fadeOut, FadeIn otherwise.
    $(window).scroll(function() {
        if ($(this).scrollTop()) {
            $("#backTop").fadeIn();
        } else {
            $("#backTop").fadeOut();
        }
    });

    //Scroll method enables user clicking the scroll to top icon 
    //   smoothly as an animation by using the JQuery method .animate.
    //Retuen the top value via using the JQuery scrollTop method in 
    //    order to impletement scroll animation.
    $("#backTop").click(function () {
       //1 second of animation time by setting 1000 inside the animate //     method.
       $("html, body").animate({scrollTop: 0}, 1000);
    })
});