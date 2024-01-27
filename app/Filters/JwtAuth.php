<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JwtAuth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $jwtCookie = get_cookie('jwt_token');
    
        if (empty($jwtCookie)) {
            // Redirect to login page or handle unauthorized access
            return redirect()->to(base_url('admin/login'));
        }
    
        // Decode and verify JWT token
            try {
                $key = getenv('JWT_SECRET');
                JWT::decode($jwtCookie, new Key($key, 'HS256'));
                
                // You may perform additional checks based on the decoded token if needed
                return $request;
        
            } catch (\Exception $e) {
                // Token invalid or expired
                // Redirect to login page or handle unauthorized access
                return redirect()->to(base_url('admin/login'));
            }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Implement any actions needed after the response is sent
    }
}
