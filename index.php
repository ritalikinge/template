<!DOCTYPE html>
<html lang="en" class="sidebar-noneoverflow">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>User List </title>
    <link rel="icon" type="image/x-icon" href="src/assets/img/favicon.ico" />
    <!-- ENABLE LOADERS -->
    <link href="layouts/vertical-light-menu/css/light/loader.css" rel="stylesheet" type="text/css" />

    <script src="layouts/vertical-light-menu/loader.js"></script>
    <!-- /ENABLE LOADERS -->
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="layouts/vertical-light-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="src/assets/css/light/elements/alert.css">

    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <style>
        body.dark .layout-px-spacing,
        .layout-px-spacing {
            min-height: calc(100vh - 155px) !important;
        }
    </style>

</head>

<body class="alt-menu layout-boxed" page="starter-pack">
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <?php include 'header.php' ?>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container  sbar-open" id="container">
        <div class="overlay"></div>
        <div class="search-overlay"></div>
        <!--  BEGIN SIDEBAR  -->
        <?php include 'sidebar.php'; ?>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="middle-content container-xxl p-0">
                    <div class="statbox widget box box-shadow mt-3">
                        <div class="widget-content widget-content-area">
                            <div style="float:right;">
                                <div>
                                    <h6><i class="bi bi-person"></i><span>Staller University</span></h6>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-5">
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div>
                                25%
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div>
                                View Field Details
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div>
                                View IIQA Complience
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-2">
                            <div style="color: #187dcb;">
                                Basic Eligibility
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div style="color: #187dcb;">
                                UGC/MHRD Complience
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div style="color: #187dcb;">
                                Profile Information </div>
                        </div>
                        <div class="col-md-2">
                            <div style="color: #187dcb;">
                                Academic Information </div>
                        </div>
                        <div class="col-md-2">
                            <div style="color: #187dcb;">
                                Quality Information </div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="row">
                            <div class="col-12">
                            </div>
                        </div>
                        <div class="row" style="background:#187dcb; height:50px; padding:4px; margin-left: 0px; margin-right: 0px;">
                            <h6 style="padding-left: 400px;">Institude InformationFor Quality Assessment(IIQA)</h6>
                            <h6 style="padding-left: 500px;">For All University</h6>
                        </div>
                        <div class="statbox widget box box-shadow border border-primary">
                            <div class="widget-content widget-content-area">

                                <div class="row border" style="border-color: #e4e6e8;">


                                    <div class="col-md-12 pt-3" style="border-color: #e4e6e8;">
                                        <div class="row" style="background:#e4e6e8; height:30px; border-color: #e4e6e8; margin-top: -16px;">
                                            <h6 style="padding-left:500px;">Staller University</h6>
                                        </div>

                                        <div class="row border" style="height:30px; border-color: #e4e6e8; margin-left:2px; margin-right:2px; margin-top:10px;">
                                            <div class="row">
                                                <div class="col-6" style="padding-left: 350px;">
                                                    <label class="form-check-label" for="radio1">Accreditation</label>

                                                    <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>
                                                </div>
                                                <div class="col-6">
                                                    <label class="form-check-label" for="radio1">Reassessment</label>

                                                    <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" >
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="form row">
                                                <div class="form-group col-md-6 mt-3">
                                                    <label for="inputEmail4">Cycle Of Accreditation :</label>
                                                </div>
                                                <div class="form-group col-md-6 mt-3">
                                                    <label for="inputEmail4">Cycle 1</label>
                                                </div>
                                                <div class="form-group col-md-6 mt-3">
                                                    <label for="inputPassword4">Name Of Higher Education Institute</label>
                                                </div>
                                                <div class="form-group col-md-6 mt-3">
                                                    <input type="text" style="height: 27px;" class="form-control" id="inputAddress" placeholder="" value="Staller University">
                                                </div>
                                                <div class="form-group col-md-6 mt-3">
                                                    <label for="inputPassword4">City</label>
                                                </div>
                                                <div class="form-group col-md-6 mt-3">
                                                    <input type="text" style="height: 27px;" class="form-control" id="inputAddress" placeholder="Enter City Name">
                                                </div>
                                                <div class="form-group col-md-6 mt-3">
                                                    <label for="inputPassword4">State/ UT</label>
                                                </div>
                                                <div class="form-group col-md-6 mt-3">
                                                    <input type="text" style="height: 27px;" class="form-control" id="inputAddress">
                                                </div>
                                                <div class="form-group col-md-6 mt-3">
                                                    <label for="inputPassword4">Date Of Establishment Of The Institute</label>
                                                </div>
                                                <div class="form-group col-md-2 mt-3">
                                                    <input type="text" style="height: 27px;" class="form-control" id="inputAddress" placeholder="DD/MM/YY">
                                                </div>
                                                <div class="form-group col-md-1 mt-3">
                                                    <label for="inputPassword4">Or</label>
                                                </div>
                                                <div class="form-group col-md-3 mt-3">
                                                    <input type="text" style="height: 27px;" class="form-control" id="inputAddress" placeholder="YY">
                                                </div>

                                                <div class="form-group col-md-6 mt-3">
                                                    <label for="inputPassword4">Year Of Graduation Og The Last Two Batches</label>
                                                </div>
                                                <div class="form-group col-md-1 mt-3">
                                                    <label for="inputPassword4">Year 1</label>
                                                </div>
                                                <div class="form-group col-md-2 mt-3">
                                                    <input type="text" style="height: 27px;" class="form-control" id="inputAddress" placeholder="YY">
                                                </div>
                                                <div class="form-group col-md-1 mt-3">
                                                    <label for="inputPassword4">Year 2</label>
                                                </div>
                                                <div class="form-group col-md-2 mt-3">
                                                    <input type="text" style="height: 27px;" class="form-control" id="inputAddress" placeholder="YY">
                                                </div>
                                            </div>

                                            <div>

                                                <button type="submit" class="btn mt-3 mb-3" style="float:right; background:#187dcb;">Save and Next</button>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <script>
        var f1 = flatpickr(document.getElementById('basicFlatpickr1'));
        var f2 = flatpickr(document.getElementById('basicFlatpickr2'));
    </script>
</body>

</html>