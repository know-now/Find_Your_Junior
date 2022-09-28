@extends('layouts.template')
@section('css')
    <link rel="stylesheet" href="{{ asset('/css/profile.css') }}">
@endsection
@section('content')
    <div class="container">
        <form method="post" class="py-4 m-auto w-75" enctype="multipart/form-data">
            @csrf

            <h1 class="row m-auto mb-4">Create your candidate profile</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="step step-1 row gy-4 active">
                <div class="col-sm-6">
                    <input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{old('first_name')}}">
                </div>
                <div class="col-sm-6">
                    <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{old('last_name')}}">
                </div>
                <div class="col-sm-12">
                    <input type="number" name="phone_number" class="form-control" placeholder="Phone Number" value="{{old('phone_number')}}">
                </div>
                <div class="col-sm-6">
                    <input type="text" name="linkedin" class="form-control" placeholder="LinkedIn" value="{{old('linkedin')}}">
                </div>
                <div class="col-sm-6">
                    <input type="text" name="github" class="form-control" placeholder="Github" value="{{old('github')}}">
                </div>
                <div class="col-sm-6">
                    <select name="education" value="{{old('education')}}" class="form-select">
                        <option value="">Choose your Education</option>
                        <option value="1" {{ old('education') == 1 ? 'selected' : '' }}>High School</option>
                        <option value="2" {{ old('education') == 2 ? 'selected' : '' }}>Bachelor's</option>
                        <option value="3" {{ old('education') == 3 ? 'selected' : '' }}>Master's</option>
                    </select>
                </div>
                <div class="col-sm-6">
                    <select name="role_id" class="form-select">
                        <option value="">Choose your preferred Role</option>
                        <option value="1" {{ old('role_id') == 1 ? 'selected' : '' }}>Fullstack</option>
                        <option value="2" {{ old('role_id') == 2 ? 'selected' : '' }}>Front End</option>
                        <option value="3" {{ old('role_id') == 3 ? 'selected' : '' }}>Back End</option>
                    </select>
                </div>
                <div class="col-sm-12 d-flex justify-content-end">
                    <button class="w-25 btn btn-primary next-btn" type="button">Next</button>
                </div>

            </div>
            <div class="row step gy-2 step-2">
                <h4>What programming languages do you know?</h4>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="skills[0]" {{ old('skills.0') == 1 ? 'checked' : '' }}>
                    <label class="form-check-label">
                        HTML
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="2" name="skills[1]" {{ old('skills.1') == 2 ? 'checked' : '' }}>
                    <label class="form-check-label">
                        Java Script
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="3" name="skills[2]" {{ old('skills.2') == 3 ? 'checked' : '' }}>
                    <label class="form-check-label">
                        CSS
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="4" name="skills[3]" {{ old('skills.3') == 4 ? 'checked' : '' }}>
                    <label class="form-check-label">
                        PHP
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="5" name="skills[4]" {{ old('skills.4') == 5 ? 'checked' : '' }}>
                    <label class="form-check-label">
                        Python
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="6" name="skills[5]" {{ old('skills.5') == 6 ? 'checked' : '' }}>
                    <label class="form-check-label">
                        Java
                    </label>
                </div>

                <h4>What languages do you speak?</h4>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="languages[0]" {{ old('languages.0') == 1 ? 'checked' : '' }}>
                    <label class="form-check-label">
                        English
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="2" name="languages[1]" {{ old('languages.1') == 2 ? 'checked' : '' }}>
                    <label class="form-check-label">
                        French
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="3" name="languages[2]" {{ old('languages.2') == 3 ? 'checked' : '' }}>
                    <label class="form-check-label">
                        German
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="4" name="languages[3]" {{ old('languages.3') == 4 ? 'checked' : '' }}>
                    <label class="form-check-label">
                        Luxembourgish
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="5" name="languages[4]" {{ old('languages.4') == 5 ? 'checked' : '' }}>
                    <label class="form-check-label">
                        Other
                    </label>
                </div>
                <div class="form-check col-sm-12 col-lg-6">
                    {{-- <label for="formFile" class="form-label">Upload your files</label> --}}
                    <input class="form-control" type="file" id="formFile" name="cv" accept=".pdf">
                    <p>File format: .pdf</p>
                </div>


                <div class="row my-4">
                    <div class="col-md-6 d-flex justify-content-start">
                        <button class="w-50 btn btn-primary btn-md profile-btn" type="button">Previous</button>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <input type="submit" class="w-50 btn btn-primary btn-md profile-btn" value="Create Profile">
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('js')
    <script src="{{ asset('/js/profile.js') }}"></script>
@endsection
