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
    <style>
        .navbar {
    position: relative;
}
.brand {
    position: absolute;
    left: 50%;
    margin-left: -50px !important;  /* 50% of your logo width */
    display: block;
}
    </style>
</head>
<body>

    <!--Main Navigation-->
<header>

    <nav class="navbar navbar-expand-lg navbar-dark black" style="padding:20px 16px">
        <div class="container text-center">
            <a class="brand" style="margin:0px;align-items: center" href="#"><strong>Navbar</strong></a>
            {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                </ul>
            </div> --}}
        </div>
    </nav>

</header>
<!--Main Navigation-->

<!--Main Layout-->
<main class="text-center py-5 mt-3">

    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="pricefilter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Price Filter
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="pricefilter">
                        <a class="dropdown-item" href="#">Low -> High</a>
                        <a class="dropdown-item" href="#">High -> Low</a>
                    </div>
                </div>
            </div>
            <div class="col-9">

                <mdb-navbar SideClass="navbar navbar-dark indigo">
                    <form class="form-inline waves-light" mdbRippleRadius>
                        <input class="form-control col-10" type="text" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success btn-sm my-0 waves-light" type="submit" mdbRippleRadius>Search</button>
                    </form>
                </mdb-navbar>

            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <?php
                $client = new MongoDB\Client('mongodb://nexxa:neonexxa@cluster0-shard-00-00-okipt.mongodb.net:27017,cluster0-shard-00-01-okipt.mongodb.net:27017,cluster0-shard-00-02-okipt.mongodb.net:27017/test?ssl=true&replicaSet=Cluster0-shard-0&authSource=admin');
                $db = $client->test;

            ?>
            {{ dd($db) }}
            <div class="col-4">
                <!--Card Wider-->
                <div class="card card-cascade wider">

                    <!--Card image-->
                    <div class="view overlay hm-white-slight">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/6-col/img%20%283%29.jpg" class="img-fluid">
                        <a href="#!">
                            <div class="mask"></div>
                        </a>
                    </div>
                    <!--/Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Title-->
                        <h4 class="card-title"><strong>Alice Mayer</strong></h4>
                        <h5 class="indigo-text"><strong>Photographer</strong></h5>

                        <p class="card-text">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totam rem aperiam. </p>

                        
                        <!--Linkedin-->
                        <a class="icons-sm li-ic"><i class="fa fa-linkedin"> </i></a>
                        <!--Twitter-->
                        <a class="icons-sm tw-ic"><i class="fa fa-twitter"> </i></a>
                        <!--Dribbble-->
                        <a class="icons-sm fb-ic"><i class="fa fa-facebook"> </i></a>

                    </div>
                    <!--/.Card content-->
                </div>
                <!--/.Card Wider-->
            </div>
        </div>
        
    </div>

</main>
<!--Main Layout-->
                
            
    
    <!-- Scripts -->

    <script src="{{ asset('MDB/js/compiled.min.js') }}"></script>
</body>
</html>