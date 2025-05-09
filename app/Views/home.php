<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Home<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-600 to-blue-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-28">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="text-center lg:text-left">
                <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-6">
                    Share knowledge, bit by bit
                </h1>
                <p class="text-lg md:text-xl opacity-90 mb-8 max-w-2xl mx-auto lg:mx-0">
                    Join our community of technology enthusiasts, developers, and tech professionals to share insights and build meaningful connections.
                </p>
                <div class="flex flex-wrap justify-center lg:justify-start gap-4">
                    <a href="<?= site_url('register') ?>" class="btn bg-white text-blue-700 hover:bg-blue-50">
                        Get Started
                    </a>
                    <a href="<?= site_url('posts') ?>" class="btn border border-white text-white hover:bg-white hover:bg-opacity-10">
                        Explore Articles
                    </a>
                </div>
            </div>
            <div class="hidden lg:block">
                <img src="<?= base_url('assets/images/hero-image.svg') ?>" alt="BIT BY BIT Community" class="w-full max-w-md mx-auto">
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900">Why BIT BY BIT?</h2>
            <p class="mt-4 text-lg text-gray-600">A platform designed specifically for technology enthusiasts</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="card p-6">
                <div class="rounded-full bg-blue-100 p-3 inline-flex mb-4">
                    <i class="fas fa-laptop-code text-blue-600 text-xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-3">Share Technical Knowledge</h3>
                <p class="text-gray-600">Publish articles, tutorials, and code snippets to help others learn new skills and technologies.</p>
            </div>
            
            <div class="card p-6">
                <div class="rounded-full bg-blue-100 p-3 inline-flex mb-4">
                    <i class="fas fa-users text-blue-600 text-xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-3">Connect with Peers</h3>
                <p class="text-gray-600">Build meaningful professional connections with like-minded technology enthusiasts and experts.</p>
            </div>
            
            <div class="card p-6">
                <div class="rounded-full bg-blue-100 p-3 inline-flex mb-4">
                    <i class="fas fa-lightbulb text-blue-600 text-xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-3">Stay Informed</h3>
                <p class="text-gray-600">Keep up with the latest industry trends, technology reviews, and programming insights.</p>
            </div>
        </div>
    </div>
</section>

<!-- Featured Articles -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-3xl font-bold text-gray-900">Featured Articles</h2>
            <a href="<?= site_url('posts') ?>" class="btn btn-outline">View All</a>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php foreach(range(1, 3) as $i): // Replace this with actual article data ?>
                <div class="card group overflow-hidden">
                    <img src="https://via.placeholder.com/800x450?text=Article+Image" 
                         class="aspect-video object-cover w-full group-hover:scale-105 transition-transform duration-300" 
                         alt="Article Image">
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-3">
                            <span class="badge-primary">Technology</span>
                            <span class="text-sm text-gray-500"><?= date('M d, Y') ?></span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">
                            Understanding Modern JavaScript Frameworks
                        </h3>
                        <p class="text-gray-600 mb-4">
                            A comprehensive guide to the most popular JavaScript frameworks used in modern web development...
                        </p>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center">
                                <img src="https://via.placeholder.com/32" class="rounded-full mr-2" alt="User">
                                <span class="text-sm text-gray-700">John Doe</span>
                            </div>
                            <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-800">
                                Read More <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Join Community CTA -->
<section class="py-16 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">Ready to join our tech community?</h2>
        <p class="text-xl text-gray-600 mb-8">Connect with fellow developers, share your knowledge, and stay updated with the latest tech trends.</p>
        <a href="<?= site_url('register') ?>" class="btn btn-primary px-8 py-3 text-lg">Sign Up Now</a>
    </div>
</section>

<!-- Testimonials -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900">What Our Community Says</h2>
            <p class="mt-4 text-lg text-gray-600">Hear from our active members</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="card p-6">
                <div class="mb-4 text-yellow-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 mb-6">"BIT BY BIT has been an incredible platform to share my programming knowledge and connect with other developers. The community is supportive and engaging!"</p>
                <div class="flex items-center">
                    <img src="https://via.placeholder.com/48" class="rounded-full mr-4" alt="User Avatar">
                    <div>
                        <h6 class="font-bold text-gray-900">Sarah Johnson</h6>
                        <span class="text-sm text-gray-500">Full Stack Developer</span>
                    </div>
                </div>
            </div>
            
            <div class="card p-6">
                <div class="mb-4 text-yellow-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 mb-6">"I've learned so much from the articles and tutorials shared on this platform. It's become my go-to resource when I need to stay updated with the latest tech trends."</p>
                <div class="flex items-center">
                    <img src="https://via.placeholder.com/48" class="rounded-full mr-4" alt="User Avatar">
                    <div>
                        <h6 class="font-bold text-gray-900">Michael Chen</h6>
                        <span class="text-sm text-gray-500">Software Engineer</span>
                    </div>
                </div>
            </div>
            
            <div class="card p-6">
                <div class="mb-4 text-yellow-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text-gray-600 mb-6">"As a tech entrepreneur, I find the insights shared by industry experts on BIT BY BIT invaluable. The platform has helped me stay ahead of technology trends."</p>
                <div class="flex items-center">
                    <img src="https://via.placeholder.com/48" class="rounded-full mr-4" alt="User Avatar">
                    <div>
                        <h6 class="font-bold text-gray-900">Emily Rodriguez</h6>
                        <span class="text-sm text-gray-500">Tech Entrepreneur</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div class="p-6 bg-white rounded-xl shadow-sm border border-gray-200">
                <h2 class="text-4xl font-bold text-blue-600 mb-1">500+</h2>
                <p class="text-gray-600">Articles Published</p>
            </div>
            <div class="p-6 bg-white rounded-xl shadow-sm border border-gray-200">
                <h2 class="text-4xl font-bold text-blue-600 mb-1">10k+</h2>
                <p class="text-gray-600">Active Members</p>
            </div>
            <div class="p-6 bg-white rounded-xl shadow-sm border border-gray-200">
                <h2 class="text-4xl font-bold text-blue-600 mb-1">25+</h2>
                <p class="text-gray-600">Tech Categories</p>
            </div>
            <div class="p-6 bg-white rounded-xl shadow-sm border border-gray-200">
                <h2 class="text-4xl font-bold text-blue-600 mb-1">5k+</h2>
                <p class="text-gray-600">Code Snippets</p>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?> 