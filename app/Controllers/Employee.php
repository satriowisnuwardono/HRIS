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
            'neighborhood' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'neighborhood assocation can not be empty'
                ]
            ],
            'hamlet' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'citizens association can not be empty'
                ]
            ],
            'urban_village' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'urban_village can not be empty'
                ]
            ],
            'sub_district' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'sub-district can not be empty'
                ]
            ],
            'regency' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'regency can not be empty'
                ]
            ],
            'province' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'province can not be empty'
                ]
            ],
            'zip' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'zip code can not be empty',
                    'numeric' => 'can only be filled with numbers'
                ]
            ],
            'last_education' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'last education has not been selected'
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
            ],
            'photos' => [
                'rules' => 'max_size[photos,1024]|is_image[photos]|mime_in[photos,image/jpg,image/jpeg,image/png]',
                'error' => [
                    'max_size' => 'image size is too large!',
                    'is_image' => 'the selected file is not an image!',
                    'mime_in' => 'the selected file is not an image!'
                ]
            ]
        ])) {
            return redirect()->to('/employee/add_employee')->withInput();
        }

        //ambil gambar
        $filePhotos = $this->request->getFile('photos');
        //cek apakah tidak ada foto yang di upload
        if ($filePhotos->getError() == 4) {
            $photosName = 'default.png';
        } else {
            //generate nama sampul random
            $photosName = $filePhotos->getRandomName();
            //pindahkan file ke folder photo
            $filePhotos->move('dist/photos', $photosName);
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
            'neighborhood' => $this->request->getVar('neighborhood'),
            'hamlet' => $this->request->getVar('hamlet'),
            'urban_village' => $this->request->getVar('urban_village'),
            'sub_district' => $this->request->getVar('sub_district'),
            'regency' => $this->request->getVar('regency'),
            'province' => $this->request->getVar('province'),
            'zip' => $this->request->getVar('zip'),
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
            'hired_date' => $this->request->getVar('hired_date'),
            'photos' => $photosName
        ]);
        session()->setFlashdata('msg', 'Added');

        return redirect()->to('/employee');
    }
    //--------------------------------------------------------------------

    //-------------------------------READ---------------------------------
    public function employee_profile($employee_id)
    {
        $data = [
            'title' => 'Employee Profile',
            'employee_profile' => $this->employee_Model->getEmployee($employee_id)
        ];

        //Jika Profile tidak ada di tabel
        if (empty($data['employee_profile'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Employee ID ' . $employee_id . ' not found');
        }

        return view('pages/employee/employee_profile', $data);
    }
    //--------------------------------------------------------------------

    //-----------------------------UPDATE---------------------------------
    public function edit_employee($employee_id)
    {
        $data = [
            'title' => 'Edit Employee Data',
            'validation' => \Config\Services::validation(),
            'employee_data' => $this->employee_Model->getEmployee($employee_id)
        ];

        return view('pages/employee/edit_employee_data', $data);
    }

    public function update($employee_id)
    {
        //Validasi input
        //cek judul
        $old_employee_id = $this->employee_Model->getEmployee($this->request->getVar('employee_id'));
        if ($old_employee_id['nip'] == $this->request->getVar('nip')) {
            $rule_nip = 'required';
        } else {
            $rule_nip = 'required|is_unique[tbl_employee_data.nip]';
        }

        if (!$this->validate([
            'nip' => [
                'rules' => $rule_nip,
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
            'neighborhood' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'neighborhood assocation can not be empty'
                ]
            ],
            'hamlet' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'citizens association can not be empty'
                ]
            ],
            'urban_village' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'urban_village can not be empty'
                ]
            ],
            'sub_district' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'sub-district can not be empty'
                ]
            ],
            'regency' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'regency can not be empty'
                ]
            ],
            'province' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'province can not be empty'
                ]
            ],
            'zip' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'zip code can not be empty',
                    'numeric' => 'can only be filled with numbers'
                ]
            ],
            'last_education' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'last education has not been selected'
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
            ],
            'photos' => [
                'rules' => 'max_size[photos,1024]|is_image[photos]|mime_in[photos,image/jpg,image/jpeg,image/png]',
                'error' => [
                    'max_size' => 'image size is too large!',
                    'is_image' => 'the selected file is not an image!',
                    'mime_in' => 'the selected file is not an image!'
                ]
            ]
        ])) {
            return redirect()->to('/employee/edit_employee/' . $this->request->getVar('employee_id'))->withInput();
        }

        //ambil gambar
        $filePhotos = $this->request->getFile('photos');
        //cek foto lama, apakah berubah atau tidak
        if ($filePhotos->getError() == 4) {
            $photosName = $this->request->getVar('oldPhotos');
        } else {
            //generate nama sampul random
            $photosName = $filePhotos->getRandomName();
            //pindahkan file ke folder photo
            $filePhotos->move('dist/photos/', $photosName);
            //hapus file foto yang lama
            unlink('dist/photos/' . $this->request->getVar('oldPhotos'));
        }

        $this->employee_Model->save([
            'employee_id' => $employee_id,
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
            'neighborhood' => $this->request->getVar('neighborhood'),
            'hamlet' => $this->request->getVar('hamlet'),
            'urban_village' => $this->request->getVar('urban_village'),
            'sub_district' => $this->request->getVar('sub_district'),
            'regency' => $this->request->getVar('regency'),
            'province' => $this->request->getVar('province'),
            'zip' => $this->request->getVar('zip'),
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
            'hired_date' => $this->request->getVar('hired_date'),
            'photos' => $photosName
        ]);
        session()->setFlashdata('msg', 'update.');

        return redirect()->to('/employee');
    }
    //--------------------------------------------------------------------

    //-----------------------------DELETE---------------------------------
    public function delete($employee_id)
    {
        //cari foto berdasarkan employee_id
        $employee_Model = $this->employee_Model->find($employee_id);

        //cek jika foto default
        if ($employee_Model['photos'] != 'default.png') {
            //hapus foto
            unlink('dist/photos/' . $employee_Model['photos']);
        }

        $this->employee_Model->delete($employee_id);
        session()->setFlashdata('msg', 'deleted.');
        return redirect()->to('/employee');
    }
    //--------------------------------------------------------------------
}
