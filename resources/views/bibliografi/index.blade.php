@extends('layout.app')
@section('admin')
<h4>Bibliografi List</h4>

<!-- Notifikasi menggunakan flash session data -->
@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

<div class="card border-0 shadow rounded">
    <div class="card-body">
        <a href="{{ route('bibliografi.create') }}" class="btn btn-md btn-success mb-3 float-end">New
            Bibliografi</a>

        <table class="table table-bordered mt-1 text-center">
            <thead>
                <tr>
                    <th scope="col">ISBN</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Perolehan</th>
                    <th scope="col">Bibliografi Kategori</th>
                    <th scope="col">Create At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($bibliografis as $bibliografi)
                    <tr>
                        <td>{{ $bibliografi->isbn }}</td>
                        <td>{{ $bibliografi->judul }}</td>
                        <td>{{ $bibliografi->penulis }}</td>
                        <td>{{ $bibliografi->harga }}</td>
                        <td>{{ $bibliografi->perolehan }}</td>
                        <td>{{ $bibliografi->Kategori->deskripsi }}</td>
                        <td>{{ $bibliografi->created_at->format('d-m-Y') }}</td>
                        <td>
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                action="{{ route('bibliografi.destroy', $bibliografi->id) }}" method="POST">
                                <a href="{{ route('bibliografi.edit', $bibliografi->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">DELETE</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="text-center text-mute" colspan="8">Data bibliografi tidak tersedia</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{ $bibliografis->links() }}
    </div>
</div>
@endsection
