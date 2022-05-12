<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){

        $students = Student::all();

        return view('students.index', ['students' => $students]);

    }

    public function edit(Student $student){

        return view('students.edit', ['student' => $student]);

    }

    public function update(Student $student){

        request()->validate([
            'cne'=>'required',
            'cin'=>'required',
            'nom'=>'required',
            'naissance'=>'required',
            'filiere'=>'required',
            'email'=>'required|unique:students',
        ]);

        $student->update([
            'cne'=>request('cne'),
            'cin'=>request('cin'),
            'nom'=>request('nom'),
            'naissance'=>request('naissance'),
            'filiere'=>request('filiere'),
            'email'=>request('email'),
        ]);

        return redirect('/students');
    }

    public function create(){
        return view('students.create');
    }

    public function store(Student $student){

        request()->validate([
            'cne'=>'required|unique:students',
            'cin'=>'required|unique:students',
            'nom'=>'required',
            'naissance'=>'required',
            'filiere'=>'required',
            'email'=>'required|unique:students',
        ]);

        Student::create([
            'cne'=>request('cne'),
            'cin'=>request('cin'),
            'nom'=>request('nom'),
            'naissance'=>request('naissance'),
            'filiere'=>request('filiere'),
            'email'=>request('email'),
        ]);

        return redirect('/students');


    }

    public function destroy(string $cne){

        //dd($request->all());
        $student = Student::find($cne);
        $student->delete();
        return redirect('/students');

    }
}
