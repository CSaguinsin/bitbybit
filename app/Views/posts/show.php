<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Article Title<?= $this->endSection() ?>

<?= $this->section('styles') ?>
<style>
    .post-content {
        font-size: 1.1rem;
        line-height: 1.8;
    }
    
    .post-content p {
        margin-bottom: 1.5rem;
    }
    
    .post-content img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        margin: 2rem 0;
    }
    
    .post-content h2 {
        margin-top: 2.5rem;
        margin-bottom: 1.5rem;
        font-weight: 700;
    }
    
    .post-content h3 {
        margin-top: 2rem;
        margin-bottom: 1rem;
        font-weight: 600;
    }
    
    .post-content ul, .post-content ol {
        margin-bottom: 1.5rem;
        padding-left: 1.5rem;
    }
    
    .post-content li {
        margin-bottom: 0.5rem;
    }
    
    .post-content blockquote {
        border-left: 4px solid var(--primary-color);
        padding-left: 1.5rem;
        margin-left: 0;
        margin-bottom: 1.5rem;
        font-style: italic;
        color: var(--text-secondary);
    }
    
    .post-content code {
        background-color: #f1f5f9;
        padding: 0.2rem 0.4rem;
        border-radius: 4px;
        font-family: 'Source Code Pro', monospace;
        font-size: 0.9rem;
    }
    
    .post-content pre {
        background-color: #1e293b;
        color: #e2e8f0;
        padding: 1.5rem;
        border-radius: 8px;
        overflow-x: auto;
        margin-bottom: 1.5rem;
    }
    
    .post-content pre code {
        background-color: transparent;
        color: inherit;
        padding: 0;
        font-size: 0.9rem;
    }
    
    .author-bio {
        background-color: #f8fafc;
        border-radius: 10px;
        padding: 1.5rem;
        margin-top: 3rem;
        margin-bottom: 2rem;
    }
    
    .comment {
        border-bottom: 1px solid #e2e8f0;
        padding-bottom: 1.5rem;
        margin-bottom: 1.5rem;
    }
    
    .comment:last-child {
        border-bottom: none;
    }
    
    .tag {
        text-decoration: none;
        color: var(--text-secondary);
        background-color: #f1f5f9;
        padding: 0.3rem 0.8rem;
        border-radius: 50px;
        font-size: 0.85rem;
        transition: all 0.2s;
    }
    
    .tag:hover {
        background-color: var(--primary-color);
        color: white;
    }
    
    .social-share a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        color: white;
        margin-right: 0.5rem;
        transition: all 0.2s;
    }
    
    .social-share a:hover {
        transform: translateY(-3px);
    }
    
    .social-share .twitter {
        background-color: #1DA1F2;
    }
    
    .social-share .facebook {
        background-color: #4267B2;
    }
    
    .social-share .linkedin {
        background-color: #0077B5;
    }
    
    .social-share .reddit {
        background-color: #FF4500;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container py-5">
    <div class="row">
        <!-- Main content area -->
        <div class="col-lg-8">
            <!-- Article header -->
            <div class="mb-4">
                <div class="d-flex align-items-center mb-3">
                    <span class="badge bg-primary me-2">Web Development</span>
                    <span class="text-secondary">Published on May 9, 2025</span>
                </div>
                <h1 class="fw-bold mb-3">The Future of Web Development: Trends to Watch in 2025</h1>
                <div class="d-flex align-items-center mb-4">
                    <img src="https://via.placeholder.com/48" class="rounded-circle me-3" alt="Author Avatar">
                    <div>
                        <h6 class="mb-0">Alex Morgan</h6>
                        <span class="text-secondary">Senior Web Developer</span>
                    </div>
                </div>
            </div>
            
            <!-- Featured image -->
            <div class="mb-5">
                <img src="https://via.placeholder.com/1200x600?text=Featured+Image" alt="Featured Image" class="img-fluid rounded">
            </div>
            
            <!-- Article content -->
            <div class="post-content mb-5">
                <p>The web development landscape is constantly evolving, with new technologies, frameworks, and methodologies emerging at a rapid pace. As we move through 2025, several key trends are shaping the future of how we build and interact with web applications.</p>
                
                <p>In this comprehensive guide, we'll explore the most significant trends that every web developer should be aware of to stay competitive in the industry.</p>
                
                <h2>1. WebAssembly is Changing the Game</h2>
                
                <p>WebAssembly (Wasm) has moved beyond its experimental phase and is now a core technology in modern web development. By allowing code written in languages like C++, Rust, and Go to run at near-native speeds in the browser, WebAssembly has opened up new possibilities for web applications.</p>
                
                <pre><code>// Example of using WebAssembly in JavaScript
const importObject = {
  imports: {
    imported_func: (arg) => {
      console.log(arg);
    }
  }
};

fetch('simple.wasm')
  .then(response => response.arrayBuffer())
  .then(bytes => WebAssembly.instantiate(bytes, importObject))
  .then(obj => {
    obj.instance.exports.exported_func();
  });</code></pre>
                
                <p>Key applications of WebAssembly in 2025 include:</p>
                
                <ul>
                    <li>High-performance web games and graphics applications</li>
                    <li>Complex data visualization tools</li>
                    <li>CPU-intensive tasks like real-time video editing</li>
                    <li>Porting desktop applications to the web</li>
                </ul>
                
                <h2>2. Edge Computing: Moving Beyond CDNs</h2>
                
                <p>Edge computing has evolved from simple content delivery networks to full computing environments at the edge. Platforms like Cloudflare Workers, Vercel Edge Functions, and Netlify Edge allow developers to run code closer to users, reducing latency and improving application performance.</p>
                
                <blockquote>
                    "The future of web development is not just about moving computation to the cloud, but strategically distributing it between the client, edge, and cloud based on specific application needs." — Sarah Johnson, Cloud Architect
                </blockquote>
                
                <h2>3. AI-Assisted Development Tools</h2>
                
                <p>Artificial intelligence is transforming how we write code. AI-powered development tools can now generate code snippets, complete functions, fix bugs, and even optimize performance. These tools are becoming increasingly sophisticated, understanding context and intent rather than just syntax.</p>
                
                <p>Popular AI-assisted development tools in 2025 include:</p>
                
                <ul>
                    <li>GitHub Copilot X</li>
                    <li>Tabnine</li>
                    <li>Kite</li>
                    <li>DeepCode</li>
                </ul>
                
                <h2>4. The Rise of Micro-Frontends</h2>
                
                <p>Micro-frontends have become a mainstream architectural pattern for large-scale web applications. By breaking down monolithic front-end codebases into smaller, more manageable pieces that can be developed, tested, and deployed independently, teams can work more efficiently on complex applications.</p>
                
                <p>This approach particularly benefits organizations with multiple teams working on different parts of a large application.</p>
                
                <h2>5. Server Components and Hybrid Rendering</h2>
                
                <p>The traditional client-side vs. server-side rendering debate has evolved into more nuanced approaches. React Server Components, Next.js, and similar frameworks now offer hybrid rendering strategies that let developers choose the optimal rendering method for each component.</p>
                
                <pre><code>// React Server Component example
// This component fetches data on the server and never runs on the client
async function BlogPost({ id }) {
  const post = await db.posts.findUnique({ where: { id } });
  return (
    &lt;article&gt;
      &lt;h1&gt;{post.title}&lt;/h1&gt;
      &lt;p&gt;{post.content}&lt;/p&gt;
    &lt;/article&gt;
  );
}</code></pre>
                
                <p>This approach offers the best of both worlds: improved performance, better SEO, and enhanced user experience.</p>
                
                <h2>Conclusion</h2>
                
                <p>The web development landscape continues to evolve at a rapid pace, with new technologies and approaches emerging regularly. By staying informed about these trends and continuously updating your skills, you can remain competitive in the industry and build better web applications for your users.</p>
                
                <p>What trends are you most excited about? Have you already started implementing any of these technologies in your projects? Share your thoughts in the comments below!</p>
            </div>
            
            <!-- Tags -->
            <div class="mb-5">
                <h4 class="mb-3">Tags</h4>
                <div class="d-flex flex-wrap gap-2">
                    <a href="#" class="tag">WebDevelopment</a>
                    <a href="#" class="tag">JavaScript</a>
                    <a href="#" class="tag">WebAssembly</a>
                    <a href="#" class="tag">EdgeComputing</a>
                    <a href="#" class="tag">AI</a>
                    <a href="#" class="tag">FrontendDevelopment</a>
                </div>
            </div>
            
            <!-- Author bio -->
            <div class="author-bio">
                <div class="row">
                    <div class="col-md-2 text-center mb-3 mb-md-0">
                        <img src="https://via.placeholder.com/120" class="rounded-circle img-fluid" alt="Author Avatar">
                    </div>
                    <div class="col-md-10">
                        <h4>Alex Morgan</h4>
                        <p class="text-secondary mb-2">Senior Web Developer</p>
                        <p class="mb-3">Alex has over 10 years of experience in web development, specializing in front-end technologies and performance optimization. He is passionate about sharing knowledge and helping developers stay ahead of industry trends.</p>
                        <div class="d-flex">
                            <a href="#" class="btn btn-sm btn-outline-primary me-2"><i class="fab fa-twitter me-1"></i> Follow</a>
                            <a href="#" class="btn btn-sm btn-outline-secondary"><i class="far fa-envelope me-1"></i> Contact</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Comments section -->
            <div class="comments mt-5">
                <h3 class="mb-4">Comments (3)</h3>
                
                <!-- Comment form -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="mb-3">Leave a Comment</h5>
                        <?php if (session()->get('isLoggedIn')): ?>
                            <form action="<?= site_url('posts/1/comment') ?>" method="post">
                                <?= csrf_field() ?>
                                <div class="mb-3">
                                    <textarea class="form-control" rows="3" placeholder="Share your thoughts..." name="content" required></textarea>
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Post Comment</button>
                                </div>
                            </form>
                        <?php else: ?>
                            <div class="alert alert-info mb-0">
                                Please <a href="<?= site_url('login') ?>" class="alert-link">login</a> to leave a comment.
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                
                <!-- Comments list -->
                <div class="comments-list">
                    <!-- Comment 1 -->
                    <div class="comment">
                        <div class="d-flex mb-3">
                            <img src="https://via.placeholder.com/48" class="rounded-circle me-3" alt="User Avatar" width="48" height="48">
                            <div>
                                <h5 class="mb-0">Sarah Johnson</h5>
                                <span class="text-secondary small">2 days ago</span>
                            </div>
                        </div>
                        <p>Great article! I've been experimenting with WebAssembly in my projects and the performance gains are impressive. Looking forward to seeing how the ecosystem evolves.</p>
                        <div class="d-flex align-items-center">
                            <button class="btn btn-sm btn-outline-secondary me-2"><i class="far fa-heart me-1"></i> Like (15)</button>
                            <button class="btn btn-sm btn-outline-secondary me-2"><i class="far fa-comment me-1"></i> Reply</button>
                        </div>
                    </div>
                    
                    <!-- Comment 2 -->
                    <div class="comment">
                        <div class="d-flex mb-3">
                            <img src="https://via.placeholder.com/48" class="rounded-circle me-3" alt="User Avatar" width="48" height="48">
                            <div>
                                <h5 class="mb-0">David Chen</h5>
                                <span class="text-secondary small">1 day ago</span>
                            </div>
                        </div>
                        <p>I'm particularly excited about the advancements in Edge Computing. Being able to run complex logic closer to users has been a game-changer for our global applications. Have you explored Deno Deploy for edge functions?</p>
                        <div class="d-flex align-items-center">
                            <button class="btn btn-sm btn-outline-secondary me-2"><i class="far fa-heart me-1"></i> Like (8)</button>
                            <button class="btn btn-sm btn-outline-secondary me-2"><i class="far fa-comment me-1"></i> Reply</button>
                        </div>
                    </div>
                    
                    <!-- Comment 3 -->
                    <div class="comment">
                        <div class="d-flex mb-3">
                            <img src="https://via.placeholder.com/48" class="rounded-circle me-3" alt="User Avatar" width="48" height="48">
                            <div>
                                <h5 class="mb-0">Emily Rodriguez</h5>
                                <span class="text-secondary small">12 hours ago</span>
                            </div>
                        </div>
                        <p>The section on micro-frontends resonated with me. Our team recently restructured our application using this approach, and it has significantly improved our development workflow. Do you have any recommendations for handling shared state across micro-frontends?</p>
                        <div class="d-flex align-items-center">
                            <button class="btn btn-sm btn-outline-secondary me-2"><i class="far fa-heart me-1"></i> Like (3)</button>
                            <button class="btn btn-sm btn-outline-secondary me-2"><i class="far fa-comment me-1"></i> Reply</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Sidebar -->
        <div class="col-lg-4">
            <!-- Social sharing -->
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Share This Article</h5>
                    <div class="social-share mt-3">
                        <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="reddit"><i class="fab fa-reddit-alien"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Article stats -->
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Article Stats</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><i class="far fa-eye me-2"></i> Views</span>
                            <span class="badge bg-primary rounded-pill">1,245</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><i class="far fa-heart me-2"></i> Likes</span>
                            <span class="badge bg-primary rounded-pill">248</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><i class="far fa-comment me-2"></i> Comments</span>
                            <span class="badge bg-primary rounded-pill">42</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><i class="far fa-bookmark me-2"></i> Bookmarks</span>
                            <span class="badge bg-primary rounded-pill">87</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Related articles -->
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Related Articles</h5>
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action border-0 px-0">
                            <div class="d-flex">
                                <img src="https://via.placeholder.com/80" class="me-3 rounded" alt="Article thumbnail">
                                <div>
                                    <h6 class="mb-1">Modern CSS Frameworks Comparison</h6>
                                    <small class="text-secondary">May 2, 2025</small>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action border-0 px-0">
                            <div class="d-flex">
                                <img src="https://via.placeholder.com/80" class="me-3 rounded" alt="Article thumbnail">
                                <div>
                                    <h6 class="mb-1">Getting Started with WebAssembly</h6>
                                    <small class="text-secondary">April 28, 2025</small>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action border-0 px-0">
                            <div class="d-flex">
                                <img src="https://via.placeholder.com/80" class="me-3 rounded" alt="Article thumbnail">
                                <div>
                                    <h6 class="mb-1">Optimizing React Applications in 2025</h6>
                                    <small class="text-secondary">April 15, 2025</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Newsletter signup -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Stay Updated</h5>
                    <p class="card-text">Subscribe to our newsletter to get the latest tech articles and updates.</p>
                    <form>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Your email" aria-label="Your email">
                            <button class="btn btn-primary" type="button">Subscribe</button>
                        </div>
                        <div class="form-text">We respect your privacy. Unsubscribe at any time.</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?> 