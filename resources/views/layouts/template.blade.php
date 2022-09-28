<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka&family=League+Spartan&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="/css/footer_style.css">
    <link rel="stylesheet" href="/css/navbar_style.css">
    <link rel="stylesheet" href="/css/content_style.css">
    <title>@yield('title')</title>
    @yield('css')

</head>

<body class="d-flex flex-column min-vh-100">
    @if (Auth::user())
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">

                <a href="/"
                    class="d-flex align-items-center justify-content-sm-evenly mb-3 mb-md-0 me-md-auto text-dark text-decoration-none gap-2">
                    <img src="{{ asset('assets/find_your_junior_black_sm.png') }}" class="img-fluid col-sm-8"
                        alt="" style="">

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('adem') }}">Work permit in ADEM</a>
                        </li>
                        @if ($user->type === 'company')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('company') }}">My account</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('search') }}">Search a Junior</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile') }}">My account</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{ route('soft_skills') }}" role="button"
                                    data-bs-toggle="dropdown">Useful Info</a>
                                <ul class="dropdown-menu dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('soft_skills') }}#challenge">Find a
                                            challange</a></li>
                                    <li><a class="dropdown-item" href="{{ route('soft_skills') }}#cv">How to write
                                            CV</a></li>
                                    <li><a class="dropdown-item" href="{{ route('soft_skills') }}#question">Questions &
                                            Suggestions</a></li>
                                </ul>
                            </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('messages') }}">Messages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">Log Out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    @else
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="navbar-image">
                <a class="navbar-brand" href="">
                    <img src="{{ URL::asset('/assets/find_your_junior_black_sm.png') }}" alt="Bootstrap">
                </a>
            </div>
            <div class="navbar-container ms-auto">
                
                <div class="navbar-ul">
                    <ul>
                        <li>
                            <a href="/register" class="button">Register</a>
                        </li>
                        <li>
                            <a href="/login" class="button">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    @endif

    <div class="content">
        @yield('content')

    </div>



    <footer class="mt-auto">
        <div class="container text-start">
            <div class="row align-items-center ">
                <div class="col-sm-6 col-md-4 justify-content-center">
                    <div class="footer-logo">
                        <img src="{{ URL::asset('/assets/find_your_junior_black.png') }}" alt="">
                    </div>
                </div> 
                <div class="col-sm-6 col-md-4 justify-content-center">
                    <div class="footer-heading text-start p-0 m-0">
                        <h3>About Us</h3>
                    </div>
                    <p>A Place to Find The Talent of Tommorrow </p>
                    <p>Platform for Juniors to start carrer</p>
                    <p>Help you to find professional match</p>
                    <p></p>
                </div>
                <div class="col-sm-6 col-md-4 justify-content-center">
                    <div class="footer-heading text-start p-0 m-0">
                        <h3>Contact</h3>
                    </div>
                    <p><a href="mailto:find.your.junior@gmail.com">find.your.junior@gmail.com</a></p>
                    <p><a href=""> +352 123 456 789</a></p>

                    <ul>
                        <li><a href=""><span class="fab fa-facebook" aria-hidden="true"></span> <span
                                    class="sr-only">Facebook</span></a></li>
                        <li><a href=""><span class="fab fa-twitter" aria-hidden="true"></span> <span
                                    class="sr-only">Tweeter</span></a></li>
                        <li><a href=""><span class="fab fa-linkedin-in" aria-hidden="true"></span> <span
                                    class="sr-only">LinkedIn</span></a></li>
                    </ul>

                </div>
            </div>
        </div>
    </footer>

    @yield('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>
