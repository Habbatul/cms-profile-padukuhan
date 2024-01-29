<?php

namespace App\Controllers; // Sesuaikan namespace sesuai dengan struktur folder Anda

use App\Models\UserModel;
use Firebase\JWT\JWT;

class Auth extends BaseController
{
    public function loginValidation()
    {
        $data = []; // Untuk data yang akan dikirim ke view

        // Pastikan menggunakan HTTP method POST
        if ($this->request->getPost()) {
            // Retrieve login data from the form
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            // Validate data if needed (gunakan fitur validation CodeIgniter)

            // Authenticate user
            $userModel = new UserModel();
            $user = $userModel->getUserByCredentials($username, $password);

            if ($user) {
                // Generate JWT token
                $token = $this->generateToken($user['id']);

                // // Set the JWT token as a cookie (gunakan fitur session CodeIgniter)
                $this->response->setCookie(
                    'jwt_token',
                    $token,
                    time() + 3600,
                    '',//base_url()
                    '/',
                    '',
                    false,
                    true,
                    null
                );
                
                // // Redirect to a success page or dashboard
                return redirect()->to(base_url('admin/beranda'))->withCookies();
            } else {
                // Handle authentication failure
                $data['error'] = 'Username atau password salah';
            }
        }
        $session = session();
        $session->setFlashdata('err',$data['error']);
        // Tampilkan view login dengan data
        return redirect()->to(base_url('admin/login'));
    }

    public function login(){
        return view("admin/login");
    }

    private function generateToken($userId)
    {
        $key = getenv('JWT_SECRET');
        $payload = [
            'user_id' => $userId,
            'exp' => time() + 3600, // Token expiration time (1 hour in this example)
        ];

        return JWT::encode($payload, $key, 'HS256');
    }

    public function logout(){
        $this->response->setCookie(
            'jwt_token',
            'logout user',
            time() + 3600,
            '',//base_url()
            '/',
            '',
            false,
            true,
            null
        );
        return redirect()->to(base_url('admin/login'))->withCookies();
    }
}
