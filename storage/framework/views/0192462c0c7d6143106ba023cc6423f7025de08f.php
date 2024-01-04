
<?php $__env->startSection('css'); ?>
    <!--- Internal Select2 css-->
    <link href="<?php echo e(URL::asset('assets/plugins/select2/css/select2.min.css')); ?>" rel="stylesheet">
    <!--- Internal Fileupload css-->
    <link href="<?php echo e(URL::asset('assets/plugins/fileuploads/css/fileupload.css')); ?>" rel="stylesheet" type="text/css" />
    <!--- Internal Fancy uploader css-->
    <link href="<?php echo e(URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css')); ?>" rel="stylesheet" />
    <!--Internal Sumoselect css-->
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/plugins/sumoselect/sumoselect.css')); ?>">
    <!--Internal  TelephoneInput css-->
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/plugins/telephoneinput/telephoneinput.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/sty.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    ajouter un projet
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-header'); ?>
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">projet</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    ajouter in projet</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php if(session()->has('Add')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong><?php echo e(session()->get('Add')); ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <!-- row -->
    <div class="row">

        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data"
                        autocomplete="off">
                        <?php echo e(csrf_field()); ?>

                        <div class="row">
                            <div class="col">
                                <label for="inputName" class="control-label">objectif:</label>
                                <input type="text" class="form-control" id="inputName" name="invoice_number"
                                    title="" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="exampleTextarea">description</label>
                                <textarea class="form-control" id="exampleTextarea" name="note" rows="3"></textarea>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col">
                                <label for="inputName" class="control-label">client</label>
                                <select id="product" name="product" class="form-control">
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="inputName" class="control-label">packs</label>
                                <ul class="menu">
                                    <li class="dropdown">
                                        <a href="#" id="counterText">0 packs</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="#">
                                                    Service 1
                                                    <button class="sub">-</button>
                                                    <input type="text" class="qtyBox" readonly value="0">
                                                    <button class="add">+</button>
                                                </a>
                                            </li>
                                            <!-- Add more items here if needed -->
                                        </ul>
                                    </li>
                                </ul>

                            </div></br>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="inputName" class="control-label">services</label>
                                <ul class="menu">
                                    <li class="dropdown">
                                        <a href="#" id="counterText">0 services</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="#">
                                                    Service 1
                                                    <button class="sub">-</button>
                                                    <input type="text" class="qtyBox" readonly value="0">
                                                    <button class="add">+</button>
                                                </a>
                                            </li>
                                            <!-- Add more items here if needed -->
                                        </ul>
                                    </li>
                                </ul>

                            </div></br>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="inputName" class="control-label">delaie estimée:</label>
                                <input type="number" class="form-control" id="inputName" name="invoice_number"
                                    title="" required>
                            </div>
                            
                            <div class="col">
                                <label for="inputName" class="control-label">montant:</label>
                                <input type="text" class="form-control" id="inputName" name="invoice_number"
                                    title="" required>
                            </div>
                       
                        </div></br>
                        <div class="row">
                            <div class="col">
                            jours <input type="radio" class="form-control" id="inputName" name="invoice_number"
                                    title="" value="jours">
                                    
                                    mois <input type="radio" class="form-control" id="inputName" name="invoice_number"
                                    title="" value="jours">
                            </div>
                            
                            <div class="col">
                            </div>
                       
                        </div></br>



                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">ajouter</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>

    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <!-- Internal Select2 js-->
    <script src="<?php echo e(URL::asset('assets/plugins/select2/js/select2.min.js')); ?>"></script>
    <!--Internal Fileuploads js-->
    <script src="<?php echo e(URL::asset('assets/plugins/fileuploads/js/fileupload.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/fileuploads/js/file-upload.js')); ?>"></script>
    <!--Internal Fancy uploader js-->
    <script src="<?php echo e(URL::asset('assets/plugins/fancyuploder/jquery.ui.widget.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/fancyuploder/jquery.fileupload.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/fancyuploder/fancy-uploader.js')); ?>"></script>
    <!--Internal  Form-elements js-->
    <script src="<?php echo e(URL::asset('assets/js/advanced-form-elements.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/select2.js')); ?>"></script>
    <!--Internal Sumoselect js-->
    <script src="<?php echo e(URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js')); ?>"></script>
    <!--Internal  Datepicker js -->
    <script src="<?php echo e(URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')); ?>"></script>
    <!--Internal  jquery.maskedinput js -->
    <script src="<?php echo e(URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js')); ?>"></script>
    <!--Internal  spectrum-colorpicker js -->
    <script src="<?php echo e(URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js')); ?>"></script>
    <!-- Internal form-elements js -->
    <script src="<?php echo e(URL::asset('assets/js/form-elements.js')); ?>"></script>

    <script>
        var date = $('.fc-datepicker').datepicker({
            dateFormat: 'yy-mm-dd'
        }).val();

    </script>

    <script>
        $(document).ready(function() {
            const dropdownItems = $('.dropdown');

            dropdownItems.each(function() {
                const dropdownToggle = $(this).find('a#counterText');
                const addBtn = $(this).find('.add');
                const subBtn = $(this).find('.sub');
                const qtyBox = $(this).find('.qtyBox');

                let counter = 0;

                dropdownToggle.on('click', function(event) {
                    event.preventDefault();
                    $(this).parent('.dropdown').toggleClass('active');
                });

                addBtn.on('click', function() {
                    counter++;
                    updateCounterAndQty(counter);
                });

                subBtn.on('click', function() {
                    if (counter > 0) {
                        counter--;
                        updateCounterAndQty(counter);
                    }
                });

                function updateCounterAndQty(newCounter) {
                    counter = newCounter;
                    qtyBox.val(counter);
                    dropdownToggle.text(`${counter} packs`);
                }
            });
        });



    </script>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/CREATE.blade.php ENDPATH**/ ?>