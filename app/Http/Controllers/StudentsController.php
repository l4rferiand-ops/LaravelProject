<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = [
            ['no' => 1, 'nis' => '10001', 'name' => 'Dayisnil Diwa', 'classroom' => 'XI PPLG 2'],
            ['no' => 2, 'nis' => '10002', 'name' => 'Hizbul Javier Primayogi', 'classroom' => 'XI PPLG 2'],
            ['no' => 3, 'nis' => '10003', 'name' => 'Dzakiy Denendra', 'classroom' => 'XI PPLG 2'],
            ['no' => 4, 'nis' => '10004', 'name' => 'Albay Haqy', 'classroom' => 'XI PPLG 2'],
            ['no' => 5, 'nis' => '10005', 'name' => 'Arhaqi Fadil Ghafari', 'classroom' => 'XI PPLG 2'],
            ['no' => 6, 'nis' => '10006', 'name' => 'Muhammad Armadani', 'classroom' => 'XI PPLG 2'],
            ['no' => 7, 'nis' => '10007', 'name' => 'Raditya Fahrul Marzuki', 'classroom' => 'XI PPLG 2'],
            ['no' => 8, 'nis' => '10008', 'name' => 'Gracecielo Jeremy', 'classroom' => 'XI PPLG 2'],
            ['no' => 9, 'nis' => '10009', 'name' => 'Maulana Adi Irfansyah', 'classroom' => 'XI PPLG 2'],
            ['no' => 10, 'nis' => '10010', 'name' => 'Bhisma Astain Kafa', 'classroom' => 'XI PPLG 2'],
        ];

        return view('admin.students', compact('students'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
