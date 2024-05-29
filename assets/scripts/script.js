$(function(){
    $('div.btn-mobile').click(function (e) { 
        var listaMenu = $('nav.mobile ul')
        var icone = $('nav.mobile div.btn-mobile i')
        if (listaMenu.is(":hidden")==true) {
            icone.removeClass('fa fa-bars fa-2x');
            icone.addClass('fa fa-times fa-2x');
            listaMenu.slideToggle();
        }else{
            icone.addClass('fa fa-bars fa-2x');
            listaMenu.slideToggle();
        }
    });

        if ($('target').length >= 0) 
        {
            var elemento = '#'+$('target').attr('target');
            var divScroll = $(elemento).offset().top;
            $('html,body').animate({'scrollTop':divScroll},1500);
        }

})