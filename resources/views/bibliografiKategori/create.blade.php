@extends('layout.app')
@section('admin')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">

            <h4>Create New Bibliografi Kategori</h4>

            <div class="card border-0 shadow rounded">
                <div class="card-body">

                    <form action="{{ route('bibliografiKategori.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="deskripsi">Name</label>
                            <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi"
                                value="{{ old('deskripsi') }}" required>

                            <!-- error message untuk name -->
                            @error('deskripsi')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-md btn-primary">Save</button>
                        <a href="{{ route('bibliografiKategori.index') }}" class="btn btn-md btn-secondary">back</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
