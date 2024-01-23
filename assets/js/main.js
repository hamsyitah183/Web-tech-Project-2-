

$(document).ready(function(){
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
      var currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbarMiss").style.top = "0";
      } else {
        document.getElementById("navbarMiss").style.top = "-100px";
      }
      prevScrollpos = currentScrollPos;
    }
   

});


$(function(){
    var documentEl = $(document),
        fadeElem = $('.fade-scroll');

    documentEl.on('scroll',function(){
        var currScrollPos = documentEl.scrollTop();

        fadeElem.each(function(){
            var $this = $(this),elemOffsetTop = $this.offset().top;
            if(currScrollPos > elemOffsetTop) $this.css('opacity', 1 - (currScrollPos - elemOffsetTop)/1000);
        });
    });
});






  
 


 






