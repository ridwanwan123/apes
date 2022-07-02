<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="{{ route('homepage') }}" class="app-brand-link">
        <span class="app-brand-logo demo">
          <img src="{{ asset('admin/assets/img/avatars/A1.png') }}" alt="" width="30px" srcset="">
        </span>
        <span class="app-brand-text demo menu-text fw-bolder ms-2"> APES</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item active">
        <a href="{{ route('admin.dashboard') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Dashboard</div>
        </a>
      </li>

      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Data</span>
      </li>
      <li class="menu-item">
        <a href="{{ route('admin.pelaporan-seksual') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bxs-report"></i>
          <div data-i18n="Analytics">Laporan Pelecehan Seksual</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('admin.berita-pelecehan') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bxs-report"></i>
          <div data-i18n="Analytics">Berita Pelecehan Seksual</div>
        </a>
      </li>
    </ul>
  </aside>