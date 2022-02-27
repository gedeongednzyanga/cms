$(function() {
    $('#form-category').submit(function(e) {
        e.preventDefault();
        if ($('#designationc').val() != '') {
            $.ajax({
                url: "models/requests/RequestCbase.php",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                processData: false,
                cache: false,
                success: function(data) {
                    $('#message-mesure').html('<small class="alert alert-success">' + data + '</small>');
                    $('#form-category')[0].reset();
                },
                error: function() {
                    alert("Echec de la requête sur le serveur.");
                }
            });
        } else alert('Champs vide')
    });

    $('#form-unite').submit(function(e) {
        e.preventDefault();
        if ($('#designationu').val() != '') {
            $.ajax({
                url: "models/requests/RequestCbase.php",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                processData: false,
                cache: false,
                success: function(data) {
                    alert(data)
                },
                error: function() {
                    alert("Echec de la requête sur le serveur.");
                }
            });
        } else alert('Champs vide')
    });

    $('#form-product').submit(function(e) {
        e.preventDefault();
        if ($('#designationprod').val() != '') {
            $.ajax({
                url: "models/requests/RequestCbase.php",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                processData: false,
                cache: false,
                success: function(data) {
                    $(".div-message").hide();
                    $(".div-message").html("<div class='alert alert-success'><strong>Produit enregistré avec succès.</div >").show('slow', 'linear');
                    $('#form-product')[0].reset();
                },
                error: function() {
                    alert("Echec de la requête sur le serveur.");
                }
            });
        } else alert('Champs vide')
    });
})