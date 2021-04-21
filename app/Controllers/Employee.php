<?php

namespace App\Controllers;

use CodeIgniter\CodeIgniter;
use App\Models\Employee_Model;

class Employee extends BaseController
{
    protected $employee_Model;
    //-------------------------CONSTRUCT----------------------------------
    public function __construct()
    {
        $this->employee_Model = new Employee_Model();
    }
    //--------------------------------------------------------------------
    //-----------------------------INDEX----------------------------------
    public function index()
    {
        $data = [
            'title' => 'Employee Data Table',
            'employee_data' => $this->employee_Model->getEmployee()
        ];
        echo view('pages/employee/employee_data', $data);
    }
    //--------------------------------------------------------------------
    //-----------------------------CREATE---------------------------------
    public function add_employee()
    {
        $data = [
            'title' => 'Add Employee Data',
            'validation' => \Config\Services::validation()
        ];

        return view('pages/employee/add_employee_data', $data);
    }

    public function save()
    {
        //Validasi input
        if (!$this->validate([
            'nip' => [
                'rules' => 'required|numeric|is_unique[tbl_employee_data.nip]',
                'errors' => [
                    'required' => 'Employee ID Number can not be empty',
                    'numeric' => 'can only be filled with numbers',
                    'is_unique' => 'Employee ID Number already registered'
                ]
            ],
            'nik' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'ID Number can not be empty',
                    'numeric' => 'can only be filled with numbers'
                ]
            ],
            'nationality' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'nationality has not been selected'
                ]
            ],
            'full_name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'employee Name can not be empty'
                ]
            ],
            'gender' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'gender has not been selected'
                ]
            ],
            'place_of_birth' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'place of Birth can not be empty'
                ]
            ],
            'date_of_birth' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'date of birth can not be empty'
                ]
            ],
            'telephone' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'telephone can not be empty',
                    'numeric' => 'can only be filled with numbers'
                ]
            ],
            'religion' => [
                'rules' => 'required',
                'errors' => [
                    'religion has not been selected'
                ]
            ],
            'marital_status' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'marital status has not been selected'
                ]
            ],
            'address' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'address can not be empty'
                ]
            ],
            'neighborhood_association' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'neighborhood assocation can not be empty'
                ]
            ],
            'citizens_association' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'citizens association can not be empty'
                ]
            ],
            'sub_district' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'sub-district can not be empty'
                ]
            ],
            'district' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'district can not be empty'
                ]
            ],
            'last_education' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'las education has not been selected'
                ]
            ],
            'majors' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'majors can not be empty'
                ]
            ],
            'hired_date' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Hired date can not be empty'
                ]
            ],
            'emergency_contact' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'emergency contact number can not be empty',
                    'numeric' => 'can only be filled with numbers '
                ]
            ],
            'contact_name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'contact name can not be empty'
                ]
            ],
            'relation' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'relation can not be empty'
                ]
            ]
        ])) {
            return redirect()->to('/employee/add_employee')->withInput();
        }

        $this->employee_Model->save([
            'nik' => $this->request->getVar('nik'),
            'nip' => $this->request->getVar('nip'),
            'full_name' => $this->request->getVar('full_name'),
            'gender' => $this->request->getVar('gender'),
            'place_of_birth' => $this->request->getVar('place_of_birth'),
            'date_of_birth' => $this->request->getvar('date_of_birth'),
            'telephone' => $this->request->getVar('telephone'),
            'religion' => $this->request->getVar('religion'),
            'marital_status' => $this->request->getVar('marital_status'),
            'address' => $this->request->getVar('address'),
            'neighborhood_association' => $this->request->getVar('neighborhood_association'),
            'citizens_association' => $this->request->getVar('citizens_association'),
            'sub_district' => $this->request->getVar('sub_district'),
            'district' => $this->request->getVar('district'),
            'blood_group' => $this->request->getVar('blood_group'),
            'nationality' => $this->request->getVar('nationality'),
            'last_education' => $this->request->getVar('last_education'),
            'majors' => $this->request->getVar('majors'),
            'email' => $this->request->getVar('email'),
            'tax_id_number' => $this->request->getVar('tax_id_number'),
            'reference' => $this->request->getVar('reference'),
            'emergency_contact' => $this->request->getVar('emergency_contact'),
            'contact_name' => $this->request->getVar('contact_name'),
            'relation' => $this->request->getVar('relation'),
            'hired_date' => $this->request->getVar('hired_date')
        ]);
        session()->setFlashdata('msg', 'data was successfully added.');

        return redirect()->to('/employee');
    }
    //--------------------------------------------------------------------
}
