<?php

namespace LucasQuinnGuru\SitetronicExam\Controllers;

use Illuminate\Http\Request;
use LucasQuinnGuru\SitetronicExam\Models\Section;

class ExamSectionAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get all users and pass it to the view
        $sections = Section::all();
        return view('sitetronic-exam::section-admin.index')->with('sections', $sections);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sitetronic-exam::section-admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'active'=>'required'
        ]);

        $section = new Section();
        $section->name = $request->name;
        $section->active = $request->active;
        $section->save();

        return redirect()
            ->route('admin.exam-section.index' )
            ->with('flash_message',  'Section: '. $section->name . ' added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect()
            ->route('admin.exam-section.edit', $id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $section = Section::findOrFail($id); //Get user with specified id

        return view( 'sitetronic-exam::section-admin.edit', compact('section') ); //pass user and roles data to view
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

        $section = Section::findOrFail($id);
        $section->name = $request->input('name');
        $section->slug = $request->input('slug');
        $section->active = $request->input('active');
        $section->save();

        return redirect()
            ->route('admin.exam-section.edit', $section->id)
            ->with('flash_message',  'Section: '. $section->name . ' updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $section = Section::findOrFail($id);
        $section->delete();

        return redirect()
            ->route('admin.exam-section.index')
            ->with('flash_message', 'Section successfully deleted');
    }
}
