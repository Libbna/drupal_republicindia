
(function (Drupal) {

  Drupal.behaviors.icecreamBehaviors = {
    attach: function (context, settings) {
      var searchBtn = document.getElementById("edit-submit-search-view");
      var inputFrm = document.getElementById('edit-search-api-fulltext');
      var leftSubMenu = document.getElementById('block-leftsubmenu');
      var subMenuList = document.getElementById('sub_Menu');
      var followUs = document.getElementById('block-followus-2');
      searchBtn.disabled = true;


      inputFrm.addEventListener('input', function () {
        if (inputFrm.value.length >= 2) {
          searchBtn.disabled = false;
        } else {
          searchBtn.disabled = true;
        }
      })

      searchBtn.addEventListener('click', function () {
        leftSubMenu.style.display = "none";
        subMenuList.style.display = "none";
        followUs.style.display = "none";
      })

    },
  }
})(Drupal);







