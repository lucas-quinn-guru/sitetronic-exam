<?php

namespace LucasQuinnGuru\SitetronicExam\Controllers\Admin;

use Illuminate\Http\Request;
use LucasQuinnGuru\SitetronicExam\Controllers\Controller;
use LucasQuinnGuru\SitetronicExam\Models\Section;
use LucasQuinnGuru\SitetronicExam\Models\Topic;

class ExamTopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Section $section)
    {
        //Get all users and pass it to the view
        $topics = $section->topics;
        return view('sitetronic-exam::admin.topic.index')
            ->with('topics', $topics)
            ->with('section', $section );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Section $section)
    {
        return view('sitetronic-exam::admin.topic.create')
            ->with('section', $section );;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Section $section)
    {
        $this->validate($request, [
            'name'=>'required',
            'active'=>'required'
        ]);

        $topic = new Topic();
        $topic->section_id = $section->id;
        $topic->name = $request->name;
        $topic->active = $request->active;
        $topic->save();

        return redirect()
            ->route('admin.exam-section.edit', $section->id)
            ->with('flash_message',  'Topic: '. $topic->name . ' added');

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
        $topic = Topic::findOrFail($id); //Get user with specified id
        $section = $topic->section;
        $questions = $topic->questions()->orderBy('question_number')->get();

        return view('sitetronic-exam::admin.topic.edit', compact('topic', 'section', 'questions' )); //pass user and roles data to view
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
            'name'=>'required',
            'active'=>'required'
        ]);

        $topic = Topic::findOrFail($id);
        $topic->name = $request->input('name');
        $topic->active = $request->input('active');
        $topic->save();

        return redirect()
            ->route('admin.exam-question.index', $topic->id)
            ->with('flash_message',  'Topic: '. $topic->name . ' updated');
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
