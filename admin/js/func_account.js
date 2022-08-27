function addAccount() {
    $.ajax({
        url: "data/accounts/account_save.php",
        type: "post",
        dataType: "text",
        data: {
            userName: $('#userName').val(),
            password: $('#password').val(),
            level: $('#level').val()
        },
        success: function (result) {
            $('#result').html(result);
        }
    });
}
function addAccountClear() {
    $('#result').html("");
    $('#userName').val('');
    $('#password').val('');
    $('#level').val('1');
}

function Edit_Save() {
    console.log('btn edit save');
    $.ajax({
        url: "data/accounts/account_edit.php",
        type: "post",
        dataType: "text",
        data: {
            userName: $('#userNameE').val(),
            level: $('#lvE').val(),
            status: $('#statusE').val()
        },
        success: function (result) {
            $('#result').html(result);
            //setTimeout(reload_page, 3000);
        }
    });
}

function ResetPassword(username) {
    $('#userNameRP').val(username);
}
function ResetPassword_Save() {
    $.ajax({
        url: "data/accounts/account_rs_pass.php",
        type: "post",
        dataType: "text",
        data: {
            userName: $('#userNameRP').val(),
            newpass: $('#newpass').val(),
            cfmpass: $('#cfmpass').val()
        },
        success: function (result) {
            $('#result').html(result);
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
});