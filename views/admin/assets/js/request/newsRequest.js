$(function() {
    $('#form-new').submit(function(e) {
        e.preventDefault();
        if ($('#titleinfo').val() == '' || $('#infotype').val() == '' || $('#infoimage').val() == '' || $('#information').val() == '') {
            $("#div-message").hide();
            $("#div-message").html("<small class='text-danger'>Complètez tous les champs svp.</small>").show('slow', 'linear');
        } else {
            $.ajax({
                url: "models/requests/RequestNews.php",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                processData: false,
                cache: false,
                success: function(data) {
                    $("#div-message").hide();
                    $("#div-message").html("<small class='text-success'>" + data + "</small>").show('slow', 'linear');
                    $('#form-new')[0].reset();
                },
                error: function() {
                    alert("Echec de la requête sur le serveur.");
                }
            });
        }
    });
});