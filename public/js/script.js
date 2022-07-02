let hamburger = document.getElementById('hmbtn')
let baseurl = 'http://localhost/mvc/public/asset/'

hamburger.addEventListener('click', function() {
   document.getElementById('column').classList.toggle('slide')
   if(document.getElementById('column').classList.contains('slide')) {
      hamburger.src = baseurl + 'cross.png';
   }
   else {
      hamburger.src = baseurl + 'hamburger.png';
   }
})

let stringToReplace = "*&%/aku2 satu_"

var desired = stringToReplace.replace(/[^\w\s]/gi, '')

console.log(desired)