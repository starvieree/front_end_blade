@extends('layout.app')
@section('admin')
<h4>Edit bibliografiKategori</h4>

<div class="card border-0 shadow rounded">
    <div class="card-body">

        <form action="{{ route('bibliografiKategori.update', $bibliografiKategori) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="deskripsi">Deskripsi Bibliografi Kategori</label>
                <input type="text" class="form-control @error('deskripsi') is-invalid @enderror"
                       name="deskripsi" value="{{ old('deskripsi', $bibliografiKategori->deskripsi) }}" required>

                <!-- error message untuk name -->
                @error('deskripsi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-md btn-primary">Update</button>
            <a href="{{ route('bibliografiKategori.index') }}" class="btn btn-md btn-secondary">back</a>

        </form>
    </div>
</div>
@endsection