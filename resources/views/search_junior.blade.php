@extends('layouts.template')

@section('css')
    <link rel="stylesheet" href="/css/search_style.css">
@endsection

@section('content')
    <div class="big-container">
        <form action="" method="post" class="py-4 m-auto w-75">
            @csrf

            <div class="content-container p-2">
                <h2 class="row m-auto mb-4">Choose any 3 or more skills for the candidate</h2>

                <div class="container-fluid p-3">
                    <div class="row">
                        <div class="form-check col-sm-6">
                            <input class="form-check-input" type="checkbox" value="1" name="html" id="btn-check"
                                autocomplete="off">
                            <label class="form-check-label" for="btn-check">
                                HTML
                            </label>
                        </div>

                        <div class="form-check col-sm-6">
                            <input class="form-check-input" type="checkbox" value="2" name="css" id="btn-check2"
                                autocomplete="off">
                            <label class="form-check-label" for="btn-check2">
                                CSS
                            </label>
                        </div>

                        <div class="form-check col-sm-6">
                            <input class="form-check-input" type="checkbox" value="3" name="bootstrap" id="btn-check3"
                                autocomplete="off">
                            <label class="form-check-label" for="btn-check3">
                                Bootstrap
                            </label>
                        </div>

                        <div class="form-check col-sm-6">
                            <input class="form-check-input" type="checkbox" value="4" name="javascript" id="btn-check4"
                                autocomplete="off">
                            <label class="form-check-label" for="btn-check4">
                                Javascript
                            </label>
                        </div>

                        <div class="form-check col-sm-6">
                            <input class="form-check-input" type="checkbox" value="5" name="git" id="btn-check5"
                                autocomplete="off">
                            <label class="form-check-label" for="btn-check5">
                                GitHub
                            </label>
                        </div>

                        <div class="form-check col-sm-6">
                            <input class="form-check-input" type="checkbox" value="6" name="react" id="btn-check6"
                                autocomplete="off">
                            <label class="form-check-label" for="btn-check6">
                                React
                            </label>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-check col-sm-6">
                            <input class="form-check-input" type="checkbox" value="7" name="php" id="btn-check7"
                                autocomplete="off">
                            <label class="form-check-label" for="btn-check7">
                                PHP
                            </label>
                        </div>

                        <div class="form-check col-sm-6">
                            <input class="form-check-input" type="checkbox" value="8" name="sql" id="btn-check8"
                                autocomplete="off">
                            <label class="form-check-label" for="btn-check8">
                                SQL
                            </label>
                        </div>

                        <div class="form-check col-sm-6">
                            <input class="form-check-input" type="checkbox" value="9" name="agile" id="btn-check9"
                                autocomplete="off">
                            <label class="form-check-label" for="btn-check9">
                                Agile
                            </label>
                        </div>

                        <div class="form-check col-sm-6">
                            <input class="form-check-input" type="checkbox" value="10" name="ux" id="btn-check10"
                                autocomplete="off">
                            <label class="form-check-label" for="btn-check10">
                                UX/UI
                            </label>
                        </div>

                        <div class="form-check col-sm-6">
                            <input class="form-check-input" type="checkbox" value="11" name="laravel"
                                id="btn-check11" autocomplete="off">
                            <label class="form-check-label" for="btn-check11">
                                Laravel
                            </label>
                        </div>

                        <div class="form-check col-sm-6 mt-4 p-0 ">
                            <input type="submit" value="Search" name="search-btn" class="btn btn-primary">
                        </div>
                    </div>

                </div>
            </div>


        </form>

    </div>


    @if (isset($_POST['search-btn']))
        <div class="container">
            <div class="row g-4 card-group">
                @foreach ($candidates as $candidate)
                    <div class="col-sm-3">
                        <div class="card h-100">
                            <div class="d-flex flex-column card-body">
                                <h3 class="card-title mb-3" style="color: #00A2DF">{{ $candidate->first_name }}</h3>
                                <p class="card-text">
                                    <strong> Education : </strong> <br> {{ $candidate->education }}
                                </p>
                                <p class="card-text">
                                    <strong> Skills : </strong>
                                    @foreach ($candidate->skills as $skill)
                                        <div class="justify-content-center">
                                            <li> {{ $skill->skill }} </li>
                                        </div>
                                    @endforeach
                                </p>
                                <div class="mt-auto">
                                    <a href="/messages/create" class="btn btn-primary">Contact Candidate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    @endif


    {{-- <div class="container p-5">
        <h3>Choose any 3 or more skills for the candidate</h3>


        <form action="" method="post">
            @csrf

            <div class="container form-container g-10">
                <div class="form-check">
                    <input type="checkbox" class="btn-check" name="html" value="1" id="btn-check" autocomplete="off" />
                    <label class="btn btn-outline-secondary btn-lg" for="btn-check">HTML</label>

                    <input type="checkbox" class="btn-check" name="css" value="2" id="btn-check2"
                        autocomplete="off" />
                    <label class="btn btn-outline-secondary btn-lg" for="btn-check2">CSS</label>

                    <input type="checkbox" class="btn-check" name="bootstrap" value="3" id="btn-check3"
                        autocomplete="off" />
                    <label class="btn btn-outline-secondary btn-lg" for="btn-check3">Bootstrap</label>

                    <input type="checkbox" class="btn-check" name="javascript" value="4" id="btn-check4"
                        autocomplete="off" />
                    <label class="btn btn-outline-secondary btn-lg" for="btn-check4">Javascript</label>

                    <input type="checkbox" class="btn-check" name="git" value="5" id="btn-check5"
                        autocomplete="off" />
                    <label class="btn btn-outline-secondary btn-lg" for="btn-check5">GitHub</label>

                    <input type="checkbox" class="btn-check" name="react" value="6" id="btn-check6"
                        autocomplete="off" />
                    <label class="btn btn-outline-secondary btn-lg" for="btn-check6">React</label>

                    <input type="checkbox" class="btn-check" name="php" value="7" id="btn-check7"
                        autocomplete="off" />
                    <label class="btn btn-outline-secondary btn-lg" for="btn-check7">PHP</label>

                    <input type="checkbox" class="btn-check" name="sql" value="8" id="btn-check8"
                        autocomplete="off" />
                    <label class="btn btn-outline-secondary btn-lg" for="btn-check8">SQL</label>

                    <input type="checkbox" class="btn-check" name="agile" value="9" id="btn-check9"
                        autocomplete="off" />
                    <label class="btn btn-outline-secondary btn-lg" for="btn-check9">Agile</label>

                    <input type="checkbox" class="btn-check" name="ux" value="10" id="btn-check10"
                        autocomplete="off" />
                    <label class="btn btn-outline-secondary btn-lg" for="btn-check10">UX/UI</label>

                    <input type="checkbox" class="btn-check" name="laravel" value="11" id="btn-check11"
                        autocomplete="off" />
                    <label class="btn btn-outline-secondary btn-lg" for="btn-check11">Laravel</label>
                </div>
                <div class="form-check justify-content-center ">
                    <input type="submit" value="Search" name="search-btn" class="btn btn-primary btn-lg">
                </div>
            </div>
        </form>
    </div> --}}


@endsection
