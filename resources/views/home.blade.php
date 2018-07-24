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
                    <h3>{{ Auth::user()->name }}'s Dashboard</h3>

                </div>
                <div class="card-body">
                    <!-- Assign the $boards variable from the boardscontroller to a new variable called board -->
                    @if(count($boards) > 0) @foreach($boards as $board)
                    <table id="boardList">
                        <tr>
                            <th>Board ID</th>
                            <th>Board Name</th>
                            <th>Created by</th>
                            <th>Last Updated</th>
                            <th>Delete? </th>
                            <th>Invite </th>
                        </tr>

                        <tr>
                            <td>
                                @csrf
                                <a href="/boards/{{ $board->hash }}">{{ $board->hash }}</a>
                            </td>
                            <td>
                                <a>{{ $board->name }}</a>
                            </td>
                            <td>
                                {{ Auth::user()->name }}
                            </td>
                            <td>
                                <a>{{ $board->updated_at->format('m-d-Y') }}</a>
                            </td>
                            <td>
                                <form action="/boards/{{ $board->hash }}" method="POST" value="{{ csrf_token() }}">
                                    {{ method_field('delete') }} @csrf
                                    <button type='submit'>
                                        <i class="fas fa-trash-alt" style="color:red;"></i>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <button type="submit" data-toggle="modal" data-target="#inviteModal">
                                    <i class="fas fa-envelope-square" style="color:blue;"></i>
                                </button>
                            </td>
                        </tr>
                    </table>
                    @endforeach {{$boards->links()}} @else
                    <center>
                        <p>You haven't created any boards</p>
                    </center>
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createBoardModal">Create A New Board</button>
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
                                        <form action="/boards" method="POST">
                                            @csrf
                                            <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="Enter your new board name here">
                                            <center>
                                                <strong id="helpId" class="form-text text-muted" style="font-size: 12px">Note: Your board's name must be a unique name.</strong>
                                            </center>
                                            <center>
                                                <button type="submit" class="btn btn-primary" id="boardSumbit">Submit</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </center>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Modal that Displays URL and Sends E-mail Invite -->
                    <div class="modal fade" id="inviteModal" tabindex="-1" role="dialog" aria-labelledby="inviteModal" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">


                                <!-- Modal Body -->
                                <div class="modal-body">
                                    <div class="form-group" id="inviteForm">
                                        <form>
                                            <label for="recipient-name" class="col-form-label">Send Invites To Your Board: (Use a Comma to Send to Multiple Email Address)</label>
                                            <input type="email" class="form-control" id="inviteEmails" required="required" placeholder="name@example.com, name2@example.com"
                                                multiple>
                                            <hr> @if(count($boards) > 0)
                                            <label for="message-text" class="col-form-label">Message:</label>
                                            <textarea class="form-control" id="inviteEmailMsg">Join my {{$board->name}} board at http://newcorkboard.com/boards/{{$board->hash}}</textarea>
                                            @else @endif
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- Close Button on Modal -->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <!-- <span aria-hidden="true">&times;</span> -->
                                        </button>
                                        <!-- Send Message Button on Modal -->
                                        <button type="button" class="btn btn-secondary" id="closeBtn" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" id="sendInvites">Send Invite</button>
                                    </div>
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
