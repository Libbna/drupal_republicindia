// function toggleShow() {
//   var s = document.getElementById('search');
//   var subMenu = document.getElementById('sub_Menu');

//   if (subMenu.style.display === 'none') {
//     subMenu.style.display = 'block';
//   } else {
//     subMenu.style.display = 'block';
//   }
// }

// function toggleHide() {
//   var b = document.getElementById('bars');
//   var subMenu = document.getElementById('sub_Menu');

//   if (subMenu.style.display === 'block') {
//     subMenu.style.display = 'none';
//   } else {
//     subMenu.style.display = 'none';
//   }
// }

var subMenu = document.getElementById('sub-menu');
var searchBtn = document.getElementById('search');
var closeBtn = document.getElementById('close');
var bars = document.getElementById('bars');

// When the user clicks the search btn / hamburger icon, open the modal
searchBtn.onclick = function () {
  subMenu.style.display = "block";
  bars.style.display = "none";
  closeBtn.style.display = "block";
}
bars.onclick = function () {
  subMenu.style.display = "block";
  bars.style.display = "none";
  closeBtn.style.display = "block";
}

// When the user clicks on close button, close the modal
closeBtn.onclick = function() {
  subMenu.style.display = "none";
  bars.style.display = "block";
  closeBtn.style.display = "none";
}
