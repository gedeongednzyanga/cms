$(function() {

    $('#quantiteprod').on('keyup', function() {
        $('#quantitentra').val($(this).val() - $('#quantiteperd').val());
    });

    $('#quantiteperd').on('keyup', function() {
        $('#quantitentra').val($('#quantiteprod').val() - $(this).val());
    });

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
                    $('#lst-production').html(data);
                    $('#form-production')[0].reset();
                },
                error: function() {
                    alert("Echec de la requête sur le serveur.");
                }
            });
        } else alert('Champs vide')
    });

    $('#save-production').click(function() {
        $.ajax({
            url: "models/requests/RequestProduction.php",
            type: "POST",
            data: { action: 'save', actionu: 1 },
            success: function(data) {
                $(".div-message").hide();
                $(".div-message").html("<div class='alert alert-success'><small>" + data + ".</small></div >").show('slow', 'linear');
            },
            error: function() {
                alert("Echec de la requête sur le serveur.");
            }
        });
    });
})