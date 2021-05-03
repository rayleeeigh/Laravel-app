<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    

    <!-- API -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
	<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.5.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.5.0/mapbox-gl.css' rel='stylesheet' />
	<script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.2.0/mapbox-gl-geocoder.min.js'></script>
	<link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.2.0/mapbox-gl-geocoder.css' type='text/css' />
	<script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v3.1.1/mapbox-gl-directions.js'></script>
    <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v3.1.1/mapbox-gl-directions.css' type='text/css' />

    <!-- Custom Styles -->

    <style>
        .carousel-open:checked + .carousel-item {
            position: static;
            opacity: 100;
        }
        .carousel-item {
            -webkit-transition: ;
            transition: ;
        }
        #carousel-1:checked ~ .control-1,
        #carousel-2:checked ~ .control-2,
        #carousel-3:checked ~ .control-3,
        #carousel-4:checked ~ .control-4,
        #carousel-5:checked ~ .control-5 {
            display: block;
        }
        .carousel-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }
        #carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet,
        #carousel-4:checked ~ .control-4 ~ .carousel-indicators li:nth-child(4) .carousel-bullet,
        #carousel-5:checked ~ .control-5 ~ .carousel-indicators li:nth-child(5) .carousel-bullet {
            color: #252525;  /*Set to match the Tailwind colour you want the active one to be */
        }

        #sortbox:checked ~ #sortboxmenu {
            opacity: 1;
        }

        body { margin: 0; padding: 0; }
        #map { position: absolute; top: 0; bottom: 0; width: 100%;margin-top:9vh;}
        .navbar-custom{padding-top:1rem;padding-bottom:1rem;background-color:rgba(0,0,0,.8)}
        
    </style>

</head>
<body class="bg-white font-sans leading-normal tracking-normal">
    @yield('content')
</body>
</html>
