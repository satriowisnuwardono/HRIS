<?php

namespace App\Controllers;

class Employee extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Employee Data Table'
        ];
        echo view('pages/employee/employee_data', $data);
    }
}
