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
    <div id="createBoard"></div>

    @else
    
    <div id="loginRegister"></div>
    
    @endauth
    
    <div id="getOrganizedImg"></div>
    <div id="ourPurpose"></div>
    <div id="collaborateImg"></div>
    <div id="contactUs"></div>
    <div id="homeLogoImg"></div>
    
        <script src="{{mix('js/app.js')}}" ></script>
    </body>
</html>