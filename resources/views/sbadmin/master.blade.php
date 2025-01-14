
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIAKAD</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/sbadmin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="/vendor/sbadmin/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('vendor/sbadmin/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/sbadmin/datatables-bs4/css/dataTables.bootstrap4.css') }}">

    <link href="{{ asset('vendor/sbadmin/datatable/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset ('vendor/sbadmin/https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css')}}" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('vendor/sbadmin/https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css') }}">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                {{-- <div class="sidebar-brand-icon rotate-n-15"> --}}
                    <img class="img-profile rounded-circle"
                        src="{{url('vendor/sbadmin/img/logo mts-1.JPG')}}">
                    {{-- <i class="fas fa-laugh-wink"></i> --}}
                {{-- </div> --}}
                <div class="sidebar-brand-text mx-3">MTs<sup> Roudlatul Ulum</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{Request::is('admin/beranda') ? 'active' : ''}}">
                <a class="nav-link" href="{{ url ('admin/beranda')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Beranda</span></a>
            </li>

            <!-- Divider -->


            <!-- Heading -->

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item {{Request::is('admin/siswa/index') ? 'active' : ''}} |
                                {{Request::is('admin/petugasTU/index') ? 'active' : ''}} |
                                {{Request::is('admin/kelas/index') ? 'active' : ''}} |
                                {{Request::is('admin/mapel/index') ? 'active' : ''}}" id="nav-master">
                <a class="nav-link" id="a-master" href="#" data-toggle="collapse" data-target="#collapseMasterdata"
                    aria-expanded="true" aria-controls="collapseMasterdata">
                    <i class="fas fa-fw fa-plus"></i>
                    <span>Master Data</span>
                </a>
                <div id="collapseMasterdata" class="collapse {{Request::is('admin/siswa/index') ? 'show' : ''}} |
                                                            {{Request::is('admin/petugasTU/index') ? 'show' : ''}} |
                                                            {{Request::is('admin/kelas/index') ? 'show' : ''}} |
                                                            {{Request::is('admin/mapel/index') ? 'show' : ''}}" aria-labelledby="headingMasterdata"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{Request::is('admin/siswa/index') ? 'active' : ''}}" id="a-nav-siswa" href="{{url('admin/siswa/index')}}">Siswa</a>
                        <a class="collapse-item {{Request::is('admin/petugasTU/index') ? 'active' : ''}}" id="a-nav-tu" href="{{url('admin/petugasTU/index')}}">Petugas TU</a>
                        <a class="collapse-item {{Request::is('admin/kelas/index') ? 'active' : ''}}" id="a-nav-kelas" href="{{url('admin/kelas/index')}}">Kelas</a>
                        <a class="collapse-item {{Request::is('admin/mapel/index') ? 'active' : ''}}" id="a-nav-mapel" href="{{url('admin/mapel/index')}}">Mata Pelajaran</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link {{Request::is('admin/semester/index') ? 'active' : ''}} |
                                    {{Request::is('admin/jadwal/pilihKelas') ? 'active' : ''}} |
                                    {{Request::is('admin/info/index') ? 'active' : ''}} |
                                    {{Request::is('admin/raport/kelas') ? 'active' : ''}}" href="#" data-toggle="collapse" data-target="#collapsePembelajaran"
                    aria-expanded="true" aria-controls="collapsePembelajaran">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Pembelajaran</span>
                </a>
                <div id="collapsePembelajaran" class="collapse {{Request::is('admin/semester/index') ? 'show' : ''}} |
                                                                {{Request::is('admin/jadwal/pilihKelas') ? 'show' : ''}} |
                                                                {{Request::is('admin/info/index') ? 'show' : ''}} |
                                                                {{Request::is('admin/raport/kelas') ? 'show' : ''}}" aria-labelledby="headingPembelajaran"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{Request::is('admin/semester/index') ? 'active' : ''}}" href="{{url('admin/semester/index')}}">Periode</a>
                        {{-- <a class="collapse-item" href="{{url('admin/histori/index-histori')}}">Kelas Siswa</a> --}}
                        {{-- <a class="collapse-item" href="{{url('admin/jadwal/index')}}">Jadwal</a> --}}
                        <a class="collapse-item {{Request::is('admin/jadwal/pilihKelas') ? 'active' : ''}}" href="{{url('admin/jadwal/pilihKelas')}}">Jadwal</a>
                        <a class="collapse-item {{Request::is('admin/info/index') ? 'active' : ''}}" href="{{url('admin/info/index')}}">Pengumuman</a>
                        <a class="collapse-item {{Request::is('admin/raport/kelas') ? 'active' : ''}}" href="{{url('admin/raport/kelas')}}">Raport</a>
                    </div>
                </div>
            </li>


            <li class="nav-item {{Request::is('admin/lks/index') ? 'active' : ''}} |
                                {{Request::is('admin/iuran/index') ? 'active' : ''}}">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePembayaran"
                    aria-expanded="true" aria-controls="collapsePembayaran">
                    <i class="fas fa-fw fa-credit-card"></i>
                    <span>Pembayaran</span>
                </a>
                <div id="collapsePembayaran" class="collapse {{Request::is('admin/lks/index') ? 'show' : ''}} |
                {{Request::is('admin/iuran/index') ? 'show' : ''}}" aria-labelledby="headingPembayaran" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{Request::is('admin/lks/index') ? 'active' : ''}}" href="{{url('admin/lks/index')}}">LKS</a>
                        <a class="collapse-item {{Request::is('admin/iuran/index') ? 'active' : ''}}" href="{{url('admin/iuran/index')}}">Iuran</a>
                    </div>
                </div>
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
                    {{-- <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> --}}

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

                        <!-- Nav Item - Alerts -->


                        <!-- Nav Item - Messages -->


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ session('username') }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{asset('vendor/sbadmin/img/undraw_profile.svg')}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ url('/profile') }}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/logout" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Keluar
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- Content Row -->

                    @yield('content')
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Siakad &copy; MTs Roudlotul Ulum Parang</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin ingin keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="{{ url('/keluar') }}">Keluar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/sbadmin/https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js')}}" integrity="sha512-bnIvzh6FU75ZKxp0GXLH9bewza/OIw6dLVh9ICg0gogclmYGguQJWl8U30WpbsGTqbIiAwxTsbe76DErLq5EDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset("vendor/sbadmin/https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js")}}"></script>
    <script src="{{asset('vendor/sbadmin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('vendor/sbadmin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('vendor/sbadmin/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('vendor/sbadmin/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('vendor/sbadmin/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset("vendor/sbadmin/js/demo/chart-pie-demo.js")}}"></script>

    <script src="{{ asset('vendor/sbadmin/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/sbadmin/datatable/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendor/sbadmin/js/demo/datatables-demo.js') }}"></script>
    <script src="{{ asset ('vendor/sbadmin/https://code.jquery.com/jquery-3.3.1.slim.min.js')}}" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="{{ asset ('vendor/sbadmin/https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js')}}" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="{{ asset ('vendor/sbadmin/https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js')}}" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    @yield('js')
    {{-- <script type="text/javascript">
    <script>
    $ ( function () {
        $('#data-table').DataTable();
    })
    </script> --}}



</body>
@include('sweetalert::alert')
</html>
