<!doctype = html>

<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Corkboard</title>
        <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/home.css')}}" rel="stylesheet" type="text/css">

        <!-- CSRF Token -->
         <meta name="csrf-token" content="{{ csrf_token() }}">

    </head>

    <body>
    <div id="pimg1"></div>
    <div id="section1"></div>
    <div id="pimg2"></div>
    <div id="section2"></div>
    <div id="pimg3"></div>
    <div id="section3"></div>
    <div id="inviteModal"></div>
    <div id="errorModal"></div>

        <script src="{{mix('js/app.js')}}" ></script>
    </body>
</html>