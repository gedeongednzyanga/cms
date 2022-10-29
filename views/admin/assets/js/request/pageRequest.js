$(function () {
  $("#select-all").click(() => {
    $("input[type='checkbox'][name='refauto']").attr("checked", true);
  });

  function addAutotisation(refp) {
    $("input[type='checkbox'][name='refauto']:checked").each(function () {
      autoVal = $(this).val();
        $.ajax({
          url: "models/requests/RequestPage.php",
          type: "POST",
          data: {action: 'autorisations', refpage : refp, refauto : autoVal},
          timeout: 3000,
          success: function(data) {
            // alert(data)
            //  $('#pageacc').html(data);
              // $(".div-message").html("<small class='alert alert-success'>Page ajoutée avec succès.</small>").show("slow", "linear");
          },
          error: function() {
              $(".div-message").html('');
              $(".div-message").html("<small class='alert alert-warning'>Impossible de trouver le serveur.</small>").show('slow', 'linear');
          }
      });
    });
  }

  $("#btnaddpage").click(function (e) {
    e.preventDefault();
    var pValue = $("input[type='radio'][name='refpage']:checked");
    
    if (pValue.val() == null) {
      $(".div-message").html("");
      $(".div-message").html("<small class='alert alert-warning'>Aucune page sélectionnée.</small>").show("slow", "linear");
    } else {
      $.ajax({
        url: "models/requests/RequestPage.php",
        type: "POST",
        data: { action: "add", refpage: pValue.val() },
        timeout: 3000,
        success: function (data) {
          $("#pageacc").html(data);
          $(".div-message").html("<small class='alert alert-success'>Page ajoutée avec succès.</small>").show("slow", "linear");
          $('#pageacc').append('<a class="dropdown-item" href="login"><i class="fa fa-remove"></i> Supprimer</a>');
          addAutotisation(pValue.val());
        },
        error: function () {
          $(".div-message").html("");
          $(".div-message")
            .html(
              "<small class='alert alert-warning'>Impossible de trouver le serveur.</small>"
            )
            .show("slow", "linear");
        },
      });
    }
  });
});
