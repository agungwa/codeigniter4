<?php

use App\Models\AuthModel;

function allow($level){
    $session = \Config\Services::session();
    $user = $session->get('username');
    $tabel = 'users';
    $model = new AuthModel;
    $row = $model->get_data_login($user,$tabel);
    if ($row != NULL){
        if ($row->level == $level) {
            return true;
        } else {
            return false;
        }
    }

}