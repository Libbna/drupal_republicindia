
  (function (Drupal) {

    Drupal.behaviors.icecreamBehaviors = {
      attach: function (context, settings) {
        var searchBtn = document.getElementById("edit-submit");
        var inputFrm = document.getElementById('edit-keys');
        searchBtn.disabled = true;


        inputFrm.addEventListener('input', function () {
          if (inputFrm.value.length >= 2) {
           searchBtn.disabled = false;
          } else {
            searchBtn.disabled = true;
          }
        })

      },
    }
  })(Drupal);







