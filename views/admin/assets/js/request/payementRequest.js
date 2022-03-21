$(function() {
    $('#montantpaye').on('keyup', function() {
        $('#restepaye').val($('#montant').val() - $(this).val());
        $('#reste').val($('#montant').val() - $(this).val());
    });

    $('#form-payement').submit(function(e) {
        e.preventDefault();
        if ($('#montantpaye').val() == '') {
            $(".div-message").hide();
            $(".div-message").html("<div class='alert alert-warning'><small>Complètez le montant payé.</small></div >").show('slow', 'linear');

        } else {
            $.ajax({
                url: "models/requests/RequestPayement.php",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                processData: false,
                cache: false,
                success: function(data) {
                    $('#form-payement')[0].reset();
                    $(".div-message").html("<div class='alert alert-success'><small>" + data + ".</small></div >").show('slow', 'linear');

                },
                error: function() {
                    alert("Echec de la requête sur le serveur.");
                }
            });
        }
    });

})