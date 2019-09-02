<?php

namespace App\Http\Controllers;

use App\individualDelegates;
use Illuminate\Http\Request;

class IndividualDelegatesController extends Controller
{
    public function sendDataIndividualDelegate(Request $request) {
        $data = new IndividualDelegates;

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
     * @param  \App\individualDelegates  $individualDelegates
     * @return \Illuminate\Http\Response
     */
    public function show(individualDelegates $individualDelegates)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\individualDelegates  $individualDelegates
     * @return \Illuminate\Http\Response
     */
    public function edit(individualDelegates $individualDelegates)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\individualDelegates  $individualDelegates
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, individualDelegates $individualDelegates)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\individualDelegates  $individualDelegates
     * @return \Illuminate\Http\Response
     */
    public function destroy(individualDelegates $individualDelegates)
    {
        //
    }
}
