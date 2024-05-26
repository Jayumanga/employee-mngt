<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

class employeeController extends Controller
{
    public function index()
    {
        $employ = employee::get();
        return view('employee.index', compact('employ'));
    }

    public function create()
    {
        return view('employee.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'phone' => 'required',
            'DOB' => 'required',
        ]);

        employee::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'DOB' => $request->DOB,
        ]);

        return redirect('employ')->with('status','Employee Add');
    }

    public function edit(int $id)
    {
        $employees = employee::find($id);
        return view('employee.edit', compact('employ'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'firstname' => 'required|max225',
            'lastname' => 'required|max225',
            'phone' => 'required',
            'DOB' => 'required', 
        ]);

        employee::findOrFail($id)->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'DOB' => $request->DOB,  
        ]);

        return redirect()->back()->with('status','Employee Update');
    }
}