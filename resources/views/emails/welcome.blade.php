@extends('beautymail::templates.sunny')

@section('content')

    @include ('beautymail::templates.sunny.heading' , [
        'heading' => 'Welcome to the ' {{ $board->name }} ' Board!',
        'level' => 'You were invited by ' {{ Auth::user()->name }} ' to join this board.',
    ])

    @include('beautymail::templates.sunny.contentStart', ['color' => 'rgb(0, 29, 68)'])

        <p>Click the button below to see and share your favorite links.</p>

    @include('beautymail::templates.sunny.contentEnd')

    @include('beautymail::templates.sunny.button', [
        	'title' => 'Click me',
        	'link' => 'https://www.mycorkboardapp.com/boards/'{{ $board->hash }}''
    ])

@stop
