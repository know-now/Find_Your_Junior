<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Industry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;

class CreateCompanyProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('company_profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'contact' => 'required|numeric',
            'description' => 'required|min:3|max:250',
            'company_name' => 'required|min:3',
            'date_created' => 'required',
            'number_of_employees' => 'required|numeric',
            'industry_id' => 'required',

        ]);

        //Retrieve the id from the session
        $user_id = Auth::id();


        // Create a company object
        $company = new Company;

        Schema::disableForeignKeyConstraints();

        $company = Company::create([
            'contact' => $request->contact,
            'description' => $request->description,
            'company_name' => $request->company_name,
            'date_created' => $request->date_created,
            'number_of_employees' => $request->number_of_employees,
            'industry_id' => $request->industry_id,
            'user_id' => $user_id,
        ]);

        Schema::enableForeignKeyConstraints();

        // Save it in the DB and check if it worked
        if ($company->save())
            return redirect()->route('company');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user_id = Auth::id();

        $company = Company::where('user_id', $user_id)->first();

        //display company details
        $industry_id = $company->industry_id;
        $company_industry = Industry::find($industry_id);
        return view('display_company_profile', ['company' => $company, 'company_industry' => $company_industry]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $company = Auth::user()->companies;
        $name = $company->first()->company_name;
        $contact = $company->first()->contact;
        $description = $company->first()->description;
        $date = $company->first()->date_created;
        $employees = $company->first()->number_of_employees;
        $industry = $company->first()->industry_id;
        $industry = Industry::find($industry)->industry;
        return view('edit_company', ['name' => $name, 'contact' => $contact, 'description' => $description, 'date' => $date, 'employees' => $employees, 'industry' => $industry]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //get companies table
        $company = Auth::user()->companies->first();

        $data = $request->except('_token');

        $name = array_key_exists('company_name', $data);
        $contact = array_key_exists('contact', $data);
        $description = array_key_exists('description', $data);
        $date = array_key_exists('date', $data);
        $employees = array_key_exists('employees', $data);
        $industry = array_key_exists('industry', $data);

        //Depending on the url clicked a different edit form will be displayed aka the field that the user wants to edit
        if ($name) {

            $request->validate([
                'company_name' => 'required|min:3',
            ]);
            $new_name = $company->update(['company_name' => $request->company_name]);
            if (!$new_name)
                return redirect()->back();
            else
                return redirect()->route('company');

        } else if ($contact) {

            $request->validate([
                'contact' => 'required|numeric',
            ]);
            $new_contact = $company->update(['contact' => $request->contact]);
            if (!$new_contact)
                return redirect()->back();
            else
                return redirect()->route('company');

        } else if ($description) {

            $request->validate([
                'description' => 'required|min:3|max:250',
            ]);
            $new_description = $company->update(['description' => $request->description]);
            if (!$new_description)
                return redirect()->back();
            else
                return redirect()->route('company');

        } else if ($date) {

            $request->validate([
                'date' => 'required',
            ]);
            $new_date = $company->update(['date_created' => $request->date]);
            if (!$new_date)
                return redirect()->back();
            else
                return redirect()->route('company');

        } else if ($employees) {

            $request->validate([
                'employees' => 'required|numeric',
            ]);
            $new_employees = $company->update(['number_of_employees' => $request->employees]);
            if (!$new_employees)
                return redirect()->back();
            else
                return redirect()->route('company');

        } else if ($industry) {

            $request->validate([
                'industry' => 'required',
            ]);
            $new_industry = $company->update(['industry_id' => $request->industry]);
            if (!$new_industry)
                return redirect()->back();
            else
                return redirect()->route('company');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
