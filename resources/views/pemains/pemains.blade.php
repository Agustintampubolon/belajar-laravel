@extends('templates/base')
@section('title','Pemain')
@section('container')

<div class="container">
<div class="row">
<div class="my-4 col-12">
    <h1 class="float-left">Data Pemain</h1>
        <a class="btn btn-primary float-right mt-2" href="{{url('/pemains/create')}}" role="button">Create Pemain</a></div>
<div class="col-12">
    <table class="table table-stripped">
        <thead class="thead-primary">
    <tr><th class="text-center">No</th>
        <th>Nama Pemain</th>
        <th>ID Film</th>
        <th>Action</th></tr>
        </thead>

<tbody>
    <?php $i = 1; ?>
        @foreach($pemains as $pemain)
        <tr>
            <td class="text-center">{{$loop->iteration}}</td>
            <td>{{$pemain->nama}}</td>
            <td>{{$pemain->film_id}}</td>
                <td><a href="/pemains/edit/{{ $pemain->id}}" class="btn btn-xs btn-primary">EDIT</a> || </td>
                <td>
                <form method="POST" action="/pemains/{{$pemain->id}}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <div>
                                <input type="submit" class="btn btn-xs btn-danger" value="DELETE" onclick="return confirm('Are You Sure ?');">
                            </div>
                </form>
                </td>
        </tr>
        @endforeach
</tbody>
</table></div></div></div>
@endsection