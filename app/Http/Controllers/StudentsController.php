<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        return view('student.all', [
            'title'=> 'Students',
            'students'=> Student::all(),
        ]);
    }

    public function show($student)
    {
        return view('student.detail', [
            'title'=> 'detail-student',
            'student' => Student::find($student),
        ]);
    }

    public function create()
    {
        return view('student.create', [
            'title'=> 'create-student',
            'kelas'=> Kelas::all(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|max:255',
            'nama' => 'required|max:255',
            'kelas_id' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
        ]);

        $result = Student::create($request->all());

        if($result){
            return redirect()->route('student.all')->with('success', 'Data siswa berhasil disimpan');
        }
    }
    
    public function destroy(Student $student)
    {
        $result = Student::destroy($student->id);

        if($result){
            return redirect('/student/all')->with('success', 'Data siswa berhasil dihapus');
        }
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('student.edit', compact('student'), [
            'title'=> 'edit-student',
            'kelas'=> Kelas::all(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->update($request->all());

        if($request){
            return redirect('/student/all')->with('success', 'Data siswa berhasil diupdate');
        }
    }
}
