<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Admin Jenis</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('admin/vendors/jquery-bar-rating/css-stars.css')}}" />
    <link rel="stylesheet" href="{{ asset('admin/vendors/font-awesome/css/font-awesome.min.css')}}" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('admin/css/demo_1/style.css')}}" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png')}}" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('layouts.component.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div>Default
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles default primary"></div>
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles light"></div>
          </div>
        </div>
        <!-- partial -->
        <!-- partial:partials/_navbar.html -->
        @include('layouts.component.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper pb-0">
            <div class="page-header flex-wrap">
              <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
                <div class="d-flex align-items-center">
                  <a href="#">
                    <p class="m-0 pr-3">Dashboard</p>
                  </a>
                </div>
              </div>
            </div>
            <!-- table row starts here -->
            <div class="row">
              <div class="col-lg-12 ">
                <div class="card">
                    <div class="card-header">
                        <span><b>Data Jenis</b></span>
                        <a href="{{route('jenis.create')}}" class="btn btn-primary" style="float: right">Tambah</a>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                        @endif
                    <div class="table ">
                        <table class="table col-md-12">
                            <thead>
                                <th scope="col"><b>No</b></th>
                                <th scope="col"><b>Nama jenis</b></th>
                                <th scope="col"><b>Aksi</b></th>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach($jenis as $data)
                                <tr>
                                    <td scope="row">{{$no++}}</td>
                                    <td scope="row">{{$data->jenis}}</td>
                                    <td>
                                        <form action="{{route('jenis.destroy', $data->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('jenis.edit', $data->id)}}" class="btn btn-sm btn-success">Edit</a>
                                            <a href="{{route('jenis.show', $data->id)}}" class="btn btn-sm btn-warning">Show</a>
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
             </div>   
            </div>
                    </div>
                </div>
                  </div>
                </div>
              </div>
            </div>
          
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Raihan</span>
            </div>

            <div>
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block"> Distributed By : <a href="" target="_blank">Raihan</a></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('admin/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('admin/vendors/jquery-bar-rating/jquery.barrating.min.js')}}"></script>
    <script src="{{ asset('admin/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{ asset('admin/vendors/flot/jquery.flot.js')}}"></script>
    <script src="{{ asset('admin/vendors/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{ asset('admin/vendors/flot/jquery.flot.categories.js')}}"></script>
    <script src="{{ asset('admin/vendors/flot/jquery.flot.fillbetween.js')}}"></script>
    <script src="{{ asset('admin/vendors/flot/jquery.flot.stack.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('admin/js/off-canvas.js')}}"></script>
    <script src="{{ asset('admin/js/hoverable-collapse.js')}}"></script>
    <script src="{{ asset('admin/js/misc.js')}}"></script>
    <script src="{{ asset('admin/js/settings.js')}}"></script>
    <script src="{{ asset('admin/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('admin/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
  </body>
</html>