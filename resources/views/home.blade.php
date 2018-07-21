@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="{{ asset('css/home.css') }}" rel="stylesheet"> 
<br>
<br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>{{ Auth::user()->name }}'s Dashboard</h1>  </div>

                <div class="card-body">
                <table style="width:100%">
                <tr>
                    <th>Board ID</th>
                    <th>Board Name</th>
                    <th>Created by</th>
                    <th>Last Updated</th>
                </tr>
               
                @foreach($boards as $board)
                <tr> 
                    <td>
                        <a href="/boards/{{ $board->id }}">{{ $board->id }}</a>
                    </td>
                    <td>
                        <a>{{ $board->name }}</a>
                    </td>
                   
                    <td>
                        <!-- <a>$users</a> -->
                    </td>
                    
                    <td>
                        <a>{{ $board->updated_at }}</a>
                    </td>
                </tr> 
                @endforeach
                
                </table>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- You are logged in! -->
                    <!-- <hr> -->
                
                </div>
            </div>    
            <br>
            <br>
        </div>
    </div>
</div>
        <div id="createBoard"></div>
@endsection
