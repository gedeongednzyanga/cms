$(function() {

    $('#btr').click(function(e) {
        e.preventDefault();
        $('#title-msg').html('<i class="fa fa-envelope-o m-r-5"></i> Boîte de reception');
        $.ajax({
            url: "models/requests/RequestMessage.php",
            type: 'POST',
            data: { action: 'trier_message', tmsg: 'receive' },
            success: function(data) {
                $('#table-message').html(data);
            },
            error: function() {
                alert('Echec de la requête sur le serveur.');
            }
        });
    });

    $('#msge').click(function(e) {
        e.preventDefault();
        $('#title-msg').html('<i class="fa fa-send-o m-r-5"></i> Messages Envoyés');
        $.ajax({
            url: "models/requests/RequestMessage.php",
            type: 'POST',
            data: { action: 'trier_message', tmsg: 'sent' },
            success: function(data) {
                $('#table-message').html(data);
            },
            error: function() {
                alert('Echec de la requête sur le serveur.');
            }
        });
    });

    $('#msgi').click(function(e) {
        e.preventDefault();
        $('#title-msg').html('<i class="fa fa-star-o m-r-5"></i> Messages Importants');
        $.ajax({
            url: "models/requests/RequestMessage.php",
            type: 'POST',
            data: { action: 'trier_message', tmsg: 'important' },
            success: function(data) {
                $('#table-message').html(data);
            },
            error: function() {
                alert('Echec de la requête sur le serveur.');
            }
        });
    });

    $('#msgd').click(function(e) {
        e.preventDefault();
        $('#title-msg').html('<i class="fa fa-trash-o m-r-5"></i> Messages Supprimés');
        $.ajax({
            url: "models/requests/RequestMessage.php",
            type: 'POST',
            data: { action: 'trier_message', tmsg: 'delete' },
            success: function(data) {
                $('#table-message').html(data);
            },
            error: function() {
                alert('Echec de la requête sur le serveur.');
            }
        });
    });

    // $("#text-search").on("keyup", function() {
    //     alert(Hello, "Hello!");
    //     // value = $(this).val().toLowerCase();
    //     // $("#tableDemande tr").filter(function() {
    //     //     $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    //     // });
    // });


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
    });

})