<!doctype = html>

<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Corkboard</title>
        
        <!-- Style Sheets -->
        <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/welcome.css')}}" rel="stylesheet" type="text/css">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

        <!-- CSRF Token -->
         <meta name="csrf-token" content="{{ csrf_token() }}">

    </head>
    

    <body>
    <div id="homeLogoImg"></div>   
   
    @auth
    <section class="section section-dark">
        <h2>Create Your Board</h2>

      <!-- Create New Board Code -->
          <div class="container">
            <div class="flex-row row justify-content-center">     
              <center>
                <button
                    type="submit"
                    class="btn btn-primary"
                    data-toggle="modal"
                    data-target="#createBoardModal"
                  >
                    Create New Board
                  </button>
              </center>
            </div>
          </div>
      </section>





    @else
    
    <div id="loginRegister"></div>
    
    @endauth
    
    <div id="getOrganizedImg"></div>
    <div id="ourPurpose"></div>
    <div id="collaborateImg"></div>
    <div id="contactUs"></div>
    <div id="homeLogoImg"></div>
    
    <!-- Modal -->
<div class="modal fade" id="createBoardModal" tabindex="-1" role="dialog" aria-labelledby="createBoardModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header section-dark">
        <h5 class="modal-title" id="exampleModalLabel">New Board Form</h5>
      </div>
      <div class="modal-body">
            <div class="form-group" id="newBoardForm">
                <form action="/api/boards" method="POST">
                @csrf
                <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="Enter your new board name here">
                <center><strong id="helpId" class="form-text text-muted" style="font-size: 12px">Note: Your board's name must be a unique name.</strong></center>
                <center>
                    <a href="home"><button type="submit" class="btn btn-primary" id="boardSumbit">Submit</button></a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </center>  
            </form>
            </div>
      </div>
      
    </div>
</div>
        <script src="{{mix('js/app.js')}}" ></script>
    </body>
</html>