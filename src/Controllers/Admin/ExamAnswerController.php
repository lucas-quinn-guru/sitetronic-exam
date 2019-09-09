<?php

namespace LucasQuinnGuru\SitetronicExam\Controllers\Admin;

use Illuminate\Http\Request;
use LucasQuinnGuru\SitetronicExam\Controllers\Controller;
use LucasQuinnGuru\SitetronicExam\Models\Answer;
use LucasQuinnGuru\SitetronicExam\Models\Question;

class ExamAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Question $question )
    {
        //Get all answeers and pass it to the view
        $answers = $question->answers;
        $topic = $question->topic;
        $section = $topic->section;
        return view('sitetronic-exam::admin.answer.index')
            ->with( 'question', $question )
            ->with( 'answers', $answers )
            ->with( 'topic', $topic )
            ->with( 'section', $section );
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
        $question = $answer->question;
        $topic = $question->topic;
        $section = $topic->section;

        return view('sitetronic-exam::admin.answer.edit',
            compact( 'answer', 'question', 'topic', 'section' )); //pass user and roles data to view
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
