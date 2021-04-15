<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Employee Data</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Master Employee</a></li>
                        <li class="breadcrumb-item active">Employee Data</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Employee Data Content Table -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="#" class="btn btn-outline-primary"><span class="right badge badge-primary"><i class="fas fa-user-plus"></i></span> Add Employee</a>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>NIK</th>
                                        <th>EMPLOYEE NAME</th>
                                        <th>PLACE, DATE OF BIRTH</th>
                                        <th>ID CARD NUMBER</th>
                                        <th>ADDRESS</th>
                                        <th>PHONE NUMBER</th>
                                        <th>OPTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>123456</td>
                                        <td>Collie</td>
                                        <td>Jakarta, 28 Desember 1991</td>
                                        <td>123456789876543</td>
                                        <td>St. Jose, 12</td>
                                        <td>061445882</td>
                                        <td>1</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Employee Data Content Table -->
</div>
<?= $this->endSection(); ?>