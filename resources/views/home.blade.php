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
                <div class="card-header">
                    <h1>{{ Auth::user()->name }}'s Dashboard</h1>
                    <button type="button" class="btn btn-primary" id="newboard">New Board</button>
                </div>
                <div class="card-body">
                <table id="boardList">
                <tr>
                    <th>Board ID</th>
                    <th>Board Name</th>
                    <th>Created by</th>
                    <th>Last Updated</th>
                    <th> </th>
                </tr>
               
               <!-- Assign the $boards variable from the boardscontroller to 
               a new variable called board -->
               @if(count($boards) > 0)
                @foreach($boards as $board)
                <tr> 
                    <td>
                        <a href="/home/{{ $board->id }}">{{ $board->id }}</a>
                    </td>
                    <td>
                        <a>{{ $board->name }}</a>
                    </td>
                   
                    <td>
                        <!-- <a>$users</a> -->
                    </td>
                    
                    <td>
                        <a>{{ $board->updated_at->format('m-d-Y') }}</a>
                    </td>
                    <td>
                    <a href="/board/delete">
                    <button type='submit'><i class="fas fa-trash-alt" style="color:red;"></i></a></button>
                    </button>
                    </td>
                </tr> 
                @endforeach
                {{$boards->links()}}
            @else
            <center><p>You haven't created any boards</p></center>
            @endif
            
                </table>
                <div class="form-group" id="newBoardForm" style="display:none;">
                <form action="/api/boards" method="POST">
                @csrf
                  <label for="name"></label>
                  <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="Board name">
                  <center><a href="home"><button type="submit" class="btn btn-primary" id="boardSumbit">Submit</button></a></center>
                  <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
                </div>
                </form>
                <!-- <center>
                <form action="" id="newBoardForm" style="display:none;">
                    <input type="text" name="name" placeholder="Board Name">
                    <br>
                    <button type="button" class="btn btn-primary"></button>
                
                </form>
                </center> -->


<!-- //trying to put a success message -->
                    <!-- @if (\Session::has('success'))
                        <div class="alert alert-success">
                            <ul>
                                <li>{!! \Session::get('success') !!}</li>
                            </ul>
                        </div>
                    @endif -->

                    <!-- You are logged in! -->
                    <!-- <hr> -->
                
                </div>
            </div>    
            <br>
            <br>
        </div>
    </div>
</div>
<script>

    $('#newboard').click(function(){
        $('#boardList').hide();
        $('#newBoardForm').show();
        $('#newboard').hide();
    });

    $('#boardSubmit').click(function(){
        $('#newboard').show();
    });


</script>
  
@endsection
