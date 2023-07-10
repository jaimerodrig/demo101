<?php

namespace App\Controllers;
use App\Models\LoginModels;

class Auth extends BaseController
{
    public function index()
    {
        return view('admin/login');
    }

    public function __construct()
    {
        $this->LoginModels = new LoginModels();
    }

    public function login()
    {
        $user = $this->request->getPost('user');
        $password = $this->request->getPost('password');
        
        $usersData = $this->LoginModels->where('user', $user)->first();
    
        if ($usersData != null){
            if(password_verify('password', $usersData['password'])){

                $sessionData = [
                    "id" => $usersData["id"],
                    "user" => $usersData["user"],
                    "profile" => $usersData["profile"],
                ];

                $session = session();
                $session->set($sessionData);

                return redirect()->to(base_url().'cajas');
            } else {
                $data["error"] = "La contraseña es incorrecta";
                echo view("admin/login", $data);
            }
             
        } else {
            $data["empty"] = "El usuario no existe";
            
            echo view("admin/login", $data);


        }
    }
}
