$(document).ready(function () {
    $('#onhover-text-change a').hover(function () {
        $(this).removeClass('text-dark');
        $(this).addClass('text-white');
    }, function () {
        $(this).removeClass('text-white');
        $(this).addClass('text-dark');
    });
});