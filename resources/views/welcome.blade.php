@extends('layouts.template')

@section('css')
    
@endsection
@section('content')
    <!-- landing page content -->
    <!-- box for junior -->
    <section class="pb-5">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="candidate col-md-6 text-center text-light p-5">
                    <h4>I'm a junior</h4>

                    <h3>GET A JOB</h3>
                    <button type="button" class="btn btn-transparent btn-lg btn-Iam text-light mb-3">
                        <a href="\register" class="link-light text-decoration-none">
                            CANDIDATE
                        </a>
                    </button>
                    <p>From Resume building to Interview</p>

                    <a href="#how-it-works-candidate" id="link-how-candidate" class="link-light text-underline-hover">How it
                        works</a>
                </div>

                <!-- box for company -->
                <div class="col-md-6 company text-center text-light p-5">
                    <h4>I'm a company</h4>
                    <h3>LOOKING FOR <span class="text-danger">A JUNIOR?</span></h3>
                    <button type="button" class="btn btn-transparent btn-lg btn-Iam text-light mb-3">
                        <a href="\register" class="link-light text-decoration-none">
                            COMPANY
                        </a>
                    </button>
                    <p>Discover new Talents</p>

                    <a href="#how-it-works-company" id="link-how-company" class="link-light text-underline-hover">How it
                        works</a>
                </div>
            </div>
        </div>
    </section>
    <!-- about us  -->
    <section class="bg-light text-dark text-center">
        <div class="container">
            <div class="row align-items-center justyfy-content-between g-6">
                <div class="col-md-6 img-buildings">
                    <img class="img-fluid d-none d-sm-block" src="/assets/home_img.png" alt="building with people" />
                </div>
                <div class="col-md-6">
                    <h1>Who Are <span class="text-danger">We</span></h1>
                    <p class="lead">
                        <span style="color: #EE2436"><b>Find Your Junior</b></span> is a platform build for
                        the Juniors Web Developers and Companies who are in
                        searching for Juniors.
                    </p>
                    <p>
                        For <span style="color: #00a2df"><b>Juniors</b></span> to find a job opportunity where they
                        can invest their skills and start their carrer.
                    </p>
                    <p>
                        For <span style="color: #00a2df"><b>Companies</b></span> searching for the energetic
                        Juniors.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- card how it works for company-->
    <section class="bg-light pb-5">
        <div class="container" id="how-it-works-company">
            <div class="row mb-4">
                <h3>HOW IT WORKS</h3>
            </div>
            <div class="row text-center g-4">
                <div class="col-md">
                    <div class="card bg-light text-dark h-100">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-check-square" style="color: #00a2df"></i>
                            </div>
                            <h3 class="card-title mb-3">CREATE ACCOUNT</h3>
                            <p class="card-text">
                                Set up your free dedicated company page in a few minutes.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-light text-dark h-100">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-laptop" style="color: #00a2df"></i>
                            </div>
                            <h3 class="card-title mb-3">PUBLISH YOUR JOBS</h3>
                            <p class="card-text">
                                Post all positions you need to fill. Be as specific as
                                possible.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-light text-dark h-100">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-envelope-open-heart" style="color: #00a2df"></i>
                            </div>
                            <h3 class="card-title mb-3">GET BEST MATCHES</h3>
                            <p class="card-text">
                                We will suggest top candidates matching your requirements.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-light text-dark h-100">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-telephone-outbound-fill" style="color: #00a2df"></i>
                            </div>
                            <h3 class="card-title mb-3">CONTACT AND HIRE</h3>
                            <p class="card-text">
                                Start conversations with the best candidates. Hire better and
                                faster!
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- how it works candidate -->
    <section class="bg-light pb-5">
        <div class="container" id="how-it-works-candidate">
            <div class="row mb-4">
                <h3>HOW IT WORKS</h3>
            </div>
            <div class="row text-center g-4">
                <div class="col-md">
                    <div class="card bg-light text-dark h-100">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-check-square" style="color: red"></i>
                            </div>
                            <h3 class="card-title mb-3">FILL YOUR PROFIL</h3>
                            <p class="card-text">
                                Set up your free dedicated company page in a few minutes.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-light text-dark h-100">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-laptop" style="color: red"></i>
                            </div>
                            <h3 class="card-title mb-3">GET PERFECT MATCHES</h3>
                            <p class="card-text">
                                Post all positions you need to fill. Be as specific as
                                possible.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-light text-dark h-100">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-envelope-open-heart" style="color: red"></i>
                            </div>
                            <h3 class="card-title mb-3">ACCEPT REQUEST</h3>
                            <p class="card-text">
                                We will suggest top candidates matching your requirements.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-light text-dark h-100">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-telephone-inbound-fill" style="color: red"></i>
                            </div>
                            <h3 class="card-title mb-3">GET A JOB</h3>
                            <p class="card-text">
                                Start conversations with the best candidates. Hire better and
                                faster!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- our teem -->
    <section class="team p-5">
        <div class="conatiner">
            <h2 class="text-center text-white">OUR TEAM</h2>
            <p class="lead text-center text-white mb-5">

            </p>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-2">
                    <div class="card bd-light h-100">
                        <div class="card-body text-center">
                            <img src="/assets/Denis.png" class="rounded-circle mb-3" alt="" height="120px"
                                width="120px" />
                            <h3 class="card-title mb-3">Denis</h3>
                            <p class="card-text">
                                <span style="font-family: cursive; color: #EE2436">
                                    Scrum Master
                                </span>
                            <p>
                                Product Manager / Sales Executive
                            </p>
                            </p>

                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-github text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="card bd-light h-100">
                        <div class="card-body text-center">
                            <img src="/assets/Margo.png" class="rounded-circle mb-3" alt="" height="120px"
                                width="120px" />
                            <h3 class="card-title mb-3">Margo</h3>
                            <p class="card-text">
                                <span style="font-family: cursive; color: #EE2436">
                                    The Enthusiast
                                </span>
                            <p>
                                Back-end Developer / Head of Operations
                            </p>
                            </p>

                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-github text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="card bd-light h-100">
                        <div class="card-body text-center">
                            <img src="/assets/Bricia2.png" class="rounded-circle mb-3" alt="" height="120px"
                                width="120px" />
                            <h3 class="card-title mb-3">Bricia</h3>

                            <p class="card-text">
                                <span style="font-family: cursive; color: #EE2436">Tech Queen </span>
                            <p>
                                Back-end Developer / Javascript Developer
                            </p>
                            </p>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-github text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="card bd-light h-100">
                        <div class="card-body text-center">
                            <img src="/assets/Kusuma.png" class="rounded-circle mb-3" alt="" height="120px"
                                width="120px" />
                            <h3 class="card-title mb-3">Kusuma</h3>
                            <p class="card-text">
                                <span style="font-family: cursive; color: #EE2436">The Artist </span>
                            <p>
                                Front-end Developer / Designer
                            </p>

                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-github text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="card bd-light h-100">
                        <div class="card-body text-center">
                            <img src="/assets/Yvetta.png" class="rounded-circle mb-3" alt="" height="120px"
                                width="120px" />
                            <h3 class="card-title mb-3">Iveta</h3>
                            <p class="card-text">
                                <span style="font-family: cursive; color: #EE2436">The Sweetness </span>
                            <p>
                                Front-end Developer / Head of Design
                            </p>

                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-github text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="/js/script_content.js"></script>
@endsection
