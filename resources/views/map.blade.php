@extends('layouts.app')

@section('content')

<header>
    @include('layouts.header')
</header>

<div id="map"></div>

<script>
    
    mapboxgl.accessToken = 'pk.eyJ1IjoicmF5bHh5bGVtIiwiYSI6ImNrMHphdmZmNzBmdzQzb293M3Z5Zm9samYifQ.keAuGVm8Orve1iPn6o7wVQ';
        var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11' ,
        center: [123.885437, 10.315699],
        zoom: 12
    });

    map.addControl(
        new MapboxDirections({
        accessToken: mapboxgl.accessToken
        }),
        'top-left'
    );

    map.addControl(
        new MapboxGeocoder({
        accessToken: mapboxgl.accessToken,
        mapboxgl: mapboxgl
        })
    );

    map.addControl(
        new mapboxgl.GeolocateControl({
        positionOptions: {
        enableHighAccuracy: true
        },
        trackUserLocation: true
        })
    );
</script>

<footer>
    @include('layouts.footer')
</footer>

@endsection