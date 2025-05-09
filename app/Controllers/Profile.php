<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\PostModel;
use App\Models\CommentModel;

class Profile extends BaseController
{
    protected $userModel;
    protected $postModel;
    protected $commentModel;
    
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->postModel = new PostModel();
        $this->commentModel = new CommentModel();
    }
    
    /**
     * Display user profile
     */
    public function index()
    {
        // Check if user is logged in
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('login');
        }
        
        $userId = session()->get('user_id');
        
        // In a real implementation, you would fetch the user's data from the database
        // For demonstration purposes, we'll use mock data
        $userData = [
            'id' => $userId,
            'username' => session()->get('username'),
            'email' => session()->get('email'),
            'bio' => 'Technology enthusiast and software developer with a passion for building innovative solutions.',
            'profile_image' => 'https://via.placeholder.com/200',
            'social_twitter' => '@' . session()->get('username'),
            'social_github' => 'github.com/' . session()->get('username'),
            'social_linkedin' => 'linkedin.com/in/' . session()->get('username'),
            'post_count' => 5,
            'comment_count' => 12,
            'date_created' => '2024-01-15'
        ];
        
        // In a real implementation, you would fetch the user's recent posts and comments
        // For demonstration purposes, we'll use mock data
        $recentPosts = [];
        for ($i = 1; $i <= 3; $i++) {
            $recentPosts[] = [
                'id' => $i,
                'title' => 'Sample Post ' . $i,
                'summary' => 'This is a sample post created by the user',
                'date_created' => date('Y-m-d H:i:s', strtotime('-' . $i . ' days')),
                'likes' => rand(5, 50),
                'published' => rand(0, 1)
            ];
        }
        
        $recentComments = [];
        for ($i = 1; $i <= 3; $i++) {
            $recentComments[] = [
                'id' => $i,
                'post_id' => $i,
                'post_title' => 'Post Title ' . $i,
                'content' => 'This is a sample comment by the user on post ' . $i,
                'date_created' => date('Y-m-d H:i:s', strtotime('-' . $i . ' days')),
                'likes' => rand(1, 20)
            ];
        }
        
        $data = [
            'title' => 'My Profile',
            'user' => $userData,
            'recentPosts' => $recentPosts,
            'recentComments' => $recentComments
        ];
        
        return view('profile/index', $data);
    }
    
    /**
     * Display edit profile form
     */
    public function edit()
    {
        // Check if user is logged in
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('login');
        }
        
        $userId = session()->get('user_id');
        
        // In a real implementation, you would fetch the user's data from the database
        // For demonstration purposes, we'll use mock data
        $userData = [
            'id' => $userId,
            'username' => session()->get('username'),
            'email' => session()->get('email'),
            'bio' => 'Technology enthusiast and software developer with a passion for building innovative solutions.',
            'profile_image' => 'https://via.placeholder.com/200',
            'social_twitter' => '@' . session()->get('username'),
            'social_github' => 'github.com/' . session()->get('username'),
            'social_linkedin' => 'linkedin.com/in/' . session()->get('username')
        ];
        
        $data = [
            'title' => 'Edit Profile',
            'user' => $userData
        ];
        
        return view('profile/edit', $data);
    }
    
    /**
     * Update user profile
     */
    public function update()
    {
        // Check if user is logged in
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('login');
        }
        
        $userId = session()->get('user_id');
        
        // Validate form data
        $rules = [
            'username' => 'required|min_length[3]|max_length[30]|alpha_numeric_space',
            'email' => 'required|valid_email|is_unique[bitbybit_users.email,id,' . $userId . ']',
            'bio' => 'permit_empty|max_length[500]'
        ];
        
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }
        
        // Get form data
        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $bio = $this->request->getPost('bio');
        $socialTwitter = $this->request->getPost('social_twitter');
        $socialGithub = $this->request->getPost('social_github');
        $socialLinkedin = $this->request->getPost('social_linkedin');
        
        // Process profile image if uploaded
        $profileImage = $this->request->getFile('profile_image');
        $imagePath = '';
        
        if ($profileImage && $profileImage->isValid() && !$profileImage->hasMoved()) {
            $newName = $profileImage->getRandomName();
            $imagePath = 'uploads/profiles/' . $newName;
            
            // Move the image to the uploads directory
            // In a real implementation, you'd need to create this directory and make it writable
            //$profileImage->move(ROOTPATH . 'public/uploads/profiles', $newName);
        }
        
        // Prepare user data
        $userData = [
            'username' => $username,
            'email' => $email,
            'bio' => $bio,
            'social_twitter' => $socialTwitter,
            'social_github' => $socialGithub,
            'social_linkedin' => $socialLinkedin
        ];
        
        if (!empty($imagePath)) {
            $userData['profile_image'] = $imagePath;
        }
        
        // In a real implementation, you would update the user in the database
        // $this->userModel->update($userId, $userData);
        
        // Update session data
        session()->set('username', $username);
        session()->set('email', $email);
        
        // Set success message
        session()->setFlashdata('success', 'Profile updated successfully!');
        
        // Redirect back to profile
        return redirect()->to('profile');
    }
    
    /**
     * Display change password form
     */
    public function changePassword()
    {
        // Check if user is logged in
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('login');
        }
        
        $data = [
            'title' => 'Change Password'
        ];
        
        return view('profile/change_password', $data);
    }
    
    /**
     * Update user password
     */
    public function updatePassword()
    {
        // Check if user is logged in
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('login');
        }
        
        $userId = session()->get('user_id');
        
        // Validate form data
        $rules = [
            'current_password' => 'required',
            'new_password' => 'required|min_length[8]',
            'confirm_password' => 'required|matches[new_password]'
        ];
        
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }
        
        // Get form data
        $currentPassword = $this->request->getPost('current_password');
        $newPassword = $this->request->getPost('new_password');
        
        // In a real implementation, you would verify the current password
        // and update the password in the database
        
        // Set success message
        session()->setFlashdata('success', 'Password updated successfully!');
        
        // Redirect back to profile
        return redirect()->to('profile');
    }
} 