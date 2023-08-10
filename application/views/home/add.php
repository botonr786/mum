<!DOCTYPE html>
<html lang="en">

<head>
    <!--
Fitness Template
http://www.templatemo.com/tm-487-fitness
-->
    <title>User&Product</title>
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
    <div class="modal conversion_rate" id="myModal2" role="dialog">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body pb-0">
                    <h5 class="text-dark mb-3">Assign Picker</h5>
                    <hr />
                    <div class="row form-group p-3 pt-0">
                        <table width="100%" border="0">
                            <tr>
                                <td width="80%" align="left"><a href="#" data-bs-dismiss="modal"
                                        class="text-dark">Sachin</a></td>
                                <td width="20%" align="right"><a href="#" data-bs-dismiss="modal"
                                        class="text-dark"><span class="material-symbols-outlined">
                                            add_circle
                                        </span></a></td>
                            </tr>
                            <tr>
                                <td width="80%" align="left"><a href="#" data-bs-dismiss="modal"
                                        class="text-dark">Palraj</a></td>
                                <td width="20%" align="right"><a href="#" data-bs-dismiss="modal"
                                        class="text-dark"><span class="material-symbols-outlined">
                                            add_circle
                                        </span></a></td>
                            </tr>
                            <tr>
                                <td width="80%" align="left"><a href="#" data-bs-dismiss="modal"
                                        class="text-dark">Aditi</a></td>
                                <td width="20%" align="right"><a href="#" data-bs-dismiss="modal"
                                        class="text-dark"><span class="material-symbols-outlined">
                                            add_circle
                                        </span></a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
        <form method="post">
        <div class="row">
            <div class="col-md-2 col-sm-12 no_mar open_left_bar"><br>
              <a href="<?php echo base_url("main") ?>" style="color:blue;text-align:center;text-size:50px"><h4>List</h4></a>
            </div>
            <div class="col-md-10 col-sm-12  bashboard_boxes_open no_mar mb-2">

                <div class="purchase_order_buttom_nav mt-0">
                    <div class=" mt-0 mb-0">
                        <nav class="navbar bg-body-tertiary">
                            <div class="container-fluid">
                                <form class="d-flex ">
                                    <h6 class="navbar-brand text-white">Add user And Product</h6>
                                </form>
                                <ul class="d-flex nav justify-content-end">     
                                    <li class="nav-item">
                                        <a href="#">
                                            <button class="nav-link bg-primary text-white rounded-5 me-1 px-2 border-0">
                                                <span class="material-symbols-outlined">
                                                    add_circle
                                                </span>
                                            </button>
                                        </a>

                                    </li>
                                    <li class="nav-item">
                                        <a href="#">
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
                            <h2 class="heading_style"><a href="#">Personal Details</a></h2>
                            <div class="card mb-3">

                                <div class="row g-0 p-1">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item border-radius">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <!-- <input type="hidden" name="id"> -->
                                                    <div class="row form-group mb-0">
                                                        <label for="inputPassword" class="col-sm-5 col-form-label">
                                                             Name</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control form-control-sm" name="name" require/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="row form-group mb-0">
                                                        <label for="inputPassword" class="col-sm-5 col-form-label">
                                                            User Name</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control form-control-sm" name="username" require/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="row form-group mb-0">
                                                        <label for="inputPassword" class="col-sm-5 col-form-label">
                                                            Mobile Number</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control form-control-sm" name="phone" require/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item border-radius">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="row form-group mb-0">
                                                        <label for="inputPassword" class="col-sm-5 col-form-label">
                                                            Email</label>
                                                        <div class="col-sm-7">
                                                            <input type="email" class="form-control form-control-sm" name="email" require/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="row form-group mb-0">
                                                        <label for="inputPassword" class="col-sm-5 col-form-label">
                                                            Password</label>
                                                            <div class="col-sm-7">
                                                            <input type="password" class="form-control form-control-sm" name="password" require/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="row form-group mb-0">
                                                        <label for="inputPassword" class="col-sm-5 col-form-label">
                                                            Address</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control form-control-sm" name="address" require/>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        
                                    </ul>

                                </div>

                            </div>

                            <h2 class="heading_style"><a href="#">Product Details</a></h2>
                            <div class="card mb-3">
                                <div class="row g-0 p-1">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item border-radius">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="row form-group mb-0">
                                                        <label for="inputPassword" class="col-sm-5 col-form-label">
                                                            Product Name</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control form-control-sm" name="productname" require/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="row form-group mb-0">
                                                        <label for="inputPassword" class="col-sm-5 col-form-label">
                                                          Product Price</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="pricess"  name="productprice" require>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-group-item border-radius">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="row form-group mb-0">
                                                        <label for="inputPassword" class="col-sm-5 col-form-label">
                                                           Product Quantity</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control form-control-sm" name="productquantity" require/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="row form-group mb-0">
                                                        <label for="inputPassword" class="col-sm-5 col-form-label">
                                                          Product Type</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control"  name="producttype" require/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-group-item border-radius">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="row form-group mb-0">
                                                        <label for="inputPassword" class="col-sm-5 col-form-label">
                                                           Amount Attribute</label>
                                                        <div class="col-sm-7">
                                                            <select class="form-control" onClick="amountdiscount()" id="dis">
                                                            <option value="">Amount Attribute</option>
                                                                <option value="flat" id="fl">Flat</option>
                                                                <option value="discount" id="dis">Discount</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="row form-group mb-0">
                                                        <label for="inputPassword" class="col-sm-5 col-form-label">
                                                          Discount(which has a dropdown that has flat and discount and next discount textbox. When the flat option is selected, the discount textbox should have a read-only attribute)</label>
                                                        <div class="col-sm-7">
                                                            <div id="discount">
                                                            <!-- <input type="text" class="form-control" name="productquantity"> -->
                                                            <div id="flat">
                                                            <!-- <input type="text" class="form-control" name="productquantity" value="read-only attribute" readonly> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-group-item border-radius">
                                            <div class="row">
                                                <div class="col-sm-4 offset-sm-3">
                                                    <div class="row form-group mb-0">
                                                        <label for="inputPassword" class="col-sm-5 col-form-label">
                                                          Total Amount</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control"  name="totalamount" id="total">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                </div>

                            </div>

                            <div class="card-body text-center  p-3">
                                <div>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</form>
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
    



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css"> -->

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

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
        function amountdiscount(){
            $('#dis').on("click", function()
      {
         input = $('#dis').val();
         console.log(input)
         if(input==="flat"){
            // $('#discount').hide()
            $("#flat").html(`<input type="text" class="form-control" name="discount" id="di"  value="10 %" readonly>`)
            var diss="10 %";
            var prices=$("#pricess").val();
            var prcnt =prices -(prices*10/100);
           var result = "$" + prcnt.toFixed(2);
            $("#total").val(result)
            
         }else{
            // $('#flat').hide()

            $("#discount").html(`<input type="text" class="form-control" name="discount" id="discountPrice" oninput="discountType()">`)
         }
      });
        }
        function discountType(){
            var prices=$("#discountPrice").val();
            var discount=$("#pricess").val();
            var prcnt = ((prices * discount)/100);
     var result = "$" + (discount - prcnt).toFixed(2);
     $("#total").val(result)
    //  $("#total").append(result)
        }
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