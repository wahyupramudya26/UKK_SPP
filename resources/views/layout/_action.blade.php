<a href="{{ $url_show }}" class="btn-show" title="Detail: {{ $model->nama_lengkap }}">
	<i class="fa fa-eye text-primary" aria-hidden="true"></i>
</a> | 
<a href="{{ $url_edit }}" class="modal-show edit" title="Edit {{ $model->nama_lengkap }}">	<i class="fa fa-pencil-alt text-inverse"></i>
</a> | 
<a href="{{ $url_destroy }}" class="btn-delete" title="{{ $model->nama_lengkap }}">
	<i class="fa fa-trash-alt text-danger"></i>
</a> 