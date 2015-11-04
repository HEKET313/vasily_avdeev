/**
 * Created by Nikita on 04.11.2015.
 */
    $(window).load(function () {
        window.scrollTo(0,0);
        $( "#loader" ).animate({
            opacity: 0
        }, 500, function() {
            $("#loader").hide();
        });
    });