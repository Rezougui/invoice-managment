
<?php $__env->startSection('css'); ?>
<!-- Internal Data table css -->
<link href="<?php echo e(URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" />
<link href="<?php echo e(URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')); ?>" rel="stylesheet" />
<link href="<?php echo e(URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('assets/plugins/select2/css/select2.min.css')); ?>" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<?php $__env->startSection('title'); ?>
Ajouter un client
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Devis</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/Ajouter</span>
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content">
        </div>
    </div>
    <!-- breadcrumb -->
<?php $__env->stopSection(); ?>
<?php if(session()->has('edit')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><?php echo e(session()->get('edit')); ?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>
<?php $__env->startSection('content'); ?>
    <!-- row -->
    <div class="row">
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <?php if(session()->has('Add')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo e(session()->get('Add')); ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-body">
                    <div class="container mt-4">
                        <form action="<?php echo e(route('devis.store')); ?>" method="post">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="number_devis">Numéro:</label>
                                    <input type="text" class="form-control" id="number_devis" placeholder="Veuillez saisir ici..." name="number_devis">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="date_devis">Date:</label>
                                    <input type="date" class="form-control" id="date_devis" name="date_devis">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="projectField">Project:</label>
                                <select class="form-control" id="project_id" name="project_id">
                                    <option value="" disabled selected hidden>Sélectionner le projet</option>
                                    <?php $__currentLoopData = $project; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($proj->id); ?>"><?php echo e($proj->objective); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                            <div class="form-group d-flex align-items-center">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="tvaSwitch">
                                    <label class="custom-control-label" for="tvaSwitch"></label>
                                </div>
                                <label for="tvaField" class="mr-3">TVA inclus</label>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="number" class="form-control" id="tvaValue" name="tvaValue" value="20" disabled>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btn-secondary" id="clearFormBtn">Effacer</button>
                                <button type="submit" class="btn btn-primary mr-2">Enregister</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script src="<?php echo e(URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatable/js/jszip.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatable/js/pdfmake.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatable/js/vfs_fonts.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatable/js/buttons.print.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')); ?>"></script>
<!--Internal  Datatable js -->
<script src="<?php echo e(URL::asset('assets/js/table-data.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/js/modal.js')); ?>"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    document.getElementById('tvaSwitch').addEventListener('change', function() {
        const tvaValueField = document.getElementById('tvaValue');
        const tvaStatusLabel = document.getElementById('tvaStatusLabel');
        
        if (this.checked) {
            tvaValueField.disabled = true;
            tvaValueField.value = '0'; // Set TVA value to 0 when checkbox is checked
            tvaStatusLabel.textContent = 'ON';
        } else {
            tvaValueField.disabled = false;
            tvaStatusLabel.textContent = 'OFF';
        }
    });

    document.getElementById('clearFormBtn').addEventListener('click', function() {
        document.getElementById('number_devis').value = '';
        document.getElementById('date_devis').value = '';
        document.getElementById('project_id').selectedIndex = 0;
        document.getElementById('tvaSwitch').checked = false;
        document.getElementById('tvaValue').value = '20';
        document.getElementById('tvaValue').disabled = true;
        document.getElementById('tvaStatusLabel').textContent = 'OFF';
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/devis/create.blade.php ENDPATH**/ ?>