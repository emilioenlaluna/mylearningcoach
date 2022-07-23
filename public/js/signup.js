$(document).ready(function () {
    $(".icon-ojito ").click(function () {
        icono = this;
        password = this.nextElementSibling;
        if (password.type === 'password') {
            password.type = 'text';
            $(icono).html("visibility");
        }
        else if (password.type === 'text') {
            password.type = 'password';
            $(icono).html("visibility_off")
        }
    });

    $('#confpass').focusout(function () {
        passC = $(this).val();
        passO = $('#pass').val();

        if ((passC !== passO) || (passO === '' && passC !== '')) {
            $('#mensaje').addClass("alert alert-danger");
            $('#mensaje').html("¡Las contraselas no coinciden!");
            $('#registro').prop("disabled", true);
        } else {
            $('#mensaje').removeClass("alert alert-danger");
            $('#mensaje').html("");            
            $('#registro').prop("disabled", false);
        }

    });
});
