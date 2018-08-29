(function( $ ){
    $.fn.ajaxView = function(options) {

        var defaults = {
          'url' : $(this).attr('data-url'),
          'methodType': 'POST',
          'dataType': 'JSON',
          'dataValues': {value: $(this).attr('data-value')}
        };
        
        var settings = $.extend( {}, defaults, options );
        var retorno;
        $.ajax({
            url: settings.url,
            type: settings.methodType,
            dataType: settings.JSON,
            data: settings.dataValues,
            async: false
        })
        .done(function(data) {
            retorno = data
           
        })
        .fail(function() {
            retorno = "<h1> Erro ao carregar a tela </h1>"
        })
        .always(function() {
            // console.log("complete");
        });
        return retorno;

        //return something

    }; 
})( jQuery );



