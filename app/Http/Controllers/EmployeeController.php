<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Http\Requests\StoreemployeeRequest;
use App\Http\Requests\UpdateemployeeRequest;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
     /**
     * Display the specified resource.
     */
    public function show(employee $employee)
    {
        $employees = Employee::all();

        $employees = $employees->reverse();

        return view('dashboard',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addEmployee');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'name' => 'required|min:5|max:20',
            'age' => 'required|numeric|min:21', // Update age validation
            'address' => 'required|min:10|max:40',
            'phone_number' => 'required|regex:/^08[0-9]{9,10}$/' // Update phone number validation
        ], [
            'phone_number.regex' => 'The phone number format is invalid. It must start with "08" and have 9-12 digits.'
        ]);

        Employee::create([
            'name' => $request->name,
            'age' => $request->age,
            'address' => $request->address,
            'phone_number' => $request->phone_number
        ]);

        return redirect('/dashboard')->with('success', 'Employee has been created successfully!');
    }

    public function showDetail($id){
        $employees = Employee::find($id);
        return view('showDetail', compact('employees'));
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $employees=Employee::find($id);
        return view('editEmployee', compact('employees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $validasi = $request->validate([
        'name' => 'required|min:5|max:20',
        'age' => 'required|numeric|min:21', // Update age validation
        'address' => 'required|min:10|max:40',
        'phone_number' => 'required|regex:/^08[0-9]{9,10}$/' // Update phone number validation
    ], [
        'phone_number.regex' => 'The phone number format is invalid. It must start with "08" and have 9-12 digits.'
    ]);

    Employee::findOrFail($id)->update([
        'name' => $request->name,
        'age' => $request->age,
        'address' => $request->address,
        'phone_number' => $request->phone_number
    ]);

    return redirect('/dashboard')->with('success', 'Employee has been updated!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
    Employee::destroy($id);
    return redirect('/dashboard')->with('success', 'Employee has been deleted successfully!');
    }
}
