<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Employee Data</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Add Employee Data</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Add Employee Data -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add Employee Data</h3>
                        </div>
                        <form action="/employee/save" method="post">
                            <?= csrf_field(); ?>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="nip">Employee ID Number <small>(nomor induk pegawai)*</small></label>
                                            <input type="text" name="nip" id="nip" class="form-control form-control-sm <?= ($validation->hasError('nip')) ? 'is-invalid' : ''; ?>" value="<?= old('nip'); ?>" autofocus>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('nip'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="nik">ID Number <small>(nomor induk kependudukan)*</small></label>
                                            <input type="text" name="nik" id="nik" class="form-control form-control-sm <?= ($validation->hasError('nik')) ? 'is-invalid' : ''; ?>" value="<?= old('nik'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('nik'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label form-label>Nationality <small>(kebangsaan)*</small></label>
                                            <select class="custom-select-sm <?= ($validation->hasError('nationality')) ? 'is-invalid' : ''; ?>" name="nationality" id="nationality">
                                                <option selected value="">Choose...</option>
                                                <option>WNI</option>
                                                <option>WNA</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('nationality'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="full_name">Employee Name <small>(nama lengkap pegawai)*</small></label>
                                            <input type="text" name="full_name" id="full_name" class="form-control form-control-sm <?= ($validation->hasError('full_name')) ? 'is-invalid' : ''; ?>" value="<?= old('full_name'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('full_name'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="place_of_birth">Place of Birth <small>(tempat lahir)*</small></label>
                                            <input type="text" name="place_of_birth" id="place_of_birth" class="form-control form-control-sm <?= ($validation->hasError('place_of_birth')) ? 'is-invalid' : ''; ?>" value="<?= old('place_of_birth'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('place_of_birth'); ?></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <!-- Date dd/mm/yyyy -->
                                        <div class="form-group">
                                            <label for="date_of_birth">Date of Birth <small>(tanggal lahir)*</small></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                </div>
                                                <input type="date" class="form-control form-control-sm <?= ($validation->hasError('date_of_birth')) ? 'is-invalid' : ''; ?>" value="<?= old('date_of_birth'); ?>" name="date_of_birth" id="date_of_birth" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('date_of_birth'); ?>
                                                </div>
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        <!-- /.form group -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="gender">Gender <small>(jenis kelamin)*</small></label>
                                            <select class="custom-select-sm <?= ($validation->hasError('gender')) ? 'is-invalid' : ''; ?>" value="<?= old('gender'); ?>" name="gender" id="gender">
                                                <option selected value="">Choose...</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('gender'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="religion">Religion <small>(agama)*</small></label>
                                            <select class="custom-select-sm <?= ($validation->hasError('religion')) ? 'is-invalid' : ''; ?>" value="<?= old('religion'); ?>" name="religion" id="religion">
                                                <option selected value="">Choose...</option>
                                                <option>Moslem</option>
                                                <option>Christian Protestant</option>
                                                <option>Catholic Christians</option>
                                                <option>Hindu</option>
                                                <option>Buddha</option>
                                                <option>Konghucu</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('religion'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="marital_status">Marital Status <small>(status perkawinan)*</small></label>
                                            <select class="custom-select-sm <?= ($validation->hasError('marital_status')) ? 'is-invalid' : ''; ?>" value="<?= old('marital_status'); ?>" name="marital_status" id="marital_status">
                                                <option selected value="">Choose...</option>
                                                <option>TK</option>
                                                <option>K0</option>
                                                <option>K1</option>
                                                <option>K2</option>
                                                <option>K3</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('marital_status'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="address">Address <small>(alamat)*</small></label>
                                            <input type="text" name="address" id="address" class="form-control form-control-sm <?= ($validation->hasError('address')) ? 'is-invalid' : ''; ?>" value="<?= old('address'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('address'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="neighborhood_association">Neighborhood Association <small>(rukun tetangga)*</small></label>
                                            <input type="text" name="neighborhood_association" id="neighborhood_association" class="form-control form-control-sm <?= ($validation->hasError('neighborhood_association')) ? 'is-invalid' : ''; ?>" value="<?= old('neighborhood_association'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('neighborhood_association'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="citizens_association">Citizens Association <small>(rukun warga)*</small></label>
                                            <input type="text" name="citizens_association" id="citizens_association" class="form-control form-control-sm <?= ($validation->hasError('citizens_association')) ? 'is-invalid' : ''; ?>" value="<?= old('citizens_association'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('citizens_association'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="sub_district">Sub District <small>(kelurahan)*</small></label>
                                            <input type="text" name="sub_district" id="sub_district" class="form-control form-control-sm <?= ($validation->hasError('sub_district')) ? 'is-invalid' : ''; ?>" value="<?= old('sub_district'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('sub_district'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="district">District <small>(kecamatan)*</small></label>
                                            <input type="text" name="district" id="district" class="form-control form-control-sm <?= ($validation->hasError('district')) ? 'is-invalid' : ''; ?>" value="<?= old('district'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('district'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="telephone">Telephone Number<small>(nomor telepon)*</small></label>
                                            <input type="text" name="telephone" id="telephone" class="form-control form-control-sm <?= ($validation->hasError('telephone')) ? 'is-invalid' : ''; ?>" value="<?= old('telephone'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('telephone'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="last-ducation">Last Education <small>(pendidikan terakhir)*</small></label>
                                            <select class="custom-select-sm <?= ($validation->hasError('last_education')) ? 'is-invalid' : ''; ?>" value="<?= old('last_education'); ?>" name="last_education" id="last_education">
                                                <option selected value="">Choose...</option>
                                                <option>SMP</option>
                                                <option>SMA</option>
                                                <option>Diploma 1</option>
                                                <option>Diploma 2</option>
                                                <option>Diploma 3</option>
                                                <option>Strata 1</option>
                                                <option>Strata 2</option>
                                                <option>Strata 3</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('last_education'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="majors">Major <small>(jurusan)*</small></label>
                                            <input type="text" name="majors" id="majors" class="form-control form-control-sm <?= ($validation->hasError('majors')) ? 'is-invalid' : ''; ?>" value="<?= old('majors'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('majors'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email Address<small>(alamat email)</small></label>
                                            <input type="text" name="email" id="email" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <!-- Date dd/mm/yyyy -->
                                        <div class="form-group">
                                            <label for="hired_date">Hired Date <small>(tanggal dipekerjakan)*</small></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                </div>
                                                <input type="date" class="form-control form-control-sm <?= ($validation->hasError('hired_date')) ? 'is-invalid' : ''; ?>" value="<?= old('hired_date'); ?>" name="hired_date" id="hired_date" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('hired_date'); ?>
                                                </div>
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        <!-- /.form group -->
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="tax_id_number">Tax ID Number <small>(nomor npwp)</small></label>
                                            <input type="text" name="tax_id_number" id="tax_id_number" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="reference">Reference <small>(referensi)</small></label>
                                            <input type="text" name="reference" id="reference" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="emergency_contact">Emergency Contact Number <small>(nomor kontak darurat)*</small></label>
                                            <input type="text" name="emergency_contact" id="emergency_contact" class="form-control form-control-sm <?= ($validation->hasError('emergency_contact')) ? 'is-invalid' : ''; ?>" value="<?= old('emergency_contact'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('emergency_contact'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="contact_name">Contact Name <small>(nama kontak)*</small></label>
                                            <input type="text" name="contact_name" id="contact_name" class="form-control form-control-sm <?= ($validation->hasError('contact_name')) ? 'is-invalid' : ''; ?>" value="<?= old('contact_name'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('contact_name'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="relation">Relation <small>(relation)*</small></label>
                                            <input type="text" name="relation" id="relation" class="form-control form-control-sm <?= ($validation->hasError('relation')) ? 'is-invalid' : ''; ?>" value="<?= old('relation'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('relation'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="blood_group">Blood Group <small>(golongan darah)</small></label>
                                            <input type="text" name="blood_group" id="blood_group" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="photos">Photos <small>(foto)</small></label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input-sm" id="photos" name="photos">
                                                    <label class="custom-file-label-sm" for="photos">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button class="btn btn-success" type="submit">Submit</button>
                                <button class="btn btn-warning" type="reset">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Add Employee Data -->
</div>
<?= $this->endSection(); ?>