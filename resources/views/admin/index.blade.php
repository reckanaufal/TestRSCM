<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Movie</title>

    <!-- Custom fonts for this template-->
    <link href="{{ url('assets_BE/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ url('assets_BE/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="{{ url('assets_BE/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <!-- css dropzone -->
   <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> dimatikan karena bentrok dengan datatable-->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
   <style>
      .dz-image img {
         width: 120px;
         height: 120px;
      }
   </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
                <div class="sidebar-brand-icon rotate-n-15">
                    <!-- <i class="fas fa-laugh-wink"></i> emot ketawa -->
                </div>
                <div class="sidebar-brand-text mx-3">Rental Mobil</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>
            <?php $status =  Session::get('status') ?>
            @if ($status == 'Admin')
                <!-- Nav Item - Users -->
                <li class="nav-item">
                    <a class="nav-link" href="/user">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Users</span></a>
                </li>

                <!-- Nav Item - Users -->
                <li class="nav-item">
                    <a class="nav-link" href="/user">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Registration</span></a>
                </li>
            @elseif ($status == 'pengguna')
                <!-- Nav Item - Users -->
                <li class="nav-item">
                    <a class="nav-link" href="/mobil">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Mobil</span></a>
                </li>
                <!-- Nav Item - Users -->
                <li class="nav-item">
                    <a class="nav-link" href="/rental">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Rental</span></a>
                </li>
                <!-- Nav Item - Users -->
                <li class="nav-item">
                    <a class="nav-link" href="/pengembalian">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Pengembalian</span></a>
                </li>
            @else
                <!-- Nav Item - Users -->
                <li class="nav-item">
                    <a class="nav-link" href="/checkin">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Check-In</span></a>
                </li>
                <!-- Nav Item - Users -->
                <li class="nav-item">
                    <a class="nav-link" href="/Registration">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Registration</span></a>
                </li>
            @endif
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <!-- <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="{{ url('assets_BE/img/undraw_rocket.svg') }}" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div> -->

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
                      <div class="topbar-divider d-none d-sm-block"></div>

                      <!-- Nav Item - User Information -->
                      <li class="nav-item dropdown no-arrow">
                          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                {{ Session::get('name') }}
                              </span>
                              <img class="img-profile rounded-circle"
                                  src="{{ url('assets_BE/img/undraw_profile.svg') }}">
                          </a>
                          <!-- Dropdown - User Information -->
                          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                              aria-labelledby="userDropdown">
                              <a class="dropdown-item" href="{{ url('/') }}">
                                  <i class="fas fa-arrow-left fa-sm fa-fw mr-2 text-gray-400"></i>
                                  Back To Header
                              </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                  Logout
                              </a>
                          </div>
                      </li>

                  </ul>

              </nav>
              <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                      @yield('content')
                    </div>

                </div>
                <!-- /.container-fluid -->
          </div>
          <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
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
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <!-- <a class="btn btn-primary" href="login.html">Logout</a> -->
                    <form action="/logout" method="post">
                      @csrf
                      <button type="submit" class="btn btn-primary">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('assets_BE/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('assets_BE/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ url('assets_BE/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ url('assets_BE/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ url('assets_BE/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ url('assets_BE/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ url('assets_BE/js/demo/chart-pie-demo.js') }}"></script>
    <!-- Page level plugins -->
    <script src="{{ url('assets_BE/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('assets_BE/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ url('assets_BE/js/demo/datatables-demo.js') }}"></script>
    <!-- Ajax get data from API for mempelai -->
    <script>
      $('body').on('click', '.pilih-pria', function() {
        var val = $(this).val();
        $.ajax({
          type: "get",
          url: "{{ route('DataPria') }}",
          data: {
            id: val
          },
          dataType: "json",
            success: function (response) {
                // $(`.salary`).text(`Gaji : ${response['data'].gaji} | NPWP : ${response['data'].upah_pokok}`);
                $("#pria_id").val(response['data'].id);
                $("#namapria").val(response['data'].nama);
            }
        });
      })
      $('body').on('click', '.pilih-wanita', function() {
        var val = $(this).val();
        $.ajax({
          type: "get",
          url: "{{ route('DataWanita') }}",
          data: {
            id: val
          },
          dataType: "json",
            success: function (response) {
                $("#wanita_id").val(response['data'].id);
                $("#namawanita").val(response['data'].nama);
            }
        });
      })
      $('body').on('click', '.pilih-tempatacara', function() {
        var val = $(this).val();
        $.ajax({
          type: "get",
          url: "{{ route('DataTempatAcara') }}",
          data: {
            id: val
          },
          dataType: "json",
            success: function (response) {
                $("#tempatacara_id").val(response['data'].id);
                $("#namatempatacara").val(response['data'].tempat);
            }
        });
      })
      $('body').on('click', '.pilih-galeri', function() {
        var val = $(this).val();
        $.ajax({
          type: "get",
          url: "{{ route('DataGaleri') }}",
          data: {
            created_by: val
          },
          dataType: "json",
            success: function (response) {
                $("#galeri_id").val(response['data'].created_by);
                $("#namagaleri").val(response['data'].nama_kategori);
            }
        });
      })
    </script>
    <!-- JS for dropzone -->
   <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> dicommand karna bentrok dengan datatable-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
   <script>
      var uploadedDocumentMap = {}
      Dropzone.options.documentDropzone = {
         url: '{{ route('galeri.storeMedia') }}',
         maxFilesize: 2, // MB
         addRemoveLinks: true,
         acceptedFiles: ".jpeg,.jpg,.png,.gif",
         headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
         },
         success: function(file, response) {
            $('form').append('<input type="hidden" name="gambar[]" value="' + response.name + '">')
            uploadedDocumentMap[file.name] = response.name
         },
         removedfile: function(file) {
            file.previewElement.remove()
            var name = ''
            if (typeof file.file_name !== 'undefined') {
               name = file.file_name
            } else {
               name = uploadedDocumentMap[file.name]
            }
            $('form').find('input[name="gambar[]"][value="' + name + '"]').remove()
         }
      }
   </script>
</body>

</html>