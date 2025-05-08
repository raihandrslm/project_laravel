<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Startmin - Bootstrap Admin Theme</title>

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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<body>
     <!-- NaVBAR -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            @include('layouts.component.header')
            <!-- /.navbar-top-links -->
        </nav>
        <!--SIDEBAR-->
        <aside class="sidebar navbar-default" role="navigation">
            @include('layouts.component.sidebar')
        </aside>
        <!-- /.sidebar -->
        <!-- /#page-wrapper -->

    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Jenis</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
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
                                <div class="table">
                                    <table class="table table-responsive">
                                        <thead>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama jenis</th>
                                            <th scope="col">Aksi</th>
                                        </thead>
                                        <tbody>
                                            @php $no=1; @endphp
                                            @foreach($jenis as $data)
                                            <tr>
                                                <td scope="row">{{$no++}}</td>
                                                <td scope="row">{{$data->nama_jenis}}</td>
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
    <!-- /#wrapper -->

    <!-- plugins:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
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

</body>

</html>