<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Articles<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container py-5">
    <!-- Header section -->
    <div class="row mb-5">
        <div class="col-md-8">
            <h1 class="fw-bold mb-3">Tech Articles & Insights</h1>
            <p class="lead text-secondary">Explore the latest articles, tutorials, and insights from our community of tech enthusiasts and professionals.</p>
        </div>
        <div class="col-md-4 d-flex align-items-center justify-content-md-end mt-3 mt-md-0">
            <?php if (session()->get('isLoggedIn')): ?>
                <a href="<?= site_url('posts/create') ?>" class="btn btn-primary">
                    <i class="fas fa-pencil-alt me-2"></i> Write Article
                </a>
            <?php else: ?>
                <a href="<?= site_url('login') ?>" class="btn btn-outline-primary">
                    <i class="fas fa-sign-in-alt me-2"></i> Login to Write
                </a>
            <?php endif; ?>
        </div>
    </div>
    
    <!-- Search and filters -->
    <div class="row mb-4">
        <div class="col-md-8">
            <form action="<?= site_url('posts') ?>" method="get" class="d-flex">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search articles..." name="search" value="<?= isset($_GET['search']) ? esc($_GET['search']) : '' ?>">
                    <button class="btn btn-outline-primary" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
        <div class="col-md-4 mt-3 mt-md-0">
            <select class="form-select" id="categoryFilter" onchange="location = this.value">
                <option value="<?= site_url('posts') ?>" <?= !isset($_GET['category']) ? 'selected' : '' ?>>All Categories</option>
                <option value="<?= site_url('posts?category=programming') ?>" <?= (isset($_GET['category']) && $_GET['category'] == 'programming') ? 'selected' : '' ?>>Programming</option>
                <option value="<?= site_url('posts?category=web-development') ?>" <?= (isset($_GET['category']) && $_GET['category'] == 'web-development') ? 'selected' : '' ?>>Web Development</option>
                <option value="<?= site_url('posts?category=data-science') ?>" <?= (isset($_GET['category']) && $_GET['category'] == 'data-science') ? 'selected' : '' ?>>Data Science</option>
                <option value="<?= site_url('posts?category=devops') ?>" <?= (isset($_GET['category']) && $_GET['category'] == 'devops') ? 'selected' : '' ?>>DevOps</option>
                <option value="<?= site_url('posts?category=ai-ml') ?>" <?= (isset($_GET['category']) && $_GET['category'] == 'ai-ml') ? 'selected' : '' ?>>AI & Machine Learning</option>
            </select>
        </div>
    </div>
    
    <!-- Featured post (first post or a selected featured post) -->
    <div class="featured-post mb-5">
        <div class="card border-0 shadow-sm overflow-hidden">
            <div class="row g-0">
                <div class="col-lg-6">
                    <img src="https://via.placeholder.com/800x600?text=Featured+Article" class="img-fluid h-100 object-fit-cover" alt="Featured Article">
                </div>
                <div class="col-lg-6">
                    <div class="card-body p-4 p-lg-5">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="badge bg-primary">Featured</span>
                            <small class="text-muted">May 9, 2025</small>
                        </div>
                        <h2 class="card-title h3 fw-bold">The Future of Web Development: Trends to Watch in 2025</h2>
                        <p class="card-text my-3">Explore the emerging technologies and frameworks that are shaping the future of web development. From WebAssembly to Edge Computing, discover what's driving innovation in the industry...</p>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex align-items-center">
                                <img src="https://via.placeholder.com/40" class="rounded-circle me-2" alt="Author Avatar">
                                <div>
                                    <h6 class="mb-0 small">Alex Morgan</h6>
                                    <small class="text-muted">Senior Web Developer</small>
                                </div>
                            </div>
                            <div>
                                <span class="me-3"><i class="far fa-heart text-danger"></i> 248</span>
                                <span><i class="far fa-comment text-primary"></i> 42</span>
                            </div>
                        </div>
                        <a href="<?= site_url('posts/1') ?>" class="btn btn-primary">Read Article</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Article listing -->
    <div class="row g-4">
        <?php for ($i = 1; $i <= 9; $i++): // Replace with actual posts data ?>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="https://via.placeholder.com/800x450?text=Article+<?= $i ?>" class="card-img-top" alt="Article Image">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="badge bg-<?= $i % 3 == 0 ? 'success' : ($i % 2 == 0 ? 'info' : 'warning') ?>">
                                <?= $i % 3 == 0 ? 'DevOps' : ($i % 2 == 0 ? 'Data Science' : 'Web Dev') ?>
                            </span>
                            <small class="text-muted">May <?= $i + 1 ?>, 2025</small>
                        </div>
                        <h3 class="h5 card-title fw-bold">
                            <a href="<?= site_url('posts/' . $i) ?>" class="text-decoration-none text-dark">
                                <?= $i % 3 == 0 ? 'Optimizing CI/CD Pipelines for Faster Deployment' : 
                                   ($i % 2 == 0 ? 'Data Visualization Techniques Every Developer Should Know' : 
                                   'Building Responsive UIs with Modern CSS Frameworks') ?>
                            </a>
                        </h3>
                        <p class="card-text text-secondary my-3">
                            <?= $i % 3 == 0 ? 'Learn how to improve your continuous integration and deployment workflows to ship code faster and more reliably...' : 
                               ($i % 2 == 0 ? 'Effective data visualization is essential for understanding complex datasets. Discover the best techniques for your projects...' : 
                               'Explore the latest CSS frameworks and learn how to create beautiful, responsive user interfaces for any screen size...') ?>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="https://via.placeholder.com/32" class="rounded-circle me-2" alt="Author Avatar">
                                <small>
                                    <?= $i % 3 == 0 ? 'David Kim' : ($i % 2 == 0 ? 'Sarah Johnson' : 'Mike Richards') ?>
                                </small>
                            </div>
                            <div>
                                <small class="text-muted">
                                    <i class="far fa-heart me-1"></i> <?= rand(5, 200) ?>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
    
    <!-- Pagination -->
    <nav class="mt-5">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>
<?= $this->endSection() ?> 