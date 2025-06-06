<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Classs;
use App\Models\RegisteredOne;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function addStudentPage(Request $request)
    {
        return view('course.students.AddNS');
    }

    /**
     * Display a listing of the resource.
     */
    public function addStudent(Request $request)
    {
        if ($request->hasFile('picture')){
            $file = $request->file('picture');
            $filename = time(). '_' . $file->getClientOriginalName();
            $file->move(public_path('students'), $filename);
            // request()->validate($request->only(['name', 'age', 'country', 'phone', 'picture']));

            Student::create([
                'name' => $request->name,
                'age' => $request->age,
                'country' => $request->country,
                'phone' => $request->phone,
                'picture' => $filename, // Save only the filename
            ]);

            return redirect('/RegisterStudentPage')->with('success', 'Student added!');
        }
}


    /**
     * Display a listing of the resource.
     */
    public function showStudent()
    {
        $registeredOnes = RegisteredOne::with('Student', 'Classs')
        ->get();
        return view('course.students.ShStudents', compact('registeredOnes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function registerStudentPage(Student $student)
    {
        $students = Student::select('id', 'name', 'phone')->get();
        $classes = Classs::select('id', 'subject', 'teacher')->get();
        return view('course.students.RNS', compact('students', 'classes'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function registerStudent(Request $request)
    {
        request()->validate([
            'student_id' => ['required'],
            'class_id' => ['required'],
        ]);

        RegisteredOne::create($request->only(['student_id', 'class_id']));

        return redirect('/ShowStudent')->with('success', 'Student registered!');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function showRegisteredStudent()
    {
        $registeredOnes = RegisteredOne::select('id', 'student_id', 'class_id')->get();
        return view('course.students.ShRS', compact('registeredOnes'));
    }



    public function destroy(Student $student)
    {
        $student->delete();
        return redirect('/ShowStudent');
    }


}
