<style type="text/css" media="screen">
  .nav ul li p !important {
    font-size: 12px;
  }
  .infoku {
    margin-left: 20px; 
    text-transform: uppercase;
    color: yellow;
    font-size: 11px;
  }
</style>
<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ asset('admin/dasbor') }}" class="brand-link">
      <img src="{{ asset('assets/upload/image/'.website('')) }}"
       
      <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- DASHBOARD -->
          <li class="nav-item">
            <a href="{{ asset('admin/dasbor') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          <!-- Website Content -->
              <!-- Website Content -->
              <li class="batas"><hr> <span class="infoku"><i class="fa fa-certificate"></i>Berita  &amp;dan Artikel</span></li>
          <li class="batas"><hr></li>
          
          <li class="nav-item">
          <a href="{{ asset('admin/berita') }}" class="nav-link">
          <i class="fas fa-newspaper nav-icon"></i>
          <p>Data Berita &amp; Update</p></a>
          </li>
         
          <li class="nav-item">
          <a href="{{ asset('admin/kategori') }}"class="nav-link">
       <i class="fa fa-tags nav-icon"></i><p>Kategori berita</p></a>
          </li>

          

         
          <li class="nav-item"><a href="{{ asset('admin/galeri') }}" class="nav-link"><i class="fas fa-newspaper nav-icon"></i><p>Data Banner</p></a>
           
          

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-download"></i>
              <p>Download &amp; File<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item"><a href="{{ asset('admin/download') }}" class="nav-link"><i class="fas fa-newspaper nav-icon"></i><p>Data File</p></a>
              </li>
              <li class="nav-item"><a href="{{ asset('admin/download/tambah') }}" class="nav-link"><i class="fa fa-plus nav-icon"></i><p>Tambah File</p></a>
              </li>
              <li class="nav-item"><a href="{{ asset('admin/kategori_download') }}" class="nav-link"><i class="fa fa-tags nav-icon"></i><p>Kategori File</p></a>
              </li>
            </ul>
          </li>

        
          <!-- Website Content -->
          <li class="batas"><hr> <span class="infoku"><i class="fa fa-certificate"></i> Profil &amp; Layanan</span></li>
          <li class="batas"><hr></li>

        
           <!-- MENU -->
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
               Data Perusahaan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="{{ asset('admin/konfigurasi/profil') }}" class="nav-link"><i class="nav-icon fas fa-leaf"></i><p>Profil Perusahaan</p></a>
          </li>
              <li class="nav-item"><a href="{{ asset('admin/konfigurasi') }}" class="nav-link"><i class="fas fa-tools nav-icon"></i><p>Layanan Data</p></a>
              </li>
            
              <li class="nav-item"><a href="{{ asset('admin/konfigurasi/logo') }}" class="nav-link"><i class="fa fa-home nav-icon"></i><p>Ganti Logo</p></a>
              </li>
              <li class="nav-item"><a href="{{ asset('admin/konfigurasi/icon') }}" class="nav-link"><i class="fa fa-upload nav-icon"></i><p>Ganti Icon</p></a>
              </li>
              <li class="nav-item"><a href="{{ asset('admin/konfigurasi/email') }}" class="nav-link"><i class="fa fa-envelope nav-icon"></i><p>Email Setting</p></a>
              </li>
              <li class="nav-item"><a href="{{ asset('admin/rekening') }}" class="nav-link"><i class="fas fa-book nav-icon"></i><p>Rekening</p></a>
              </li>
            </ul>
       </li>
          <li class="nav-item">
            <a href="{{ asset('admin/berita/jenis_berita/Layanan') }}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>Portofolio</p>
            </a>
          </li>

             <li class="nav-item">
            <a href="{{ asset('admin/berita/jenis_berita/Layanan') }}" class="nav-link">
              <i class="nav-icon fas fa-inbox"></i>
              <p>Inbox</p>
            </a>
          </li>

              <li class="nav-item">
            <a href="{{ asset('admin/client') }}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>Client</p>
            </a>
          </li>

          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Team<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item"><a href="{{ asset('admin/staff') }}" class="nav-link"><i class="fas fa-newspaper nav-icon"></i><p>Data Team</p></a>
              </li>
            
              <li class="nav-item"><a href="{{ asset('admin/kategori_staff') }}" class="nav-link"><i class="fa fa-tags nav-icon"></i><p>Divisi Team</p></a>
              </li>
            </ul>
          </li>

          <!-- Website Content -->
          <li class="batas"><hr> <span class="infoku"><i class="fa fa-certificate"></i> Website Setting</span></li>
          <li class="batas"><hr></li>
          <li class="nav-item">
            <a href="{{ asset('admin/user') }}" class="nav-link">
              <i class="nav-icon fas fa-lock"></i>
              <p>Pengaturan User</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ asset('admin/heading') }}" class="nav-link">
              <i class="nav-icon fas fa-image"></i>
              <p>Header Gambar</p>
            </a>
          </li>
      
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <div class="row">
              <div class="col-md-12">
                
              </div>
             
              
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
<div class="table-responsive konten">
