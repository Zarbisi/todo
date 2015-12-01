/**
 * Created by Raph on 29/11/2015.
 */
/*$( window ).resize(function() {
    var largeur = $(document).width();
    if(largeur<720) {
        //alert("ok");
        //responsive(largeur);
    }
});
function responsive(caca)
{
    $("#LoginWindow, #footer1").stop();
    $("#LoginWindow, #footer1").animate({
        width: caca-200+"px"
    });
}*/
/*$(document).ready(function() {
    $(".LoginButton").click(function(){
        window.location.href = "{{ route('login') }}";
    });

});*/

$(document).ready(function() {

    var speedanime1 = 200;
    $('body').hide().fadeIn(speedanime1);
    $('body').css({
        "margin-top" : "-100px"
    }).animate({
        "margin-top" : "0px"
    },{ queue: false, duration: speedanime1, easing: 'swing' });


    $('.Logo').click(function(){
        window.location.href= '/';
    });
});