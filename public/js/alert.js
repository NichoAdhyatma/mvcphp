function success() {
  Swal.fire(
    'Registrasi Success',
    'Anda telah terdaftar!',
    'success'
  ) 
}

function failure() {
  Swal.fire({
    icon: 'error',
    title: 'Mohon Maaf...',
    text: 'Email sudah terdaftar !'
  })
}



