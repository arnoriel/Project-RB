<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      @role('admin')
        <li class="nav-item">
        <a class="nav-link {{ Request::is('administrator') ? '' : 'collapsed' }}" href="/administrator">
          <i class="bi bi-grid"></i>
          <span>Beranda</span>
        </a>
      </li><!-- End Dashboard Nav -->
      @endrole

      @role('admin')
      <li class="nav-item">
        <a class="nav-link {{ Request::is('administrator/resep') ? '' : 'collapsed' }}" href="/administrator/resep">
          <i class="bi bi-book"></i>
          <span>Resep</span>
        </a>
      </li><!-- End Profile Page Nav -->
      @endrole
    
      @role('member')
      <li class="nav-item">
        <a class="nav-link {{ Request::is('member') ? '' : 'collapsed' }}" href="/member">
          <i class="bi bi-grid"></i>
          <span>Beranda</span>
        </a>
      </li><!-- End Dashboard Nav -->
      @endrole

      @role('member')
      <li class="nav-item">
        <a class="nav-link {{ Request::is('member/resep') ? '' : 'collapsed' }}" href="/member/resep">
          <i class="bi bi-book"></i>
          <span>Resep</span>
        </a>
      </li><!-- End Profile Page Nav -->
      @endrole

  </aside><!-- End Sidebar-->