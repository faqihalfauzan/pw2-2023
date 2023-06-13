@extends('layout.main')

@section('content')
    <h1 class="mt-4">user Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">user</li>
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
            user Data
        </div>
        <div class="card-body">
            <form method="POST" action="/users">
                @csrf
                <div>
                    <label for="name">name:</label>
                    <input type="text" id="name" name="name">
                </div>
                <div>
                    <label for="email">email:</label>
                    <input type="email" id="email" name="email">
                </div>
                <div>
                    <label for="password">password:</label>
                    <input type="text" id="password" name="password">
                </div>
                <div>
                    <label for="role">role:</label>
                    <input type="text" id="role" name="role">
                </div>
                <button type="submit">Add</button>
            </form>
        </div>
    </div>
@endsection