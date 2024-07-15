<nav class="w-64 bg-gray-800 min-h-screen text-white">
  <!-- admin profile -->
  <div class="flex justify-evenly items-center py-5" id="admin-profile">
    <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="profile" class="w-16 h-16 rounded-full">
    <div class="text-center">
      <p class="text-lg font-semibold">Admin</p>
      <p>Abdul Aziz Firdaus</p>
    </div>
  </div>

  <!-- menu sidebar -->
  <ul class="mt-4" id="menu-sidebar">
    <li class="py-2 px-4 hover:bg-gray-700 {{ request()->is('admin/dashboard') ? 'bg-gray-900' : '' }} mb-4">
      <i class="fas fa-tachometer-alt mr-2"></i>
      <a href="{{ route('dashboard.index') }}">Dashboard</a>
    </li>
    <li class="py-2 px-4 hover:bg-gray-700 {{ request()->is('admin/DataProduk') ? 'bg-gray-900' : '' }} mb-4">
      <i class="fas fa-box mr-2"></i>
      <a href="{{ route('DataProduk.index') }}">Data Produk</a>
    </li>
    <li class="py-2 px-4 hover:bg-gray-700 {{ request()->is('admin/DataPenjualan') ? 'bg-gray-900' : '' }} mb-4">
      <i class="fas fa-chart-line mr-2"></i>
      <a href="{{ route('DataPenjualan.index') }}">Data Penjualan</a>
    </li>
  </ul>

  <!-- footer sidebar -->
  <div class="mt-8" id="footer-sidebar">
    <div class="flex justify-center">
      <button class="py-2 px-4 rounded-lg bg-gray-900 {{ request()->is('admin/logout') ? 'hover:bg-gray-700' : '' }} mb-4 w-48">
        <a href="{{ route('logout.index') }}" class="flex items-center justify-center h-full">
          <span class="text-sm leading-1 font-medium text-white">Keluar</span>
        </a>
      </button>
    </div>

    <div class="text-center">
      <figcaption class="font-medium text-sm">
        <div class="text-sky-500 dark:text-sky-400">
          15 Juli 2024
        </div>
        <div class="text-slate-700 dark:text-slate-500">
          Abdul Aziz Firdaus
        </div>
      </figcaption>
    </div>
  </div>
</nav>