@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>{{ Auth::user()->name }}'s Dashboard</h1>  </div>

                <div class="card-body">

                <ul>
                    foreach($boards as &$board)
                    <li>
                        <a href="/boards/{{ $board->id }}">{{ $board->name }}</a>
                    </li>
                    endforeach
                </ul>


                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- You are logged in! -->
                    <!-- <hr> -->
                    <center>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="newboardBtn" class="btn btn-primary" href="/" role="button"> New Board</a>
                        </div>
                        </center>
                        <form action="/api/boards" method="POST">
                        <div id="boardform" style="display:none;">
                            <div class="form-group">
                              <label for="name"></label>
                              <input type="text" class="form-control" name="name" id="" aria-describedby="emailHelpId" placeholder="Board Name" required>
                              <label for="name"></label>
                              
                              <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="Your Email" required>
                            </div>
                            <button type="submit" class="btn btn-primary" id="gobtn">Go</button>
                        </div>
                        </form>
                        <!-- <div class="col-lg-6">
                            <a name="" id="" class="btn btn-primary" href="/boards" role="button"> My Boards</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
// $('#newboardBtn').click(function(){
//     $('#boardform').toggle();
// });

$('#newboardBtn').click(function(){
    $('#boardform').toggle();
});
</script>
@endsection
