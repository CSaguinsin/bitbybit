<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Login<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="min-h-screen flex flex-col md:flex-row">
  <!-- Left: Tech Blogging Sidebar -->
  <aside class="hidden md:flex flex-col justify-center items-center w-1/2 bg-gradient-to-br from-indigo-800 via-purple-800 to-pink-600 text-white p-10 relative">
    <div class="absolute inset-0 opacity-20 pointer-events-none select-none">
      <svg class="w-full h-full" viewBox="0 0 600 600" fill="none"><circle cx="300" cy="300" r="300" fill="url(#paint0_radial)" fill-opacity=".7"/><defs><radialGradient id="paint0_radial" cx="0" cy="0" r="1" gradientTransform="translate(300 300) scale(300)" gradientUnits="userSpaceOnUse"><stop stop-color="#fff"/><stop offset="1" stop-color="#a5b4fc"/></radialGradient></defs></svg>
    </div>
    <div class="relative z-10 flex flex-col items-center w-full max-w-xs">
      <!-- Tech Blogging SVG Illustration -->
      <div class="mb-6">
        <svg width="120" height="120" viewBox="0 0 120 120" fill="none"><rect x="10" y="20" width="100" height="60" rx="8" fill="#fff" fill-opacity=".12"/><rect x="18" y="30" width="84" height="8" rx="2" fill="#a5b4fc"/><rect x="18" y="44" width="60" height="6" rx="2" fill="#fbbf24"/><rect x="18" y="54" width="84" height="6" rx="2" fill="#f472b6"/><rect x="18" y="64" width="40" height="6" rx="2" fill="#34d399"/></svg>
      </div>
      <div class="text-3xl font-extrabold tracking-tight mb-2 font-mono">BIT BY BIT</div>
      <div class="text-lg font-semibold mb-4">Welcome Back to the Blogosphere</div>
      <div class="text-base text-indigo-100 mb-6 text-center">Sign in to write, read, and connect with the best minds in tech. Your next big idea starts here.</div>
      <div class="bg-white/10 rounded-lg p-4 text-sm italic text-indigo-100 border-l-4 border-indigo-400 mb-2">“The best place to share your tech journey and learn from others.”<br><span class="not-italic font-bold text-indigo-200">— Liam, Cloud Engineer</span></div>
    </div>
  </aside>
  <!-- Right: Form -->
  <div class="flex-1 flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-8">
    <div class="w-full max-w-md bg-white/90 backdrop-blur-lg rounded-2xl shadow-xl border border-gray-200 p-6 sm:p-8">
      <h2 class="text-2xl font-bold text-gray-900 mb-2 text-center font-mono">Sign in to the Developer Community</h2>
      <p class="text-gray-500 text-center mb-6 text-sm">Access your dashboard, write new posts, and join the conversation</p>
      <?php if (session()->getFlashdata('error')): ?>
        <div class="mb-4 bg-red-100 text-red-700 px-4 py-3 rounded-lg text-sm text-center">
          <?= session()->getFlashdata('error') ?>
        </div>
      <?php endif; ?>
      <?php if (session()->getFlashdata('success')): ?>
        <div class="mb-4 bg-green-100 text-green-700 px-4 py-3 rounded-lg text-sm text-center">
          <?= session()->getFlashdata('success') ?>
        </div>
      <?php endif; ?>
      <form action="<?= site_url('login') ?>" method="post" class="space-y-5">
        <?= csrf_field() ?>
        <div class="relative">
          <input type="email" id="email" name="email" value="<?= old('email') ?>" required autocomplete="email" placeholder=" " class="peer block w-full rounded-lg border border-gray-300 bg-white/95 px-4 pt-5 pb-2 text-gray-900 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none transition text-base placeholder-transparent">
          <label for="email" class="absolute left-4 top-2 text-gray-500 text-sm transition-all duration-200 peer-placeholder-shown:top-4 peer-placeholder-shown:text-base peer-focus:top-2 peer-focus:text-sm">Email Address</label>
          <?php if (isset($validation) && $validation->hasError('email')): ?>
            <div class="text-xs text-red-600 mt-1 ml-1">
              <?= $validation->getError('email') ?>
            </div>
          <?php endif; ?>
        </div>
        <div class="relative">
          <input type="password" id="password" name="password" required autocomplete="current-password" placeholder=" " class="peer block w-full rounded-lg border border-gray-300 bg-white/95 px-4 pt-5 pb-2 text-gray-900 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none transition text-base placeholder-transparent">
          <label for="password" class="absolute left-4 top-2 text-gray-500 text-sm transition-all duration-200 peer-placeholder-shown:top-4 peer-placeholder-shown:text-base peer-focus:top-2 peer-focus:text-sm">Password</label>
          <?php if (isset($validation) && $validation->hasError('password')): ?>
            <div class="text-xs text-red-600 mt-1 ml-1">
              <?= $validation->getError('password') ?>
            </div>
          <?php endif; ?>
        </div>
        <div class="flex items-center justify-between mb-2">
          <div class="flex items-center">
            <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
            <label for="remember" class="ml-2 block text-xs text-gray-700">Remember me</label>
          </div>
          <a href="<?= site_url('forgot-password') ?>" class="text-xs text-indigo-600 hover:underline">Forgot Password?</a>
        </div>
        <button type="submit" class="w-full py-3 mt-2 rounded-lg bg-gradient-to-r from-indigo-600 via-pink-500 to-purple-600 text-white font-bold shadow-lg hover:scale-[1.02] transition-all text-base">Sign In</button>
      </form>
      <div class="mt-6 text-center">
        <p class="text-sm text-gray-600">Don't have an account? <a href="<?= site_url('register') ?>" class="text-indigo-600 font-semibold hover:underline">Register now</a></p>
      </div>
    </div>
  </div>
</div>
<!-- Mobile: Blogging illustration and quote above form -->
<div class="md:hidden flex flex-col items-center justify-center bg-gradient-to-br from-indigo-800 via-purple-800 to-pink-600 text-white py-8 px-4">
  <div class="mb-4">
    <svg width="80" height="80" viewBox="0 0 120 120" fill="none"><rect x="10" y="20" width="100" height="60" rx="8" fill="#fff" fill-opacity=".12"/><rect x="18" y="30" width="84" height="8" rx="2" fill="#a5b4fc"/><rect x="18" y="44" width="60" height="6" rx="2" fill="#fbbf24"/><rect x="18" y="54" width="84" height="6" rx="2" fill="#f472b6"/><rect x="18" y="64" width="40" height="6" rx="2" fill="#34d399"/></svg>
  </div>
  <div class="bg-white/10 rounded-lg p-4 text-sm italic text-indigo-100 border-l-4 border-indigo-400 mb-2">“The best place to share your tech journey and learn from others.”<br><span class="not-italic font-bold text-indigo-200">— Liam, Cloud Engineer</span></div>
</div>
<?= $this->endSection() ?> 