<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// DB itu static method, jadi harus dipanggil kelasnya dulu
use Illuminate\Support\Facades\DB;
//namespacing ke kelas student
use App\Student;


class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // nampilin semua data
    public function index()
    {
        // yg dbawah ini sama kek select * from tabel mahasiswa
        //yg dibawah ini cara manggil database query builder
        $mahasiswa = DB::table('students')->get();
        // bisa juga dump ganti jadi var_dump ato dd
        dump($mahasiswa);

        $mahasiswa = Student::all();
        return view('mahasiswa/index', ['mahasiswa' => $mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // nampilin satu data tapi detail
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
    }
}
