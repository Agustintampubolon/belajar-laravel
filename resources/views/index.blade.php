@extends('templates/base')
@section('title','Film Pemain')
@section('container')

<html>
<head>
	<title> Relasi One To Many </title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
 
	<div class="container">
		<div class="card mt-5">
			<div class="card-body">
				<h4 class="text-center my-4">One To Many Relationship</h4>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Judul Film</th>
							<th>Pemain</th>
							<th width="15%" class="text-center">Jumlah Pemain</th>
						</tr>
					</thead>
					<tbody>
						@foreach($films as $f)
						<tr>
							<td>{{ $f->judul }}</td>
							<td>
								@foreach($f->pemains as $p)
									{{$p->nama}},
								@endforeach
							</td>
							<td class="text-center">{{ $f->pemains->count() }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
 
</body>
</html>        
@endsection