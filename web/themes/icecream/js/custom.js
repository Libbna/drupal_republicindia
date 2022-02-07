var subMenu = document.getElementById('sub-menu');
var searchBtn = document.getElementById('search');
var closeBtn = document.getElementById('close');
var bars = document.getElementById('bars');
var leftSubMenu = document.getElementById('block-leftsubmenu');
var subMenuList = document.getElementById('sub_Menu');
var followUs = document.getElementById('block-followus-2');


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


// sticky header on scroll

window.onscroll = function () {
  stickyHeader();
};

var header = document.getElementById('main-header');
var sticky = header.offsetTop;

function stickyHeader() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
    header.classList.remove("relative");

  } else {
    header.classList.remove("sticky");
    header.classList.add("relative");
  }
}

