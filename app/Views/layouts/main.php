<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?> | BIT BY BIT</title>
    
    <!-- Meta tags -->
    <meta name="description" content="BIT BY BIT - A modern SaaS blog platform for technology enthusiasts and developers">
    <meta name="keywords" content="technology, programming, developers, tech community, coding">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= base_url('assets/images/favicon.png') ?>">
    
    <!-- Tailwind CSS via CDN (for development only) -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts - Inter & JetBrains Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    
    <!-- Additional CSS -->
    <?= $this->renderSection('styles') ?>
</head>
<body class="min-h-screen flex flex-col bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <a href="<?= site_url() ?>" class="navbar-brand">
                            <span class="bit">BIT</span> <span class="by">BY</span> <span class="bit-end">BIT</span>
                        </a>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-4">
                        <a href="<?= site_url() ?>" class="nav-link <?= current_url() == site_url() ? 'active' : '' ?>">Home</a>
                        <a href="<?= site_url('posts') ?>" class="nav-link <?= strpos(current_url(), 'posts') !== false ? 'active' : '' ?>">Articles</a>
                        <a href="<?= site_url('about') ?>" class="nav-link <?= strpos(current_url(), 'about') !== false ? 'active' : '' ?>">About</a>
                    </div>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:items-center sm:space-x-4">
                    <?php if (session()->get('isLoggedIn')): ?>
                        <div class="relative ml-3">
                            <div>
                                <button type="button" class="flex items-center max-w-xs text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" id="userMenu" aria-expanded="false" aria-haspopup="true">
                                    <span class="sr-only">Open user menu</span>
                                    <span class="flex items-center space-x-2">
                                        <span class="flex h-8 w-8 rounded-full bg-blue-100 text-blue-600 items-center justify-center">
                                            <i class="fas fa-user text-sm"></i>
                                        </span>
                                        <span class="text-gray-700 font-medium"><?= session()->get('username') ?></span>
                                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </button>
                            </div>
                            <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="userMenu" id="userMenuDropdown">
                                <div class="py-1" role="none">
                                    <a href="<?= site_url('profile') ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">My Profile</a>
                                    <a href="<?= site_url('posts/create') ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Write Article</a>
                                </div>
                                <div class="py-1" role="none">
                                    <a href="<?= site_url('logout') ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Logout</a>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <a href="<?= site_url('login') ?>" class="btn btn-outline">Login</a>
                        <a href="<?= site_url('register') ?>" class="btn btn-primary">Sign Up</a>
                    <?php endif; ?>
                </div>
                <div class="-mr-2 flex items-center sm:hidden">
                    <!-- Mobile menu button -->
                    <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500" aria-expanded="false" id="mobileMenuBtn">
                        <span class="sr-only">Open main menu</span>
                        <!-- Icon when menu is closed -->
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <!-- Icon when menu is open -->
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state -->
        <div class="hidden sm:hidden" id="mobileMenu">
            <div class="pt-2 pb-3 space-y-1">
                <a href="<?= site_url() ?>" class="<?= current_url() == site_url() ? 'bg-blue-50 border-blue-500 text-blue-700' : 'border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700' ?> block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Home</a>
                <a href="<?= site_url('posts') ?>" class="<?= strpos(current_url(), 'posts') !== false ? 'bg-blue-50 border-blue-500 text-blue-700' : 'border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700' ?> block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Articles</a>
                <a href="<?= site_url('about') ?>" class="<?= strpos(current_url(), 'about') !== false ? 'bg-blue-50 border-blue-500 text-blue-700' : 'border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700' ?> block pl-3 pr-4 py-2 border-l-4 text-base font-medium">About</a>
            </div>
            <div class="pt-4 pb-3 border-t border-gray-200">
                <?php if (session()->get('isLoggedIn')): ?>
                    <div class="flex items-center px-4">
                        <div class="flex-shrink-0">
                            <div class="h-10 w-10 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <div class="ml-3">
                            <div class="text-base font-medium text-gray-800"><?= session()->get('username') ?></div>
                            <div class="text-sm font-medium text-gray-500"><?= session()->get('email') ?></div>
                        </div>
                    </div>
                    <div class="mt-3 space-y-1">
                        <a href="<?= site_url('profile') ?>" class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100">My Profile</a>
                        <a href="<?= site_url('posts/create') ?>" class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100">Write Article</a>
                        <a href="<?= site_url('logout') ?>" class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100">Logout</a>
                    </div>
                <?php else: ?>
                    <div class="mt-3 space-y-1 px-4">
                        <a href="<?= site_url('login') ?>" class="block mb-2 px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100 rounded-md">Login</a>
                        <a href="<?= site_url('register') ?>" class="block px-4 py-2 text-base font-medium bg-blue-600 text-white hover:bg-blue-700 rounded-md text-center">Sign Up</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <!-- Flash Messages -->
    <?php if (session()->getFlashdata('success')): ?>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4">
            <div class="bg-green-50 border-l-4 border-green-400 p-4 relative" role="alert">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm text-green-700"><?= session()->getFlashdata('success') ?></p>
                    </div>
                    <div class="ml-auto pl-3">
                        <div class="-mx-1.5 -my-1.5">
                            <button type="button" class="close-alert inline-flex rounded-md p-1.5 text-green-500 hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                <span class="sr-only">Dismiss</span>
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4">
            <div class="bg-red-50 border-l-4 border-red-400 p-4 relative" role="alert">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm text-red-700"><?= session()->getFlashdata('error') ?></p>
                    </div>
                    <div class="ml-auto pl-3">
                        <div class="-mx-1.5 -my-1.5">
                            <button type="button" class="close-alert inline-flex rounded-md p-1.5 text-red-500 hover:bg-red-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                <span class="sr-only">Dismiss</span>
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!-- Main Content -->
    <main class="flex-grow">
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="md:col-span-1">
                    <h5 class="text-lg font-bold mb-4">BIT BY BIT</h5>
                    <p class="text-gray-400 mb-4">A modern SaaS blog platform for technology enthusiasts, developers, and tech professionals to share knowledge and insights.</p>
                </div>
                <div class="md:col-span-1">
                    <h5 class="text-lg font-bold mb-4">Links</h5>
                    <ul class="space-y-2">
                        <li><a href="<?= site_url() ?>" class="text-gray-400 hover:text-white transition">Home</a></li>
                        <li><a href="<?= site_url('posts') ?>" class="text-gray-400 hover:text-white transition">Articles</a></li>
                        <li><a href="<?= site_url('about') ?>" class="text-gray-400 hover:text-white transition">About</a></li>
                        <li><a href="<?= site_url('privacy') ?>" class="text-gray-400 hover:text-white transition">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="md:col-span-1">
                    <h5 class="text-lg font-bold mb-4">Connect</h5>
                    <ul class="space-y-2">
                        <li><a href="https://github.com/yourusername/bitbybit" class="text-gray-400 hover:text-white transition flex items-center"><i class="fab fa-github mr-2"></i>GitHub</a></li>
                        <li><a href="https://twitter.com/bitbybit" class="text-gray-400 hover:text-white transition flex items-center"><i class="fab fa-twitter mr-2"></i>Twitter</a></li>
                        <li><a href="https://linkedin.com/company/bitbybit" class="text-gray-400 hover:text-white transition flex items-center"><i class="fab fa-linkedin mr-2"></i>LinkedIn</a></li>
                    </ul>
                </div>
                <div class="md:col-span-1">
                    <h5 class="text-lg font-bold mb-4">Subscribe</h5>
                    <form>
                        <div class="flex">
                            <input type="email" class="flex-grow px-3 py-2 bg-gray-800 text-white rounded-l-md border-0 focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Email">
                            <button class="bg-blue-600 text-white px-3 py-2 rounded-r-md hover:bg-blue-700 transition" type="button"><i class="fas fa-paper-plane"></i></button>
                        </div>
                        <p class="text-gray-500 text-xs mt-2">No spam, just the latest news and updates.</p>
                    </form>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="mb-4 md:mb-0">
                        <p class="text-gray-400 text-sm">&copy; <?= date('Y') ?> BIT BY BIT. All rights reserved.</p>
                    </div>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white text-sm transition">Terms of Service</a>
                        <a href="#" class="text-gray-400 hover:text-white text-sm transition">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="<?= base_url('assets/js/script.js') ?>"></script>
    
    <!-- Menu Toggle Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu toggle
            const mobileMenuBtn = document.getElementById('mobileMenuBtn');
            const mobileMenu = document.getElementById('mobileMenu');
            
            if (mobileMenuBtn && mobileMenu) {
                mobileMenuBtn.addEventListener('click', function() {
                    // Toggle mobile menu visibility
                    mobileMenu.classList.toggle('hidden');
                    
                    // Toggle menu icons
                    const openIcon = mobileMenuBtn.querySelector('.block');
                    const closeIcon = mobileMenuBtn.querySelector('.hidden');
                    
                    if (openIcon && closeIcon) {
                        openIcon.classList.toggle('hidden');
                        openIcon.classList.toggle('block');
                        closeIcon.classList.toggle('hidden');
                        closeIcon.classList.toggle('block');
                    }
                });
            }
            
            // User menu dropdown toggle
            const userMenu = document.getElementById('userMenu');
            const userMenuDropdown = document.getElementById('userMenuDropdown');
            
            if (userMenu && userMenuDropdown) {
                userMenu.addEventListener('click', function() {
                    userMenuDropdown.classList.toggle('hidden');
                });
                
                // Close dropdown when clicking outside
                document.addEventListener('click', function(event) {
                    if (!userMenu.contains(event.target) && !userMenuDropdown.contains(event.target)) {
                        userMenuDropdown.classList.add('hidden');
                    }
                });
            }
            
            // Alert close buttons
            const closeButtons = document.querySelectorAll('.close-alert');
            closeButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    this.closest('[role="alert"]').remove();
                });
            });
        });
    </script>
    
    <!-- Additional Scripts -->
    <?= $this->renderSection('scripts') ?>
</body>
</html> 