<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $title ?></title>

    <!-- Bootstrap -->
    <link href="<?= base_url('assets/back'); ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url('assets/back'); ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url('assets/back'); ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="<?= base_url('assets/back'); ?>/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">

    <!-- Datatables -->
    <link href="<?= base_url('assets/back'); ?>/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">



    <!-- Custom Theme Style -->
    <link href="<?= base_url('assets/back'); ?>/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">

            <!-- Sidebar -->
            <?php $this->load->view('backend/admin/layouts/sidebar'); ?>
            <!-- /Sidebar -->

            <!-- top navigation -->
            <?php $this->load->view('backend/admin/layouts/topbar'); ?>
            <!-- /top navigation -->

            <!-- page content -->
            <?php $this->load->view('backend/admin/pages/' . $page); ?>
            <!-- /page content -->

            <!-- footer content -->
            <?php $this->load->view('backend/admin/layouts/footer'); ?>
            <!-- /footer content -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?= base_url('assets/back'); ?>/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url('assets/back'); ?>/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="<?= base_url('assets/back'); ?>/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?= base_url('assets/back'); ?>/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?= base_url('assets/back'); ?>/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="<?= base_url('assets/back'); ?>/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- easy-pie-chart -->
    <script src="<?= base_url('assets/back'); ?>/vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?= base_url('assets/back'); ?>/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>

    <!-- Datatables -->
    <script src="<?= base_url('assets/back'); ?>/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/back'); ?>/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?= base_url('assets/back'); ?>/build/js/custom.min.js"></script>

    <!-- For Datatable -->
    <?php
    if (isset($datatable)) {
        $this->load->view('backend/admin/pages/' . $datatable);
    }
    ?>

</body>

</html>