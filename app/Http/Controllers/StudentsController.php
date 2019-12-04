<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $student = new Student;
        // $student->name = $request->name;
        // $student->matric = $request->matric;
        // $student->email = $request->email;
        // $student->course = $request->course;

        // $student->save();

        // Student::create([
        //     'name' => $request->name,
        //     'matric' => $request->matric,
        //     'email' => $request->email,
        //     'course' => $request->course
        // ]);

        $request->validate([
            'name' => 'required',
            'matric' => 'required|size:9'
        ]);

        Student::create($request->all());
        return redirect('/students')->with('status', 'Students Data Successfully Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'matric' => 'required|size:9'
        ]);

        Student::where('id', $student->id)
        ->update([
            'name' => $request->name,
            'matric' => $request->matric,
            'email' => $request->email,
            'course' => $request->course
            ]);
        return redirect('/students')->with('status', 'Students Data Successfully Edited!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/students')->with('status', 'Students Data Successfully Deleted!');
    }
}
