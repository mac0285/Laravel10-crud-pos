<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">IMS PurchaseOrder <sup>2</sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('barang') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Barang</span></a>
  </li>
  <!--

dddddddddddddddddddddddddddddddddddddddddddddddd


  -->  
  <ul class="nav flex-column" id="nav_accordion">
    <li class="nav-item">
      <a class="nav-link" href="#"> Link name </a>
    </li>
    <li class="nav-item has-submenu">
      <a class="nav-link" href="#"> Submenu links  </a>
      <ul class="submenu collapse">
        <li><a class="nav-link" href="#">Submenu item 1 </a></li>
        <li><a class="nav-link" href="#">Submenu item 2 </a></li>
        <li><a class="nav-link" href="#">Submenu item 3 </a> </li>
      </ul>
    </li>
    <li class="nav-item has-submenu">
      <a class="nav-link" href="#"> More menus  </a>
      <ul class="submenu collapse">
        <li><a class="nav-link" href="#">Submenu item 4 </a></li>
        <li><a class="nav-link" href="#">Submenu item 5 </a></li>
        <li><a class="nav-link" href="#">Submenu item 6 </a></li>
        <li><a class="nav-link" href="#">Submenu item 7 </a></li>
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"> Something </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"> Other link </a>
    </li>
  </ul>

	@if (auth()->user()->level == 'Admin')
  <li class="nav-item">
    <a class="nav-link" href="{{ route('kategori') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Categories</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('kategori') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>User</span></a>
  </li>
	@endif

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
<div></div>
<div></div>
<div></div>
<div></div>
  <!-- Sidebar Message -->
  <div class="sidebar-card d-none d-lg-flex">
    <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
    <p class="text-center mb-2">Paid PartnerShip</p>
    <a class="btn btn-success btn-sm" href="https://sanjayamultimoda.co.id">Logistic</a>
  </div>

</ul>
