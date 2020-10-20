@extends('templates/base') 
@section('title','Edit Pemain')
@section('container') 

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3">
    <h3> Form Mengedit Pemain </h3>
    <div>
        <form method="post" action="{{ url('pemains/update', ['nama' => $pemain->id]) }}">
            {{ @csrf_field('') }}
            <div class="form-group">
                <label for="nama">
                    Nama Pemain
                    <input class="form-control" type="text" name="nama" id="nama" value="{{ $pemain->nama}}">
                </label>
            </div>

            <div class="form-group">
                <label for="film_id">
                    Judul Film
                    <input class="form-control" type="text" name="film_id" id="film_id" value="{{ $pemain->film_id}}">
                </label>
            </div>

            <div class="form-group float-right">
            <button class="btn btn-lg btn-danger" type="reset">RESET</button>
            <button class="btn btn-lg btn-primary" type="submit"> UPDATE </button>
        </form>
        </div>
        </div>
    </div>
</div>
@endsection