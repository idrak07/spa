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

        .row{
    margin-left:0px;
    margin-right:0px;
}

#wrapper {
    padding-left: 70px;
    transition: all .4s ease 0s;
    height: 100%;
    margin-top: 55px;
}

#sidebar-wrapper {
    margin-left: -150px;
    left: 30px;
    width: 200px;
    background: #222;
    position: fixed;
    height: 100%;
    z-index: 10000;
    transition: all .4s ease 0s;
}

.sidebar-nav {
    display: block;
    float: left;
    width: 150px;
    list-style: none;
    margin: 0;
    padding: 0;
}
#page-content-wrapper {
    padding-left: 0;
    margin-left: 0;
    width: 100%;
    height: auto;
}
#wrapper.active {
    padding-left: 220px;
}
#wrapper.active #sidebar-wrapper {
    left: 150px;
}

#page-content-wrapper {
  width: 100%;
}

#sidebar_menu li a, .sidebar-nav li a {
    color: #999;
    display: block;
    float: left;
    text-decoration: none;
    width: 200px;
    background: #252525;
    border-top: 1px solid #373737;
    border-bottom: 1px solid #1A1A1A;
    -webkit-transition: background .5s;
    -moz-transition: background .5s;
    -o-transition: background .5s;
    -ms-transition: background .5s;
    transition: background .5s;
}
.sidebar_name {
    padding-top: 25px;
    color: #fff;
    opacity: .7;
}

.sidebar-nav li {
  line-height: 40px;
  text-indent: 20px;
}

.sidebar-nav li a {
  color: #999999;
  display: block;
  text-decoration: none;
}

.sidebar-nav li a:hover {
  color: #fff;
  background: rgba(255,255,255,0.2);
  text-decoration: none;
}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
  text-decoration: none;
}

.sidebar-nav > .sidebar-brand {
  height: 65px;
  line-height: 60px;
  font-size: 18px;
}

.sidebar-nav > .sidebar-brand a {
  color: #999999;
}

.sidebar-nav > .sidebar-brand a:hover {
  color: #fff;
  background: none;
}

#main_icon
{
    float:right;
   padding-right: 35px;
   padding-top:20px;
}
.sub_icon
{
    float:right;
   padding-right: 35px;
   padding-top:10px;
}
.content-header {
  height: 65px;
  line-height: 65px;
}

.content-header h1 {
  margin: 0;
  margin-left: 20px;
  line-height: 65px;
  display: inline-block;
}

@media (max-width:767px) {
    #wrapper {
    padding-left: 70px;
    transition: all .4s ease 0s;
}
#sidebar-wrapper {
    left: 70px;
}
#wrapper.active {
    padding-left: 150px;
}
#wrapper.active #sidebar-wrapper {
    left: 150px;
    width: 150px;
    transition: all .4s ease 0s;
}
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
                        <a class="nav-link mx-1 p-2" aria-current="page" href="/admin">Home</a>
                    </li>

                    @if(session()->has('user_id'))
                    <li class="nav-item">
                        <a class="nav-link mx-1 p-2" href="/admin/addslot">Add Slot</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active mx-1 p-2" href="/admin/manage-schedule">Manage Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-1 p-2" href="/admin/history">History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-1 p-2" href="/logout">Logout</a>
                    </li>

                    @else
                    <li class="nav-item">
                        <a class="nav-link mx-1 p-2" href="/">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-1 p-2" href="/">Contact Us</a>
                    </li>
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
        <div class="row mt-5">
            <div class="col-8 offset-1">
                @if(count($users) < 1)
                @else
                <h2 class="text-dark text-left">Appointment list</h2>
                @endif
            </div>
            <div class="col-2">
                <a class="text-right text-dark" href="/admin/manage-schedule"><i class="fa fa-light fa-arrow-up"></i><span>Change date</span></a>
            </div>
            <div class="col-2">
                <a class="text-right text-dark" href="/admin/addslot"><i class="fa fa-light fa-arrow-up"></i><span>Add Slot</span></a>
            </div>
            <div class="col-10 offset-1">
                <div class="row">
                    @if(count($users) < 1)
                        <div>
                            <h1 class="text-light text-center mt-5"><span>No reservation found</span> <i class="fa fa-frown"></i></h1>
                        </div>
                    @else
                        @foreach ($users as $user)
                            <div class="col-12 col-md-12">
                                <div class="row my-2 bg-light rounded mx-1">
                                    <div class="col-8 py-4">
                                        <h5>{{ $user->first_name }} {{ $user->last_name}}</h5>
                                        <p>{{$user->address}}</p>
                                        <p>{{$user->phone}}</p>
                                    </div>
                                    <div class="col-4 py-4 ">
                                        <a href="/admin/reservation/{{$r_id}}/confirm/{{$user->id}}" type="button" class="btn btn-sm btn-success float-right">Confirm booking</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>

            </div>
        </div>
    </main>




    <script>
        $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
});
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
