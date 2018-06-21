//Функция, возвращающая абсолютный url
var getAbsoluteUrl = (function () {
    var a;
    return function (url) {
        if (!a) a = document.createElement('a');
        a.href = url;
        return a.href;
    };
})();
    
//Функция для подсветки активного пункта меню
$(function () {
    var location = window.location.href;
    var cur_url = getAbsoluteUrl(location.split('/').pop());
    
    $('#mainmenu li').each(function () {
        var link = $(this).find('a').attr('href');
        if(cur_url == link)
        {
            $(this).find('a').removeAttr('href');
            $(this).addClass('active');
        }
    });
    
});

//AJAX отправка email через форму обратной связи
$(document).ready(function(){
    $('#contactform').on('submit', function(e){
        e.preventDefault();
        
        $.ajax({
            type: 'POST',
            url: '/sendmail',
            data: $('#contactform').serialize(),
            success: function(data){
                if(data.result)
                {
                    $('#senderror').hide();
                    $('#sendmessage').show();
                }
                else
                {
                    $('#senderror').show();
                    $('#sendmessage').hide();
                }
            },
            error: function(){
                $('#senderror').show();
                $('#sendmessage').hide();
            }
        });
    });
});