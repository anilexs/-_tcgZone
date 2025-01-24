$(document).ready(function(){

    $('.langSelect').on('click', function(e) {
        var selecteur = $('.optLange');
    
        // Vérifie si l'élément a la classe 'close'
        var close = $(selecteur).hasClass('close');
    
        if (close) {
            
            var contentHeight = $(selecteur)[0].scrollHeight;
            $(selecteur).stop(true, true).animate({
                maxHeight: contentHeight
            }, 100);

            $(selecteur).removeClass('close');
        } else {
            
            $(selecteur).stop(true, true).animate({
                maxHeight: 0
            }, 100);
    
            $(selecteur).addClass('close');
        }
    });
    
});