<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeRequest;
use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        // $data = Employee::select('fname', 'lname', 'ssn')->get();
        $data = Employee::get();
        
        return view('admin.employees.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeRequest $request)
    {
        $data = $request->validated()  ;
        $file = $request->file('photo');
        $fileName = $file->getClientOriginalExtension();
        $photoName = $data['ssn'] . '.' . $fileName;
        $savedPhoto=$file->storeAs('photos', $photoName);
        Employee::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'ssn' => $request->ssn,
            'email' => $request->email,
            'phone' => $request->phone,
            'salary' => $request->salary,
            'dept_id' => $request->dno,
            'photo'=>    $savedPhoto,

        ]);

        return redirect()->back()->with('success', 'Employee created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $ssn)
    {
        $data = Employee::findorfail($ssn);
        //return $data;
        return view('admin.employees.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $ssn)
    {
        $emp_data = Employee::findorfail($ssn);
        $dpt_data = Department::get();
        return view('admin.employees.edit', compact('emp_data', 'dpt_data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmployeeRequest $request, $id)
    {
        $employee = Employee::findorfail($id);

        $employee->update([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'ssn' => $request->ssn,
            'email' => $request->email,
            'phone' => $request->phone,
            'salary' => $request->salary,
            'dept_id' => $request->dno,

        ]);
        return redirect()->back()->with('success', 'Employee updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $ssn)
    {
        $employee = Employee::findorfail($ssn);
        $employee->delete();
        // Employee::destroy($ssn);
        return redirect()->back()->with('success', 'Employee deleted successfully');
    }

    public function archive()
    {

        $emp_data = Employee::onlyTrashed()->get();
        return view('admin.employees.archive', compact('emp_data'));
    }
    public function restore($ssn)
    {

        $employee = Employee::withTrashed()->findorfail($ssn);
        $employee->restore();
        return redirect()->route('admin.employees.index')->with('success', 'Employee restored successfully');
     
    }
    public function forceDelete($ssn)
    {

        $employee = Employee::withTrashed()->findorfail($ssn);
        $employee->forceDelete();
        return redirect()->back()->with('success', 'Employee deleted permanently successfully');
    }
}
