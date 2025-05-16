<?= $this->extend('layouts/admin') ?>

<?= $this->section('title') ?>Admin Dashboard<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="min-h-screen flex flex-col items-center justify-center py-12 px-4 bg-gradient-to-br from-gray-100 via-indigo-100 to-purple-100">
  <!-- Hero Section -->
  <div class="w-full max-w-3xl bg-white/90 backdrop-blur-lg rounded-3xl shadow-2xl border border-indigo-100 p-8 mb-10 flex flex-col md:flex-row items-center gap-8">
    <div class="flex-shrink-0 flex flex-col items-center md:items-start">
      <div class="w-24 h-24 rounded-full bg-gradient-to-br from-indigo-400 via-pink-400 to-purple-400 flex items-center justify-center shadow-lg mb-3">
        <i class="fa-solid fa-user-astronaut text-white text-4xl"></i>
      </div>
      <div class="text-lg font-mono text-indigo-600 mb-1">Welcome,</div>
      <div class="text-3xl font-extrabold font-mono text-gray-900 mb-1 bg-white/80 px-2 py-1 rounded-lg shadow inline-block"> <?= esc($admin) ?> </div>
      <div class="text-indigo-500 font-semibold text-sm mb-2">BIT BY BIT Admin</div>
      <span class="inline-block bg-gradient-to-r from-indigo-500 via-pink-400 to-purple-400 text-white text-xs font-mono px-3 py-1 rounded-full shadow">Tech Blogging Platform</span>
    </div>
    <div class="flex-1 flex flex-col items-center md:items-end">
      <div class="w-full max-w-xs bg-indigo-50/80 rounded-xl p-4 shadow-lg mb-4">
        <div class="text-xs text-indigo-400 font-mono mb-2">// Admin Quick Code</div>
        <pre class="text-xs text-green-600 font-mono bg-gray-100/80 rounded p-2 overflow-x-auto">$ sudo manage bitbybit --admin
&gt; Welcome, <?= esc($admin) ?>!
&gt; You have full control over the platform.
</pre>
      </div>
      <div class="flex gap-3 mt-2">
        <span class="inline-flex items-center px-3 py-1 bg-indigo-200/80 text-indigo-800 text-xs font-mono rounded-full">Role: Admin</span>
        <span class="inline-flex items-center px-3 py-1 bg-pink-200/80 text-pink-800 text-xs font-mono rounded-full">Status: Online</span>
      </div>
    </div>
  </div>

  <!-- Platform Stats -->
  <div class="w-full max-w-4xl grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
    <div class="bg-white/80 backdrop-blur-lg rounded-2xl p-6 flex flex-col items-center shadow border border-indigo-100">
      <div class="text-4xl font-bold text-indigo-500 font-mono mb-1">128</div>
      <div class="text-sm text-gray-700 font-semibold mb-1">Total Users</div>
      <div class="text-xs text-indigo-400 font-mono">Active tech writers</div>
    </div>
    <div class="bg-white/80 backdrop-blur-lg rounded-2xl p-6 flex flex-col items-center shadow border border-pink-100">
      <div class="text-4xl font-bold text-pink-500 font-mono mb-1">342</div>
      <div class="text-sm text-gray-700 font-semibold mb-1">Published Posts</div>
      <div class="text-xs text-pink-400 font-mono">Articles & tutorials</div>
    </div>
    <div class="bg-white/80 backdrop-blur-lg rounded-2xl p-6 flex flex-col items-center shadow border border-green-100">
      <div class="text-4xl font-bold text-green-400 font-mono mb-1">17</div>
      <div class="text-sm text-gray-700 font-semibold mb-1">Categories</div>
      <div class="text-xs text-green-400 font-mono">Tech topics</div>
    </div>
  </div>

  <!-- Admin Actions -->
  <div class="w-full max-w-4xl grid grid-cols-1 md:grid-cols-3 gap-8">
    <a href="<?= site_url('admin/users') ?>" class="group bg-gradient-to-br from-indigo-200 via-purple-200 to-pink-200 rounded-2xl p-6 flex flex-col items-center shadow-lg hover:scale-105 transition-all border border-indigo-100">
      <i class="fa-solid fa-users-cog text-3xl text-indigo-700 mb-3 group-hover:scale-110 transition-transform"></i>
      <div class="text-xl font-bold font-mono text-indigo-800 mb-1">Manage Users</div>
      <div class="text-xs text-indigo-500 font-mono">View, edit, or remove users</div>
    </a>
    <a href="<?= site_url('admin/posts') ?>" class="group bg-gradient-to-br from-pink-200 via-yellow-100 to-indigo-100 rounded-2xl p-6 flex flex-col items-center shadow-lg hover:scale-105 transition-all border border-pink-100">
      <i class="fa-solid fa-file-code text-3xl text-pink-600 mb-3 group-hover:scale-110 transition-transform"></i>
      <div class="text-xl font-bold font-mono text-pink-700 mb-1">Manage Posts</div>
      <div class="text-xs text-pink-500 font-mono">Moderate articles & tutorials</div>
    </a>
    <a href="<?= site_url('admin/categories') ?>" class="group bg-gradient-to-br from-green-100 via-blue-100 to-purple-100 rounded-2xl p-6 flex flex-col items-center shadow-lg hover:scale-105 transition-all border border-green-100">
      <i class="fa-solid fa-layer-group text-3xl text-green-500 mb-3 group-hover:scale-110 transition-transform"></i>
      <div class="text-xl font-bold font-mono text-green-700 mb-1">Manage Categories</div>
      <div class="text-xs text-green-500 font-mono">Organize tech topics</div>
    </a>
  </div>
</div>
<?= $this->endSection() ?> 