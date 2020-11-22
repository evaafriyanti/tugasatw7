@extends('layouts.admin')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Tambah Data Produk
					</div>
					<div class="card-body">
						<form action="{{url('produk/store')}}" method="post"></form>
							@csrf
						<div class="form-group">
							<label for="" class="control-label">Nama</label>
							<input type="text" class="form-control" name="nama">
						</div>
						<div class='row no-gutters'>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="control-label">Harga</label>
									<input type="text" class="form-control" name="harga">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="control-label">Stok</label>
							<input type="text" class="form-control" name="stok">
						</div>
					</div>
						<button class="btn btn-success">Simpan</button>
						
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection