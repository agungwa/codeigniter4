<?php namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    function get_data_login($username,$tbl){
        $builder = $this->db->table($tbl);
        $builder->where('username',$username);
        $log = $builder->get()->getRow();
        return $log;
    }


}