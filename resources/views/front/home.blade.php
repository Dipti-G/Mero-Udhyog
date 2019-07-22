@extends('layout.main')

@section('content')
    <section class="bg1">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="dist/images/img3.jpg" alt="First slide">


                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="dist/images/slider7.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="dist/images/img1.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </section>



    <section class="bg2">
        <h1>Our Features</h1>

        <div class="container">
            <div class="row bg3">
                <div class="col-md-4">
                    <img src="dist/images/service-thumb-1.png">
                    <h5>Vegetables</h5>
                    <p>Vegetable farming is the growing of vegetables for human consumption. The practice probably started in several parts of the world over ten...</p>
                </div>
                <div class="col-md-4">
                    <img src="dist/images/service-thumb-2.png">
                    <h5>Fruits</h5>
                    <p>There is a great difference between the crops grown as starter plants and the greenhouse vegetables. Masses tend to grow vegetables and fruits in their greenhouse...</p>
                </div>
                <div class="col-md-4">
                    <img src="dist/images/service-thumb-3.png">
                    <h5>Livestock</h5>
                    <p>We additionally produce a lot of dairy and meat products, with a range of our food commodities from ground beef to live yoghurts mixed up with pumpkin...</p>
                </div>
            </div>



            <div class="row bg3">
                <div class="col-md-4">
                    <img src="dist/images/service-thumb-4.png">
                    <h5>Farm Tours</h5>
                    <p>Did you ever grown or collect fresh strawberries off the farm fields? If the answer is yes, than you surely remember how exquisite the taste is.</p>
                </div>
                <div class="col-md-4">
                    <img src="dist/images/service-thumb-5.png">
                    <h5>Dairy</h5>
                    <p>We offer a wide range of organic dairy products - starting with milk, cottage cheese, miscellaneous kinds of regular & blue cheese all. Originally a strawberry...</p>
                </div>
                <div class="col-md-4">
                    <img src="dist/images/service-thumb-6.png">
                    <h5>Farmers Market</h5>
                    <p>We are a mid-sized agribusiness and land management company built for today’s world, known for our legacy of achievement and innovation in citrus, sugarcane...</p>
                </div>
            </div>
        </div>
    </section>















    <section class="bg6" style=" background-color: #8FBC8F ;
    font-family: Herr Von Muellerhoff, cursive;
     ">

        <h4>our advantages </h4>
        <div class="container " >
            <div class="row circle">
                <div class="col-md-4">

                    <img src="dist/images/img13.png">
                    <p>Always fresh</p>

                </div>
                <div class="col-md-4">

                    <img src="dist/images/img14.png">
                    <p>100% organic</p>

                </div>
                <div class="col-md-4">

                    <img src="dist/images/img15.png">
                    <p>Best price</p>
                </div>
            </div>
        </div>

    </section>



    <section class="deals">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="dist/images/fruitsberries.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="dist/images/viber image 2019-05-09 , 16.28.11.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="dist/images/seeds.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>

                <div class="col-md-6">
                    <h1>Daily</h1>
                    <h2>DEALS</h2>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>                <button type="button" class="btn btn-success">ADD TO CART</button>


                </div>
            </div>

        </div>

    </section>



    <div class="container">
        <div class="row">
            <div class="col-md-3 ">
                <div class="circle1">
                    <p>Satisfied Customers</p>
                    <div class="circle1-inner">
                        <h4 class="timer count-title count-number" data-to="409" data-speed="1500"></h4>
                    </div>
                </div>
            </div>


            <div class="col-md-3 ">
                <div class="circle1">
                    <p>Hours of Support</p>
                    <div class="circle1-inner">
                        <h2 class="timer count-title count-number" data-to="535" data-speed="1500"></h2>
                    </div>
                </div>
            </div>


            <div class="col-md-3 ">
                <div class="circle1">
                    <p>Hard Workers</p>
                    <div class="circle1-inner">
                        <h2 class="timer count-title count-number" data-to="78" data-speed="5000"></h2>
                    </div>
                </div>
            </div>


            <div class="col-md-3 ">
                <div class="circle1">
                    <p>Cups Of Coffee</p>
                    <div class="circle1-inner">
                        <h2 class="timer count-title count-number" data-to="115" data-speed="1500"></h2>
                    </div>
                </div>
            </div>

        </div>
    </div>



@endsection