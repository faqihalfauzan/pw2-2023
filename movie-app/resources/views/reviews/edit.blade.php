@extends('layout.main')

@section('content')
    <h1 class="mt-4">Reviews Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Reviews</li>
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
            <form method="POST" action="/reviews/{{ $reviews->id }}">
                @csrf
                @method('PUT')
                <label for="film_id">Film:</label><br>
                <input type="text" id="film_id" name="film_id" value="{{ $reviews->film_id }}"><br><br>

                <label for="user_id">User:</label><br>
                <input type="text" id="user_id" name="user_id" value="{{ $reviews->user_id }}"><br><br>

                <label for="rating">Rating:</label><br>
                <input type="text" id="rating" name="rating" value="{{ $reviews->rating }}"><br><br>

                <label for="reviews">Review:</label><br>
                <input type="text" id="reviews" name="reviews" value="{{ $reviews->reviews }}"><br><br>

                <label for="tanggal">tanggal:</label><br>
                <input type="text" id="tanggal" name="tanggal" value="{{ $reviews->tanggal }}"><br><br>

                

                <input type="submit" value="Update Reviews">
            </form>
        </div>
    </div>
@endsection