<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\CandidateLanguage;
use App\Models\CandidateSkill;
use App\Models\Role;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;
use App\Models\Language;
use App\Models\User;

class CreateCandidateProfileController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('candidate_profile');
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
        //Retrieve the id from the session
        $user_id = Auth::id();

        //get input array
        $skills = $request->skills;
        $languages = $request->languages;

        $request->validate([
            'first_name' => 'required|min:3|max:30',
            'last_name' => 'required|min:3|max:30',
            'phone_number' => 'required|numeric',
            'linkedin' => 'required|min:3',
            'github' => 'required|min:3',
            'education' => 'required|min:1|max:20',
            'cv' => 'required|mimes:pdf|max:10000',
            'role_id' => 'required|min:1|max:20',
            'languages' => 'required',
            'skills' => 'required',
        ]);


        //storing the CV on the local disk
        $cv = $request->file('cv');
        $file_name = $cv->getClientOriginalName();

        if (!empty($cv)) {
            $path = public_path() . '/uploads/';
            $cv->move($path, $file_name);
        } else {
            return redirect()->back()->withInput();
        }

        // Create a Candidate object
        $candidate = new Candidate;

        Schema::disableForeignKeyConstraints();

        $candidate = Candidate::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'linkedin' => $request->linkedin,
            'github' => $request->github,
            'education' => $request->education,
            'cv' => $file_name,
            'role_id' => $request->role_id,
            'user_id' => $user_id,
        ]);

        //get id from db
        $candidate_id = $candidate->id;

        //insert into candidate_languages table depending on checked boxes
        $candidate_language = new CandidateLanguage;
        foreach ($languages as $language) {
            $candidate_language = CandidateLanguage::create([
                'candidate_id' => $candidate_id,
                'language_id' => $language,
            ]);
        }


        //insert into candidate_skills table depending on checked boxes
        $candidate_skill = new CandidateSkill;
        foreach ($skills as $skill) {
            $candidate_skill = CandidateSkill::create([
                'candidate_id' => $candidate_id,
                'skill_id' => $skill,
            ]);
        }

        Schema::enableForeignKeyConstraints();

        if ($candidate->save() && $candidate_language->save() && $candidate_skill->save())
            return redirect()->route('profile');
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
        $candidate = Candidate::where('user_id', $user_id)->first();

        //storing the values of the received objects into variables we'll use later
        $role_id = $candidate->role_id;
        $candidate_id = $candidate->id;

        //retrieving the role, language and skill values from their respective tablesds
        $candidate_role = Role::find($role_id);
        $candidate_language = Candidate::find($candidate_id)->languages;
        $candidate_skill = Candidate::find($candidate_id)->skills;

        //this will display the candidates who have this role usefol for the filtering later
        //$candidate_role = Role::find($role_id)->candidate;

        //retrieve CV
        $candidate_cv = $candidate->cv;

        return view('display_candidate_profile', ['candidate' => $candidate, 'candidate_role' => $candidate_role, 'candidate_language' => $candidate_language, 'candidate_skill' => $candidate_skill, 'cv' => $candidate_cv]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $candidate = Auth::user()->candidates->first();

        $first_name = $candidate->first_name;
        $last_name = $candidate->last_name;
        $phone_number = $candidate->phone_number;
        $linkedin = $candidate->linkedin;
        $github = $candidate->github;
        $education = $candidate->education;
        $cv = $candidate->cv;
        $role = $candidate->role_id;
        $role = Role::find($role)->role;

        $languages = $candidate->languages;
        $skills = $candidate->skills;
        return view('edit_profile', ['first_name' => $first_name, 'last_name' => $last_name, 'phone_number' => $phone_number, 'linkedin' => $linkedin, 'github' => $github, 'education' => $education, 'cv' => $cv, 'role' => $role, 'skills' => $skills, 'languages' => $languages]);
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
        //retrieve candidates with skills and languages
        $candidate = Auth::user()->candidates->first();
        $candidate_skills = $candidate->skills;
        $candidate_languages = $candidate->languages;
        $data = $request->except('_token');
        $first_name = array_key_exists('first_name', $data);
        $last_name = array_key_exists('last_name', $data);
        $phone_number = array_key_exists('phone_number', $data);
        $linkedin = array_key_exists('linkedin', $data);
        $github = array_key_exists('github', $data);
        $education = array_key_exists('education', $data);
        $cv = array_key_exists('cv', $data);
        $role = array_key_exists('role', $data);
        $skills = array_key_exists('skills', $data);
        $languages = array_key_exists('languages', $data);

        //different edit inputs will be displayed depending on the url clicked
        if ($first_name && $last_name) {

            $request->validate([
                'first_name' => 'required|min:3|max:30',
                'last_name' => 'required|min:3|max:30',
            ]);
            $new_first_name = $candidate->update(['first_name' => $request->first_name]);
            $new_last_name = $candidate->update(['last_name' => $request->last_name]);
            if (!$new_first_name && !$new_last_name)
                return redirect()->back();
            else
                return redirect()->route('profile');
        } else if ($phone_number) {

            $request->validate([
                'phone_number' => 'required|numeric',
            ]);
            $new_phone_number = $candidate->update(['phone_number' => $request->phone_number]);
            if (!$new_phone_number)
                return redirect()->back();
            else
                return redirect()->route('profile');
        } else if ($linkedin) {

            $request->validate([
                'linkedin' => 'required|min:3',
            ]);
            $new_linkedin = $candidate->update(['linkedin' => $request->linkedin]);
            if (!$new_linkedin)
                return redirect()->back();
            else
                return redirect()->route('profile');
        } else if ($github) {

            $request->validate([
                'github' => 'required|min:3',
            ]);
            $new_github = $candidate->update(['github' => $request->github]);
            if (!$new_github)
                return redirect()->back();
            else
                return redirect()->route('profile');
        } else if ($education) {

            $request->validate([
                'education' => 'required|min:1|max:20',
            ]);
            $new_education = $candidate->update(['education' => $request->education]);
            if (!$new_education)
                return redirect()->back();
            else
                return redirect()->route('profile');
        } else if ($cv) {

            $request->validate([
                'cv' => 'required|mimes:pdf|max:10000',
            ]);

            $cv = $request->file('cv');
            $file_name = $cv->getClientOriginalName();

            if (!empty($cv)) {
                $path = public_path() . '/uploads/';
                $cv->move($path, $file_name);
            } else {
                return redirect()->back()->withInput();
            }

            $new_cv = $candidate->update(['cv' => $file_name]);

            if (!$new_cv)
                return redirect()->back();
            else
                return redirect()->route('profile');
        } else if ($role) {
            $request->validate([
                'role' => 'required|min:1|max:20',
            ]);
            $new_role = $candidate->update(['role_id' => $request->role]);
            if (!$new_role)
                return redirect()->back();
            else
                return redirect()->route('profile');
        } else if ($skills) {
            $request->validate([
                'skills' => 'required',
            ]);

            $curr_skills = $candidate->skills()->detach($candidate_skills);
            $new_skills = $candidate->skills()->attach($request->skills);

            return redirect()->route('profile');
        } else if ($languages) {

            $request->validate([
                'languages' => 'required',
            ]);


            $curr_languages = $candidate->languages()->detach($candidate_languages);
            
            $new_languages = $candidate->languages()->attach($request->languages);
            

            return redirect()->route('profile');
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
