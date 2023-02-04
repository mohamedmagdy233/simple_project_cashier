<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{

    public function index()
    {
        $sections =Section::all();
        return view('sections.section',compact('sections'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $validated = $request->validate([

            'section_name'=>'required',
           'section_type'=>'required'

        ],[

            'section_name.required'=>'يرجي ادخال اسم الصنف ',
             'section_type.required'=>'يرجي ادخال نوع الصنف '
            ]

        );

        $store = Section::create([

            'section_name'=>$request->section_name,
            'section_type'=>$request->section_type
        ]);
        session()->flash('Add','تم اضافه القسم بنجاح');
        return redirect('/section');
    }


    public function show(Section $section)
    {
        //
    }


    public function edit(Section $section)
    {
        //
    }


    public function update(Request $request)
    {
        $id =$request->id;

        $validated = $request->validate([

            'section_name'=>'required',
            'section_type'=>'required'

        ],[

                'section_name.required'=>'يرجي ادخال اسم الصنف ',
                'section_type.required'=>'يرجي ادخال نوع الصنف '
            ]

        );

        $update =Section::find($id);
         $update->update([

             'section_name'=>$request->section_name,
             'section_type'=>$request->section_type
         ]);

        session()->flash('Add','تم تعديل  القسم بنجاح');
        return redirect('/section');

    }


    public function destroy(Request $request)
    {
        $id =$request->id;
        $delete =Section::find($id);
        $delete->delete();

        session()->flash('delete','تم حذف  القسم بنجاح');
        return redirect('/section');

    }
}
