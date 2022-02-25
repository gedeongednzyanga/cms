$(function() {

    $('#form-commande').submit(function(e) {
        e.preventDefault();
        if ($('#quantiteprod').val() != '') {
            $.ajax({
                url: "models/requests/RequestCommande.php",
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

    $('#save-commande').click(function() {
        if ($('#client').val() != '') {
            $.ajax({
                url: "models/requests/RequestCommande.php",
                type: "POST",
                data: { action: 'save', actionu: 1, customer: $('#client').val() },
                success: function(data) {
                    alert(data)
                },
                error: function() {
                    alert("Echec de la requête sur le serveur.");
                }
            });
        } else alert('Champs vide')
    });
})