/* FadeIn Scroll */
$(document).ready(function() {
    
    /* Every time the window is scrolled ... */
    $("#main-content").scroll( function(){
    
        /* Check the location of each desired element */
        $('.fade').each( function(i){
            
            var bottom_of_object = $(this).position().top + $(this).outerHeight();
            var bottom_of_window = $("#main-content").scrollTop() + $("#main-content").height();
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},1200);
                    
            }
            
        }); 
    
    });
    
});


function search() {
    document.getElementById("6").style.transition = "0.2s all";
    document.getElementById("5").style.transition = "0.2s all";
    document.getElementById("4").style.transition = "0.2s all";
    document.getElementById("3").style.transition = "0.2s all";
    document.getElementById("2").style.transition = "0.2s all";
    document.getElementById("1").style.transition = "0.2s all";
    document.getElementById("main-content").style.overflowY = "hidden"
    $('#main-content').animate({ scrollTop: 0 }, '300');
    document.getElementById("searchbtn").style.transition = "1s all";
    setTimeout(() => {
        document.getElementById("5").style.opacity = "0%";
        setTimeout(() => {
            document.getElementById("1").style.opacity = "0%";
            setTimeout(() => {
                document.getElementById("2").style.opacity = "0%";
                setTimeout(() => {
                    document.getElementById("3").style.opacity = "0%";
                    setTimeout(() => {
                        document.getElementById("4").style.opacity = "0%";
                        document.getElementById("6").style.opacity = "0%";
                        setTimeout(() => {
                            document.getElementById("searchbtn").style.position = "absolute";
                            document.getElementById("searchbtn").style.left = "50%";
                            document.getElementById("searchbtn").style.transform = "translate(-50%,-0%)";
                            document.getElementById("formsearch").style.display = "block";
                            setTimeout(() => {
                                document.getElementById("formsearch").style.width = "100%";
                                document.getElementById("formsearch").style.height = "100%";
                            }, 50);
                        }, 200);
                    }, 100);
                }, 100);
            }, 100);
        }, 100);
    }, 500);
}
function searchoff() {
    document.getElementById("6").style.transition = "0.2s all";
    document.getElementById("5").style.transition = "0.2s all";
    document.getElementById("4").style.transition = "0.2s all";
    document.getElementById("3").style.transition = "0.2s all";
    document.getElementById("2").style.transition = "0.2s all";
    document.getElementById("1").style.transition = "0.2s all";
    document.getElementById("main-content").style.overflowY = "auto"
    $('#main-content').animate({ scrollTop: 0 }, '300');
    document.getElementById("formsearch").style.width = "0%";
    document.getElementById("formsearch").style.height = "0%";
    setTimeout(() => {
        document.getElementById("searchbtn").style.transform = "translate(0)";
        document.getElementById("searchbtn").style.left = "0";
        document.getElementById("searchbtn").style.position = "relative";
        setTimeout(() => {
            document.getElementById("formsearch").style.display = "none";
            setTimeout(() => {
                document.getElementById("5").style.opacity = "100%";
                setTimeout(() => {
                    document.getElementById("1").style.opacity = "100%";
                    setTimeout(() => {
                        document.getElementById("2").style.opacity = "100%";
                        setTimeout(() => {
                            document.getElementById("3").style.opacity = "100%";
                            setTimeout(() => {
                                document.getElementById("4").style.opacity = "100%";
                                document.getElementById("6").style.opacity = "100%";
                            }, 100);
                        }, 100);
                    }, 100);
                }, 100);
            }, 100);
        }, 200);
    }, 1000);
}
