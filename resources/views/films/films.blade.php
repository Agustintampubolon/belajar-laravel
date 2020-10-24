@extends('templates/base')
@section('title','Film')
@section('container')

<div class="container"><div class="row">
<div class="my-4 col-12">
    <h1 class="float-left">Data Film</h1>
        <a class="btn btn-primary float-right mt-2" href="{{url('/films/create')}}" role="button">Create Film</a></div>
<div class="col-12">
    <table class="table table-stripped">
        <thead class="thead-primary">
    <tr><th class="text-center">No</th>
        <th>Judul Film</th>
        <th>Genre Film</th>
        <th class="text-center">Tahun</th>
        <!-- <th colspan="2" >Action</th></tr> -->
        </thead>

<tbody>
    <?php $i = 1; ?>
        @foreach($films as $film)
        <tr>
            <td class="text-center">{{$loop->iteration}}</td>
            <td>{{$film->judul}}</td>
            <td>{{$film->genre}}</td>
            <td class="text-center">{{$film->tahun}}</td>

                <td><a href="/films/edit/{{ $film->id}}" class="btn btn-xs btn-primary">EDIT</a> || </td>
                <td>
                <form method="POST" action="/films/{{$film->id}}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <input type="submit" class="btn btn-xs btn-danger" value="DELETE" onclick="return confirm('Are You Sure ?');">
                </form>
                </td>
        </tr>
        @endforeach
</tbody>
</table>
</div>
</div>
</div>
@endsection