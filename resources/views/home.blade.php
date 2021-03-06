<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Heim – Well Time Private SPA</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-fixed/">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400&display=swap" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    {{-- Jquery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

    {{-- meta --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/mdb.min.css">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/style.css">

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="/css/app.css" rel="stylesheet">
</head>

<body class="home-background">

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand pl-md-3" href="#">
                <img src="/asset/logo2.png" alt="..." height="100">&nbsp;
                <span class="title">Heim – Well Time Private SPA</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active mx-1 p-2" aria-current="page" href="/">Heim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-1 p-2" href="http://welltimeprivatespa.de/uber-uns/">Über uns</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-1 p-2" href="http://welltimeprivatespa.de/kontaktiere-uns/">Kontaktiere uns</a>
                    </li>
                    @if(session()->has('user_id'))
                    <li class="nav-item">
                        <a class="nav-link mx-1 p-2" href="/my-appointment">Meine Termine</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-1 p-2" href="/profile">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-1 p-2" href="/logout">Ausloggen</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link mx-1 p-2" href="/login">Anmeldung</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-1 p-2" href="/register">Registrieren</a>
                    </li>
                    @endif

                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        <div class="row">
            <div class="col-8 offset-2">
                @if (session()->has('booked_msg'))
                <div class="alert alert-success" role="alert" id="bookingAlert">
                    {{session()->get('booked_msg')}}
                </div>
                @else

                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">
                <div class="bg-light p-5 rounded">
                    <div class="my-2">
                        <h2>Wählen Sie hier das Datum aus </h2>
                    </div>
                    <div class="my-2">
                        <form class="needs-validation" method="POST" action="/appointment" novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-10">
                                    <input type="date" class="form-control form-control-lg" name="date"
                                        id="appointment_date" required>
                                    <div class="invalid-feedback">
                                        Bitte geben Sie ein Datum an
                                    </div>
                                </div>
                                <div class="col-12 pt-5">
                                    <input type="submit" value="Termin bekommen" class="btn btn-primary">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        $(document).ready(function () {
            $('.appointment_date').datetimepicker({
                format: 'MM/DD/YYYY',
                locale: 'en',
                minDate: (new Date()).toString()
            });
            setTimeout(function() {
                $('#bookingAlert').fadeOut('fast');
            }, 3000);
        });
    </script>

    <script>
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>

    <script>
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1; //January is 0!
        var yyyy = today.getFullYear();

        if (dd < 10) {
            dd = '0' + dd;
        }

        if (mm < 10) {
            mm = '0' + mm;
        }

        today = yyyy + '-' + mm + '-' + dd;
        document.getElementById("appointment_date").setAttribute("min", today);
    </script>

    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/popper.min.js"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/mdb.min.js"></script>


</body>

</html>
