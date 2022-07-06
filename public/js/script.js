let hamburger = document.getElementById('hmbtn')
let baseurl = 'http://localhost/mvc/public/asset/'
let modal = document.querySelector('.modal')
let login = document.querySelectorAll('.tombol')
let register = document.querySelectorAll('.tombol2')
let modalLogin = document.querySelector('#loginModal')
let modalRegister = document.querySelector('#registerModal')

hamburger.addEventListener('click', function() {
   document.getElementById('column').classList.toggle('slide')
   if(document.getElementById('column').classList.contains('slide')) {
      hamburger.src = baseurl + 'cross.png';
   }
   else {
      hamburger.src = baseurl + 'hamburger.png';
   }
})

for (let i = 0; i < 3; i++) {
   login[i].onclick = function(event) {
      if (event.target === login[i] ) {
         modal.style.display = "flex"
         modalRegister.style.display = "none"
         modalLogin.style.display = "flex"
      }
   }

   register[i].onclick = function(event) {
      if (event.target === register[i] ) {
         modal.style.display = "flex"
         modalRegister.style.display = "flex"
         modalLogin.style.display = "none"
      }
   }
}

window.onclick = function(event) {
   if (event.target == modal) {
     modal.style.display = "none";
   }
 }