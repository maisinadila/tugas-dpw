@extends ('template.base')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto mt-5">
			<div class="card card-default">
				<div class="card-header bg-info">
					<h3 style=>Ganti Password</h3>
				</div>
				<div class="card-body">
					<form action="{{url('setting')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="" class="control-label"> Current Password </label>
							<input type="password" name="sekarang" class="form-control">
						</div>
						<hr>
						<div class="form-group">
							<label for="" class="control-label"> New Password </label>
							<input type="password" name="baru" class="form-control">
						</div>
						<div class="form-group">
							<label for="" class="control-label"> Confirm New Password </label>
							<input type="password" name="konfirmasi" class="form-control">
						</div>
						<div class="form-group">
							<button class="btn btn-info"><i class="fa fa-save"></i> Simpan </button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection