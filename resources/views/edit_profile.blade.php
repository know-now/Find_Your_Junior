@extends('layouts.template')
@section('css')
    <link rel="stylesheet" href="{{ asset('/css/profile.css') }}">
@endsection
@section('content')
    <div class="container">
        <form method="post" class="py-4 m-auto w-75" enctype="multipart/form-data">
            @csrf
            <h1 class="row m-auto mb-4 py-4">Update Your Profile</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- {{ dd(strpos(url()->current(), 'contact')) }} --}}
            <div class="step step-1 row gy-4 active">
                @if (strpos(url()->current(), 'name'))
                    <div class="mb-3 row">
                        <label for="first_name" class="col-sm-2 col-form-label">First Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="first_name">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="last_name" class="col-sm-2 col-form-label">Last Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="last_name">
                        </div>
                    </div>
                @else
                    <div class="mb-3 row">
                        <label for="static-name" class="col-sm-2 col-form-label">First Name:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="static-name"
                                value="{{ $first_name }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="static-name" class="col-sm-2 col-form-label">Last Name:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="static-name"
                                value="{{ $last_name }}">
                        </div>
                    </div>
                @endif
                @if (strpos(url()->current(), 'number'))
                    <div class="mb-3 row">
                        <label for="phone_number" class="col-sm-2 col-form-label">Phone Number:</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="phone_number">
                        </div>
                    </div>
                @else
                    <div class="mb-3 row">
                        <label for="static-number" class="col-sm-2 col-form-label">Phone Number:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="static-number"
                                value="{{ $phone_number }}">
                        </div>
                    </div>
                @endif

                @if (strpos(url()->current(), 'github'))
                    <div class="mb-3 row">
                        <label for="github" class="col-sm-2 col-form-label">Github:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="github">
                        </div>
                    </div>
                @else
                    <div class="mb-3 row">
                        <label for="static-github" class="col-sm-2 col-form-label">Github:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="static-github"
                                value="{{ $github }}">
                        </div>
                    </div>
                @endif

                @if (strpos(url()->current(), 'linkedin'))
                    <div class="mb-3 row">
                        <label for="linkedin" class="col-sm-2 col-form-label">Linkedin:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="linkedin">
                        </div>
                    </div>
                @else
                    <div class="mb-3 row">
                        <label for="static-linkedin" class="col-sm-2 col-form-label">linkedin:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="static-linkedin"
                                value="{{ $linkedin }}">
                        </div>
                    </div>
                @endif

                @if (strpos(url()->current(), 'education'))
                    <div class="mb-3 row">
                        <label for="education" class="col-sm-2 col-form-label">Education:</label>
                        <div class="col-sm-10">
                            <select name="education" class="form-select">
                                <option value="">Choose your Education</option>
                                <option value="1" {{ old('education') == 1 ? 'selected' : '' }}>High School</option>
                                <option value="2" {{ old('education') == 2 ? 'selected' : '' }}>Bachelor's</option>
                                <option value="3" {{ old('education') == 3 ? 'selected' : '' }}>Master's</option>
                            </select>
                        </div>
                    </div>
                @else
                    <div class="mb-3 row">
                        <label for="static-education" class="col-sm-2 col-form-label">Education:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="static-education"
                                value="{{ $education }}">
                        </div>
                    </div>
                @endif

                @if (strpos(url()->current(), 'role'))
                    <div class="mb-3 row">
                        <label for="role" class="col-sm-2 col-form-label">Role:</label>
                        <div class="col-sm-10">
                            <select name="role" class="form-select">
                                <option value="">Choose your preferred Role</option>
                                <option value="1" {{ old('role') == 1 ? 'selected' : '' }}>Fullstack</option>
                                <option value="2" {{ old('role') == 2 ? 'selected' : '' }}>Front End</option>
                                <option value="3" {{ old('role') == 3 ? 'selected' : '' }}>Back End</option>
                            </select>
                        </div>
                    </div>
                @else
                    <div class="mb-3 row">
                        <label for="static-role" class="col-sm-2 col-form-label">Role:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="static-role"
                                value="{{ $role }}">
                        </div>
                    </div>
                @endif
                <div class="col-sm-12 d-flex justify-content-end">
                    <button class="w-25 btn btn-md next-btn" type="button">Next</button>
                </div>
            </div>
            <div class="row step gy-2 step-2">
                @if (strpos(url()->current(), 'skills'))
                    <div class="mb-3 row">
                        <h4 class="col-sm-6">Skills:</h4>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" name="skills[0]"
                                    {{ old('skills.0') == 1 ? 'checked' : '' }}>
                                <label class="form-check-label">
                                    HTML
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="2" name="skills[1]"
                                    {{ old('skills.1') == 2 ? 'checked' : '' }}>
                                <label class="form-check-label">
                                    Java Script
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="3" name="skills[2]"
                                    {{ old('skills.2') == 3 ? 'checked' : '' }}>
                                <label class="form-check-label">
                                    CSS
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="4" name="skills[3]"
                                    {{ old('skills.3') == 4 ? 'checked' : '' }}>
                                <label class="form-check-label">
                                    PHP
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="5" name="skills[4]"
                                    {{ old('skills.4') == 5 ? 'checked' : '' }}>
                                <label class="form-check-label">
                                    Python
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="6" name="skills[5]"
                                    {{ old('skills.5') == 6 ? 'checked' : '' }}>
                                <label class="form-check-label">
                                    Java
                                </label>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="mb-3 row">
                        <h4 class="col-sm-6">Skills:</h4>
                        <div class="col-sm-10">
                            @foreach ($skills as $skill)
                                <span>{{ $skill->skill }}</span>
                            @endforeach
                        </div>
                    </div>
                @endif

                @if (strpos(url()->current(), 'languages'))
                    <div class="mb-3 row">
                        <h4 class="col-sm-6">Languages:</h4>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" name="languages[0]"
                                    {{ old('languages.0') == 1 ? 'checked' : '' }}>
                                <label class="form-check-label">
                                    English
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="2" name="languages[1]"
                                    {{ old('languages.1') == 2 ? 'checked' : '' }}>
                                <label class="form-check-label">
                                    French
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="3" name="languages[2]"
                                    {{ old('languages.2') == 3 ? 'checked' : '' }}>
                                <label class="form-check-label">
                                    German
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="4" name="languages[3]"
                                    {{ old('languages.3') == 4 ? 'checked' : '' }}>
                                <label class="form-check-label">
                                    Luxembourgish
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="5" name="languages[4]"
                                    {{ old('languages.4') == 5 ? 'checked' : '' }}>
                                <label class="form-check-label">
                                    Other
                                </label>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="mb-3 row">
                        <h4 class="col-sm-6">Languages:</h4>
                        <div class="col-sm-10">
                            @foreach ($languages as $language)
                                <span>{{ $language->language }}</span>
                            @endforeach
                        </div>
                    </div>
                @endif

                @if (strpos(url()->current(), 'cv'))
                    <div class="mb-3 row">
                        <label for="cv" class="col-sm-2 col-form-label">CV:</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file" id="formFile" name="cv" accept=".pdf">
                            <p>File format: .pdf</p>
                        </div>
                    </div>
                @else
                    <div class="mb-3 row">
                        <label for="static-cv" class="col-sm-2 col-form-label">CV:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="static-cv"
                                value="{{ $cv }}">
                        </div>
                    </div>
                @endif
                <div class="row my-4">
                    <div class="col-md-6 d-flex">
                        <button class="w-50 btn btn-md prev-btn" type="button">Previous</button>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <input type="submit" class="w-50 btn btn-primary btn-md profile-btn" value="Update Profile">
                    </div>
                </div>
            </div>



        </form>
    </div>

    </form>
@endsection
@section('js')
    <script src="{{ asset('/js/profile.js') }}"></script>
@endsection
