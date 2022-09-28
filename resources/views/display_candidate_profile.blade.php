@extends('layouts.template')

@section('content')
    {{-- <x-contest/> --}}
    <section class="py-5 pt-lg-5 bg-light">
        <div class="container">
            <div class="row d-flex justify-content-center shadow-sm bg-body rounded">
                <div class="col-md-12 col-lg-6">
                    <!--QUOTE -->

                    <h2> Welcome <span class="text-danger">{{ $candidate->first_name }}</span></h2>
                    <div class="row">

                        <div class="col-sm-6" style="background-color:rgb(201, 199, 199);">

                            <div class="card-block text-center text-white">
                                <i class="bi bi-person-workspace" style="font-size: 150px; color: #00a2df;"></i>
                                <h5 class="mt-4" style="color: #00a2df;">FIRST NAME</h5>
                                <p>{{ $candidate->first_name }}</p>
                                <h5 class="mt-4" style="color: #00a2df;">LAST NAME</h5>
                                <p>{{ $candidate->last_name }}</p>
                                <a href="{{url('/profile/edit', ['name'])}}"><i class="bi bi-pencil-square"
                                        style="font-size: 18px; color: #00a2df;"></i></a>
                            </div>

                            <div class="quote">
                                <blockquote class="blockquote blockquote-custom bg-white p-5 mt-5 shadow rounded">
                                    <div class="blockquote-custom-icon bg-white shadow-sm">
                                        <i class="bi bi-quote" style="font-size: 40px; color: #00a2df;"></i>
                                    </div>
                                    <x-quote />
                                </blockquote>

                            </div>

                            <ul class="list-unstyled d-flex justify-content-start mt-4">
                                <li></li>
                            </ul>

                        </div>
                        <div class="col-sm-6 bg-white round-right">

                            <div class="row py-5">
                                <h4 class=" text-center">PERSONAL INFORMATION</h4>
                                <hr class="badge-primary w-100" />
                                <div class="row m-0">
                                    <div
                                        class="col-sm-12 d-flex justify-content-between shadow-sm py-2 mb-2 bg-body rounded">
                                        <i class="bi bi-telephone-fill"></i>
                                        <h6 class="text-muted">{{ $candidate->phone_number }}</h6>
                                        <a href="{{url('/profile/edit', ['number'])}}"><i class="bi bi-pencil-square" style="color: #00a2df;"></i></a>
                                    </div>
                                    <div
                                        class="col-sm-12 d-flex justify-content-between shadow-sm p-2 mb-2 bg-body rounded">
                                        <i class="bi bi-github"></i>
                                        <h6 class="text-muted">{{ $candidate->github }}</h6>
                                        <a href="{{url('/profile/edit', ['github'])}}"><i class="bi bi-pencil-square" style="color: #00a2df;"></i></a>
                                    </div>
                                    <div
                                        class="col-sm-12 d-flex justify-content-between shadow-sm p-2 mb-2 bg-body rounded">
                                        <i class="bi bi-linkedin"></i>
                                        <h6 class="text-muted">{{ $candidate->linkedin }}</h6>
                                        <a href="{{url('/profile/edit', ['linkedin'])}}"><i class="bi bi-pencil-square" style="color: #00a2df;"></i></a>
                                    </div>
                                </div>
                                <h4 class="pt-5 text-center ">SKILLS & PREFERENCES</h4>
                                <hr class="badge-primary">
                                <div class="row m-0">
                                    <div
                                        class="col-sm-12 d-flex justify-content-between shadow-sm p-2 mb-2 bg-body rounded">
                                        <p class="">Education</p>
                                        <h6 class="text-muted">{{ $candidate->education }}</h6>
                                        <a href="{{url('/profile/edit', ['education'])}}"><i class="bi bi-pencil-square" style="color: #00a2df;"></i></a>
                                    </div>
                                    <div
                                        class="col-sm-12 d-flex justify-content-between shadow-sm p-2 mb-2 bg-body rounded">
                                        <p class="">Role</p>
                                        <h6 class="text-muted">{{ $candidate_role->role }}</h6>
                                        <a href="{{url('/profile/edit', ['role'])}}"><i class="bi bi-pencil-square" style="color: #00a2df;"></i></a>
                                    </div>
                                    <div
                                        class="col-sm-12 d-flex justify-content-between shadow-sm p-2 mb-2 bg-body rounded">
                                        <p class="">Skills</p>
                                        <h6 class="text-muted">
                                            @foreach ($candidate_skill as $candidate)
                                                <span>{{ $candidate->skill }}</span>
                                            @endforeach
                                        </h6>
                                        <a href="{{url('/profile/edit', ['skills'])}}"><i class="bi bi-pencil-square" style="color: #00a2df;"></i></a>
                                    </div>
                                    <div
                                        class="col-sm-12 d-flex justify-content-between shadow-sm p-2 mb-2 bg-body rounded">
                                        <p class="">Languages</p>
                                        <h6 class="text-muted">
                                            @foreach ($candidate_language as $candidate)
                                                <span>{{ $candidate->language }}</span>
                                            @endforeach
                                        </h6>
                                        <a href="{{url('/profile/edit', ['languages'])}}"><i class="bi bi-pencil-square" style="color: #00a2df;"></i></a>
                                    </div>
                                    <div class="mt-5">
                                        {{-- {{$cv}} --}}

                                        <button type="button" class="btn btn-transparent btn-lg btn-CV text-light mb-3 px-5">
                                        <div>
                                            <a target="_blank" href="{{ URL::to('/') }}/uploads/{{$cv}}">CV</a>

                                        </div>
                                    </button>
                                    <a href="{{url('/profile/edit', ['cv'])}}"><i class="bi bi-pencil-square" style="color: #00a2df;"></i></a>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
