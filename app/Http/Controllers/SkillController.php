<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specializations = Skill::all();
        return view("skills", ["skills" => $specializations]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('search_junior', ['candidates'=>[]]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // to save the all the values in the array
        $values = array($request->html, $request->css, $request->bootstrap, $request->javascript, $request->git, $request->react, $request->php, $request->sql, $request->agile, $request->ux, $request->laravel);

        // to filter the selected values from the array
        $filtered_values = array_filter($values, fn ($value) => !is_null($value) && $value !== '');
        //dd($filtered_values);

        $collection = collect($filtered_values);

        $collection->implode('-');

        // to retreive the candidate information with no duplicates
        $candidates = DB::table('candidate_skills')->select('candidate_id','first_name','education')
            ->join('candidates', 'candidates.id', '=', 'candidate_id')
            ->whereIn('skill_id', $filtered_values)
            ->groupBy('candidate_id', 'first_name','education')
            ->get();

        // to retreive the skills of the candidates
        foreach ($candidates as $key => $c) {
            $skills = DB::table('skills')
                ->join('candidate_skills', 'skills.id', '=', 'skill_id')
                ->where('candidate_id', '=', $c->candidate_id)
                ->get();

            $candidates[$key]->skills = $skills;
        }

        return view("search_junior", ['candidates' => $candidates]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
