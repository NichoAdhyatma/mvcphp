let addBtn = document.querySelector('.addBtn')

addBtn.addEventListener('click', function() {
    modalForm.style.display = "flex"
})

window.addEventListener('click', function(event) {
  if (event.target === modalForm) modalForm.style.display = "none"
})
