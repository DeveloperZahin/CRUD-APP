<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use App\Http\Requests\StorestudentRequest;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $students = Student::all();
        //return $students;        chack the students array
        return view('index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorestudentRequest $request)
    {
        //Go Request and define parameters

        // if model used
        student::create($request->all());


        //return redirect()->route('contact.index');
        return redirect('/Student')->with('success','Data added successfully!');


        //not model used
        // $student = new Student();
        // $student->name = $request->name;
        // $student->phone = $request->phone;
        // $student->email = $request->email;
        // $student->save();
        //return "Successfully";

    }

    /**
     * Display the specified resource.
     */
    // edit
    public function edit(Request $request){
        $id = $request->id;
        $student = Student::find($id);
        return view('edit',compact('student', 'id'));
    }

    // update
    public function update(Request $request){
        /*
        $edit_id = $request->id;
        $name = $request->name;
        $phone = $request->phone;
        $address = $request->address;
        */

        Student::query()->find($request->id)->update([
            'name'   => $request->name,
            'phone'  => $request->phone,
            'address'=> $request->address,
        ]);

        return redirect()->route('index')->with('success','Data updated successfully!');
    }

    // delete
    public function delete(Request $request){
        Student::query()->find($request->id)->delete();
        return redirect()->back()->with('success','Data delete successfully!');
    }
    }
