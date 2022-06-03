<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Heim2 – Well Time Private SPA</title>

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
                <span class="title">Heim2 – Well Time Private SPA</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link mx-1 p-2" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-1 p-2" href="/">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-1 p-2" href="/">Contact Us</a>
                    </li>
                    @if(session()->has('user_id'))
                    <li class="nav-item">
                        <a class="nav-link mx-1 p-2" href="/profile">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-1 p-2" href="/logout">Logout</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link mx-1 p-2" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-1 p-2" href="/register">Register</a>
                    </li>
                    @endif


                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="bg-light p-5 rounded">
                    <div class="my-3">
                        <h3 class="text-center">Profile</h3>
                    </div>
                    <div class="my-2">
                        <form class="needs-validation" method="POST" action="/profile" novalidate>
                            @csrf
                            <div class="col-12 col-md-8 offset-md-2">
                                <div class="row my-2">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="firstName">First name</label>
                                            <input type="text" class="form-control" name="firstName" id="firstName" aria-describedby="firstName" placeholder="Enter first name" value="{{$user->first_name}}" required>
                                            <div class="invalid-feedback">
                                                Please enter your first name
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="lastName">Last name</label>
                                            <input type="text" class="form-control" name="lastName" value="{{$user->last_name}}" placeholder="Enter last name"
                                                    id="lastName" required>
                                            <div class="invalid-feedback">
                                                Please enter your last name
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" value="{{$user->email}}" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                                            <div class="invalid-feedback">
                                                Please enter email address
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="gender">Gender</label>
                                            <select class="form-control" value="{{$user->gender}}" name="gender" id="Gender" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option value="MALE">Male</option>
                                                <option value="FEMALE">Female</option>
                                                <option value="OTHER">Others</option>
                                              </select>
                                            <div class="invalid-feedback">
                                                Please select gender
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row my-2">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" value="{{$user->address}}" class="form-control" name="address" placeholder="Enter address"
                                                    id="address" required>
                                            <div class="invalid-feedback">
                                                Please enter address
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="phone">Contact number</label>
                                            <input type="text" value="{{$user->phone}}" class="form-control" name="phone" placeholder="Enter phone number"
                                                    id="phone" required>
                                            <div class="invalid-feedback">
                                                Please enter contact number
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if(session()->has('signUpError'))
                                <div class="form-group">
                                    <small class="text-danger"> {{session()->get('signUpError')}}</small>
                                </div>
                                @endif
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary btn-sm px-5">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        jQuery.fn.ForceNumericOnly =
            function()
            {
                return this.each(function()
                {
                    $(this).keydown(function(e)
                    {
                        var key = e.charCode || e.keyCode || 0;
                        // allow backspace, tab, delete, enter, arrows, numbers and keypad numbers ONLY
                        // home, end, period, and numpad decimal
                        return (
                            key == 8 ||
                            key == 9 ||
                            key == 13 ||
                            key == 46 ||
                            key == 110 ||
                            key == 190 ||
                            (key >= 35 && key <= 40) ||
                            (key >= 48 && key <= 57) ||
                            (key >= 96 && key <= 105));
                    });
                });
            };
    </script>

    <script>
        $(document).ready(function () {
            $("#phone").ForceNumericOnly();
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
