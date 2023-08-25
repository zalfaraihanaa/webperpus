@extends('layouts.app')
@section('title', 'Dappa | Data Contacts')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Update
                        </div>
                        <div class="card-body">
                            <!-- Display error messages if there are any -->
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <!-- Create book form -->
                            <!-- Create book form -->
                            <form method="POST" action="{{ route('buku.update', $book->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label for="judul" class="col-md-4 col-form-label text-md-right">{{ __('Judul') }}</label>

                                    <div class="col-md-6">
                                        <input id="judul" type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ $book->judul }}" required autocomplete="judul" autofocus>

                                        @error('judul')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                </br>
                                <div class="form-group row">
                                    <label for="pengarang" class="col-md-4 col-form-label text-md-right">{{ __('Pengarang') }}</label>

                                    <div class="col-md-6">
                                        <input id="pengarang" type="text" class="form-control @error('pengarang') is-invalid @enderror" name="pengarang" value="{{ $book->pengarang }}" required autocomplete="pengarang">

                                        @error('pengarang')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                </br>
                                <div class="form-group row">
                                    <label for="penerbit" class="col-md-4 col-form-label text-md-right">{{ __('Penerbit') }}</label>

                                    <div class="col-md-6">
                                        <input id="penerbit" type="text" class="form-control @error('penerbit') is-invalid @enderror" name="penerbit" value="{{ $book->penerbit }}" required autocomplete="penerbit">

                                        @error('penerbit')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                </br>
                                <div class="form-group row">
                                    <label for="gambar" class="col-md-4 col-form-label text-md-right">{{ __('Gambar') }}</label>

                                    <div class="col-md-6">
                                        <input id="gambar" type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar">


                                        @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Update Book</button>
                                <a href="{{ route('buku.index') }}" class="btn btn-secondary">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection