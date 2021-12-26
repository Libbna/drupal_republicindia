var subMenu = document.getElementById('sub-menu');
var searchBtn = document.getElementById('search');
var closeBtn = document.getElementById('close');
var bars = document.getElementById('bars');



// When the user clicks the search btn / hamburger icon, open the modal
searchBtn.onclick = function () {
  subMenu.style.display = "block";
  bars.style.display = "none";
  closeBtn.style.display = "block";
  document.body.style.overflow = "hidden";
}
bars.onclick = function () {
  subMenu.style.display = "block";
  bars.style.display = "none";
  closeBtn.style.display = "block";
  document.body.style.overflow = "hidden";

}

// When the user clicks on close button, close the modal
closeBtn.onclick = function () {
  subMenu.style.display = "none";
  bars.style.display = "block";
  closeBtn.style.display = "none";
}

  // Drupal Behaviour

  // (function ($, Drupal) {
  //   Drupal.behaviors.icecreamBehavior = {
  //     attach: function (context) {

  //       var inputSearch = $(".form-search");
  //       // var submitBtn = $(".js-form-submit");

  //       $(".js-form-submit").disabled = true;

  //       inputSearch.addEventListener('change', function () {
  //         if (inputSearch.value.length > 0) {
  //           submitBtn.disabled = false;
  //         } else {
  //           submitBtn.disabled = true;
  //         }
  //       });
  //     }
  //   }
  // });

// function ($, Drupal) {

//   // My custom JavaScript code ...
//   Drupal.behaviors.icecreamBehavior = {
//     attach: function attach(context) {
//       $(".js-form-submit").disabled = true;
//     },
//   }
// } (jQuery, Drupal);


