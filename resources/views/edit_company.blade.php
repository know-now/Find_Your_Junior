@extends('layouts.template')
@section('content')
    <div class="container">
        <form method="post" class="py-4 m-auto w-75">
            @csrf

            <h1 class="row m-auto mb-4">Update Details</h1>
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
            @if (strpos(url()->current(), 'name'))
                <div class="mb-3 row">
                    <label for="company_name" class="col-sm-2 col-form-label">Company Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="company_name">
                    </div>
                </div>
            @else
                <div class="mb-3 row">
                    <label for="static-name" class="col-sm-2 col-form-label">Company Name:</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="static-name"
                            value="{{ $name }}">
                    </div>
                </div>
            @endif

            @if (strpos(url()->current(), 'contact'))
                <div class="mb-3 row">
                    <label for="contact" class="col-sm-2 col-form-label">Contact:</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="contact">
                    </div>
                </div>
            @else
                <div class="mb-3 row">
                    <label for="static-contact" class="col-sm-2 col-form-label">Contact:</label>
                    <div class="col-sm-10">
                        <input type="number" readonly class="form-control-plaintext" id="static-contact"
                            value="{{ $contact }}">
                    </div>
                </div>
            @endif

            @if (strpos(url()->current(), 'description'))
                <div class="mb-3 row">
                    <label for="description" class="col-sm-2 col-form-label">Description:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="description">
                    </div>
                </div>
            @else
                <div class="mb-3 row">
                    <label for="static-description" class="col-sm-2 col-form-label">Description:</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="static-description"
                            value="{{ $description }}">
                    </div>
                </div>
            @endif

            @if (strpos(url()->current(), 'date'))
                <div class="mb-3 row">
                    <label for="date" class="col-sm-2 col-form-label">Date:</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="date">
                    </div>
                </div>
            @else
                <div class="mb-3 row">
                    <label for="staticDate" class="col-sm-2 col-form-label">Date:</label>
                    <div class="col-sm-10">
                        <input type="date" readonly class="form-control-plaintext" id="static-date"
                            value="{{ $date }}">
                    </div>
                </div>
            @endif

            @if (strpos(url()->current(), 'employees'))
                <div class="mb-3 row">
                    <label for="employees" class="col-sm-2 col-form-label">Employees</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="employees">
                    </div>
                </div>
            @else
                <div class="mb-3 row">
                    <label for="static-employees" class="col-sm-2 col-form-label">N° of employees</label>
                    <div class="col-sm-10">
                        <input type="number" readonly class="form-control-plaintext" id="static-employees"
                            value="{{ $employees }}">
                    </div>
                </div>
            @endif

            @if (strpos(url()->current(), 'industry'))
                <div class="mb-3 row">
                    <label for="industry" class="col-sm-2 col-form-label">Industry:</label>
                    <div class="col-sm-10">
                        <select name="industry" class="form-select">
                            <option value="">Choose your industry/sector</option>
                            <option value="1">IT</option>
                            <option value="2">Finance</option>
                            <option value="3">Web Agencies</option>
                            <option value="4">Marketing</option>
                            <option value="5">Retail</option>
                        </select>
                    </div>
                </div>
            @else
                <div class="mb-3 row">
                    <label for="static-industry" class="col-sm-2 col-form-label">Industry:</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="static-industry"
                            value="{{ $industry }}">
                    </div>
                </div>
            @endif
            <div class="row my-5">
                <div class="col-lg-6 d-flex justify-content-start">
                    <input type="submit" class="w-50 btn btn-primary btn-md profile-btn" value="Update Profile">
                </div>
            </div>
    </div>
    </form>
@endsection
