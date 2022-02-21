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

    $("#form-operation").submit(function(e) {
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
                alert(data)
            },
            error: function() {
                alert('Failled to post the request.');
            }
        });
    });
})