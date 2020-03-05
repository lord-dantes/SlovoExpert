jQuery(document).ready(function() {
    jQuery('.mc__box__link').click(function(e) {
        e.preventDefault();
        jQuery('.background').addClass('active-background');
        jQuery('.formModal').addClass('active-formModal');
    });
    jQuery('.mcLink').click(function(e) {
        e.preventDefault();
        jQuery('.background').addClass('active-background');
        jQuery('.formModal').addClass('active-formModal');
    });
    $('.background').click(function(e) {
        e.preventDefault();
        $('.background').removeClass('active-background');
        jQuery('.formModal').removeClass('active-formModal');
    });
    $('.formModal--close').click(function(e) {
        e.preventDefault();
        $('.background').removeClass('active-background');
        jQuery('.formModal').removeClass('active-formModal');
    });
});
// timer 
// function timer(){
//     var seconds = jQuery('.mc__box__timer--seconds');
//     var haveSec = Number(seconds.html()) - 1;
//     seconds.html(haveSec);

//     if( haveSec == 0 ){
//         setTimeout(function(){},1000);}
//     else{
//         setTimeout(timer,1000);
//     }
// }
// setTimeout(timer,1000);
// timer end