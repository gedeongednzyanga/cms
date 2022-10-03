$(function() {

    $('#quantitecom').on('keyup', function() {
        $('#enstock').val($('#rstock').val() - $(this).val());
    });

    $('#refprodc').on('change', function() {
        $.ajax({
            url: "models/requests/RequestCbase.php",
            type: "POST",
            data: { action: "loading", refprodc: $(this).val() },
            success: function(data) {
                // alert(data);
                $('#rstock').val(data);
            },
            error: function() {
                alert("Echec de la requête sur le serveur.");
            }
        });
    });

    $('#form-commande').submit(function(e) {
        e.preventDefault();
        if ($('#quantitecom').val() == '') {
            $(".div-message").hide();
            $(".div-message").html("<div class='alert alert-warning'><small>Complètez tous les champs svp.</small></div >").show('slow', 'linear');
        } else {
            $.ajax({
                url: "models/requests/RequestCommande.php",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                processData: false,
                cache: false,
                success: function(data) {
                    $('#lst-commande').html(data);
                    $('#form-commande')[0].reset();
                },
                error: function() {
                    alert("Echec de la requête sur le serveur.");
                }
            });
        }
    });

    $('#save-commande').click(function() {
        if ($('#client').val() == '') {
            $(".div-message").hide();
            $(".div-message").html("<div class='alert alert-warning'><small>Complètez le nom du client.</small></div >").show('slow', 'linear');
        } else {
            $.ajax({
                url: "models/requests/RequestCommande.php",
                type: "POST",
                data: { action: 'save', actionu: 1, customer: $('#client').val() },
                success: function(data) {
                    $(".div-message").hide();
                    $(".div-message").html("<div class='alert alert-success'><small>" + data + ".</small></div >").show('slow', 'linear');
                },
                error: function() {
                    alert("Echec de la requête sur le serveur.");
                }
            });
        }
    });
})