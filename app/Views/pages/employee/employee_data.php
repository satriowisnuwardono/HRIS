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
                            <a href="/employee/add_employee" class="btn btn-outline-primary"><span class="right badge badge-primary"><i class="fas fa-user-plus"></i></span> Add Employee</a>
                        </div>
                        <?php if (session()->getFlashdata('msg')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('msg'); ?>
                            </div>
                        <?php endif; ?>
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
                                    <?php $i = 1; ?>
                                    <?php foreach ($employee_data as $ed) : ?>
                                        <tr>
                                            <td scope="row"><?= $i++; ?></td>
                                            <td><?= $ed['nip']; ?></td>
                                            <td><?= $ed['full_name']; ?></td>
                                            <td><?= $ed['place_of_birth']; ?>, <?= $ed['date_of_birth']; ?></td>
                                            <td><?= $ed['nik']; ?></td>
                                            <td><?= $ed['address']; ?></td>
                                            <td><?= $ed['telephone']; ?></td>
                                            <td class="text-center">
                                                <a href="" class="btn btn-info btn-sm" alt="info"><i class="fas fa-info-circle"></i></a>
                                                <button type="submit" class="btn btn-danger btn-sm" alt="delete" onclick="return confirm('apakah anda yakin ?');"><i class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
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