@extends('layouts.boardapp')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
<link href="{{ asset('css/board.css') }}" rel="stylesheet"> 
    <div class="container">
        <div class="card" style="margin-top:40px;">
            <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
                <a href="https://placeholder.com"><img src="http://via.placeholder.com/350x150"></a>
            </div>
            <div class="card-footer text-muted">
                Tags: |
            </div>
        </div>       
        
@endsection
