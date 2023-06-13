@extends('layout.main')

@section('content')
    <h1 class="mt-4">Users Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Users</li>
        </ol>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Edit Data
        </div>
        <div class="card-body">
            <form enctype="multipart/form-data" method="POST" action="/users/{{ $user->id }}">
                @csrf
                @method('PUT')
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" value="{{ $user->name }}"><br><br>

                <label for="email">email:</label><br>
                <input type="text" id="email" name="email" value="{{ $user->email }}" ><br><br>

                <label for="password">Password:</label><br>
                <input type="text" id="password" name="password" value="{{ $user->password }}"><br><br>

                <label for="role">Role:</label><br>
                <input type="text" id="role" name="role" value="{{ $user->role }}"><br><br>

                <input type="submit" value="Update user">
            </form>
        </div>
    </div>
@endsection