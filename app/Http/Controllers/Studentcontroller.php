<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
{
    // Reset pesan sukses agar tidak muncul lagi
    session()->forget('success');

    $students = Student::all();
    return view('students.index', compact('students'));
}


    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'nim' => 'required|string|max:20',
            'keterangan' => 'required|string',
            'shift_option' => 'required|string',
        ]);

        $student = Student::create($validated);

        return redirect()->route('students.show', $student->id)->with('success', 'Data absensi berhasil disimpan!');
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        //
    }

    public function update(Request $request, Student $student)
    {
        //
    }

    public function destroy(Student $student)
    {
        //
    }
}
