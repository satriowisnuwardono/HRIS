<?= $this->include('layout/header'); ?>

<div class="wrapper">
    <?= $this->include('layout/preloader'); ?>

    <?= $this->include('layout/navbar'); ?>

    <?= $this->include('layout/sidebar'); ?>

    <?= $this->renderSection('content'); ?>

    <?= $this->include('layout/footer'); ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?= $this->include('layout/js'); ?>