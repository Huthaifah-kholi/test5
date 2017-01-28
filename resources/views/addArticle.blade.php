@extends('layout')
@section('title','Add new article')

@section('content')
    <form method="post">
        {{-- for security  --}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label>Title:</label>
            <input type="text" class="form-control" name="title" required>
        </div>
        <div class="form-group">
            <label>Author:</label>
            <input type="text" class="form-control" name="author" required>
        </div>
        <div class="form-group">
            <label>Article:</label>
            <textarea rows="8" cols="55" name="articleBody" placeholder="Write your article here" required></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add article</button>
        </div>
    </form>

@endsection
