<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    private $emp = [
        1 => [
            'EmployeeNo' => '',
            'First_Name' => '',
            'Last_Name' => '',
            'Birthday' => '',
            'Gender' => ''
        ],

        2 => [
            'EmployeeNo' => '',
            'First_Name' => '',
            'Last_Name' => '',
            'Birthday' => '',
            'Gender' => ''            
        ],

        3 => [
            'EmployeeNo' => '',
            'First_Name' => '',
            'Last_Name' => '',
            'Birthday' => '',
            'Gender' => ''
        ]
    ];

    public function index()
    {
        return view('employee.index', ['post' => $this -> emp]);
    }

    public function show($id)
    {
        abort_if(!(isset($this -> emp)), 404);
        return view('employee.show', ['post' => $this -> emp($id)]);
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store(Request $request)
    {
        $EmployeeNo = Request() -> input('EmployeeNo');
        $First_Name = Request() -> input('First_Name');
        $Last_Name = Request() -> input('Last_Name');
        $Birthday = Request() -> input('Birthday');
        $Gender  = Request() -> input('Gender');
        $post = [
            'EmployeeNo' => $EmployeeNo,
            'First_Name' => $First_Name,
            'Last_Name' => $Last_Name,
            'Birthday' => $Birthday,
            'Gender' => $Gender
        ];
        return view('employee.store', ['post' => $this -> emp($id)]);
    }

    public function destroy($id)
    {
        $this -> emp[$id] -> delete();
        return view('employee.store', ['post' => $this -> emp]);
    }

    public function birthday($mm, $dd, $yyyy)
    {
        $date = date('M/D/Y', mktime(0,0,0, $mm,$dd,$yyyy));
        return view('employee.birthday', ['post' => $this -> emp], ['date' => $date]);
    }
}