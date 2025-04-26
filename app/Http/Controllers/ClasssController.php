<?php

namespace App\Http\Controllers;

use App\Models\Classs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ClasssController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     */
    public function addClassPage(Request $request)
    {
        return view('course.classes.AddNC');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function addClass(Request $request)
    {
        request()->validate([
            'classId' => ['required'],
            'subject' => ['required'],
            'fee' => ['required'],
            'time' => ['required'],
            'teacher' => ['required']
        ]);


        Classs::create($request->only(['classId', 'subject', 'fee', 'time', 'teacher']));

        return redirect('/ShowClass')->with('success', 'Class added!');
    }


    /**
     * Display a listing of the resource.
     */
    public function showClass(Request $request)
    {
        $classes = classs::all();
        return view('course.classes.ShClasses', compact('classes'));
    }


    public function destroy(Classs $class)
    {
        $class->delete();
        return redirect('/ShowClass');
    }

}
