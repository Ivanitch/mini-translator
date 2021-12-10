$( document ).ready(function() {
    /**==========================
     Убираем placeholder из input
     ============================**/
    $('input,textarea').focus(function(){
        $(this).data('placeholder',$(this).attr('placeholder'));
        $(this).attr('placeholder','');
    });
    $('input,textarea').blur(function(){
        $(this).attr('placeholder',$(this).data('placeholder'));
    });

    // Получение и вывод коллекции
    var preloader = $("#preloader");
    var success = $("#success");
    var error = $("#error");
    var query_button = $("#query_button");

    $('#form-abb').on('submit', function(e){
        success.addClass('close');
        error.addClass('close');
        e.preventDefault();
        console.log('submit');

        var form = $(this),
            data = $(this).serialize();
        $.ajax({
            url: form.attr("action"),
            type: form.attr("method"),
            data: data,
            beforeSend: function(){
                preloader.fadeIn();
                query_button.prop("disabled",true)
            },
            success: function(data){
                data = JSON.parse(data);
                if (data.success === true) {
                    setTimeout(function(){
                        success.removeClass('close');
                        preloader.fadeOut();
                        success.text(data.collection.abb + ' - ' + data.collection.eng + ' - ' +data.collection.ru);
                        query_button.prop("disabled",false);
                        form[0].reset();
                    }, 1000);
                } else {
                    setTimeout(function(){
                        error.removeClass('close');
                        preloader.fadeOut();
                        error.text(data.message);
                        query_button.prop("disabled",false);
                    }, 1000);
                }
            },
            error: function(){
                data = JSON.parse(data);
                error.removeClass('close');
                preloader.fadeOut();
                error.text(data.message);
                query_button.prop("disabled",false);
            }
        });
    });
});
