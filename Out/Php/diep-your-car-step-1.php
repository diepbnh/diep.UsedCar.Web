<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" class="h-100">
<!-- ********************** start head ********************** -->
<?php include '_include/head.php';?>
<!--********************** end head ********************** -->

<body class="d-flex flex-column h-100">
    <!-- ********************** start header ********************** -->
    <?php include '_include/header.php';?>
    <!--********************** end header ********************** -->
    <main class="cmd-main">
        <div class="container-fluid container-lg">
            <!-- breadumb -->
            <nav class="cmd-breadcrumb my-5" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i> Homepage</a></li>
                    <li class="breadcrumb-item active">Add Your Car</li>
                </ol>
            </nav>
            <!-- form -->
            <form class="cmd-form mb-5 text-center">
                <h5 class="py-3">Add Your Car</h5>
                <div class="bg-lighter p-4">
                     <div class="row justify-content-center">
                        <div class="col-md-8">
                            <figure>
                                <img src="assets/img/app-zoom.svg" alt="" title="app-zoom" width="600">
                            </figure>
                            <p class="text-primary"><strong>Report Code</strong></p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-4 col-xl-3">
                            <div class="input-group cmd-desc-code-wrapper">
                                <p class="input-group"><input type="text" class="form-control cmd-control cmd-input cmd-border">
                                    <strong class="fs-l cmd-desc-code">10</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-8 mb-3">
                            <p><small>Buying a new car can be a big moment in a driver's life. It might be the biggest purchase you ever make other than a home so it pays to do some research into which car, truck, van, or SUV is right for you. </small></p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-4 col-xl-3">
                            <button type="button" class="btn cmd-btn cmd-btn-secondary w-100 mb-3" data-bs-toggle="modal" data-bs-target="#modal">SUBMIT</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog cmd-loading-dialog text-center">
            <div class="spinner-border my-2" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <p> Please wait... </p>
        </div>
    </div>
    <!-- ********************** start footer ********************** -->
    <?php include '_include/footer.php';?>
    <script type="text/javascript"></script>
    <!--********************** end footer ********************** -->
</body>

</html>