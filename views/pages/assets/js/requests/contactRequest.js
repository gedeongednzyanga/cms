$(function() {
    $('#contact-form').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "models/requests/RequestMessage.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            cache: false,
            timeout: 3000,
            success: function(data) {
                $(".error-message").hide();
                $(".error-message").addClass("alert alert-success").html('<small>' + data + '</small>').show('slow', 'linear');
                $('#contact-form')[0].reset();
            },
            error: function() {
                alert('Failled to post the request.');
            }
        });
    })
})