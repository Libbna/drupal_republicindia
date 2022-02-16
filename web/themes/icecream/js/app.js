
(function (Drupal, $) {

  Drupal.behaviors.icecreamBehaviors = {
    attach: function attach(context) {
      var searchFrmBtn = $('.js-form-submit', context);
      var inputFrm = $('#edit-search-api-fulltext');
      var leftSubMenu = $('.menu--left-sub-menu');
      var subMenuList = $('.sub_Menu');

      searchFrmBtn.click(function () {
        leftSubMenu.css("display", "none");
        subMenuList.css("display", "none");
      });

      $(context).once('icecreamBehaviors').each(function () {

        searchFrmBtn.prop("disabled", true);

        inputFrm.on("change", function () {
          if ($('#edit-search-api-fulltext').val().length >= 2) {
            $(searchFrmBtn).prop("disabled", false);
          } else {
            $(searchFrmBtn).prop("disabled", true);
          }
        });

        $(document, context).on('click', '.clear-search', function () {
          leftSubMenu.css("display", "block");
          subMenuList.css("display", "block");
          $('.search-content > .view-content').hide();
          $(".clear-search").hide();
          $("input[name^='search_api_fulltext']").val('');
          $('.search-content > .view-header').hide();
          $(searchFrmBtn).prop("disabled", false);
          console.log("Clear Search Works!");
        });
      });
    }
  };

})(Drupal, jQuery);
