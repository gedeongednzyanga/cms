$(function() {

    $('#quantite_liv').on('keyup', function() {
        $('#quantite_rest').val($('#quatinte_com').val() - $(this).val());
        $('#quantite_rest1').val($('#quatinte_com').val() - $(this).val());
    });

    $('#refentc').on('change', function() {
        facture = $('#refentc').val();
        $('#facture').val(facture);
        $.ajax({
            url: "models/requests/RequestLivraison.php",
            type: "POST",
            data: {
                action: 'load_commande',
                numcom: facture
            },
            success: function(data) {
                $('#iddetcom').html(data);

            },
            error: function() {
                echo("Echec de la requête.");
            }
        });
    });


    $('#iddetcom').on('change', function() {
        // alert('Hello');
        $.ajax({
            url: "models/requests/RequestLivraison.php",
            type: "POST",
            data: {
                action: 'load_one_commande',
                iddetcom: $(this).val()
            },
            success: function(data) {

                $('#quatinte_com').val(data);

            },
            error: function() {
                echo("Echec de la requête.");
            }
        });
    });

    $('#form-livraison').submit(function(e) {
        e.preventDefault();
        if ($('#montantpaye').val() != '') {
            $.ajax({
                url: "models/requests/RequestLivraison.php",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                processData: false,
                cache: false,
                success: function(data) {
                    $('#livraison-list').html(data);
                },
                error: function() {
                    alert("Echec de la requête sur le serveur.");
                }
            });
        } else alert('Champs vide')
    });

    $('#btn-save-liv').on('click', () => {
        if ($('#expediteur').val() == '') {
            $(".div-message").html("<div class='alert alert-warning'><small>Complètez autres informations SVP.</small></div >").show('slow', 'linear');
        } else {
            $.ajax({
                url: "models/requests/RequestLivraison.php",
                type: "POST",
                data: {
                    action: 'save',
                    actionu: 1,
                    id_entl: $('#id_entl').val(),
                    expediteur: $('#expediteur').val(),
                    destinateur: $('#destinataire').val(),
                    transporteur: $('#transporteur').val(),
                    num_camion: $('#num_camion').val(),
                    plaque: $('#plaque').val()
                },
                timeout: 3000,
                success: function(data) {
                    $(".div-message").html("<div class='alert alert-success'><small>" + data + "</small></div >").show('slow', 'linear');
                },
                error: function() {
                    $(".div-message").html("<div class='alert alert-warning'><small>Echec de la requête sur le serveur.</small></div >").show('slow', 'linear');
                }
            });

        }
    });

})