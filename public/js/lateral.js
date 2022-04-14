$(document).ready(function(){
    $('.picture').mouseenter(function(){
        $(this).next().children().toggleClass('invisible');
       
    })
    $('.picture').mouseleave(function(){
        $(this).next().children().toggleClass('invisible');
       
    })
    
})