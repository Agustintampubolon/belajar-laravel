@extends('templates/base') 
@section('title','Create Pemain')
@section('container') 

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3">
    <h3> Form Menambah Pemain </h3>
        <form method="post" action="{{ url("/pemains") }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="nama">
                    Nama Pemain
                    <input class="form-control" type="text" name="nama" id="nama" placeholder="Masukkan Nama Pemain">
                </label>
            </div>
            <div class="form-group">
                <label for="film_id">
                    ID Film
                    <input class="form-control" name="film_id" id="film_id">
                </label>
            </div>

            <div class="form-group float-right">
            <button class="btn btn-lg btn-danger" type="reset">RESET</button>
            <button class="btn btn-lg btn-primary" type="submit"> CREATE </button>
        </form>
        </div>
        </div>
</div>
@endsection