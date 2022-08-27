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

function signIn() {

    var email = $('#email').val();
    var pass = $('#pass').val();
    $.ajax({
        url: "data/SignIn.php",
        type: "post",
        dataType: "text",
        data: {
            email,
            pass
        },
        success: function (result) {
            $('#result-login').html(result);
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

    $('#modalLoginForm').on('shown.bs.modal', function () {
        $('#email').focus();
    });
    $("#email").on('keyup', function (e) {
        if (e.key === 'Enter' || e.keyCode === 13) {
            // Do something
            $('#pass').focus();
        }
    });
    $("#pass").on('keyup', function (e) {
        if (e.key === 'Enter' || e.keyCode === 13) {
            // Do something
            signIn();
        }
    });
});

function showMaterial() {
    //console.log($('#category').val());
    var category = $('#category').val();
    window.location.href = 'material.php?category=' + category;
}

//Tạo Bong Bóng Banner
jQuery(document).ready(function($){
 
    // Define a blank array for the effect positions. This will be populated based on width of the title.
    var bArray = [];
    // Define a size array, this will be used to vary bubble sizes
    var sArray = [4,6,8,10,15,20];
 
    // Push the header width values to bArray
    for (var i = 0; i < $('.bubbles').width(); i++) {
        bArray.push(i);
    }
     
    // Function to select random array element
    // Used within the setInterval a few times
    function randomValue(arr) {
        return arr[Math.floor(Math.random() * arr.length)];
    }
 
    // setInterval function used to create new bubble every 350 milliseconds
    setInterval(function(){
         
        // Get a random size, defined as variable so it can be used for both width and height
        var size = randomValue(sArray);
        // New bubble appeneded to div with it's size and left position being set inline
        // Left value is set through getting a random value from bArray
        $('.bubbles').append('<div class="individual-bubble" style="left: ' + randomValue(bArray) + 'px; width: ' + size + 'px; height:' + size + 'px;"></div>');
         
        // Animate each bubble to the top (bottom 100%) and reduce opacity as it moves
        // Callback function used to remove finsihed animations from the page
        $('.individual-bubble').animate({
            'bottom': '100%',
            'opacity' : '-=0.7'
        }, 3000, function(){
            $(this).remove()
        }
        );
 
 
    }, 350);
 
});