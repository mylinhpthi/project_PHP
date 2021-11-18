<section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
    <i class="bi bi-phone d-flex align-items-center"><span>+0 522 900 583</span></i>
    <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Mon-Sat: 11:00 AM - 23:00 PM</span></i>
  </div>
</section>
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
    <div class="logo me-auto" >
      <a href="index.html"><img  src="/assets/img/logo/Logo_YUMMY1.png" alt=""></a>
    </div>
    <div class="input-group-icon pe-2"><i class="fas fa-search input-box-icon text-primary"></i>
      <input class="form-control border-0 input-box bg-100" type="search" placeholder="Search Food" aria-label="Search" />
    </div>
    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a class="nav-link scrollto" href="#hero">Home</a></li>
        <li><a class="nav-link scrollto" href="#about">About</a></li>
        <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
        <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
     <div >
      <div class="top-end">
        <?php if (auth()) : ?>
          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#logoutModal" class="login-btn scrollto">
                <i class="lni lni-power-switch"></i> Sign Out
          </a>
        <?php else : ?>
         <a href="login" class="login-btn scrollto">Sign In</a>
        <?php endif; ?>
      </div>


    </div>
</header>