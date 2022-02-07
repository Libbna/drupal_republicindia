
(function (Drupal, $) {

  Drupal.behaviors.icecreamBehaviors = {
    attach: function (context, settings) {
      $(document, context).once('icecreamBehaviors').each(function () {
        // e.stopPropagation();
        var searchBtn = $('#edit-submit-search-view');
        var inputFrm = $('#edit-search-api-fulltext')
        var leftSubMenu = $('#block-leftsubmenu');
        var subMenuList = $('#sub_Menu');
        var followUs = $('#block-followus-2');
        var clearSrch = $('#clear-search');
        var view_content = $('.view-content');


        searchBtn.prop("disabled", true);
        $('#clear-search').hide();

        inputFrm.on("change", function () {
          if ($('#edit-search-api-fulltext').val().length >= 2) {
            searchBtn.prop("disabled", false);
          } else {
            searchBtn.prop("disabled", true);
          }
        })

        searchBtn.on('click', function () {
          leftSubMenu.css("display", "none");
          subMenuList.css("display", "none");
          followUs.css("display", "none");
          $('#clear-search').show();
          $('.search-header').show();
        })

        $(document).on('click', '#clear-search', function () {
          leftSubMenu.css("display", "block");
          subMenuList.css("display", "block");
          followUs.css("display", "block");
          $('.search-content > .view-content').hide();
          $('#clear-search').hide();
          $('id^="edit-search-api-fulltext"').val('');
        })
      })
    }
  }
})(Drupal, jQuery);



