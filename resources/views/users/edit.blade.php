@extends('layout.app')
@section('admin')
<h4>Edit User</h4>

<div class="card border-0 shadow rounded">
    <div class="card-body">

        <form action="{{ route('user.update', $user) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror"
                       name="name" value="{{ old('name', $user->name) }}" required>

                <!-- error message untuk name -->
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email">Email Address</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror"
                       name="email" value="{{ old('email', $user->email) }}" required>

                <!-- error message untuk email -->
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror"
                       name="password" value="{{ old('password') }}">

                <!-- error message untuk password -->
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-md btn-primary">Update</button>
            <a href="{{ route('user.index') }}" class="btn btn-md btn-secondary">back</a>

        </form>
    </div>
</div>
@endsection