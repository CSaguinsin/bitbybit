<?php
namespace App\Controllers;

class Admin extends BaseController
{
    public function dashboard()
    {
        // Only allow access for logged-in admins
        if (!session()->get('isLoggedIn') || session()->get('role') != 1) {
            return redirect()->to('admin/login');
        }
        $data = [
            'title' => 'Admin Dashboard',
            'admin' => session()->get('username')
        ];
        return view('admin/dashboard', $data);
    }
} 