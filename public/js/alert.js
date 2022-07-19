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
    title: 'Mohon Maaf Registrasi Gagal ...',
    text: 'Terjadi Kesalahan...'
  })
}

function addFail() {
  Swal.fire({
    icon: 'error',
    title: 'Mohon Maaf Produk Gagal di Tambahkan ...',
    text: 'Terjadi Kesalahan...'
  })
}

function addSuccess() {
  Swal.fire(
    'Success !',
    'Produk telah terdaftar',
    'success'
  )
}



