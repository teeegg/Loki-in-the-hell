
$(document).ready(function() {
  /*
  $('body').css("background-image", "url('images/food01.jpg')");

  $('li').css('border-radius', '25px');
  $('li.dropdown').css('border-radius', '25px');
  $('.dropdown.li').css('border-radius', '25px');
  */
    
    var img = document.getElementsByClassName('swiper-slide').firstChild;
    img.onload = function() {
        if(img.height > img.width) {
            img.height = '100%';
            img.width = 'auto';
        }
    };
})
