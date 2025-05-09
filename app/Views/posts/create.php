<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Create Article<?= $this->endSection() ?>

<?= $this->section('styles') ?>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<style>
    .ck-editor__editable {
        min-height: 400px;
    }
    
    .tag-input {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        padding: 8px;
        min-height: 58px;
    }
    
    .tag {
        display: flex;
        align-items: center;
        background-color: var(--primary-color);
        color: white;
        border-radius: 50px;
        padding: 4px 12px;
        font-size: 0.875rem;
    }
    
    .tag-close {
        cursor: pointer;
        margin-left: 6px;
        font-size: 14px;
    }
    
    .tag-input input {
        flex: 1;
        border: none;
        outline: none;
        padding: 4px;
        min-width: 100px;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container py-5">
    <div class="row">
        <div class="col-lg-9 mx-auto">
            <div class="card border-0 shadow-lg">
                <div class="card-body p-4 p-md-5">
                    <h1 class="h3 fw-bold mb-4">Create New Article</h1>
                    
                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('error') ?>
                        </div>
                    <?php endif; ?>
                    
                    <form action="<?= site_url('posts/store') ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        
                        <!-- Title -->
                        <div class="mb-4">
                            <label for="title" class="form-label">Article Title</label>
                            <input type="text" class="form-control form-control-lg <?= (isset($validation) && $validation->hasError('title')) ? 'is-invalid' : '' ?>" id="title" name="title" value="<?= old('title') ?>" placeholder="Enter a descriptive title" required>
                            <?php if (isset($validation) && $validation->hasError('title')): ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('title') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <!-- Category -->
                        <div class="mb-4">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-select <?= (isset($validation) && $validation->hasError('category')) ? 'is-invalid' : '' ?>" id="category" name="category" required>
                                <option value="" selected disabled>Select a category</option>
                                <option value="programming" <?= (old('category') == 'programming') ? 'selected' : '' ?>>Programming</option>
                                <option value="web-development" <?= (old('category') == 'web-development') ? 'selected' : '' ?>>Web Development</option>
                                <option value="data-science" <?= (old('category') == 'data-science') ? 'selected' : '' ?>>Data Science</option>
                                <option value="devops" <?= (old('category') == 'devops') ? 'selected' : '' ?>>DevOps</option>
                                <option value="ai-ml" <?= (old('category') == 'ai-ml') ? 'selected' : '' ?>>AI & Machine Learning</option>
                                <option value="mobile-dev" <?= (old('category') == 'mobile-dev') ? 'selected' : '' ?>>Mobile Development</option>
                                <option value="security" <?= (old('category') == 'security') ? 'selected' : '' ?>>Security</option>
                                <option value="blockchain" <?= (old('category') == 'blockchain') ? 'selected' : '' ?>>Blockchain</option>
                                <option value="career" <?= (old('category') == 'career') ? 'selected' : '' ?>>Career Development</option>
                            </select>
                            <?php if (isset($validation) && $validation->hasError('category')): ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('category') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <!-- Tags -->
                        <div class="mb-4">
                            <label for="tags" class="form-label">Tags</label>
                            <div class="tag-input">
                                <input type="text" id="tagInput" placeholder="Type and press Enter to add tags">
                            </div>
                            <input type="hidden" id="tags" name="tags" value="<?= old('tags') ?>">
                            <div class="form-text">Add tags related to your article (e.g., JavaScript, WebAssembly, ReactJS)</div>
                            <?php if (isset($validation) && $validation->hasError('tags')): ?>
                                <div class="invalid-feedback d-block">
                                    <?= $validation->getError('tags') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <!-- Featured Image -->
                        <div class="mb-4">
                            <label for="featured_image" class="form-label">Featured Image</label>
                            <input type="file" class="form-control <?= (isset($validation) && $validation->hasError('featured_image')) ? 'is-invalid' : '' ?>" id="featured_image" name="featured_image" accept="image/*">
                            <div class="form-text">Recommended size: 1200 x 600 pixels (16:9 ratio)</div>
                            <?php if (isset($validation) && $validation->hasError('featured_image')): ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('featured_image') ?>
                                </div>
                            <?php endif; ?>
                            <div class="mt-2" id="imagePreview"></div>
                        </div>
                        
                        <!-- Content -->
                        <div class="mb-4">
                            <label for="content" class="form-label">Article Content</label>
                            <textarea id="editor" class="form-control <?= (isset($validation) && $validation->hasError('content')) ? 'is-invalid' : '' ?>" name="content" rows="12"><?= old('content') ?></textarea>
                            <?php if (isset($validation) && $validation->hasError('content')): ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('content') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <!-- Summary -->
                        <div class="mb-4">
                            <label for="summary" class="form-label">Article Summary</label>
                            <textarea class="form-control <?= (isset($validation) && $validation->hasError('summary')) ? 'is-invalid' : '' ?>" id="summary" name="summary" rows="3" placeholder="Write a brief summary of your article (will be displayed in listings)"><?= old('summary') ?></textarea>
                            <?php if (isset($validation) && $validation->hasError('summary')): ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('summary') ?>
                                </div>
                            <?php endif; ?>
                            <div class="form-text"><span id="summaryCharCount">0</span>/250 characters</div>
                        </div>
                        
                        <!-- Publish Status -->
                        <div class="mb-4">
                            <label class="form-label">Publication Status</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="published" id="draft" value="0" <?= (!old('published') || old('published') == '0') ? 'checked' : '' ?>>
                                <label class="form-check-label" for="draft">
                                    Save as Draft
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="published" id="publish" value="1" <?= (old('published') == '1') ? 'checked' : '' ?>>
                                <label class="form-check-label" for="publish">
                                    Publish Immediately
                                </label>
                            </div>
                            <?php if (isset($validation) && $validation->hasError('published')): ?>
                                <div class="invalid-feedback d-block">
                                    <?= $validation->getError('published') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <!-- Terms -->
                        <div class="mb-4 form-check">
                            <input type="checkbox" class="form-check-input <?= (isset($validation) && $validation->hasError('terms')) ? 'is-invalid' : '' ?>" id="terms" name="terms" required>
                            <label class="form-check-label" for="terms">
                                I confirm that this content is original or properly attributed, and complies with the <a href="<?= site_url('terms') ?>" target="_blank">Terms of Service</a>
                            </label>
                            <?php if (isset($validation) && $validation->hasError('terms')): ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('terms') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <!-- Buttons -->
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-outline-secondary" id="previewBtn">
                                <i class="fas fa-eye me-2"></i> Preview
                            </button>
                            <div>
                                <button type="reset" class="btn btn-light me-2">Clear</button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-paper-plane me-2"></i> Submit Article
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Preview Modal -->
<div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="previewModalLabel">Article Preview</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <h1 id="previewTitle" class="mb-3"></h1>
                    <div class="d-flex align-items-center mb-3">
                        <span class="badge bg-primary me-2" id="previewCategory"></span>
                        <small class="text-muted">Draft • <?= date('F d, Y') ?></small>
                    </div>
                    <div class="mb-4">
                        <p class="lead" id="previewSummary"></p>
                    </div>
                    <div class="mb-3" id="previewImage"></div>
                    <div class="post-content" id="previewContent"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
<script>
    // Initialize CKEditor
    ClassicEditor
        .create(document.querySelector('#editor'), {
            toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|', 'outdent', 'indent', '|', 'blockQuote', 'insertTable', 'mediaEmbed', 'undo', 'redo', '|', 'codeBlock']
        })
        .then(editor => {
            window.editor = editor;
        })
        .catch(error => {
            console.error(error);
        });
    
    // Tags functionality
    document.addEventListener('DOMContentLoaded', function() {
        const tagInput = document.getElementById('tagInput');
        const tagContainer = document.querySelector('.tag-input');
        const tagsHiddenInput = document.getElementById('tags');
        const tags = [];
        
        // Load existing tags if any
        if (tagsHiddenInput.value) {
            const existingTags = tagsHiddenInput.value.split(',');
            existingTags.forEach(tag => addTag(tag.trim()));
        }
        
        function addTag(text) {
            if (text.trim() === '' || tags.includes(text.trim())) return;
            
            const tag = document.createElement('span');
            tag.className = 'tag';
            tag.textContent = text.trim();
            
            const closeBtn = document.createElement('span');
            closeBtn.className = 'tag-close';
            closeBtn.innerHTML = '&times;';
            closeBtn.addEventListener('click', function() {
                tag.remove();
                tags.splice(tags.indexOf(text.trim()), 1);
                updateHiddenInput();
            });
            
            tag.appendChild(closeBtn);
            tagContainer.insertBefore(tag, tagInput);
            tags.push(text.trim());
            updateHiddenInput();
        }
        
        function updateHiddenInput() {
            tagsHiddenInput.value = tags.join(',');
        }
        
        tagInput.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ',') {
                e.preventDefault();
                addTag(this.value);
                this.value = '';
            }
        });
        
        tagInput.addEventListener('blur', function() {
            if (this.value.trim() !== '') {
                addTag(this.value);
                this.value = '';
            }
        });
    });
    
    // Image preview
    document.getElementById('featured_image').addEventListener('change', function(e) {
        const preview = document.getElementById('imagePreview');
        preview.innerHTML = '';
        
        if (this.files && this.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'img-fluid mt-2 rounded';
                img.style.maxHeight = '200px';
                preview.appendChild(img);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
    
    // Summary character count
    document.getElementById('summary').addEventListener('input', function() {
        const count = this.value.length;
        document.getElementById('summaryCharCount').textContent = count;
        
        if (count > 250) {
            this.value = this.value.substring(0, 250);
            document.getElementById('summaryCharCount').textContent = 250;
        }
    });
    
    // Preview functionality
    document.getElementById('previewBtn').addEventListener('click', function() {
        const title = document.getElementById('title').value || 'Untitled Article';
        document.getElementById('previewTitle').textContent = title;
        
        const summaryText = document.getElementById('summary').value || 'No summary provided.';
        document.getElementById('previewSummary').textContent = summaryText;
        
        const categorySelect = document.getElementById('category');
        const categoryText = categorySelect.options[categorySelect.selectedIndex]?.text || 'Uncategorized';
        document.getElementById('previewCategory').textContent = categoryText;
        
        const content = window.editor.getData() || '<p>No content yet.</p>';
        document.getElementById('previewContent').innerHTML = content;
        
        const imagePreview = document.getElementById('imagePreview').innerHTML;
        document.getElementById('previewImage').innerHTML = imagePreview;
        
        const previewModal = new bootstrap.Modal(document.getElementById('previewModal'));
        previewModal.show();
    });
</script>
<?= $this->endSection() ?> 