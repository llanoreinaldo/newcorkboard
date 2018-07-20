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
                    @foreach($boards as $board)
                    <li>
                        <a href="/boards/{{ $board->id }}">{{ $board->name }}</a>
                    </li>
                    @endforeach
                </ul>


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
                <br>
                <br>
            <div class='card'>
                <div class=card-body>
                <div id="createBoard"></div>
                <div id="modalInvite"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="modalInvite"></div>


<script type="text/javascript">
// $('#newboardBtn').click(function(){
//     $('#boardform').toggle();
// });

$('#newboardBtn').click(function(){
    $('#boardform').toggle();
});
</script>
@endsection
