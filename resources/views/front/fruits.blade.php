@extends('layout.main')
@section('content')
<div class="container">
    <section class = "dear">
        <div class = "container text-center">
            <h1>fruits</h1>

            <div class = "row">

                <div class = "col-lg-3 col-md -6">
                    <div class= "card">
                        <div class ="card-body">
                            <img src="dist/images/banana.jpg" class="card-img-top" alt="...">

                            <h3>  Banana (केरा)</h3>
                            <h6> NRS 120.00 Dozen</h6>
                            <h6><a href="#">Vendor: Ramesh Farms</a></h6>
                            <h6> Add to cart <a href ="#"></a></h6>

                            <!-- Button trigger modal class starts here-->




                            <div class="container addtocart-button">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fa fa-shopping-cart"></i>

                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Order Confirmed!! </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Your order has been submitted. We look forward to provide great service to you!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <a href="sub.html"> <button type="button" class="btn btn-primary">Edit Cart</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>



                </div>



                <div class = "col-lg-3 col-md -6">
                    <div class= "card">
                        <div class ="card-body">
                            <img src="dist/images/greenapp.jpg" class="card-img-top">


                            <h3>Green Apple
                            </h3>
                            <h6> NRS 445.00 kg</h6>
                            <h6><a href="#">Vendor: Ramesh Farms</a></h6>
                            <h6> Add to cart <a href ="#"></a></h6>

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-shopping-cart"></i>

                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Order Confirmed!! </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Your order has been submitted. We look forward to provide great service to you!
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <a href="sub.html"> <button type="button" class="btn btn-primary">Edit Cart</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>



                </div>



                <div class = "col-lg-3 col-md -6">
                    <div class= "card">
                        <div class ="card-body">

                            <img src="dist/images/app.jpg" class="card-img-top img-fluid">
                            <h3> Apple (स्याऊ)
                            </h3>
                            <h6> NRS 310.00 kg</h6>

                            <h6><a href="#">Vendor: Sanumaya Agriculture Assosiation</a></h6>
                            <h6> Add to cart <a href ="#"></a></h6>

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-shopping-cart"></i>

                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Order Confirmed!! </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Your order has been submitted. We look forward to provide great service to you!
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <a href="sub.html"> <button type="button" class="btn btn-primary">Edit cart</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class = "col-lg-3 col-md -6">
                    <div class= "card">
                        <div class ="card-body">
                            <img src="dist/images/papaya.jpg" alt ="" class="card-img-top img-fluid">

                            <h3> Papaya (मेवा)
                            </h3>
                            <h6> NRS 275.00 Pcs</h6>
                            <h6><a href="#">Vendor: Sanumaya Agriculture Assosiation</a></h6>
                            <h6> Add to cart <a href ="#"></a></h6>

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-shopping-cart"></i>

                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Order Confirmed!! </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Your order has been submitted. We look forward to provide great service to you!
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <a href="sub.html"> <button type="button" class="btn btn-primary">Edit Cart</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>



                </div>


                <div class = "col-lg-3 col-md -6">
                    <div class= "card">
                        <div class ="card-body">
                            <img src="dist/images/pear.jpg" alt ="" class="card-img-top img-fluid" >

                            <h3> Pear (नासपाती)
                            </h3>
                            <h6>NRS 255.00 kg</h6>
                            <h6><a href="#">Vendor: Sanumaya Agriculture Assosiation</a></h6>
                            <h6> Add to cart <a href ="#"></a></h6>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-shopping-cart"></i>

                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Order Confirmed!! </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            This item has been added to yout cart!
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <a href="sub.html"> <button type="button" class="btn btn-primary">Edit cart</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>



                </div>


                <div class = "col-lg-3 col-md -6">
                    <div class= "card">
                        <div class ="card-body">
                            <img src="dist/images/pomo.jpg" alt ="" class="card-img-top img-fluid">

                            <h3> Pomegranate (अनार)</h3>
                            <h6>NRS 260.00 kg</h6>
                            <h6><a href="#">Vendor: Ramesh Farms</a></h6>

                            <h6> Add to cart <a href ="#"></a></h6>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-shopping-cart"></i>

                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Order Confirmed!! </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Your order has been submitted. We look forward to provide great service to you!
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <a href="sub.html"> <button type="button" class="btn btn-primary">Edit cart</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>



                </div>
                <div class = "col-lg-3 col-md -6">
                    <div class= "card">
                        <div class ="card-body">
                            <img src="dist/images/avocad6.jpg" alt ="" class="card-img-top img-fluid">

                            <h3> Avocado (अभोकाडो)
                            </h3>
                            <h6>NRS 430.00 kg</h6>
                            <h6><a href="#">Vendor: Ramesh Farms</a></h6>

                            <h6> Add to cart <a href ="#"></a></h6>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-shopping-cart"></i>

                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Order Confirmed!! </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Your order has been submitted. We look forward to provide great service to you!
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <a href="sub.html"> <button type="button" class="btn btn-primary">Edit cart</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>



                </div>

                <div class = "col-lg-3 col-md -6">
                    <div class= "card">
                        <div class ="card-body">
                            <img src="dist/images/watrer.jpg" alt ="" class="card-img-top img-fluid">

                            <h3> Water Melon (खरबुजा) - 2.5 kg
                            </h3>
                            <h6> NRS 115.00 Pcs</h6>
                            <h6><a href="#">Vendor: Ramesh Farms</a></h6>

                            <h6> Add to cart <a href ="#"></a></h6>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-shopping-cart"></i>

                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Order Confirmed!! </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Your order has been submitted. We look forward to provide great service to you!
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <a href="sub.html"> <button type="button" class="btn btn-primary">Edit cart</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>



                </div>

                <div class = "col-lg-3 col-md -6">
                    <div class= "card">
                        <div class ="card-body">
                            <img src="dist/images/orange.jpg" alt ="" class="card-img-top img-fluid">

                            <h3> Sweet Orange (मौसंबी)
                            </h3>
                            <h6> NRS 155.00 kg</h6>
                            <h6><a href="#">Vendor: Ramesh Farms</a></h6>

                            <h6> Add to cart <a href ="#"></a></h6>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-shopping-cart"></i>

                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Order Confirmed!! </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Your order has been submitted. We look forward to provide great service to you!
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <a href="sub.html"> <button type="button" class="btn btn-primary">Edit cart</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>



                </div>

                <div class = "col-lg-3 col-md -6">
                    <div class= "card">
                        <div class ="card-body">
                            <img src="dist/images/dates.jpg" alt ="" class="card-img-top img-fluid">

                            <h3>Dates - 1/2 Kg
                            </h3>
                            <h6> NRS 235.00 Pack</h6>
                            <h6><a href="#">Vendor: Ramesh Farms</a></h6>

                            <h6> Add to cart <a href ="#"></a></h6>

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-shopping-cart"></i>

                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Order Confirmed!! </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Your order has been submitted. We look forward to provide great service to you!
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <a href="sub.html"> <button type="button" class="btn btn-primary">Edit cart</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>


                <div class = "col-lg-3 col-md -6">
                    <div class= "card">
                        <div class ="card-body">
                            <img src="dist/images/pine.jpg" alt ="" class="card-img-top img-fluid">

                            <h3> Pineapple Big
                            </h3>
                            <h6> NRS 215.00 Pcs</h6>
                            <h6><a href="#">Vendor: Ramesh Farms</a></h6>


                            <h6> Add to cart <a href ="#"></a></h6>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-shopping-cart"></i>

                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Order Confirmed!! </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Your order has been submitted. We look forward to provide great service to you!
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <a href="sub.html"> <button type="button" class="btn btn-primary">Edit cart</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>



                </div>


                <div class = "col-lg-3 col-md -6">
                    <div class= "card">
                        <div class ="card-body">
                            <img src ="dist/images/coco.jpeg" alt ="" class="card-img-top img-fluid">

                            <h3> Green Coconut
                            </h3>
                            <h6>NRS 125.00 Pcs</h6>
                            <h6> Add to cart <a href ="#"></h6>
                            <h6><a href="#">Vendor: Ramesh Farms</a></h6>

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-shopping-cart"></i>

                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Order Confirmed!! </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Your order has been submitted. We look forward to provide great service to you!
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <a href="sub.html"> <button type="button" class="btn btn-primary">Edit cart</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>













            </div>



        </div>
    </section>

</div>


@endsection

