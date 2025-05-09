<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>About Us<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container py-5">
    <!-- Header -->
    <div class="row mb-5">
        <div class="col-lg-10 mx-auto text-center">
            <h1 class="display-4 fw-bold mb-4">About BIT BY BIT</h1>
            <p class="lead text-secondary mb-0">A comprehensive platform designed for technology enthusiasts, developers, and tech professionals to share knowledge, expertise, and insights.</p>
        </div>
    </div>
    
    <!-- Mission Section -->
    <div class="row mb-5">
        <div class="col-lg-10 mx-auto">
            <div class="card border-0 shadow-sm overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-6">
                        <img src="https://via.placeholder.com/800x600?text=Our+Mission" class="img-fluid h-100 object-fit-cover" alt="Our Mission">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body p-4 p-lg-5">
                            <h2 class="fw-bold mb-4">Our Mission</h2>
                            <p class="mb-3">BIT BY BIT envisions a specialized platform where tech community members can effortlessly share programming tips, technology reviews, industry insights, and technical knowledge while building meaningful professional connections.</p>
                            <p class="mb-0">By creating a secure, responsive, and user-friendly environment, we aim to promote active participation and foster a sense of belonging among technology enthusiasts and professionals.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Values Section -->
    <div class="row mb-5">
        <div class="col-lg-10 mx-auto">
            <h2 class="fw-bold text-center mb-4">Our Core Values</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="rounded-circle bg-primary bg-opacity-10 p-3 d-inline-flex mb-3">
                                <i class="fas fa-lightbulb text-primary fa-2x"></i>
                            </div>
                            <h3 class="h5 card-title">Knowledge Sharing</h3>
                            <p class="card-text text-secondary">We believe in the power of sharing knowledge and experiences to advance collective understanding in the technology community.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="rounded-circle bg-primary bg-opacity-10 p-3 d-inline-flex mb-3">
                                <i class="fas fa-users text-primary fa-2x"></i>
                            </div>
                            <h3 class="h5 card-title">Community</h3>
                            <p class="card-text text-secondary">We foster an inclusive, supportive environment where tech enthusiasts of all backgrounds and skill levels can connect and grow together.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="rounded-circle bg-primary bg-opacity-10 p-3 d-inline-flex mb-3">
                                <i class="fas fa-shield-alt text-primary fa-2x"></i>
                            </div>
                            <h3 class="h5 card-title">Integrity</h3>
                            <p class="card-text text-secondary">We uphold the highest standards of honesty, transparency, and ethical practices in all our interactions and content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Story Section -->
    <div class="row mb-5">
        <div class="col-lg-10 mx-auto">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4 p-lg-5">
                    <h2 class="fw-bold mb-4 text-center">Our Story</h2>
                    <p>BIT BY BIT was born from a simple observation: while there are many general platforms for content sharing, few are designed specifically with the needs of technology professionals in mind.</p>
                    
                    <p>In 2024, a group of passionate developers and tech enthusiasts came together with a vision to create a dedicated space for the technology community – a place where knowledge could be shared in a structured, meaningful way, and where connections between professionals could flourish.</p>
                    
                    <p>What started as a small community has grown into a vibrant ecosystem of developers, data scientists, security experts, and technology enthusiasts from around the world. Today, BIT BY BIT serves thousands of users who come together to learn, share, and connect.</p>
                    
                    <p>As we continue to grow, our commitment remains the same: to provide a high-quality platform that empowers technology professionals to share their knowledge and build meaningful professional relationships.</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Team Section -->
    <div class="row mb-5">
        <div class="col-lg-10 mx-auto">
            <h2 class="fw-bold text-center mb-4">Meet Our Team</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm">
                        <img src="https://via.placeholder.com/400x400?text=Team+Member" class="card-img-top" alt="Team Member">
                        <div class="card-body text-center p-4">
                            <h3 class="h5 card-title">Alex Johnson</h3>
                            <p class="text-secondary mb-3">Founder & CEO</p>
                            <p class="card-text">Full-stack developer with over 10 years of experience in building community platforms and enterprise applications.</p>
                            <div class="d-flex justify-content-center mt-3">
                                <a href="#" class="btn btn-sm btn-outline-primary rounded-circle mx-1"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-primary rounded-circle mx-1"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-primary rounded-circle mx-1"><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm">
                        <img src="https://via.placeholder.com/400x400?text=Team+Member" class="card-img-top" alt="Team Member">
                        <div class="card-body text-center p-4">
                            <h3 class="h5 card-title">Sarah Chen</h3>
                            <p class="text-secondary mb-3">CTO</p>
                            <p class="card-text">Backend specialist with extensive experience in scalable architectures and database optimization.</p>
                            <div class="d-flex justify-content-center mt-3">
                                <a href="#" class="btn btn-sm btn-outline-primary rounded-circle mx-1"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-primary rounded-circle mx-1"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-primary rounded-circle mx-1"><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm">
                        <img src="https://via.placeholder.com/400x400?text=Team+Member" class="card-img-top" alt="Team Member">
                        <div class="card-body text-center p-4">
                            <h3 class="h5 card-title">Michael Rodriguez</h3>
                            <p class="text-secondary mb-3">UX/UI Lead</p>
                            <p class="card-text">User experience designer with a passion for creating intuitive, accessible interfaces for complex applications.</p>
                            <div class="d-flex justify-content-center mt-3">
                                <a href="#" class="btn btn-sm btn-outline-primary rounded-circle mx-1"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-primary rounded-circle mx-1"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-primary rounded-circle mx-1"><i class="fab fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Contact Section -->
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4 p-lg-5">
                    <div class="row">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <h2 class="fw-bold mb-4">Contact Us</h2>
                            <p class="mb-4">Have questions or suggestions? We'd love to hear from you!</p>
                            
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Your Name</label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="subject" class="form-label">Subject</label>
                                    <input type="text" class="form-control" id="subject">
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" id="message" rows="4" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </form>
                        </div>
                        
                        <div class="col-md-6">
                            <h2 class="fw-bold mb-4">Connect With Us</h2>
                            <p class="mb-4">Follow us on social media or reach out through these channels:</p>
                            
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary bg-opacity-10 p-3 rounded me-3">
                                    <i class="fas fa-envelope text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0">Email</h5>
                                    <p class="mb-0"><a href="mailto:info@bitbybit.com" class="text-decoration-none">info@bitbybit.com</a></p>
                                </div>
                            </div>
                            
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary bg-opacity-10 p-3 rounded me-3">
                                    <i class="fas fa-map-marker-alt text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0">Location</h5>
                                    <p class="mb-0">San Francisco, CA</p>
                                </div>
                            </div>
                            
                            <div class="d-flex align-items-center mb-4">
                                <div class="bg-primary bg-opacity-10 p-3 rounded me-3">
                                    <i class="fas fa-phone text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0">Phone</h5>
                                    <p class="mb-0"><a href="tel:+14155552671" class="text-decoration-none">+1 (415) 555-2671</a></p>
                                </div>
                            </div>
                            
                            <div class="social-links">
                                <h5 class="mb-3">Follow Us</h5>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-outline-primary me-2"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="btn btn-outline-primary me-2"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="btn btn-outline-primary me-2"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#" class="btn btn-outline-primary me-2"><i class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?> 