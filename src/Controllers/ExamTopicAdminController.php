<?php

namespace LucasQuinnGuru\SitetronicExam\Controllers;

use Illuminate\Http\Request;
use LucasQuinnGuru\SitetronicExam\Models\Section;
use LucasQuinnGuru\SitetronicExam\Models\Topic;

class ExamTopicAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Section $section)
    {
        //Get all users and pass it to the view
        $topics = Topic::all();
        return view('sitetronic-exam::topic-admin.index')
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
        return view('sitetronic-exam::topic-admin.create')
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
        $questions = $topic->questions()->get();


        return view('sitetronic-exam::topic-admin.edit', compact('topic', 'section', 'questions' )); //pass user and roles data to view
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
