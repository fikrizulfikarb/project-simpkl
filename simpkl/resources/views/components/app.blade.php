<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIMPKL | {{ $title }} </title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ url('/') }}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/dist/css/adminlte.min.css">


    <!-- DataTables -->
    <link rel="stylesheet" href="{{ url('/') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">


    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ url('/') }}/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">


        <x-template.header />
        <x-template.sidebar :menu="$menu" header="{{ $header }}" />
        <div class="content-wrapper">
            <div class="content">

                <div class="container-fluid pt-3">
                    <div class="row">
                        <div class="col-md-12">
                            <x-utils.notif />
                        </div>
                    </div>
                    {{ $slot }}
                </div>
            </div>
        </div>
        @if (!auth()->guard('mahasiswa')->check())
            <x-template.control-sidebar />
        @endif
        <x-template.footer />

    </div>
    <script src="{{ url('/') }}/plugins/jquery/jquery.min.js"></script>
    <script src="{{ url('/') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('/') }}/dist/js/adminlte.min.js"></script>
    <!-- DataTables -->
    <script src="{{ url('/') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('/') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ url('/') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ url('/') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
    <!-- SweetAlert2 -->
    <script src="{{ url('/') }}/plugins/sweetalert2/sweetalert2.min.js"></script>

</body>

</html>
