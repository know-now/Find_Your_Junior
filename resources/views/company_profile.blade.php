@extends('layouts.template')

@section('content')
    <div class="container">
        <form method="post" class="py-4 m-auto w-75">
            @csrf

            <h1 class="row m-auto mb-4">You're one step away from creating your account </h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row gy-4">
                <div class="col-sm-12 col-lg-6">
                    <input type="text" name="company_name" class="form-control" placeholder="Company Name">
                </div>
                <div class="col-sm-12 col-lg-6">
                    <input type="number" name="contact" class="form-control" placeholder="Contact">
                </div>
                <div class="col-sm-12 col-lg-6">
                    <input type="text" name="description" class="form-control" placeholder="Description">
                </div>
                <div class="col-sm-12 col-lg-6">
                    <input type="date" name="date_created" class="form-control" placeholder="Established">
                </div>
                <div class="col-sm-12 col-lg-6">
                    <input type="number" name="number_of_employees" class="form-control" placeholder="N° of employees">
                </div>
                <div class="col-sm-6">
                    <select name="industry_id" class="form-select">
                        <option value="">Choose your industry/sector</option>
                        <option value="1">IT</option>
                        <option value="2">Finance</option>
                        <option value="3">Web Agencies</option>
                        <option value="4">Marketing</option>
                        <option value="5">Retail</option>
                    </select>
                </div>

            </div>
            <div class="row my-5">
                <div class="col-lg-6 d-flex justify-content-start">
                    <input type="submit" class="w-50 btn btn-primary btn-md profile-btn" value="Create Profile">
                </div>
            </div>
    </div>
    </form>

@endsection
