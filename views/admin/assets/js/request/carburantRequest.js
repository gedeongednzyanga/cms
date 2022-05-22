$(function() {

    $('#form-carburant').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "models/requests/RequestCarburant.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            cache: false,
            success: function(data) {
                $("#message-carb").html('<small class="alert alert-success">' + data + '</small>');
                $('#form-carburant')[0].reset();
            },
            error: function() {
                alert("Echec de la requête sur le serveur.");
            }
        });
    });

    $('#form-mouvement').submit(function(e) {
        e.preventDefault();
        if ($('#actionuser').val() === "" || $('#refcarb').val() === "" || $('#quantite').val() === "" || $('#respo').val() === "") {
            $("#mouv-message").html('<small class="alert alert-danger">Complètez tous les champs svp.</small>');
        } else {
            $.ajax({
                url: "models/requests/RequestCarburant.php",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                processData: false,
                cache: false,
                success: function(data) {
                    $("#mouv-message").html('<small class="alert alert-success">' + data + '</small>');
                    $('#form-mouvement')[0].reset();
                },
                error: function() {
                    alert("Echec de la requête sur le serveur.");
                }
            });

        }

    });
})