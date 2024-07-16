<style>
  /* styling sidebar */
  body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
  }

  #sidebar {
    width: 250px;
    min-height: 100vh;
    background-color: #343a40;
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  #sidebar .nav-link {
    color: white;
  }

  #sidebar .nav-link.active {
    background-color: #495057;
  }
</style>

<div class="d-flex">
  <!-- sidebar -->
  <nav class="sidebar" id="sidebar">
    <!-- admin profile -->
    <div>
      <div class="d-flex justify-content-evenly align-items-center py-4" id="admin-profile">
        <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="profile" class="rounded-circle" width="64" height="64">
        <div class="text-center">
          <p class="h5 font-weight-bold">Admin</p>
          <p>Abdul Aziz Firdaus</p>
        </div>
      </div>

      <!-- menu sidebar -->
      <ul class="nav flex-column py-2" id="menu-sidebar">
        <li class="nav-item mb-4">
          <a class="nav-link text-white px-4 py-2 {{ request()->is('admin/dashboard') ? 'active' : '' }}" href="{{ route('dashboard.index') }}">
            <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
          </a>
        </li>
        <li class="nav-item mb-4">
          <a class="nav-link text-white px-4 py-2 {{ request()->is('admin/DataProduk') ? 'active' : '' }}" href="{{ route('DataProduk.index') }}">
            <i class="fas fa-box mr-2"></i> Data Produk
          </a>
        </li>
        <li class="nav-item mb-4">
          <a class="nav-link text-white px-4 py-2 {{ request()->is('admin/DataPenjualan') ? 'active' : '' }}" href="{{ route('DataPenjualan.index') }}">
            <i class="fas fa-chart-line mr-2"></i> Data Penjualan
          </a>
        </li>
      </ul>
    </div>

    <!-- footer sidebar -->
    <div class="mb-4" id="footer-sidebar">
      <div class="d-flex justify-content-center">
        <a class="btn btn-dark text-white w-75 mb-4" href="{{ route('logout.index') }}">
          Keluar
        </a>
      </div>

      <div class="text-center">
        <div class="font-weight-medium text-sm">
          <div class="text-primary">
            15 Juli 2024
          </div>
          <div class="text-secondary">
            Abdul Aziz Firdaus
          </div>
        </div>
      </div>
    </div>
  </nav>