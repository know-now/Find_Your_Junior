@extends('layouts.template')
@section('content')

    <section class="p-5">
        <div class="row text-center justify-content-center">
            <div class="col-lg-4">
                <div class="card shadow-sm p-3 mb-2 bg-body rounded" style="width: 30rem;">
                    <i class="bi bi-check-circle-fill" style="font-size: 84px; color:#00a2df;"></i>
                    <div class="card-block">
                        <h4 class="card-title" style="color: #00a2df">Awesome!</h4>
                        <p class="card-text">to access the rest of the website</p>
                        <h4 class="card-title text-muted">Click on</h4>
                        @if ($user->type === 'candidate')
                            <button style="background:#00a2df" type="button" class="btn create-profile">
                                <a style="text-decoration:none; color: white; " href="/profile/create">Create a Profile</a>
                            </button>
                        @else
                            <button style="background:#00a2df" type="button" class="btn create-profile">
                                <a style="text-decoration:none; color: white; " href="/company/create">Create a Company Profile</a>
                            </button>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
