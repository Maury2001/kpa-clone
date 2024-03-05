<?php

namespace App\Controllers;

use App\Models\UserModel;


class Auth extends BaseController
{
    public function log()
    {
        helper('form');

        $data=[];

        if ($this->request->getMethod() == 'post') {
            // validation
            $rules = [
                
                'email'      => 'required|min_length[6]|max_length[50]|valid_email',
                'password'   => 'required|min_length[8]|max_length[255]|validateUser[email,password]',
                
            ];

            $errors = [
                'password'=>[
                    'validateUser'=>'Email or password dont match'
                ]
                ];

    
            if (!$this->validate($rules,$errors)) {
                $data['validation'] = $this->validator;
                // handle validation errors if needed
            }else{

                $model = new UserModel();

                $user = $model->where('email',$this->request->getVar('email'))
                              ->first();

                              
                $this ->setUserSession($user);

                return redirect()->to('/');

            }
        }


        return view('templates/header',$data)
            . view('auth/login');
    }

    public function setUserSession($user)
     {
        $data=[
            'id'=> $user['id'],
            'first_name'=>$user['first_name'],
            'last_name'=>$user['last_name'],
            'email'=>$user['email'],
            'isLoggedIn'=>true,
        ];

        session()->set($data);
    }

    public function reg()
    {
        helper('form');
        $data = [];
    
        if ($this->request->getMethod() == 'post') {
            // validation
            $rules = [
                'first_name'        => 'required|min_length[3]|max_length[20]',
                'last_name'         => 'required|min_length[3]|max_length[20]',
                'email'             => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
                'password'          => 'required|min_length[8]|max_length[255]',
                'password_confirm'  => 'matches[password]'
            ];
    
            if (! $this->validate($rules)) {
                $data['validation'] = $this->validator;
                // handle validation errors if needed
            }else{

                $model = new UserModel();

            $newData = [
                'first_name'    => $this->request->getVar('first_name'),
                'last_name'     => $this->request->getVar('last_name'),
                'email'         => $this->request->getVar('email'),
                'password'      => $this->request->getVar('password')
            ];

            // Hash the password before saving
            // $newData['password'] = password_hash($newData['password'], PASSWORD_DEFAULT);

            $model->save($newData);
            
            $session = session();
            $session->setFlashdata('success', 'Successful Registration');

            return redirect()->to('/login'); // added semicolon at the end
            }
        }
    
        return view('templates/header') . view('auth/reg', $data);
    }
    
}