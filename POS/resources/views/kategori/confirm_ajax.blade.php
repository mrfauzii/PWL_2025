@empty($kategori)
     <div id="modal-master" class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Kesalahan</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <div class="alert alert-danger">
                     <h5><i class="icon fas fa-ban"></i> Kesalahan!!!</h5>
                     Data yang anda cari tidak ditemukan
                 </div>
                 <a href="{{ url('/kategori') }}" class="btn btn-warning">Kembali</a>
             </div>
         </div>
     </div>
 @else
     <form action="{{ url('/kategori/' . $kategori->kategori_id.'/delete_ajax') }}" method="POST" id="form-delete">
         @csrf
         @method('DELETE')
         <div id="modal-master" class="modal-dialog modal-lg" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Hapus Data Kategori</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">
                     <div class="alert alert-warning">
                         <h5><i class="icon fas fa-exclamation-triangle"></i> Konfirmasi</h5>
                         Apakah Anda yakin ingin menghapus data berikut?
                     </div>
                     <table class="table table-sm table-bordered">
                         <tr>
                             <th width="30%">Kode Kategori</th>
                             <td>{{ $kategori->kategori_kode }}</td>
                         </tr>
                         <tr>
                             <th>Nama Kategori</th>
                             <td>{{ $kategori->kategori_nama }}</td>
                         </tr>
                     </table>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
                     <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                 </div>
             </div>
         </div>
     </form>
     <script>
         $(document).ready(function() {
             $("#form-delete").validate({
                 rules: {},
                 submitHandler: function(form) {
                     $.ajax({
                         url: form.action,
                         type: form.method,
                         data: $(form).serialize(),
                         success: function(response) {
                             if (response.status) {
                                 $('#myModal').modal('hide');
                                 Swal.fire({
                                     icon: 'success',
                                     title: 'Berhasil',
                                     text: response.message
                                 });
                                 tableKategori.ajax.reload();
                             } else {
                                 $('.error-text').text('');
                                 $.each(response.msgField, function(prefix, val) {
                                     $('#error-' + prefix).text(val[0]);
                                 });
                                 Swal.fire({
                                     icon: 'error',
                                     title: 'Terjadi Kesalahan',
                                     text: response.message
                                 });
                             }
                         }
                     });
                     return false;
                 },
                 errorElement: 'span',
                 errorPlacement: function(error, element) {
                     error.addClass('invalid-feedback');
                     element.closest('.form-group').append(error);
                 },
                 highlight: function(element) {
                     $(element).addClass('is-invalid');
                 },
                 unhighlight: function(element) {
                     $(element).removeClass('is-invalid');
                 }
             });
         });
     </script>
 @endempty