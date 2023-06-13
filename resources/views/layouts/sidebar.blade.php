<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('pub/images/dimas.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">MENU ADMIN</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ url('homepage') }}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>EDIT - HOME</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('aboutme') }}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>EDIT - ABOUT ME</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('skill') }}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>CRUD - SKILL</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('recentproject') }}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>EDIT - RECENT PROJECT</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('project') }}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>CRUD - OTHER PROJECT</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('contact') }}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>EDIT - CONTACT</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
