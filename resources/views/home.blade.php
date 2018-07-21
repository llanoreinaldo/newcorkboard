@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


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
        <div id="createBoard"></div>
@endsection
