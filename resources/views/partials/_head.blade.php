<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="{!! asset('/js/jquery-1.11.1.min.js') !!}" ></script>
    <script src="{!! asset('/js/bootstrap.js')!!}"></script>
    <script src="{{ asset('/js/popper.js') }}"></script>
    
    <link href="{{ asset('css/action.css')}}" rel="stylesheet"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"/>

    <title>{{ config('app.name', 'act!onaid') }}</title>