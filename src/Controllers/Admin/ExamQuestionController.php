<?php

namespace LucasQuinnGuru\SitetronicExam\Controllers\admin;

use Illuminate\Http\Request;
use LucasQuinnGuru\SitetronicExam\Controllers\Controller;
use LucasQuinnGuru\SitetronicExam\Models\Topic;
use LucasQuinnGuru\SitetronicExam\Models\Question;

class ExamQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Topic $topic )
    {
        //Get all users and pass it to the view
        $questions = $topic->questions;
        $section = $topic->section;

        return view('sitetronic-exam::admin.question.index')
            ->with('topic', $topic)
            ->with('questions', $questions )
            ->with('section', $section );
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
        $question = Question::findOrFail($id); //Get user with specified id
        $topic= $question->topic;
        $answers = $question->answers()->get();
        $section = $topic->section;

        return view('sitetronic-exam::admin.question.edit', compact('question', 'topic', 'answers', 'section' )); //pass user and roles data to view
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
            'question'=>'required',
            'question_number'=>'required',
            'is_review'=>'required',
            'is_broker'=>'required'
        ]);

        $question = Question::findOrFail($id);
        $question->question = $request->input('question');
        $question->question_number = $request->input('question_number');
        $question->is_review = $request->input('is_review');
        $question->is_broker = $request->input('is_broker');
        $question->problem_notification = $request->input('problem_notification');
        $question->save();

        return redirect()
            ->route('admin.exam-answer.index', $question->id )
            ->with('flash_message',  'Question updated');
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
