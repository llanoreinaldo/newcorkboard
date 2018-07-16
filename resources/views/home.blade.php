@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>{{ Auth::user()->name }}'s Dashboard</h1>  </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- You are logged in! -->
                    <!-- <hr> -->
                    <center>
                    <div class="row">
                        <div class="col-lg-6">
                            <a name="" id="" class="btn btn-primary" href="/" role="button"> New Board</a>
                        </div>
                        <div class="col-lg-6">
                            <a name="" id="" class="btn btn-primary" href="/boards" role="button"> My Boards</a>
                        </div>
                    </div>
                    <center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
