<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ ('Corkboard') }}</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <!-- BootStrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/board.css') }}" rel="stylesheet">
</head>
<style>
        body{background:url("https://img-aws.ehowcdn.com/default/cme/cme_public_images/www_ehow_com/i.ehow.com/images/a04/rl/93/corkboard-made-800x800.jpg")}
        </style>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">

        <a class="navbar">
            <a href="{{ url('/boards') }}">
                <img id="logo" src="/assets/images/cork.png" alt="corkboard"></img>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <div class="container">
                        <h1>
                            <strong>{{$board->name}}</strong>
                        </h1>
                    </div>
                </ul>
                <ul>
                    <div class="row">
                        <div class="col-lg-2.5">
                            <li>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inviteModal">
                                    <i class="fas fa-envelope-open"></i> Invite</button>
                            </li>
                        </div>
                        <div class="col-lg-2.5">
                            <li>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#topicModal">
                                    <i class="fas fa-tags"></i> Add Tag</button>
                            </li>
                        </div>
                        <div class="col-lg-2.5">
                            <li>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editTopicModal">
                                    <i class="fas fa-edit"></i> Edit Tag</button>
                            </li>
                        </div>
                        <div class="col-lg-2.5">
                            <li>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#filtersModal">
                                    <i class="fas fa-search"></i> Search Tags</button>
                            </li>
                        </div>
                        <div class="col-lg-2.5">
                            <li>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target='#postModal'>
                                    <i class="fas fa-bookmark"></i> Add Bookmark</button>
                            </li>
                        </div>
                        <div class="col-lg-2.5">
                            <li>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#announcementModal">
                                    <i class="fas fa-bullhorn"></i> Add Announcement</button>
                            </li>
                        </div>
                    </div>
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" style="color:white" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color:white" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" style="color: white" v-pre>
                            {{ Auth::user()->name }}
                            <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <a class="dropdown-item" href="/boards">
                                Dashboard
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </a>
    </nav>

    <!--Invite Modal -->
    <div class="modal fade" id="inviteModal" tabindex="-1" role="dialog" aria-labelledby="inviteModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header section-dark">
                    <h4 class="modal-title" id="inviteModalLabel">
                        <strong>Send Invites to Your Board</strong>
                    </h4>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <div class="form-group" id="inviteForm">
                        <form action="/api/boards" method="POST">
                            @csrf
                            <label for='emails' class='col-form-label'>E-Mail(s):
                                <label for="recipient-name" class="col-form-label text-muted">(Use a comma "," to send to multiple email addresses.)</label>
                            </label>
                            <input type="email" class="form-control" id="inviteEmails" required="required" placeholder="name@example.com, name2@example.com"
                                multiple>
                            <hr>
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="inviteEmailMsg">Join my {{$board->name}} board at http://newcorkboard.com/boards/{{$board->hash}}</textarea>
                        </form>
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

    <!-- Add Tag Modal -->
    <div class="modal fade" id="topicModal" tabindex="-1" role="dialog" aria-labelledby="topicModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header section-dark">
                    <h4 class="modal-title" id="topicModalLabel">
                        <strong>Add a New Tag</strong>
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="form-group" id="addTagForm">
                        <form action="/api/boards" method="POST">
                            @csrf
                            <input type="text" id="title" placeholder="Type Tag Name Here">
                            <br>
                            <br>
                            <center>
                                <a href="#">
                                    <button type="submit" class="btn btn-primary" id="boardSumbit">Submit</button>
                                </a>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Tag Modal -->
    <div class="modal fade" id="editTopicModal" tabindex="-1" role="dialog" aria-labelledby="topicModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header section-dark">
                    <h4 class="modal-title" id="editTopicModalLabel">
                        <strong>Edit A Tag</strong>
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="form-group" id="editTagForm">
                        <form action="/api/boards" method="POST">
                            @csrf
                            <center class="postTags">
                                <h4>Select Tag: </h4>
                                <br>
                                <div class="row filterButtons" style="padding-left: 20px">

                                    <li style="list-style-type: none; padding-right: 20px; font-size: 15px;">
                                        <label>
                                            <input value="id" type="checkbox" class="checkboxBtn">{name}</label>
                                    </li>

                                </div>
                            </center>
                            <br>
                            <br>
                            <input type="text" id="editTagModalName">

                            <center>
                                <a href="#">
                                    <button type="submit" class="btn btn-primary" id="boardSumbit">Submit</button>
                                </a>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Apply Filters Modal -->
    <div class="modal fade" id="filtersModal" tabindex="-1" role="dialog" aria-labelledby="filtersModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header section-dark">
                    <h4 class="modal-title" id="filtersModalLabel">
                        <strong>Apply Filters</strong>
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="form-group" id="newBoardForm">
                        <form action="/api/boards" method="POST">
                            @csrf
                            <li style="list-style-type: none; padding-right: 20px; font-size: 20px;">
                                <label>
                                    <input value="id" type="checkbox" class="checkboxBtn">{name}</label>
                            </li>
                            <br>
                            <br>
                            <center>
                                <a href="#">
                                    <button type="submit" class="btn btn-primary" id="boardSumbit">Submit</button>
                                </a>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Bookmark Modal -->
    <div class="modal fade" id="postModal" tabindex="-1" role="dialog" aria-labelledby="postModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header section-dark">
                    <h4 class="modal-title" id="postModalLabel">Add a New Bookmark</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group" id="newBoardForm">
                        <form action="{{action('LinksController@store')}}" method="POST">
                            <input name="url" type="text" id="postUrl" placeholder="URL">
                            <br>
                            <br>
                            <input name="title" type="text" id="postTitle" placeholder="Title">
                            <br>
                            <br>
                            <input name="description" type="text" id="postDescription" placeholder="Description">
                            <br>
                            <br>
                            <input name="image_url" type="text" id="postImgUrl" placeholder="Image URL">
                            <br>
                            <center>
                                <a href="board">
                                    <button type="submit" class="btn btn-primary" id="boardSumbit">Submit</button>
                                </a>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Announcement Modal -->

    <div class="modal fade" id="announcementModal" tabindex="-1" role="dialog" aria-labelledby="announcementModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header section-dark">
                    <h4 class="modal-title" id="announcementModalLabel">Create a New Announcent</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group" id="newAnnouncementForm">
                        <form action="/messages" method="POST">
                            @csrf

                            <label for='msg' class='col-form-label'>Message</label>
                            <textarea class="form-control" id="postMsg" placeholder="Message" name="msg"></textarea>
                            <label for='msg' class='col-form-label'>Author</label>
                            <p class="form-control" id="postAuthor" name="author">{{ Auth::user()->name }}</p>
                            <br>
                            <br>
                            <center>
                                <a href="/boards">
                                    <button type="submit" class="btn btn-primary" id="boardSumbit">Submit</button>
                                </a>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main class="py-4">
        @yield('content')
    </main>
</div>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
