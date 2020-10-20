@extends('templates/base')
@section('title','Create Film')
@section('container') 

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3">
    <h3> Form Menambah Film </h3>
    <div>
        <form method="post" action="{{ url("/films") }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="judul">
                    Judul Film
                    <input class="form-control" type="text" name="judul" id="judul" placeholder="Masukkan Judul Film">
                </label>
            </div>

            <div class="form-group">
                <label for="genre">
                    Genre Film
                    <input class="form-control" type="text" name="genre" id="genre" placeholder="Masukkan Jenis Film">
                </label>
            </div>

            <div class="form-group">
                <label for="tahun">
                    Tahun Rilis
                    <input class="form-control" type="year" name="tahun" id="tahun" placeholder="Masukkan Tahun Film ">
                </label>
            </div>
            <div class="form-group float-right">
            <button class="btn btn-lg btn-danger" type="reset">RESET</button>
            <button class="btn btn-lg btn-primary" type="submit">CREATE</button>
        </form>
        </div>
        </div>
    </div>
</div>
@endsection