<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    private $EmployeeId = [
        1 => [
            'EmployeeNumber' => 4180064,
            'FirstName' => 'Alicia Maye',
            'LastName' => 'Mondero',
            'Birthday' => '1999/11/02',
            'Gender' => 'Female'
        ],
        2 => [
            'EmployeeNumber' => 4180065,
            'FirstName' => 'Cesar',
            'LastName' => 'Medina',
            'Birthday' => '2000/06/05',
            'Gender' => 'Male'
        ]
    ];
    public function index()
    {
        return view('Employees.index', ['EmployeeId'=>$this->EmployeeId]);
    }
    public function show($id)
    {
        abort_if(!(isset($this->EmployeeId[$id])), 404);
        return view('Employees.show', ['Employee'=>$this->EmployeeId[$id]]);
    }
    public function create()
    {
        return view('Employees.create');
    }
    public function store(Request $request)
    {
        $EmployeeNumber = Request()->input('EmployeeNumber');
        $Firstname = Request()->input('FirstName');
        $LastName = Request()->input('LastName');
        $Birthday = Request()->input('Birthday');
        $Gender = Request()->input('Gender');
        $EmployeeId = [
                'EmployeeNumber' => $EmployeeNumber,
                'LastName' => $LastName,
                'FirstName' => $Firstname,
                'Birthday' => $Birthday,
                'Gender' => $Gender
            ];
        return view('Employees.store', ['Employee'=>$EmployeeId]);
    }
    public function edit($id)
    {
        abort_if(!(isset($this->EmployeeId[$id])), 404);
        return view('Employees.edit', ['Employee'=>$this->EmployeeId[$id]]);   
    }
    public function update(Request $request, $id)
    {
        $EmployeeNumber = Request()->input('EmployeeNumber');
        $Firstname = Request()->input('FirstName');
        $LastName = Request()->input('LastName');
        $Birthday = Request()->input('Birthday');
        $Gender = Request()->input('Gender');
        $EmployeeId = [
            $id => [
                'EmployeeNumber' => $EmployeeNumber,
                'LastName' => $LastName,
                'FirstName' => $Firstname,
                'Birthday' => $Birthday,
                'Gender' => $Gender
            ]
        ];
        return view('Employees.store', ['Employee'=>$this->EmployeeId[$id]]);
    }
    public function destroy($id)
    {
        $this->EmployeeId[$id] -> delete();
        return view('Employees.store', ['Employee'=>$this->EmployeeId]);
    }
    public function bday($mm, $dd, $yyyy)
    {
        $date = date('Y/m/d', mktime(0,0,0,$mm,$dd,$yyyy));
        return view('Employees.birthday', ['Employee'=>$this->EmployeeId], ['date'=>$date]);
    }
} 
