

    <!DOCTYPE html>
    <html lang="en">

    <head>
    <?php
   $pgTitle = "Dashboard";

    ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?php echo $pgTitle; ?></title>
    <!-- Custom fonts for this template-->
    <link href="{{ url('/admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ url('/admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Custom styles for table template -->
    <link href="{{ url('/admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ url('/admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    </head>

    <body id="page-top">


        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar /nav.html -->
            <?php
            $pg = "index.php";

            ?>
            @include('admin.layouts.nav')
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar / Header  -->
                    @include('admin.layouts.topbar')
                    <!-- End of Topbar -->
