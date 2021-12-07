@extends('template.base')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Detail Data Produk
					</div>
					<div class="card-body">
						<h3>{{$produk->nama}}</h1>
						<hr>
						<p>{{$produk->harga}} |
							Stok : {{$produk->stok}} |
							Berat : {{$produk->berat}} gr |
							Seller : {{$produk->seller->username}} |
							Tanggal Produk : {{$produk->created_at->format("d M Y")}}
						</p>
							{!!$produk->deskripsi!!}
						<p>
							<img style="width: 40%; margin-left: 35px" src="{{url("public/$produk->foto")}}" alt="{{$produk->foto}}" class="img-fluid">
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection