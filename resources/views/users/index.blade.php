@extends('layout.app')
@section('admin')
<h4>User List</h4>

<!-- Notifikasi menggunakan flash session data -->
@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

<div class="card border-0 shadow rounded">
    <div class="card-body">
        <a href="{{ route('user.create') }}" class="btn btn-md btn-success mb-3 float-end">New
            User</a>

        <table class="table table-bordered mt-1 text-center">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Create At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->format('d-m-Y') }}</td>
                        <td>
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                action="{{ route('user.destroy', $user->id) }}" method="POST">
                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">DELETE</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="text-center text-mute" colspan="4">Data user tidak tersedia</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{ $users->links() }}
    </div>
</div>
@endsection
