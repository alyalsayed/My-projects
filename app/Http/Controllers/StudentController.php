<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Department;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *  $students = Student::all(); //select * from students
     *  return $students; ///model get data from database and  send it to controller and
     * then send it to view
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all(); //select * from students
        // return $students;
        return view('admin.students.index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        // return  $departments;
        return view('admin.students.create', ['departments' => $departments]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        //php artisan make:migration add_image_to_students_table --table=students
        //php artisan migrate
        // return  $request;

        // $validated = $request->validate([
        //     'id' => 'required|unique:students|integer',
        //     'name' => 'required|max:50|alpha',
        //     'email' => 'required|unique:students|max:255|email',
        //     'phone' => 'required|digits:11|unique:students',
        //     'department' => 'integer|max:255|min:1'
        // ]);
        $img = $request->file('image'); //tmp file
        //$image_name = $img->getClientOriginalName();
        $ext = $img->getClientOriginalExtension();
        $image_name = "student-$request->id.$ext";
        // return public_path('images/students', $image_name);
        //  return  $image_name;
        $img->move(public_path('images/students'), $image_name);
        Student::create([
            'id' => $request->id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'image' => $image_name,
            'department_id' => $request->department
        ]);
        return  redirect()->back()->with('msg', 'added sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //find => only primary key return one row
        // where >> one or more except primary key
        // $student = Student::find($id); // select * from students where id =$id
        //return $student;
        //  $student = Student::where('id',$id)->get();
        //$student = Student::where('id', $id)->first();
        $student = Student::findorfail($id);
        return view('admin.students.show', ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::findorfail($id);
        $departments = Department::all();
        //  return $departments;
        //return  $student;
        return view('admin.students.edit', ['student' => $student, 'departments' => $departments]);
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
        $student = Student::findorfail($id);
        $student->update([
            'id' => $request->id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'department_id' => $request->department
        ]);
        return  redirect()->route('students.index')->with('msg', 'Updated sucessfully..');
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
        $student = Student::findorfail($id);
        $student->delete();
        return  redirect()->route('students.index')->with('msg', 'Deleted sucessfully..');
    }
    public function archive()
    {
        $students = Student::onlyTrashed()->get();
        //return $students;
        return view('admin.students.archive', ['students' =>  $students]);
    }
    public function restore($id)
    {
        //return "restore $id";
        // $student = Student::findorfail($id);
        $student = Student::withTrashed()->findorfail($id);
        $student->restore();
        return  redirect()->route('students.index')->with('msg', 'Restored sucessfully..');
    }
    public function forceDestroy($id)
    {
        //     return "forceDestroy $id";
        $student = Student::withTrashed()->findorfail($id);
        $student->forceDelete();
        return  redirect()->route('students.archive')->with('msg', 'permenantly Deleted sucessfully..');
    }
}