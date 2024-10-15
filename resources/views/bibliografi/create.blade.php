@extends('layout.app')
@section('admin')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">

            <h4>Create New Bibliografi</h4>

            <div class="card border-0 shadow rounded">
                <div class="card-body">

                    <form action="{{ route('bibliografi.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="isbn">ISBN</label>
                            <input type="text" class="form-control @error('isbn') is-invalid @enderror" name="isbn"
                                value="{{ old('isbn') }}" required>

                            <!-- error message untuk ISBN -->
                            @error('isbn')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                name="judul" value="{{ old('judul') }}" required>

                            <!-- error message untuk Judul -->
                            @error('judul')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="penulis">Penulis</label>
                            <input type="text" class="form-control @error('penulis') is-invalid @enderror"
                                name="penulis" value="{{ old('penulis') }}" required>

                            <!-- error message untuk Penulis -->
                            @error('penulis')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control @error('harga') is-invalid @enderror"
                                name="harga" value="{{ old('harga') }}" required>

                            <!-- error message untuk Harga -->
                            @error('harga')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="perolehan">Perolehan</label>
                            <input type="date" class="form-control @error('perolehan') is-invalid @enderror"
                                name="perolehan" value="{{ old('perolehan') }}" required>

                            <!-- error message untuk Perolehan -->
                            @error('perolehan')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="bibliografi_kategori_id">Pilih Kategori</label>
                            <select name="bibliografi_kategori_id" id="bibliografi_kategori_id">
                                <option value="">Select One</option>
                                @foreach($bibliografis as $bibliografi)
                                    <option value="{{ $bibliografi->id }}">{{ $bibliografi->deskripsi }}</option>
                                @endforeach
                            </select>

                            <!-- error message untuk Kategori -->
                            @error('bibliografi_kategori_id')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-md btn-primary">Save</button>
                        <a href="{{ route('bibliografi.index') }}" class="btn btn-md btn-secondary">back</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
