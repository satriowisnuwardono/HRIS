<?php

namespace App\Models;

use CodeIgniter\Model;

class Employee_Model extends Model
{
    protected $table = 'tbl_employee_data';
    protected $primaryKey = 'employee_id';

    protected $useTimestamps = true;

    protected $allowedFields = [
        'nip', 'nik', 'full_name', 'gender', 'place_of_birth', 'date_of_birth', 'telephone', 'religion', 'marital_status', 'address',
        'neighborhood_association', 'citizens_association', 'sub_district', 'district', 'blood_group', 'nationality', 'last_education', 'majors', 'email', 'tax_id_number',
        'reference', 'photos', 'emergency_contact', 'contact_name', 'relation', 'hired_date'
    ];

    //--------------------------------------------------------------------

    public function getEmployee($employee_id = false)
    {
        if ($employee_id == false) {
            return $this->orderBy('employee_id', 'DESC')->findAll();
        } else {
            return $this->where(['employee_id', $employee_id])->first();
        }
    }
}
