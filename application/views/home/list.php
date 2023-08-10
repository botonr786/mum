<!DOCTYPE html>
<html lang="en">

<head>
    <!--
Fitness Template
http://www.templatemo.com/tm-487-fitness
-->
    <title>Mum Assign</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="css/font-awesome.min.css">-->

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css")?>">

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora:700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0" />

    <!-- Data Table  -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
</head>

<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    <!-- =========================
     PRE LOADER       
============================== -->

    <!-- header top -->
    <!-- popup 2-->
   

    <section class="container-fluid">
        <header>
            <div class="row">
                <div class="col-md-2 col-sm-3 no_mar">
                    <div class="dashboard_left_bar_top">
                        <div class="left_nav_topbar"> <a href="javascript:void(0);"
                                class="material-symbols-outlined nav_open"> menu
                            </a>
                            <div class="left_logo"> <a href="#"><img src="images/logo.png" alt="" /></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 col-sm-9 no_mar">
                    <nav class="navbar navbar-expand-lg bg-white p-0" style="min-height: 72px;">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation"> <span
                                    class="navbar-toggler-icon"></span> </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto  mb-2 mb-lg-0">
                                </ul>
                                <ul class="navbar-nav mb-2 mb-lg-0">
                                    <li class="nav-item dropdown no-icon">
                                        <div class="dropdown"> <a class="dropdown-toggle nav-link" href="#"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false"> <span
                                                    class="material-symbols-outlined">
                                                    search
                                                </span> </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-2 " style="width: 300px;">
                                                <li class="d-flex" role="search">
                                                    <input class="form-control me-2" type="search" placeholder="Search"
                                                        aria-label="Search">
                                                    <button class="btn btn-outline-success"
                                                        type="submit">Search</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item"> <a class="nav-link" href="#"><span
                                                class="material-symbols-outlined">
                                                notifications </span></a> </li>
                                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false"> <img
                                                src="https://www.pngall.com/wp-content/uploads/5/User-Profile-PNG-Image.png"
                                                alt="" style="width: 36px"> </a>
                                        <ul class="dropdown-menu dropdown-menu-end m-0 p-0 rounded-0">
                                            <li><a class="dropdown-item" href="#">User Name</a></li>
                                            <li><a class="dropdown-item" href="#">Logout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>



                </div>
            </div>
        </header>
        <div class="row">
            <div class="col-md-2 col-sm-12 no_mar open_left_bar">  
            </div>
            <div class="col-md-10 col-sm-12  bashboard_boxes_open no_mar mb-2">

                <div class="purchase_order_buttom_nav mt-0">
                    <div class=" mt-0 mb-0">
                        <nav class="navbar bg-body-tertiary">
                            <div class="container-fluid">
                                <form class="d-flex ">
                                    <h6 class="navbar-brand text-white">User List</h6>
                                </form>
                                <ul class="d-flex nav justify-content-end">
                                    <li class="nav-item">
                                        <a href="<?php echo base_url("add") ?>">
                                            <button class="nav-link bg-primary text-white rounded-5 me-1 px-2 border-0">
                                                <span class="material-symbols-outlined">
                                                    add_circle
                                                </span>
                                            </button>
                                        </a>

                                    </li>
                                    <li class="nav-item">
                                        <a href="flow_through_details.html">
                                            <button class="nav-link bg-success text-white rounded-5 me-1 px-2 border-0">
                                                <span class="material-symbols-outlined">
                                                    edit_note
                                                </span>
                                            </button>
                                        </a>
                                    </li>
                                    <li class="nav-item">

                                        <a href="#">
                                            <button class="nav-link bg-success text-white rounded-5 me-1 px-2 border-0">
                                                <span class="material-symbols-outlined d-block"> save </span>
                                            </button>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#">
                                            <button class="nav-link bg-danger text-white rounded-5 me-1 px-2 border-0">
                                                <span class="material-symbols-outlined">cancel</span> </button>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>


                    </div>
                </div>
                
                <div class="container-fluid pt-3">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card gate_entry_details2">
                                <div class="table-content  tabile-responsive card-body">
                                    <div class="row mb-2">
                                        <div class="col-sm-5">
                                            <form method="post">
                                            <div class="row form-group mb-0">
                                                <label for="inputPassword" class="col-sm-3 col-form-label">
                                                    Select Name</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control form-control-sm" placeholder="only name Search" name="name"/>
                                                </div>
                                                <div class="col-sm-1">
                                                    <input type="submit" class="btn btn-success" value="search"/>
                                                </div>
                                            </div>
                                            <form>
                                        </div>
                                    </div>
                                    <table id="example" class="table   dt-responsive " width="100%">
                                        <thead>
                                            <tr>
                                                <th class="table-primary" width="30%">Name</th>
                                                <th class="table-primary">User Name</th>
                                                <th class="table-primary">Mobile Number</th>
                                                <th class="table-primary">Email</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($users as $u){ ?>
                                                <tr>
                                                    <td><?php echo $u->name ?></td>
                                                    <td><?php echo $u->username ?></td>
                                                    <td><?php echo $u->phone ?></td>
                                                    <td><?php echo $u->email ?></td>
                                                </tr>
                                                 <?php } ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div class="card-body mt-3">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled ">
                                            <a class="page-link bg-success text-white">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link bg-success text-white" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- popup-->
    <div class="modal conversion_rate" id="myModal1" role="dialog">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-3">
                    <h5 class="mb-3">Opening Stock Added</h5>
                    <div class="row form-group">
                        <label class="mt-auto mb-auto me-4">
                            <input type="checkbox">
                            Print Barcode</label>
                    </div>

                </div>
                <div class="conversion_rate_btn btn_main mt-0">
                    <div class="d-flex justify-content-center">
                        <a href="#" data-bs-dismiss="modal" class="btn btn-primary">
                            <span class="material-symbols-outlined float-start"> save </span>
                            Save</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- header top end-->

    <!-- =========================
     SCRIPTS   
============================== -->

    <!--	<script src="js/bootstrap.min.js"></script> -->



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
        crossorigin="anonymous"></script>


    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>



    <script src="js/jquery.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function () {
            $(".select2").select2({});
            $(".besic_select").select2();
            $(".profile_right_main").click(function () {
                $(".dropdown-menu-1").slideToggle(100);
                $(".profile_right_main").toggleClass("active");
            });
        });

        $(document).ready(function () {
            //	$("[data-toggle='tooltip']").tooltip();

            $(".profile_right_main").click(function () {
                $(".dropdown-menu-1").slideToggle(100);
                $(".profile_right_main").toggleClass("active");
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $(".nav_open").click(function () {
                $(".open_left_bar,.bashboard_boxes_open").toggleClass("active");
            });
            $('.d-table').DataTable({
                "ordering": false,
            });
        });
    </script>
</body>

</html>