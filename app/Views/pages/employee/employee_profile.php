<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Employee Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/employee">Employee</a></li>
                        <li class="breadcrumb-item active">Employee Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img src="<?= base_url('dist/photos/' . $employee_profile['photos']); ?>" alt="Employee Profile Picture" class="profile-user-img img-circle img-fluid">
                            </div>
                            <h3 class="profile-username text-center"><?= $employee_profile['full_name']; ?></h3>
                            <p class="text-muted text-center"><?= $employee_profile['nip']; ?></p>
                            <p class="text-muted text-center">IT Programmer</p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Date of Birth</b>
                                    <a class="float-right"><?= $employee_profile['place_of_birth']; ?>, <?= $employee_profile['date_of_birth']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Gender</b>
                                    <a class="float-right"><?= $employee_profile['gender']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>ID Number</b>
                                    <a class="float-right"><?= $employee_profile['nik']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Tax ID Number</b>
                                    <a class="float-right"><?= $employee_profile['tax_id_number']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Address</b>
                                    <a class="float-right"><?= $employee_profile['address']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Neighborhood / Hamlet</b>
                                    <a class="float-right"><?= $employee_profile['neighborhood']; ?>/<?= $employee_profile['hamlet']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Urban Village</b>
                                    <a class="float-right"><?= $employee_profile['urban_village']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Sub-District</b>
                                    <a class="float-right"><?= $employee_profile['sub_district']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Regency</b>
                                    <a class="float-right"><?= $employee_profile['regency']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Province</b>
                                    <a class="float-right"><?= $employee_profile['province']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Zip Code</b>
                                    <a class="float-right"><?= $employee_profile['zip']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Blood Group</b>
                                    <a class="float-right"><?= $employee_profile['blood_group']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Telephone</b>
                                    <a class="float-right"><?= $employee_profile['telephone']; ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Col-md-3 -->
                <div class="col-md-9">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">BPJS Data</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            The Card of body
                        </div>
                    </div>
                    <div class="card card-outline card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Career Data</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            The Card of body
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>