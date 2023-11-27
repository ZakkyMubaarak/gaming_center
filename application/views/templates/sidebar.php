<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('dashboard') ?>">
                <div class="sidebar-brand-icon ">
                    <i class="fas fa-gamepad"></i>
                </div>
                <div class="sidebar-brand-text mx-3">GAMING CENTER</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                
                <a class="nav-link" href="<?php echo base_url('dashboard') ?>">
                    <i class="fas fa-fw  "></i>
                    <span>Home</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                KATEGORI
            </div>

            
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/playstasion') ?>">
                    <span>PLAYSTASION</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/nintendo') ?>">
                    <span>NINTENDO</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/xbox') ?>">
                    <span class="fs-2">XBOX</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/psp') ?>">
                    <span>PSP</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/kontakkami') ?>">
                    <span>Kontak Kami</span></a>
            </li>
            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
         

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
                        action="/search" method="GET">
                        <!-- Ganti dengan URL tujuan pencarian atau biarkan kosong jika pencarian dilakukan di halaman yang sama -->
                        <!-- Gunakan POST jika Anda ingin menyembunyikan parameter pencarian dari URL -->
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" 
                                name="q"  placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <!-- Ini adalah nama elemen input yang akan digunakan sebagai parameter pencarian -->
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="navbar">
                            <ul class="nav navbar-nav navbar-right mr-3 "> 
                                <li>
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                  <?php
                                  $keranjang = 'Keranjang Belanja:        '.$this->cart->total_items 
                                  (). 'items'

                                ?>

                                <?php echo anchor('dashboard/detail_keranjang', $keranjang ) ?>
                                </li>
                            </ul>

                            <div class="topbar-divinder d-none d-sm-block "></div> 

                                <ul class="na navbar-nav navbar-right ml-2"> <span class="border mr-3"></span>
                                
                                    <?php if($this->session->userdata('username')) { ?>
                                        <li><div>Selamat Datang <?php echo $this->session->userdata('username') ?></div></li>
                                        
                                        <li class="mr-2"><?php echo anchor('auth/logout', 'Logout') ?></li>
                                    <?php } else { ?>
                                    <li><?php echo anchor('auth/login', '    Login  '); ?></li>

                                    <?php } ?>

                                    <ul class="na navbar-nav navbar-right mr-3"> <span class="border mr-3"></span>

                                    <?php if($this->session->userdata('username')) { ?>
                                        <li><div>Selamat Datang <?php echo $this->session->userdata('username') ?></div></li>
                                        
                                        <li class="mr-2"><?php echo anchor('auth/logout', 'Logout') ?></li>
                                    <?php } else { ?>
                                    <li><?php echo anchor('admin/auth/login', ' Admin Login  '); ?></li>

                                    <?php } ?>

                                </ul>

                        </div>

                      
                    </ul>

                </nav>
                <!-- End of Topbar -->