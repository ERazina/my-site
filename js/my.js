$(document).ready(function() {
    $("#menu").accordion({collapsible: true, active: false});

    // $('#first-arrow').click(function(){
    // 	$('#first-arrow').toggleClass('rotate');
    // });

    // $('#second-arrow').click(function(){
    // 	$('#second-arrow').toggleClass('rotate');
    // });

    // $('#third-arrow').click(function(){
    // 	$('#third-arrow').toggleClass('rotate');
    // });

    // $('#forth-arrow').click(function(){
    // 	$('#fort-arrow').toggleClass('rotate');
    // });

    $('.portfolio-img').mouseenter(function() {
        $(this).css({'transition': 'all 2s ease-out',
            'transform': 'scale(1.2)'});
    });

     $('.portfolio-img').mouseout(function() {
        $(this).css({'transition': 'all 2s ease-out',
            'transform': 'scale(1)'});
    });

});

