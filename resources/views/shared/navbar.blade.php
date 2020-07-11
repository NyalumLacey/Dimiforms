<!-- Navbar -->
<nav id="navbar" class="navbar fixed-top navbar-toggleable-md navbar-expand-lg shadow p-2 mb-1 ">
  <!-- SideNav slide-out button -->
  <div class="float-left pl-2">
    <a class="button-collapse"><button type="button" id="sidebarCollapse" onclick="openNav()" class="btn">
    <i class="fa fa-bars" aria-hidden="true"></i></button></a>
  </div> 
</hr>
  <!-- Breadcrumb-->
  <div class="breadcrumb-dn mr-auto px-4">
    <a href="/">
    <strong id="nav-title">Dimiforms</strong>
    </a>
  </div>
    <ul class="nav navbar-nav nav-flex-icons ml-auto">
      <li class="nav-item dropdown">
        <a id="nav-dropdown" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          @yield('Nombre', 'Default') | Usuario
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Mi cuenta</a>
          <a class="dropdown-item" href="#">Salir</a>
        </div>
      </li>
  </ul>
</nav>
<!-- /.Navbar -->