$(document).ready(function () {
    $('#onhover-text-change-1 a').hover(function () {
        $(this).removeClass('text-dark');
        $("#img_donationforpoor").attr("src","/images/white-images/white-donationforpoor.png");
        $(this).addClass('text-white');
    }, function () {
        $("#img_donationforpoor").attr("src","/images/donationforpoor.png");
        $(this).removeClass('text-white');
        $(this).addClass('text-dark');
    });

    $('#onhover-text-change-2 a').hover(function () {
        $(this).removeClass('text-dark');
        $("#img_savethedream").attr("src","/images/white-images/white-savethedream.png");
        $(this).addClass('text-white');
    }, function () {
        $("#img_savethedream").attr("src","/images/savethedream.png");
        $(this).removeClass('text-white');
        $(this).addClass('text-dark');
    });

    $('#onhover-text-change-3 a').hover(function () {
        $(this).removeClass('text-dark');
        $("#img_makeworldhappy").attr("src","/images/white-images/white-makeworldhappy.png");
        $(this).addClass('text-white');
    }, function () {
        $("#img_makeworldhappy").attr("src","/images/makeworldhappy.png");
        $(this).removeClass('text-white');
        $(this).addClass('text-dark');
    });

    $('#onhover-text-change-4 a').hover(function () {
        $(this).removeClass('text-dark');
        $("#img_bettereducation").attr("src","/images/white-images/white-bettereducation.png");
        $(this).addClass('text-white');
    }, function () {
        $("#img_bettereducation").attr("src","/images/bettereducation.png");
        $(this).removeClass('text-white');
        $(this).addClass('text-dark');
    });

    $('#onhover-text-change-5 a').hover(function () {
        $(this).removeClass('text-dark');
        $("#img_medicallyassisted").attr("src","/images/white-images/white-medicallyassisted.png");
        $(this).addClass('text-white');
    }, function () {
        $("#img_medicallyassisted").attr("src","/images/medicallyassisted.png");
        $(this).removeClass('text-white');
        $(this).addClass('text-dark');
    });

    $('#onhover-text-change-6 a').hover(function () {
        $(this).removeClass('text-dark');
        $("#img_helpthehelpless").attr("src","/images/white-images/white-helpthehelpless.png");
        $(this).addClass('text-white');
    }, function () {
        $("#img_helpthehelpless").attr("src","/images/helpthehelpless.png");
        $(this).removeClass('text-white');
        $(this).addClass('text-dark');
    });

});