$(function() {
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
    })
})