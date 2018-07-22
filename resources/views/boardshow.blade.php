@extends('layouts.boardapp')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="{{ asset('css/board.css') }}" rel="stylesheet"> 

<!--NAV-->
<nav class="navbar navbar-expand-lg navbar-light">

    <!--FILTERS-->

    <div class="card">
        <div class="card-body filterCard">
            <center>

                <h2>
                    <i class="fas fa-tags">ALL TAGS

                    </i>
                    <h2>

            </center>
            <div class="card-body row col-lg-12 col-md-12 col-sm-12 filterButtons">
            foreach($boards as $board)
            {{$boards->tags()}}
                <li style="list-style-type: none; padding-right: 20px; font-size: 20px;">
                    <label>
                        <input value="{{id}}" type="checkbox" class="checkboxBtn">{{name}}</label>
                </li>
                endforeach
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 filterButtons"></div>
            <hr>
            <ul>
                <li>
                    <button type="button" class="btn filterSubmit" data-toggle="modal" data-target="#topicModal">
                        <i class="fas fa-plus-circle"> Add a Tag</i>
                    </button>
                    <button type="button" class="btn filterSubmit" id="tagEdit">
                        <i class="fas fa-pencil-alt"> Edit a Tag</i>
                    </button>
                    <button type="button" class="btn filterSubmit" id="tagDelete">
                        <i class="fas fa-minus-circle"> Delete a Tag</i>
                    </button>
                    <button type="button" class="btn filterSubmit" id="tagSearch">
                        <i class="fas fa-search"> Search by Tag(s)</i>
                    </button>
                </li>
                <br>
            </ul>
        </div>
    </div>
    </div>
    </div>
</nav>

<!--NAVBAR SECTION-->

<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <ul class="navbar-nav mr-auto">

        <a class="navbar-brand" href="/boards/{{board.id}}">
            <img id="logo" src="/assets/images/cork.png" alt="corkboard">
        </a>
    </ul>
    <ul>
        <h1 id="boardName" data-boardId={{board.id}}>{{board.name}}</h1>
    </ul>
    <button class="navbar-toggler smallMenu" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <i style="color:white" class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!--DISPLAYS THE BOARD ID-->

        {{!--
        <ul>
            <li>
                <h4 id="boardID">Board ID: {{board.id}}</h4>
            </li>
        </ul> --}}
        <!--NAV MENU-->


        <ul>
            <h1 id="boardNameFull" data-boardId={{board.id}}>{{board.name}}</h1>
        </ul>



        <!--DROPDOWN FOR ADDING-->

        <div class="btn-group smallAdd" role="group" aria-label="Button group with nested dropdown">
            <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="fas fa-plus-circle"></i>
                </button>

                <!-- MENU ITEMS FOR TAGS, BOOKMARKS & ANNOUNCE-->

                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item">
                        <ul>

                            <li style="list-style-type: none; margin-left: -35px; font-size: 20px;">
                                <button type="button" style="width:155px;color:white;" class="btn filterBtn">
                                    <i class="fas fa-tags"></i>
                                    Tags
                                </button>
                            </li>
                            <li style="list-style-type: none; padding-right: 30px; font-size: 20px;">
                                <button type="button" style="width:155px;" class="btn newLink2" data-toggle="modal" data-target="#postModal">
                                    <i class="fas fa-bookmark"></i>
                                    Bookmarks
                                </button>
                            </li>
                        </ul>
                    </a>
                </div>
            </div>
        </div>

        <!--ALERTS AND FILTER BUTTONS-->


        <ul>
            <a id="close" href="#">
                <button type="button" style="width:155px;color:white;" class="btn filter">
                    <i class="fas fa-times"></i>
                </button>
            </a>
            <a id="filter" href="#">
                <li style="list-style-type: none; padding-right: 30px; font-size: 20px;">
                    <button type="button" style="width:155px;color:white;" class="btn filter">
                        <i class="fas fa-tags"></i>
                        Tags
                    </button>
                </li>
            </a>
            <li id="bookmark" style="list-style-type: none; padding-right: 30px; font-size: 20px;">
                <button type="button" style="width:155px;" class="btn newLink" data-toggle="modal" data-target="#postModal">
                    <i class="fas fa-bookmark"></i>
                    Add Bookmark
                </button>
            </li>
        </ul>
        <ul class="menuRight">
            <li>
                <a id="close" href="#">
                    <i class="fas fa-times"></i>
                </a>
                {{!--
                <a id="filter" href="#">
                    Filter
                    <i class="fas fa-filter"></i>
                </a> --}}
                <a id="closeAnn" href="#">
                    <i class="fas fa-times"></i>
                </a>

                <a id="announce" href="#">
                    Announcements
                    <i class="fas fa-external-link-square-alt"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>

<!-- Modal for new topic -->
<div class="modal fade" id="topicModal" tabindex="-1" role="dialog" aria-labelledby="topicModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="topicModalLabel">Tags</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body modal-post">
                <input type="text" id="title" placeholder="Tags">
                <br>
                <br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary link">Submit</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for edit topic -->
<div class="modal fade" id="editTopicModal" tabindex="-1" role="dialog" aria-labelledby="topicModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="editTopicModalLabel">Edit Tag:</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body modal-post">
                <input type="text" id="editTagModalName">
                <br>
                <br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary link" id="editTagSubmit">Submit</button>
            </div>
        </div>
    </div>
</div>

<!--MODAL FOR EDIT CARD editModalLabel-->

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <i class="fas fa-pencil-alt">
                    <h2 class="modal-title" id="editModalLabel">Edit Bookmark</h2>
                </i>
                <button type="button" class="close" data-dismiss="modal" data-target=".bd-example-modal-lg" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body modal-post">
                <input type="text" id="editUrl" placeholder="URL">
                <br>
                <br>
                <input type="text" id="editTitle" placeholder="Title">
                <br>
                <br>
                <input type="text" id="editDescription" placeholder="Description">
                <br>
                <br>
                <input type="text" id="editImgUrl" placeholder="Image URL">
                <br>
                <br>
                <center class="editTags">
                    <h4>Select Tags: </h4>
                    <br>
                    <div class="row filterButtons" style="padding-left: 20px">
                        {{#each board.tags}}
                        <li style="list-style-type: none; padding-right: 20px; font-size: 15px;">
                            <label>
                                <input value="{{id}}" type="checkbox" class="checkboxBtn">{{name}}</label>
                        </li>
                        {{/each}}
                    </div>
                </center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary editButton">Submit</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for new post -->
<div class="modal fade" id="postModal" tabindex="-1" role="dialog" aria-labelledby="postModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <i class="fas fa-bookmark"></i>
                <h2 class="modal-title" id="postModalLabel">Add Bookmark</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body modal-post">
                <input type="text" id="postUrl" placeholder="URL">
                <br>
                <br>
                <input type="text" id="postTitle" placeholder="Title">
                <br>
                <br>
                <input type="text" id="postDescription" placeholder="Description">
                <br>
                <br>
                <input type="text" id="postImgUrl" placeholder="Image URL">
                <br>
                <br>
                <center class="postTags">
                    <h4>Select Tags: </h4>
                    <br>
                    <div class="row filterButtons" style="padding-left: 20px">
                        {{#each board.tags}}
                        <li style="list-style-type: none; padding-right: 20px; font-size: 15px;">
                            <label>
                                <input value="{{id}}" type="checkbox" class="checkboxBtn">{{name}}</label>
                        </li>
                        {{/each}}
                    </div>
                </center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary postButton">Submit</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for new announcement -->
<div class="modal fade" id="announcementModal" tabindex="-1" role="dialog" aria-labelledby="announcementModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="announcementModalLabel">New Announcent</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body modal-post">
                <textarea rows="4" cols="50" id="postMsg" placeholder="Message"></textarea>
                <br>
                <br>
            </div>
            <div class="modal-body modal-post">
                <input type="text" id="postAuthor" placeholder="Author">
                <br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary announcementButton">Submit</button>
            </div>
        </div>
    </div>
</div>

<!--BODY-->

<!--CARDS-->
<div class="main">
    <div class="cardWrapper col-lg-12 col-md-8">
        {{#if board.links}}
        <ul>
            {{#each board.links}}
            <div class="card">
                <div class="card-body">
                    <br>
                    <div class="row">
                        <h5 id="cardTitleLinkNum{{id}}" class="col-lg-8 col-md-8 col-sm-8 title">
                            {{title}}
                        </h5>
                        <div class="col-lg-8" id="url">
                            <a href="{{url}}" target="_blank" id="cardUrlLinkNum{{id}}">{{url}}</a>
                        </div>
                    </div>
                    </a>
                    <br>
                    <div class="row">
                        <div class="col-lg-8 col-md-6 col-sm-6">
                            <p class="card-text cardDescription" id="cardDescLinkNum{{id}}">
                                {{description}}
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            {{#if image_url}}
                            <img id="cardImgLinkNum{{id}}" class="card-img-top cardImg" src="{{image_url}}"> {{/if}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row bottomsec">
                    <div class="col-lg-12 col-sm-12">
                        <div class="card-header">
                            <small class="text-muted">
                                <div class="cardIcons">
                                    <i class="fas fa-pencil-alt cardEdit" data-toggle="modal" data-target="#editModal" data-linkId="{{id}}"></i>
                                    <i class="fas fa-trash-alt cardDelete" data-toggle="modal" data-target="#deleteModal" data-linkId="{{id}}"></i>
                                    </button>
                                </div>
                                <div class="tagsId tags{{id}}">
                                    <h4 style="float: left">Tags:</h4> {{#each Tags}} |
                                    <a href="/boards/{{../../board.id}}/tags/{{id}}" data-tagId={{id}}>{{name}}</a>
                                    {{/each}}
                                </div>
                        </div>
                        </small>
                    </div>
                </div>
            </div>
            {{/each}}
        </ul>
        {{/if}}
    </div>


    <!--ANNOUNCEMENTS-->

    <div class="card sidebar">
        <div class="card-header" style="background:#001945;color:white;">
            Announcements
            <i class="fas fa-plus-circle newAnn" data-toggle="modal" data-target="#announcementModal"></i>


        </div>

        <div class="annoucementCard-body">
            {{#each board.messages}}
            <p class="card-text" style="padding-bottom:10px;">
                <i class="fas fa-dot-circle" style="color:#031244;"></i>
                {{msg}} by
                <span id="author">{{author}}</span>
            </p>
            {{/each}}
        </div>
    </div>

    <!--dropdown announcement-->

    <div class="card col-lg-12 col-md-4" id="dropAnnounce" style="background:#100F4E;color:white;">

        <div class="card-header">
            Announcements
            <i class="fas fa-plus-circle newAnn" data-toggle="modal" data-target="#announcementModal"></i>
        </div>
        <div class="card-body onPlusClose" style="overflow-y: scroll;
position: absolute;
height: 100%; width:95%;">
            {{#each board.messages}}
            <p class="card-text" style="padding-bottom:10px;">
                <i class="fas fa-dot-circle" style="color:#031244;"></i>
                {{msg}} by
                <span id="author">{{author}}</span>
            </p>
            {{/each}} {{!--
            <a href="#" class="btn btn-primary">Go somewhere</a> --}}
        </div>
    </div>
@endsection
