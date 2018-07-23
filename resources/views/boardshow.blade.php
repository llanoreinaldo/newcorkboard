@extends('layouts.boardapp')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
<link href="{{ asset('css/board.css') }}" rel="stylesheet"> 
<!-- Announcement Section    -->
<div class="card-header topsec1">
    <center>
        <h4 class='announcementtitle'>
            <strong>Announcements</strong>
        </h4>
    </center>
</div>
<div class="annoucementCard-body">
    <p class="card-text animation" style="padding-bottom:10px;">
        {msg} by
        <span id="author">{author}</span>
    </p>
</div>

<!-- CARDS -->
<div class="main col-11">
    <div class='row'>
        <div class='offset-1 col-3'>
            <div class='card'>
                <div class='card-header topsec'>
                        <h5 id="cardTitleLinkNum  id" class="col-lg-8 col-md-8 col-sm-8 card-title">Title</h5>
                    <div class="card-body">
                        <div class='row'>
                            <div class="col-lg-8 col-md-6 col-sm-6">
                                <p class="card-text cardDescription" id="cardDescLinkNum-id">
                                    description
                                </p>
                            </div>
                        </div>
                    </div>
                    <a href="url" target="_blank" id="cardUrlLinkNum-id">
                        <img id="cardImgLinkNum-id" class="card-img-top" src="http://via.placeholder.com/794x416">
                    </a>
                    <div class="row bottomsec">
                        <div class="col-lg-12 col-sm-12">
                            <div class="card-header">
                                <small class="text-muted">
                                    <div class="cardIcons">
                                        <i class="fas fa-pencil-alt cardEdit" data-toggle="modal" data-target="#editModal" data-linkId=""></i>
                                        <i class="fas fa-trash-alt cardDelete" data-toggle="modal" data-target="#deleteModal" data-linkId=""></i>
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
        </div>
        <div class='offset-1 col-3'>
            <div class='card'>
                <div class='card-header topsec'>
                        <h5 id="cardTitleLinkNum  id" class="col-lg-8 col-md-8 col-sm-8 card-title">Title</h5>
                    <div class="card-body">
                        <div class='row'>
                            <div class="col-lg-8 col-md-6 col-sm-6">
                                <p class="card-text cardDescription" id="cardDescLinkNum-id">
                                    description
                                </p>
                            </div>
                        </div>
                    </div>
                    <a href="url" target="_blank" id="cardUrlLinkNum-id">
                        <img id="cardImgLinkNum-id" class="card-img-top" src="http://via.placeholder.com/794x416">
                    </a>
                    <div class="row bottomsec">
                        <div class="col-lg-12 col-sm-12">
                            <div class="card-header">
                                <small class="text-muted">
                                    <div class="cardIcons">
                                        <i class="fas fa-pencil-alt cardEdit" data-toggle="modal" data-target="#editModal" data-linkId=""></i>
                                        <i class="fas fa-trash-alt cardDelete" data-toggle="modal" data-target="#deleteModal" data-linkId=""></i>
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
        </div>
        <div class='offset-1 col-3'>
            <div class='card'>
                <div class='card-header topsec'>
                    <div class='row'>
                        <h5 id="cardTitleLinkNum  id" class="col-lg-8 col-md-8 col-sm-8 card-title">Title</h5>
                    </div>
                    <div class="card-body">
                        <div class='row'>
                            <div class="col-lg-8 col-md-6 col-sm-6">
                                <p class="card-text cardDescription" id="cardDescLinkNum-id">
                                    description
                                </p>
                            </div>
                        </div>
                    </div>
                    <a href="url" target="_blank" id="cardUrlLinkNum-id">
                        <img id="cardImgLinkNum-id" class="card-img-top" src="http://via.placeholder.com/794x416">
                    </a>
                    <div class="row bottomsec">
                        <div class="col-lg-12 col-sm-12">
                            <div class="card-header">
                                <small class="text-muted">
                                    <div class="cardIcons">
                                        <i class="fas fa-pencil-alt cardEdit" data-toggle="modal" data-target="#editModal" data-linkId=""></i>
                                        <i class="fas fa-trash-alt cardDelete" data-toggle="modal" data-target="#deleteModal" data-linkId=""></i>
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
        </div>
    </div>
</div>

    
@endsection
