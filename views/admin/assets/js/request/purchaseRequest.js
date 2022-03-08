$(function() {

    $('#quantitecmd').on('keyup', function() {
        $('#totachat').val($(this).val() - $('#quantiteapp').val());
    });

    $('#quantiteapp').on('keyup', function() {
        $('#totachat').val($('#quantitecmd').val() - $(this).val());
    });

    $('#form-purchase').submit(function(e) {
        e.preventDefault();
        if ($('#quantiteprod').val() != '') {
            $.ajax({
                url: "models/requests/RequestPurchase.php",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                processData: false,
                cache: false,
                success: function(data) {
                    $('#lst-approv').html(data);
                    $('#form-purchase')[0].reset();
                },
                error: function() {
                    alert("Echec de la requête sur le serveur.");
                }
            });
        } else alert('Champs vide')
    });

    $('#save-purchase').click(function() {
        // if ($('#quantiteprod').val() != '') {
        $.ajax({
            url: "models/requests/RequestPurchase.php",
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
        // } else alert('Champs vide')
    });
})