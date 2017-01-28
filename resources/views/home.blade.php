@extends('layout')

@section('title','Home')

@section('content')
    {{-- display all articles , from data base --}}
    {{-- @foreach ($variable as $key => $value) --}}
        <div>
            <h2>Title</h2>
            <h6 style="font-size: 10px;"></h6>
            <p>
            Hi all,
            I've been working on a application for 4 days now. but since today im totally stuck!
            Whatever i do i keep getting: TokenMismatchException in VerifyCsrfToken.php line 46:
            This is my login form.
            </p>
        </div>
        <hr>
        {{-- end all Artilces --}}
    {{-- @endforeach --}}
    <br/>
    {{-- Add new article --}}
    <form method="get" action="{{ url('/addArticle') }}">
        <button class="btn btn-primary" type="submit">Add new article</button>
    </form>
@endsection
