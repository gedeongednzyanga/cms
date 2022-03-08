$(function() {

    $("#login-form").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "models/requests/RequestUser.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            cache: false,
            timeout: 3000,
            success: function(data) {
                if (data !== "Incorrect")
                    window.location = data;
                else
                    $("#error-message").addClass("text-danger").html("Nom d'utilisateur ou mot de passe incorrect.");
            },
            error: function() {
                alert('Failled to post the request.');
            }
        });
    });

    $("#form-register").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "models/requests/RequestUser.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            cache: false,
            timeout: 3000,
            success: function(data) {
                $(".div-message").hide();
                $(".div-message").html("<div class='alert alert-success'><small>" + data + "</small></div >").show('slow', 'linear');
                $('.form-register')[0].reset();
            },
            error: function() {
                alert('Failled to post the request.');
            }
        });
    });
})