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
                   
                </div>
                <div class="card-body">
                  <!-- Assign the $boards variable from the boardscontroller to a new variable called board -->
                    @if(count($boards) > 0)
                    @foreach($boards as $board)
                    <table id="boardList">
                    <tr>
                    <th>Board ID</th>
                    <th>Board Name</th>
                    <th>Created by</th>
                    <th>Last Updated</th>
                    <th> </th>
                    </tr>
               
                    <tr> 
                    <td>
                        <a href="/home/{{ $board->id }}">{{ $board->id }}</a>
                    </td>
                    <td>
                        <a>{{ $board->name }}</a>
                    </td>
                   
                    <td>
                        {{ $board->user_id}}
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
                    </table>
                    @endforeach
                    {{$boards->links()}}
              
                    @else
                     <center><p>You haven't created any boards</p></center>
                    @endif
           
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
                <br>
         
                <div class="card-footer">
                    <center>
      <!-- Button trigger modal -->   
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createBoardModal" >Create A New Board</button>
                    </center>


<!-- Modal -->
<div class="modal fade" id="createBoardModal" tabindex="-1" role="dialog" aria-labelledby="createBoardModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header section-dark">
        <h5 class="modal-title" id="exampleModalLabel">New Board Form</h5>
      </div>
      <div class="modal-body">
            <div class="form-group" id="newBoardForm">
                <form action="/api/boards" method="POST">
                @csrf
                <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="Enter your new board name here">
                <center><strong id="helpId" class="form-text text-muted" style="font-size: 12px">Note: Your board's name must be a unique name.</strong></center>
                <center>
                    <a href="home"><button type="submit" class="btn btn-primary" id="boardSumbit">Submit</button></a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </center>  
            </form>
            </div>
      </div>
      
</div>
</div>

      </div>
    </div>
  </div>
</div>                  
</div>


@endsection
