function signUp() {

    var comany_name = $('#company_name').val();
    var company_phone = $('#company_phone').val();
    var company_address = $('#company_address').val();
    var company_taxcode = $('#company_taxcode').val();
    var company_email = $('#company_email').val();
    var company_password = $('#company_password').val();
    $.ajax({
        url: "data/SignUp.php",
        type: "post",
        dataType: "text",
        data: {
            comany_name,
            company_phone,
            company_address,
            company_taxcode,
            company_email,
            company_password
        },
        success: function (result) {
            $('#result').html(result);
            $('#result-notification').html(result);
        }
    });
}

function reload_page() {
    location.reload();
}

$(document).ready(function () {
    $('#notification').on('hidden.bs.modal', function () {
        reload_page();
    });
    $('#modalRegisterForm').on('hidden.bs.modal', function () {
        $('#result').html('');
        $('#company_name').val('');
        $('#company_phone').val('');
        $('#company_address').val('');
        $('#company_taxcode').val('');
        $('#company_email').val('');
        $('#company_password').val('');
    });
});