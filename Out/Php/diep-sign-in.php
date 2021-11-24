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
                    <!-- form -->
                    <form action="" class="cmd-form my-5 needs-validation" novalidate>
                        <h5 class="text-center py-3">Sign In</h5>
                        <div class="bg-lighter p-4">
                            <p class="alert alert-danger rounded-0" role="alert">Invalid Email/Phone or Password.</p>
                            <p class="alert alert-success rounded-0" role="alert"><strong> Success </strong><br> A simple success alert—check it out! </p>
                            <p class="alert alert-danger rounded-0" role="alert"><strong> Warning </strong><br>A simple danger alert—check it out! </p>
                            <p class="alert alert-warning rounded-0" role="alert"><strong>Warning </strong><br>A simple warning alert—check it out! </p>
                            <!-- email -->
                            <p>
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" class="form-control cmd-control cmd-input cmd-border is-valid" placeholder="Please enter your Email">
                            </p>
                            <!-- password -->
                            <p>
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" class="form-control cmd-control cmd-input cmd-border is-invalid" placeholder="Please enter your Password">
                            </p>
                            <p class="form-check mb-3">
                                <input type="checkbox" id="check" class="form-check-input">
                                <label for="check" class="form-check-label f-mont-r"><small> Keep me signed in</small></label>
                            </p>
                            <p class="mb-3">
                                <button type="submit" class="btn w-100 cmd-btn cmd-btn-secondary">SUBMIT</button>
                            </p>
                            <div class="text-center">
                                <p> <a href="#" class="cmd-lnk" title="Forgot Password?">Forgot Password?</a></p>
                                <p><small>Don't have an account yet?</small></p>
                                <h6><a href="diep-sign-up.php" title="Sign Up">Sign Up</a></h6>
                                
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