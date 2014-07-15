// JavaScript Document
$( document ).ready(function() {
    $("[rel='tooltip']").tooltip();    
 
    $('.thumbnail').hover(
        function(){
            $(this).find('.caption').stop().fadeIn(180); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').stop().fadeOut(180); //.fadeOut(205)
        }
    ); 
});


