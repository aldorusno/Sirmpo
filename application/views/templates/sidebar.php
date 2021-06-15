<?php if ($this->session->userdata('role_id') == 3) : ?>

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('user'); ?>">
            <div class="sidebar-brand-icon ">
                <img src="https://upload.wikimedia.org/wikipedia/commons/d/dc/Lambang_Kabupaten_Banyumas.png" style="width:50px;height:50px;">
            </div>
            <div class="sidebar-brand-text mx-3">SIRMPO</div>

        </a>
        <a>
            <div class="sidebar-brand-text mx-3" style="color:white;">User</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('user'); ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Home</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Antrian
        </div>

        <!-- Nav Item -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('user/tambah_antrian'); ?>">
                <i class="fas fa-fw fa-list-alt"></i>
                <span>Daftar Antrian</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('user/lihat_antrian'); ?>">
                <i class="fas fa-fw fa-list-alt"></i>
                <span>Lihat Antrian</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Dokter
        </div>

        <!-- Nav Item -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('user/lihat_dokter'); ?>">
                <i class="fas fa-fw fa-user-md"></i>
                <span>Lihat Dokter</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Heading -->
        <div class="sidebar-heading">
            Profil Saya
        </div>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('user/edit'); ?>">
                <i class="fas fa-fw fa-user-edit"></i>
                <span>Ubah Profil</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('user/change_password'); ?>">
                <i class="fas fa-fw fa-user-edit"></i>
                <span>Ubah Password</span></a>
        </li>
    <?php endif; ?>

    <?php if ($this->session->userdata('role_id') == 1) : ?>

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('administrasi'); ?>">
                <div class="sidebar-brand-icon ">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/d/dc/Lambang_Kabupaten_Banyumas.png" style="width:50px;height:50px;">
                </div>
                <div class="sidebar-brand-text mx-3">SIRMPO</div>

            </a>
            <a>
                <div class="sidebar-brand-text mx-3" style="color:white;">Admin Administrasi</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('administrasi'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Home</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Kelola Antrian
            </div>

            <!-- Nav Item -->

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('administrasi/tambah_antrian'); ?>">
                    <i class="fas fa-fw fa-list-alt"></i>
                    <span>Tambah Data Antrian</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('administrasi/lihat_antrian'); ?>">
                    <i class="fas fa-fw fa-list-alt"></i>
                    <span>Lihat Data Antrian</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Kelola Dokter
            </div>

            <!-- Nav Item -->

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('administrasi/tambah_dokter'); ?>">
                    <i class="fas fa-fw fa-user-md"></i>
                    <span>Tambah Data Dokter</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('administrasi/lihat_dokter'); ?>">
                    <i class="fas fa-fw fa-user-md"></i>
                    <span>Lihat Data Dokter</span></a>
            </li>
        <?php endif; ?>

        <?php if ($this->session->userdata('role_id') == 2) : ?>

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('rekam_medis'); ?>">
                    <div class="sidebar-brand-icon ">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/d/dc/Lambang_Kabupaten_Banyumas.png" style="width:50px;height:50px;">
                    </div>
                    <div class="sidebar-brand-text mx-3">SIRMPO</div>

                </a>
                <a>
                    <div class="sidebar-brand-text mx-3" style="color:white;">Admin Rekam Medis</div>
                </a>
                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('rekam_medis'); ?>">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Home</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Kelola Obat
                </div>



                <!-- Nav Item -->

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('rekam_medis/tambah_obat'); ?>">
                        <i class="fas fa-fw fa-capsules"></i>
                        <span>Tambah Data Obat</span></a>
                </li>

                <!-- Nav Item -->

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('rekam_medis/lihat_obat'); ?>">
                        <i class="fas fa-fw fa-capsules"></i>
                        <span>Lihat Data Obat</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Kelola Pasien
                </div>

                <!-- Nav Item -->

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('rekam_medis/tambah_pasien'); ?>">
                        <i class="fas fa-fw fa-book-medical"></i>
                        <span>Tambah Data Pasien</span></a>
                </li>

                <!-- Nav Item -->

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('rekam_medis/lihat_pasien'); ?>">
                        <i class="fas fa-fw fa-book-medical"></i>
                        <span>Lihat Data Pasien</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Kelola Pengobatan
                </div>

                <!-- Nav Item -->

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('rekam_medis/tambah_kunjungan'); ?>">
                        <i class="fas fa-fw fa-book-medical"></i>
                        <span>Tambah Data Pengobatan</span></a>
                </li>

                <!-- Nav Item -->

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('rekam_medis/lihat_kunjungan'); ?>">
                        <i class="fas fa-fw fa-book-medical"></i>
                        <span>Lihat Data Pengobatan</span></a>
                </li>
            <?php endif; ?>


            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Log Out
            </div>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Log out</span></a>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            </ul>
            <!-- End of Sidebar -->