<?php

namespace App\Controllers;

use App\Models\UserModel;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        helper(['form']);
        $data = [];
        echo view('Userregister', $data);
        // echo view('Userregister');
    }

    public function store()
    {
        helper(['form']);
        $rules=[
            'name' => 'required|min_length[2]|max_length[50]',
            'email' => 'required|min_length[2]|max_length[50]|valid_email|is_unique[users.email]',
            'password' => 'required',
            'confirmpassword' =>'matches[password]'
        ];

        if($this->validate($rules)){
            $usermodel= new UserModel();

            $data=[
                'name' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email'),
                'password' =>password_hash ($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];

            $usermodel->save($data);

            return redirect()->to('/Userlogin');
        }
        else{
            $data['validation'] = $this->validator;
            echo view('Userregister', $data);
        }

    }
}
