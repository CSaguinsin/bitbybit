<?php

namespace App\Controllers;

use App\Models\PostModel;
use App\Models\CommentModel;
use App\Models\CategoryModel;

class Posts extends BaseController
{
    protected $postModel;
    protected $commentModel;
    protected $categoryModel;
    
    public function __construct()
    {
        $this->postModel = new PostModel();
        $this->commentModel = new CommentModel();
        $this->categoryModel = new CategoryModel();
    }
    
    public function index()
    {
        $data = [
            'title' => 'Articles'
        ];
        
        // Get category filter if exists
        $category = $this->request->getGet('category');
        if ($category) {
            $data['category'] = $category;
        }
        
        // Get search query if exists
        $search = $this->request->getGet('search');
        if ($search) {
            $data['search'] = $search;
        }
        
        return view('posts/index', $data);
    }
    
    public function show($id)
    {
        // In a real implementation, you would fetch the post from the database
        // For now, we'll just use our static view
        $data = [
            'title' => 'Article Title',
            'post_id' => $id
        ];
        
        return view('posts/show', $data);
    }
    
    public function create()
    {
        // Check if user is logged in
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('login');
        }
        
        $data = [
            'title' => 'Create Article'
        ];
        
        return view('posts/create', $data);
    }
    
    public function store()
    {
        // Check if user is logged in
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('login');
        }
        
        // Validate form data
        $rules = [
            'title' => 'required|min_length[5]|max_length[255]',
            'category' => 'required',
            'content' => 'required|min_length[20]',
            'summary' => 'required|min_length[10]|max_length[250]',
            'terms' => 'required'
        ];
        
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }
        
        // Process featured image if uploaded
        $featuredImage = $this->request->getFile('featured_image');
        $imagePath = '';
        
        if ($featuredImage && $featuredImage->isValid() && !$featuredImage->hasMoved()) {
            $newName = $featuredImage->getRandomName();
            $imagePath = 'uploads/posts/' . $newName;
            
            // Move the image to the uploads directory
            // In a real implementation, you'd need to create this directory and make it writable
            //$featuredImage->move(ROOTPATH . 'public/uploads/posts', $newName);
        }
        
        // Prepare post data
        $postData = [
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
            'summary' => $this->request->getPost('summary'),
            'category' => $this->request->getPost('category'),
            'featured_image' => $imagePath,
            'tags' => $this->request->getPost('tags'),
            'published' => $this->request->getPost('published'),
            'created_by' => session()->get('user_id')
        ];
        
        // In a real implementation, you would save the post to the database
        // $this->postModel->insert($postData);
        
        // Set success message
        session()->setFlashdata('success', 'Article created successfully' . ($postData['published'] ? ' and published' : ' as draft'));
        
        // Redirect to posts page
        return redirect()->to('posts');
    }
    
    public function edit($id)
    {
        // Check if user is logged in
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('login');
        }
        
        // In a real implementation, you would fetch the post from the database
        // and check if the user is authorized to edit it
        
        $data = [
            'title' => 'Edit Article'
        ];
        
        return view('posts/edit', $data);
    }
    
    public function update($id)
    {
        // Check if user is logged in
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('login');
        }
        
        // Validate form data
        $rules = [
            'title' => 'required|min_length[5]|max_length[255]',
            'category' => 'required',
            'content' => 'required|min_length[20]',
            'summary' => 'required|min_length[10]|max_length[250]'
        ];
        
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }
        
        // In a real implementation, you would update the post in the database
        
        // Set success message
        session()->setFlashdata('success', 'Article updated successfully');
        
        // Redirect to the post
        return redirect()->to('posts/' . $id);
    }
    
    public function delete($id)
    {
        // Check if user is logged in
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('login');
        }
        
        // In a real implementation, you would delete the post from the database
        // and check if the user is authorized to delete it
        
        // Set success message
        session()->setFlashdata('success', 'Article deleted successfully');
        
        // Redirect to posts page
        return redirect()->to('posts');
    }
} 