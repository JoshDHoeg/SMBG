
//sidenav toggle
function toggleSidenav(menu) {
  var content = document.getElementById('sidenav-menu-content');
  var contentBox = document.getElementById('content-menu-open');

  content.classList.remove('active-menu');

  if(menu == 0){
    console.log("we got cover");
    document.body.classList.remove('left-nav-active');
    document.body.classList.remove('noscroll');
  }else if(menu == 1){
    console.log("we got content");
    content.classList.toggle('active-menu');
    document.body.classList.toggle('left-nav-active');
    document.body.classList.toggle('noscroll');
  }



};
