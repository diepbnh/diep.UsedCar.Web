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
                    <li class="breadcrumb-item" active>My Listings</li>
                </ol>
            </nav>
            <h4>My Listings</h4>
        </div>
        <!-- bg gradient -->
        <div class="cmd-bg-gradient"></div>
        <!-- end bg gradient -->
        <div class="container-fluid container-lg">
            <p class="mb-4"><button class="btn cmd-btn cmd-btn-secondary">ADD VEHICLE</button></p>
            <!-- form -->
            <form action="" class="cmd-form mb-5">
                <div class="py-2">
                    <div class="table-responsive">
                        <table class="table cmd-table">
                            <thead>
                                <tr>
                                    <th scope="col" width="15%"></th>
                                    <th scope="col" width="5%" align="center">#</th>
                                    <th scope="col" width="10%">Year</th>
                                    <th scope="col" width="10%">Make</th>
                                    <th scope="col" width="30%">Model</th>
                                    <th scope="col" width="15%">VIN#</th>
                                    <th scope="col" width="5%" align="center">Views</th>
                                    <th scope="col" width="10%" align="center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="align-middle">
                                    <td>
                                        <figure class="cmd-figure cmd-figure-sm"><a href="#"><img src="/assets/img/upload/sample.jpg" alt="" width="200"></a></figure>
                                    </td>
                                    <th align="center">1</th>
                                    <td>2016</td>
                                    <td>Mitsubish</td>
                                    <td>Mitsubish Mitsubish</td>
                                    <td>1C4BJWG6GL190697</td>
                                    <td align="center">213</td>
                                    <td align="center">
                                        <a href="#" class="text-danger"><i class="far fa-edit fs-l"></i></a>
                                        <a href="#" class="text-danger"><i class="far fa-trash-alt fs-l"></i></a>
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td>
                                        <figure class="cmd-figure cmd-figure-sm"><a href="#"><img src="/assets/img/upload/sample.jpg" alt="" width="200"></a></figure>
                                    </td>
                                    <th align="center">2</th>
                                    <td>2016</td>
                                    <td>Mitsubish</td>
                                    <td>Mitsubish Mitsubish</td>
                                    <td>1C4BJWG6GL190697</td>
                                    <td align="center">213</td>
                                    <td align="center">
                                        <a href="#" class="text-danger"><i class="far fa-edit fs-l"></i></a>
                                        <a href="#" class="text-danger"><i class="far fa-trash-alt fs-l"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            <caption>List of cars</caption>
                        </table>
                    </div>
                </div>
                <ul class="pagination cmd-pagination my-2">
                    <li class="page-item">
                        <a href="#" class="page-link">
                            <i class="fas fa-angle-left"></i>
                        </a>
                    </li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item active"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link"><i class="fas fa-angle-right"></i></a></li>
                </ul>
            </form>
        </div>
    </main>
    <!-- ********************** start footer ********************** -->
    <?php include '_include/footer.php';?>
    <script type="text/javascript"></script>
    <!--********************** end footer ********************** -->
</body>

</html>