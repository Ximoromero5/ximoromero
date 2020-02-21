$(document).ready(function () {

    //Seleccionar género
    $('.male').click(function () {
        $(this).focus();
        $('.female').removeClass('active2');
        $(this).addClass('active');
    });
    $('.female').click(function () {
        $('.male').removeClass('active');
        $(this).addClass('active2');
    });

    //Mostrar contraseña
    $('.mostrarClave').click(function () {
        if ($('#password').attr('type') === 'password') {
            $('#password').attr('type', 'text');
            $(this).css('color', '#00bbf0');
        } else {
            $('#password').attr('type', 'password');
            $(this).css('color', '');
        }
    });
});