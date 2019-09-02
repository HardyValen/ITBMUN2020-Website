<?php

namespace App\Http\Controllers;

use App\delegations;
use Illuminate\Http\Request;

class DelegationsController extends Controller
{
    public function sendDataDelegations(Request $request) {
        $data = new Delegations;

            $data->fullName = $request->fullName;
            $data->institution = $request->institution;
            $data->contactNumber = $request->contactNumber;
            $data->lineId = $request->lineId;
            $data->email = $request->email;
            $data->nationality = $request->nationality;
            $data->idNumber = $request->idNumber;
            $data->gender = $request->gender;
            $data->medicalConditions = $request->medicalConditions;
            $data->munExperiences = $request->munExperiences;
            $data->firstCouncilPreference = $request->firstCouncilPreference;
            $data->firstCouncilCountryPreference = $request->firstCouncilCountryPreference;
            $data->firstCouncilReason = $request->firstCouncilReason;
            $data->secondCouncilPreference = $request->secondCouncilPreference;
            $data->secondCouncilCountryPreference = $request->secondCouncilCountryPreference;
            $data->secondCouncilReason = $request->secondCouncilReason;
            $data->thirdCouncilPreference = $request->thirdCouncilPreference;
            $data->thirdCouncilCountryPreference = $request->thirdCouncilCountryPreference;
            $data->thirdCouncilReason = $request->thirdCouncilReason;
            $data->foodRestrictions = $request->foodRestrictions;
            $data->accomodation = $request->accomodation;

        $data->save();

        return view("test.database");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\delegations  $delegations
     * @return \Illuminate\Http\Response
     */
    public function show(delegations $delegations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\delegations  $delegations
     * @return \Illuminate\Http\Response
     */
    public function edit(delegations $delegations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\delegations  $delegations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, delegations $delegations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\delegations  $delegations
     * @return \Illuminate\Http\Response
     */
    public function destroy(delegations $delegations)
    {
        //
    }
}
