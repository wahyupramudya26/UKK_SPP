$('body').on('click','.btn-show', function(event){
	event.preventDefault();

	var me = $(this),
	url = me.attr('href'),
	title = me.attr('title');

	$('#modal-title').text(title);
	$('#modal-btn-save').addClass('hide');

	$.ajax({
		url: url,
		dataType: 'html',
		success: function(response){
			$('#modal-body').html(response);
		}
	});

	$('#modal').modal('show');
})

$('body').on('click','.btn-delete',function(event){
	event.preventDefault();

	var me = $(this),
	url = me.attr('href'),
	title = me.attr('title');
	// token = $('meta[name="csrf_token"]').attr('content');

	swal({
		title:'<span style="font-size:20px;">Apakah Anda Yakin Ingin Menghapus Data '+ title +' ini ?</span>',
		text: 'Anda tidak akan dapat mengembalikan data ini!',
		type:'warning',
		showCancelButton:true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, Hapus data ini!',
		cancelButtonText: 'Batal' 
	}).then((result) => {
		if (result.value) {
			$.ajax({
				url: url,
				type:"POST",
				data:{
					'_method':'DELETE',
					'_token': $('meta[name="csrf-token"]').attr('content')
				},
				success:function(response){
					$('#datatable').DataTable().ajax.reload()
					swal({
						type:'success',
						title: 'Sukses',
						text:'Data Berhasil Terhapus!'
					});
				},
				error:function(xhr){
					swal({
						type:'error',
						title: 'Oops..',
						text:'Data Gagal Terhapus!'
					})
				}
			});
		}
	});
});