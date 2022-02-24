$(function() {

    $('#form-production').submit(function(e) {
        e.preventDefault();
        if ($('#quantiteprod').val() != '') {
            $.ajax({
                url: "models/requests/RequestProduction.php",
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

    $('#save-production').click(function() {
        // if ($('#quantiteprod').val() != '') {
        $.ajax({
            url: "models/requests/RequestProduction.php",
            type: "POST",
            data: { action: 'save', actionu: 1 },
            success: function(data) {
                alert(data)
            },
            error: function() {
                alert("Echec de la requête sur le serveur.");
            }
        });
        // } else alert('Champs vide')
    });
})