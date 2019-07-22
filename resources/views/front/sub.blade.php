@extends('layout.main')

@section('content')

    <section class="subs">
        <h1 align="center">Subscription</h1>
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header1" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Fruits
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">

                    <div class="card-body ">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">SN</th>
                                <th scope="col">FRUITS</th>
                                <th scope="col">QUANTITY</th>
                                <th scope="col">SUBSCRIPTION PLAN </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>APPLES/स्याऊ</td>
                                <td><input class="form-control" type="text" placeholder="Quantity in kg"></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Daily</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Weekly</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Monthly</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>BANANA/केरा</td>
                                <td><input class="form-control" type="text" placeholder="Quantity in kg"></td>
                                <td><div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Daily</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Weekly</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Monthly</label>
                                    </div></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>MANGO/आँप</td>
                                <td><input class="form-control" type="text" placeholder="Quantity in kg"></td>
                                <td><div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Daily</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Weekly</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Monthly</label>
                                    </div></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>








                <div class="card">
                    <div class="card-header2" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                VEGETABLES
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">SN</th>
                                    <th scope="col">VEGETABLES</th>
                                    <th scope="col">QUANTITY</th>
                                    <th scope="col">SUBSCRIPTION PLAN </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>POTATO/आलु</td>
                                    <td><input class="form-control" type="text" placeholder="Quantity in kg"></td>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">Daily</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">Weekly</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option3">
                                            <label class="form-check-label" for="inlineCheckbox3">Monthly</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>TOMATO/टमाटर</td>
                                    <td><input class="form-control" type="text" placeholder="Quantity in kg"></td>
                                    <td><div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">Daily</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">Weekly</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option3">
                                            <label class="form-check-label" for="inlineCheckbox3">Monthly</label>
                                        </div></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>GARLIC/लसुन</td>
                                    <td><input class="form-control" type="text" placeholder="Quantity in kg"></td>
                                    <td><div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">Daily</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">Weekly</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option3">
                                            <label class="form-check-label" for="inlineCheckbox3">Monthly</label>
                                        </div></td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>GINGER/अदुवा</td>
                                    <td><input class="form-control" type="text" placeholder="Quantity in kg"></td>
                                    <td><div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">Daily</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">Weekly</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option3">
                                            <label class="form-check-label" for="inlineCheckbox3">Monthly</label>
                                        </div></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>





                <div class="card">
                    <div class="card-header3" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                MEAT
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">SN</th>
                                    <th scope="col">MEAT</th>
                                    <th scope="col">QUANTITY</th>
                                    <th scope="col">SUBSCRIPTION PLAN </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>BUFF/रांगो</td>
                                    <td><input class="form-control" type="text" placeholder="Quantity in kg"></td>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">Daily</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">Weekly</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                            <label class="form-check-label" for="inlineCheckbox3">Monthly</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>CHICKEN/कुखुरा</td>
                                    <td><input class="form-control" type="text" placeholder="Quantity in kg"></td>
                                    <td><div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">Daily</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">Weekly</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                            <label class="form-check-label" for="inlineCheckbox3">Monthly</label>
                                        </div></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>FISH/माछा</td>
                                    <td><input class="form-control" type="text" placeholder="Quantity in kg"></td>
                                    <td><div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">Daily</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">Weekly</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                            <label class="form-check-label" for="inlineCheckbox3">Monthly</label>
                                        </div></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>





                <div class="card">
                    <div class="card-header4" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                DAIRY
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">SN</th>
                                    <th scope="col">DAIRY</th>
                                    <th scope="col">QUANTITY</th>
                                    <th scope="col">SUBSCRIPTION PLAN </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>MILK</td>
                                    <td><input class="form-control" type="text" placeholder="Quantity in kg"></td>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">Daily</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">Weekly</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                            <label class="form-check-label" for="inlineCheckbox3">Monthly</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>PANEER</td>
                                    <td><input class="form-control" type="text" placeholder="Quantity in kg"></td>
                                    <td><div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">Daily</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">Weekly</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                            <label class="form-check-label" for="inlineCheckbox3">Monthly</label>
                                        </div></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>CHESSE</td>
                                    <td><input class="form-control" type="text" placeholder="Quantity in kg"></td>
                                    <td><div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">Daily</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">Weekly</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                            <label class="form-check-label" for="inlineCheckbox3">Monthly</label>
                                        </div></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section >




    <section class="but align-content-center">
        <div class="container sub-button">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Submit
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
                            <a href="sub.html"> <button type="button" class="btn btn-primary modalbutton">Edit</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection