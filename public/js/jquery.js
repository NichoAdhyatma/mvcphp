$(function() {
  $('.ubah').on("click", function() {
     $('#modalForm').css('display', 'flex')
     const idd = $(this).data('id')

     $.ajax({
      url: 'http://localhost/mvc/public/produk/getUbah',
      data: {id : idd},
      method: 'post',
      dataType: 'json',
      success: function(data) {
         console.log(data)
         $('#nama').val(data.nama)
         $('#jenis').val(data.jenis)
         $('#harga').val(data.harga)
         $('#kota').val(data.kota)
         $('#provinsi').val(data.provinsi)
      }
   })
   
  })

  $('#modalForm').on('click', function(event) {
    if(event.target === modalForm)  $('#modalForm').css('display', 'none')
  })
  
})
