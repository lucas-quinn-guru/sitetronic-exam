<?php

namespace LucasQuinnGuru\SitetronicExam\Controllers;

use Illuminate\Http\Request;
use LucasQuinnGuru\SitetronicExam\Models\Answer;

class ExamAnswerAdminController extends Controller
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
        $answer = Answer::findOrFail($id); //Get user with specified id
        $question= $answer->question;

        return view('sitetronic-exam::answer-admin.edit', compact( 'answer', 'question' )); //pass user and roles data to view
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
        $this->validate($request, [
            'answer'=>'required',
            'correct'=>'required'
        ]);

        $answer = Answer::findOrFail($id);
        $answer->answer = $request->input('answer');
        $answer->correct = $request->input('correct');
        $answer->definition = $request->input('definition');
        $answer->save();

        return redirect()
            ->route('admin.exam-question.edit', $answer->question->id)
            ->with('flash_message',  'Answer updated');
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
