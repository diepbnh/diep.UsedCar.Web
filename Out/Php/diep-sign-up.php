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
            <div class="row justify-content-center align-content-center">
                <div class="col-md-7 col-lg-6 col-xl-5 col-xxl-4">
                    <!-- form Sign Up-->
                    <form action="" class="cmd-form my-5 needs-validation" novalidate>
                        <h5 class="text-center py-3">Sign Up</h5>
                        <div class="bg-lighter p-4">
                            <p><label for="email" class="form-label">Email</label>
                                <input type="email" class="cmd-input cmd-control cmd-border form-control is-valid" placeholder="Please enter your Email">
                            </p>
                            <p><label for="password" class="form-label">Password <span  class="f-mont-r">(8 characters minimum)</span></label>
                                <input type="password" class="cmd-input cmd-control cmd-border form-control is-invalid" placeholder="Please enter your Password">
                            </p>
                            <p class="mb-5"><label for="password" class="form-label">Confirm Password</label>
                                <input type="password" class="cmd-input cmd-control cmd-border form-control is-invalid" placeholder="Please re-enter your Password">
                            </p>
                            <p><button type="submit" class="btn cmd-btn cmd-btn-secondary w-100">CREATE ACCOUNT</button></p>
                            <div class="text-center">
                                <p><small>Already have an account?</small></p>
                                <h6><a href="diep-sign-in.php">Sign In</a></h6>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- ********************** start footer ********************** -->
    <?php include '_include/footer.php';?>
    <script type="text/javascript">
    </script>
    <!--********************** end footer ********************** -->
</body>

</html>