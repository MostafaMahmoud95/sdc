$(window).scroll(function() {    
        var scroll = $(window).scrollTop();        
        if (scroll >= 30) {
            $(".home-header").addClass("light-background");
        }
        if (scroll < 30) {
            $(".home-header").removeClass("light-background");
        }
});
