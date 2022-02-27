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
        if ($('#designationprod').val() != '' && $('#prixprod').val() != '' && $('#stalert').val() != '') {
            $.ajax({
                url: "models/requests/RequestCbase.php",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                processData: false,
                cache: false,
                success: function(data) {
                    $(".div-message").hide();
                    $(".div-message").html("<div class='alert alert-success'><small>Produit enregistré avec succès.</small></div >").show('slow', 'linear');
                    $('#form-product')[0].reset();
                },
                error: function() {
                    alert("Echec de la requête sur le serveur.");
                }
            });
        } else {
            $(".div-message").hide();
            $(".div-message").html("<div class='alert alert-danger'><small>Complètez tous les champs svp.</small></div>").show('slow', 'linear');
        }
    });

    $('#form-product2').submit(function(e) {
        e.preventDefault();
        if ($('#designationprod2').val() != '' && $('#prixprod2').val() != '' && $('#stalert2').val() != '') {
            $.ajax({
                url: "models/requests/RequestCbase.php",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                processData: false,
                cache: false,
                success: function(data) {
                    $("#message2").hide();
                    $("#message2").html("<div class='alert alert-success'><small>Produit enregistré avec succès.</small></div >").show('slow', 'linear');
                    $('#form-product2')[0].reset();
                },
                error: function() {
                    alert("Echec de la requête sur le serveur.");
                }
            });
        } else {
            $("#message2").hide();
            $("#message2").html("<div class='alert alert-danger'><small>Complètez tous les champs svp.</small></div>").show('slow', 'linear');
        }
    });
})