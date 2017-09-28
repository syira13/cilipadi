<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="{{ asset('MDB/css/compiled.min.css') }}" rel="stylesheet">
</head>
<body>

    
    <mdb-navbar SideClass="navbar navbar-dark indigo">
        <form class="form-inline waves-light" mdbRippleRadius>
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success btn-sm my-0 waves-light" type="submit" mdbRippleRadius>Search</button>
        </form>
    </mdb-navbar>
    <!-- Scripts -->

    <script src="{{ asset('MDB/js/compiled.min.js') }}"></script>
</body>
</html>