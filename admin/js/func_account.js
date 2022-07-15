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
function Edit(username, lv, st) {
    // console.log(username);
    // console.log(lv);
    // console.log(st);
    $('#userNameE').val(username);
    $('#userNameE1').val(username);
    $('#lvE').val(lv);
    $('#statusE').val(st);
}
function Edit_Save() {
    $.ajax({
        url: "data/accounts/account_edit.php",
        type: "post",
        dataType: "text",
        data: {
            userName: $('#userNameE1').val(),
            level: $('#lvE').val(),
            status: $('#statusE').val()
        },
        success: function (result) {
            //alert(result);
            $('#resultEdit').html(result);
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
            $('#resultRs').html(result);
        }
    });
}
function Delete(username) {
    if (confirm('Are you sure, you want to delete?')) {
        $.ajax({
            url: "data/accounts/account_del.php",
            type: "post",
            dataType: "text",
            data: {
                userName: username,
            },
            success: function (result) {
                alert(result);
                reload_page();
            }
        });
    }
}
function reload_page() {
    location.reload();
}

$(document).ready(function () {
    $('#editAccountModal').on('hidden.bs.modal', function () {
        reload_page();
    });
    $('#addAccountModal').on('hidden.bs.modal', function () {
        reload_page();
    });
    $('#editPassword').on('hidden.bs.modal', function () {
        reload_page();
    });
});