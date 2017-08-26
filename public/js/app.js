$(function () {
    
    var location = window.location.href;
    var cur_url = '/' + location.split('/').pop();
    
    $('#mainmenu li').each(function () {
        var link = $(this).find('a').attr('href');
        if(cur_url == link)
        {
            $(this).find('a').removeAttr('href');
            $(this).addClass('active');
        }
    });
    
});

$(document).ready(function(){
    $('#contactform').on('submit', function(){
        $.ajax({
            type: 'POST',
            url: '/sendmail',
            data: $('#contactform').serialize(),
            success: function(result){
                console.log(result);
            }
        });
        
        return false;
    });
});