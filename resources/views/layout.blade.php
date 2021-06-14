<!DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes4U &nbsp | &nbsp   @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body >

<div class="container-fluid px-0 fixed-top ">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark ">
        <div class="container">
            <a href="/" class="navbar-brand">Notes4U</a>
            <button type="button" class="navbar-toggler" data-bs-target="#nav" data-bs-toggle="collapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id='nav'>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="/signup" class="nav-link">Signup</a></li>
                    <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="prevent-navbar-overlap pt-4 mt-5"></div>
<div class="container-fluid px-0 ">
    <div class="row">
        @section('sidebar')
        <div class="col-lg-3 text-center">
            <div class="list-group">
                <li class="list-group-item bg-primary text-list h2">Topics</li>
                <a href="/monitor" class="list-group-item list-group-item-action h6">Monitor</a>
                <a href="/motherboard" class="list-group-item list-group-item-action h6">Motherboard</a>
                <a href="/processor" class="list-group-item list-group-item-action h6">Processor</a>
                <a href="" class="list-group-item list-group-item-action h6">RAM</a>
                <a href="" class="list-group-item list-group-item-action h6">ROM</a>
                <a href="" class="list-group-item list-group-item-action h6">BIOS</a>
                <a href="" class="list-group-item list-group-item-action list-group-item-success h4">View More ....</a>
            </div>
        </div>
        @show


        <div class="col-lg-9">
            @section('content')
            <div class="card col-8 p-3 mt-4 mx-auto shadow-lg text-danger display-3 fw-bold">
                <div class="card body border-0">
                    Select topics to see berief notes ...
                </div>
            </div>
            @show
        </div>
    </div>
</div>

<div class="container-fluid px-0 py-3 bg-dark" style="margin-top:25vh">
    <div class="container">
        <div class="row ">
            <div class="col-lg-4 text-center text-light h5">
                This is footer this is footer this is footer this is footer this is footer this is footer this is footer this footer
            </div>
            <div class="col-lg-4 text-center text-light h5">
                <h3>About us .</h3>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, perferendis.
            </div>
            <div class="col-lg-4 text-center text-light h5">
                <h3>Contact .</h3>
                adipisicing elit. Exercitationem, perferendis.
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
