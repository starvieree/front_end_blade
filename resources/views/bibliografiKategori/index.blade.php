@extends('layout.app')
@section('admin')
<h4>Bibliografi Kategori List</h4>

<!-- Notifikasi menggunakan flash session data -->
@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

<div class="card border-0 shadow rounded">
    <div class="card-body">
        <a href="{{ route('bibliografiKategori.create') }}" class="btn btn-md btn-success mb-3 float-end">New
            Bibliografi Kategori</a>

        <table class="table table-bordered mt-1 text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Create At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($bibliografiKategori as $kategori)
                    <tr>
                        <td>{{ $kategori->id }}</td>
                        <td>{{ $kategori->deskripsi }}</td>
                        <td>{{ $kategori->created_at->format('d-m-Y') }}</td>
                        <td>
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                action="{{ route('bibliografiKategori.destroy', $kategori->id) }}" method="POST">
                                <a href="{{ route('bibliografiKategori.edit', $kategori->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">DELETE</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="text-center text-mute" colspan="4">Data Bibliografi Kategori tidak tersedia</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{ $bibliografiKategori->links() }}
    </div>
</div>
@endsection