let hmBtn = document.querySelector('.hamburger');
let baseurl = 'http://localhost/mvc/public/asset/'
let modal = document.querySelector('.modal')
let login = document.querySelectorAll('.tombol')
let register = document.querySelectorAll('.tombol2')
let crossBtn = document.querySelectorAll('.close-btn')

for (let i = 0; i < 3; i++) {
   login[i].onclick = function(event) {
      if (event.target === login[i] ) {
         modal.style.display = "flex"
         registerModal.style.display = "none"
         loginModal.style.display = "flex"
      }
   }

   register[i].onclick = function(event) {
      if (event.target === register[i] ) {
         modal.style.display = "flex"
         registerModal.style.display = "flex"
         loginModal.style.display = "none"
      }
   }
}

hmBtn.addEventListener('click', function() {
      modal.style.display = "flex"
      registerModal.style.display = "none"
      loginModal.style.display = "none"
})

crossBtn[0].onclick = function(event) {
   if (event.target === crossBtn[0] )  modal.style.display = "none"
}

crossBtn[1].onclick = function(event) {
   if (event.target === crossBtn[1] )  loginModal.style.display = "none"
}

crossBtn[2].onclick = function(event) {
   if (event.target === crossBtn[2] )  registerModal.style.display = "none"
}

window.onclick = function(event) {
   if (event.target === modal)  modal.style.display = "none";
 }

