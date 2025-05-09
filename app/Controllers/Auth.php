<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    protected $userModel;
    
    public function __construct()
    {
        $this->userModel = new UserModel();
    }
    
    public function login()
    {
        // If already logged in, redirect to home
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/');
        }
        
        $data = [
            'title' => 'Login'
        ];
        
        return view('auth/login', $data);
    }
    
    public function attemptLogin()
    {
        // Validate form data
        $rules = [
            'email' => 'required|valid_email',
            'password' => 'required|min_length[6]'
        ];
        
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }
        
        // Get form data
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $remember = $this->request->getPost('remember');
        
        // In a real implementation, you would check the credentials against the database
        // For demonstration purposes, let's use a mock login
        if ($email === 'demo@example.com' && $password === 'password') {
            // Set session data
            $userData = [
                'user_id' => 1,
                'username' => 'demo_user',
                'email' => $email,
                'isLoggedIn' => true
            ];
            
            session()->set($userData);
            
            // Set success message
            session()->setFlashdata('success', 'Login successful! Welcome back.');
            
            // Redirect to home page
            return redirect()->to('/');
        }
        
        // Login failed
        session()->setFlashdata('error', 'Invalid email or password. Please try again.');
        return redirect()->back()->withInput();
    }
    
    public function register()
    {
        // If already logged in, redirect to home
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/');
        }
        
        $data = [
            'title' => 'Register'
        ];
        
        return view('auth/register', $data);
    }
    
    public function attemptRegister()
    {
        // Validate form data
        $rules = [
            'username' => 'required|min_length[3]|max_length[30]|alpha_numeric_space',
            'email' => 'required|valid_email|is_unique[bitbybit_users.email]',
            'password' => 'required|min_length[8]',
            'password_confirm' => 'required|matches[password]',
            'terms' => 'required'
        ];
        
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }
        
        // Get form data
        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        
        // In a real implementation, you would save the user to the database
        // $userData = [
        //     'username' => $username,
        //     'email' => $email,
        //     'password' => password_hash($password, PASSWORD_DEFAULT),
        //     'salt' => bin2hex(random_bytes(16)),
        //     'role' => 2 // Regular user role
        // ];
        // $this->userModel->insert($userData);
        
        // Set success message
        session()->setFlashdata('success', 'Registration successful! You can now login.');
        
        // Redirect to login page
        return redirect()->to('login');
    }
    
    public function logout()
    {
        // Clear session data
        session()->destroy();
        
        // Set success message
        session()->setFlashdata('success', 'You have been logged out successfully.');
        
        // Redirect to login page
        return redirect()->to('login');
    }
    
    public function forgotPassword()
    {
        // If already logged in, redirect to home
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/');
        }
        
        $data = [
            'title' => 'Forgot Password'
        ];
        
        return view('auth/forgot_password', $data);
    }
    
    public function processForgotPassword()
    {
        // Validate form data
        $rules = [
            'email' => 'required|valid_email'
        ];
        
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }
        
        // Get form data
        $email = $this->request->getPost('email');
        
        // In a real implementation, you would check if the email exists and send a reset link
        
        // Set success message
        session()->setFlashdata('success', 'If the email exists in our system, you will receive password reset instructions shortly.');
        
        // Redirect to login page
        return redirect()->to('login');
    }
    
    public function resetPassword($token)
    {
        // In a real implementation, you would validate the token
        
        $data = [
            'title' => 'Reset Password',
            'token' => $token
        ];
        
        return view('auth/reset_password', $data);
    }
    
    public function processResetPassword()
    {
        // Validate form data
        $rules = [
            'token' => 'required',
            'password' => 'required|min_length[8]',
            'password_confirm' => 'required|matches[password]'
        ];
        
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }
        
        // Get form data
        $token = $this->request->getPost('token');
        $password = $this->request->getPost('password');
        
        // In a real implementation, you would validate the token and update the password
        
        // Set success message
        session()->setFlashdata('success', 'Your password has been reset successfully. You can now login with your new password.');
        
        // Redirect to login page
        return redirect()->to('login');
    }
} 