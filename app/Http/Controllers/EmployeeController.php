<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use DB;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employees.index');
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_pegawai' => 'required|min:3',
            'email' => 'required|email|unique:tbl_pegawai,email',
            'username' => 'required|min:4|unique:tbl_pegawai,username',
            'password' => 'required|min:4',
            'nohp' => 'nullable',
        ]);

        try {
            DB::beginTransaction();

            Employee::create($validated);

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();

            throw $th;
        }

        return redirect()->route('employees.create')->with('message', [
            'type' => 'success',
            'text' => 'Berhasil menambahkan data pegawai baru.'
        ]);
    }

    public function datatable()
    {
        $query = Employee::all();

        $datatable = datatables($query);

        return $datatable->toJson();
    }
}
