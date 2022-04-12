$(function() {

    $('#quantiteprod').on('keyup', function() {
        $('#quantitentra').val($(this).val() - $('#quantiteperd').val());
    });

    $('#quantiteperd').on('keyup', function() {
        $('#quantitentra').val($('#quantiteprod').val() - $(this).val());
    });

    $('#form-production').submit(function(e) {
        e.preventDefault();
        if ($('#quantiteprod').val() == '' || $('#quantiteperd').val() == '' || $('#carburant').val() == '') {
            $(".div-message").hide();
            $(".div-message").html("<div class='alert alert-warning'><small>Complètez tous les champs svp.</small></div >").show('slow', 'linear');

        } else {

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
        }
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

    $('#loadprod').on('click', () => {
        if ($('#date-prod').val() == '') {
            $('#fiche-message').hide();
            $('#fiche-message').html('<small class="alert alert-warning">Veuillez choisir une date.</small>').show('slow', 'linear');;
        } else {
            $.ajax({
                url: "models/requests/RequestProduction.php",
                type: "POST",
                data: { action: 'repport', dateprod: $('#date-prod').val() },
                success: function() {
                    window.location = "ficheproduction";
                },
                error: function() {
                    alert("Echec de la requête sur le serveur.");
                }
            });
        }
    });

    $('#loadprod2').on('click', () => {
        if ($('#data-satrt').val() == '' || $('#date-end').val() == '') {
            $('#fiche-message').hide();
            $('#fiche-message').html('<small class="alert alert-warning">Veuillez choisir deux dates difféntes.</small>').show('slow', 'linear');;
        } else {
            $.ajax({
                url: "models/requests/RequestProduction.php",
                type: "POST",
                data: { action: 'repport2', datestart: $('#data-satrt').val(), dateend: $('#date-end').val() },
                success: function() {
                    window.location = "ficheproduction";
                },
                error: function() {
                    alert("Echec de la requête sur le serveur.");
                }
            });
        }
    });
})