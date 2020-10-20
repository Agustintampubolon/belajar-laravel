@extends('templates/base')
@section('title','Edit Film')
@section('container')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3">
    <h3> Form Mengedit Film </h3>
    <div>
        <form method="post" action="{{ url('films/update', ['judul' => $film->id]) }}">
            {{ @csrf_field('') }}
            <div class="form-group">
                <label for="judul">
                    Judul Film
                    <input class="form-control" type="text" name="judul" id="judul" value="{{ $film->judul}}">
                </label>
            </div>

            <div class="form-group">
                <label for="genre">
                    Genre Film
                    <input class="form-control" type="text" name="genre" id="genre" value="{{ $film->genre}}">
                </label>
            </div>

            <div class="form-group">
                <label for="tahun">
                    Tahun Rilis
                    <input class="form-control" type="year" name="tahun" id="tahun" value="{{ $film->tahun}}">
                </label>
            </div>
            <div class="form-group float-right">
            <button class="btn btn-lg btn-danger" type="reset">RESET</button>
            <button class="btn btn-lg btn-primary" type="submit">UPDATE</button>
        </form>
        </div>
        </div>
    </div>
</div>
@endsection