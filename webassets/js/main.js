$(document).ready(function(){
    $(".section").css("min-height",$(window).height());
    $( window ).resize(function() {
        $(".section").css("min-height",$(window).height());
    });
    
    $(".filter").click(function() {
        $(".filter").removeClass("active");
        $(this).addClass("active");
        var filtertext=$(this).text();
        console.log(filtertext);
        filtertext=filtertext.slice(0,3);
        if(filtertext=="all")
        {
            $container.isotope({ filter: '*' });
        }
        else
        {
            $container.isotope({ filter: '.'+filtertext });
        }
        return false;
    });
    
});