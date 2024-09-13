<!-- Sidebar scroll-->
<div class="scroll-sidebar">
  <!-- Sidebar navigation-->
  <nav class="sidebar-nav">
    <ul id="sidebarnav" class="pt-4">
      <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark sidebar-link"
           href="{{ route('admin.employees.index') }}"
           aria-expanded="false">
          <i class="mdi mdi-view-dashboard"></i>
          <span class="hide-menu">Home</span>
        </a>
      </li>

      <!-- Employees -->
      <li class="sidebar-item">
        <a class="sidebar-link has-arrow waves-effect waves-dark"
           href="javascript:void(0)"
           aria-expanded="false">
          <i class="mdi mdi-receipt"></i>
          <span class="hide-menu">Employees</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="{{ route('admin.employees.index') }}" class="sidebar-link">
              <i class="mdi mdi-note-outline"></i>
              <span class="hide-menu"> All Employees </span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="{{ route('admin.employees.create') }}" class="sidebar-link">
              <i class="mdi mdi-note-plus"></i>
              <span class="hide-menu"> Add Employee </span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="{{ route('admin.employees.archive') }}" class="sidebar-link">
              <i class="mdi mdi-archive"></i>
              <span class="hide-menu"> Employee Archive </span>
            </a>
          </li>
        </ul>
      </li>

      <!-- Departments -->
      <li class="sidebar-item">
        <a class="sidebar-link has-arrow waves-effect waves-dark"
           href="javascript:void(0)"
           aria-expanded="false">
          <i class="mdi mdi-office-building"></i>
          <span class="hide-menu">Departments</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="{{ route('admin.departments.index') }}" class="sidebar-link">
              <i class="mdi mdi-note-outline"></i>
              <span class="hide-menu"> All Departments </span>
            </a>
          </li>
          {{-- <li class="sidebar-item">
            <a href="{{ route('admin.departments.create') }}" class="sidebar-link">
              <i class="mdi mdi-note-plus"></i>
              <span class="hide-menu"> Add Department </span>
            </a>
          </li> --}}
        </ul>
      </li>

      <!-- Projects -->
      <li class="sidebar-item">
        <a class="sidebar-link has-arrow waves-effect waves-dark"
           href="javascript:void(0)"
           aria-expanded="false">
          <i class="mdi mdi-clipboard-outline"></i>
          <span class="hide-menu">Projects</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="{{ route('admin.projects.index') }}" class="sidebar-link">
              <i class="mdi mdi-note-outline"></i>
              <span class="hide-menu"> All Projects </span>
            </a>
          </li>
          {{-- <li class="sidebar-item">
            <a href="{{ route('admin.projects.create') }}" class="sidebar-link">
              <i class="mdi mdi-note-plus"></i>
              <span class="hide-menu"> Add Project </span>
            </a>
          </li> --}}
        </ul>
      </li>
    </ul>
  </nav>
  <!-- End Sidebar navigation -->
</div>
<!-- End Sidebar scroll-->
