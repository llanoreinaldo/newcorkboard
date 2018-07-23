@extends('layouts.boardapp')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
<link href="{{ asset('css/board.css') }}" rel="stylesheet"> 
  
<div class="main">
        <div class="cardWrapper col-lg-12 col-md-8">
            <div class="card-body">
                <h4 class="card-title col-lg-8 col-md-8 col-sm-8 title">Title</h4>
                <p class="card-text">Text</p>
                <a href="https://placeholder.com"><img src="http://via.placeholder.com/350x150"></a>
            </div>
            <div class="row bottomsec">
                    <div class="col-lg-12 col-sm-12">
                        <div class="card-header">
                            <small class="text-muted">
                                <div class="cardIcons">
                                    <i class="fas fa-pencil-alt cardEdit" data-toggle="modal" data-target="#editModal" data-linkId=""></i>
                                    <i class="fas fa-trash-alt cardDelete" data-toggle="modal" data-target="#deleteModal" data-linkId=""></i>
                                    </button>
                                </div>
                                <div class="tagsId tags">
                                    <h4 style="float: left">Tags:</h4> |
                                    <a href="#" data-tagId="">{tag name}</a>
                                   
                                </div>

                            </small>
                        </div>
                    </div>
            </div>
        </div>       
</div>
    
    
        <div class="card sidebar">
            <div class="card-header">
                <h4 class="card-title">Announcements</h4>
            <i class="fas fa-plus-circle newAnn" data-toggle="modal" data-target="#announcementModal"></i>
            </div>
             <div class="annoucementCard-body">
             <p class="card-text" style="padding-bottom:10px;">
                <i class="fas fa-dot-circle" style="color:#031244;"></i>
                {msg} by
                <span id="author">{author}</span>
            </p>
            </div>
        </div>       
    
    
@endsection
