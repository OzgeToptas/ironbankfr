<?php

namespace App\Http\Controllers;

use App\Submission;
use Illuminate\Http\Request;



class SubmissionController extends Controller
{
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
        return view('contactform.form');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Submission $submission, Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'email',
            'telnumber' => ['required','regex:/^(\+44\s?7\d{3}|\(?07\d{3}\)?)\s?\d{3}\s?\d{3}$/'],
            'dob' => ['required','regex:/^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$/'],
        ],
        [
            'dob.required' => 'Date of Birth is required',
            'fname.required' => 'First Name is required',
            'lname.required' => 'Last Name is required',
            'email.email' => 'Email is required',
            'telnumber.required' => 'Phone Number should be a UK number',
            'dob.required' => 'Date of Birth is required',
            'dob.regex' => 'Date of Birth should follow the dd/mm/yyyy pattern',
        ]);

        $submission->create($request->all());

        return redirect()->route('contact.create')->with('message','You have successfully submitted the form');
        
     }


    /**
     * Display the specified resource.
     *
     * @param  \App\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function show(Submission $submission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function edit(Submission $submission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Submission $submission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Submission $submission)
    {
        //
    }
}
