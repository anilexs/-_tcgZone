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
            $('.langSelect').css({
                'border-bottom-right-radius': '0px',
                'border-bottom-left-radius': '0px'
            });            

            $(selecteur).removeClass('close');
        } else {
            
            $(selecteur).stop(true, true).animate({
                maxHeight: 0
            }, 100, function () {
                setTimeout(function () {
                    $('.langSelect').css({
                        'border-bottom-right-radius': '10px',
                        'border-bottom-left-radius': '10px'
                    });       
                }, 300);

            });
    
            $(selecteur).addClass('close');
        }
    });
    
});