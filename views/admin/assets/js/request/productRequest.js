$(function() {

    $("#form-category").submit(function(e) {
        e.preventDefault();
        if ($("#designationc").val() !== "") {
            $.ajax({
                url: "models/requests/RequestCbase.php",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                processData: false,
                cache: false,
                timeout: 3000,
                success: function(data) {
                    $("#message-category").hide();
                    $("#message-category").html('<small class="alert alert-success">' + data + '</small>').show("slow", "linear");
                    $('#form-category')[0].reset();
                },
                error: function() {
                    alert("Echec de la requête sur le serveur.");
                }
            });
        } else alert('Champs vide')
    });

    $("#form-unite").submit(function(e) {
        e.preventDefault();
        if ($('#designationu').val() != '') {
            $.ajax({
                url: "models/requests/RequestCbase.php",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                processData: false,
                cache: false,
                success: function(data) {
                    $("#message-mesure").hide();
                    $("#message-mesure").html('<small class="alert alert-success">' + data + '</small>').show("slow", "linear");
                    $('#form-unite')[0].reset();
                },
                error: function() {
                    alert("Echec de la requête sur le serveur.");
                }
            });
        } else alert('Champs vide')
    });

    $("#form-product").submit(function(e) {
        e.preventDefault();
        if ($('#designationprod').val() === '' || $('#prixprod').val() == '' || $('#stalert').val() == '' || $('#refcat').val() == '' || $('#refunit').val() == '') {
            $(".div-message").hide();
            $(".div-message").html("<div class='alert alert-danger'><small>Complètez tous les champs svp.</small></div>").show('slow', 'linear');

        } else {
            $.ajax({
                url: "models/requests/RequestCbase.php",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                processData: false,
                cache: false,
                success: function(data) {
                    $(".div-message").hide();
                    $(".div-message").html("<div class='alert alert-success'><small>Produit enregistré avec succès.</small></div >").show('slow', 'linear');
                    $('#form-product')[0].reset();
                },
                error: function() {
                    alert("Echec de la requête sur le serveur.");
                }
            });
        }
    });

    $("#form-product2").submit(function(e) {
        e.preventDefault();
        if ($('#designationprod2').val() === '' || $('#prixprod2').val() === '' || $('#stalert2').val() === '' || $('#refcat2').val() === '' || $('#refunit2').val() === '') {
            $("#message2").hide();
            $("#message2").html("<div class='alert alert-danger'><small>Complètez tous les champs svp.</small></div>").show('slow', 'linear');
        } else {
            $.ajax({
                url: "models/requests/RequestCbase.php",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                processData: false,
                cache: false,
                success: function(data) {
                    $("#message2").hide();
                    $("#message2").html("<div class='alert alert-success'><small>Produit enregistré avec succès.</small></div >").show('slow', 'linear');
                    $('#form-product2')[0].reset();
                },
                error: function() {
                    alert("Echec de la requête sur le serveur.");
                }
            });
        }
    });

    $("#fichestocko").on('click', () => {
        if ($('#refprodo').val() === '') {
            $("#message3").hide();
            $("#message3").html("<small class='alert alert-danger'>Veuillez choisissez un article SVP !!!</small>").show('slow', 'linear');
        } else {
            $.ajax({
                url: "models/requests/RequestCbase.php",
                type: "POST",
                data: { action: 'oneprod2', refproduit: $('#refprodo').val() },
                timeout: 5000,
                success: function() {
                    window.location = "fichestock";
                },
                error: function() {
                    alert("Echec de la requête sur le serveur.");
                }
            });
        }
    });

    $("#list-categorie").on('click', ()=>{
        alert($(this).val())
    });
})